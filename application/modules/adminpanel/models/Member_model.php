<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends MY_Model {

   public function __construct() {
      parent::__construct();
   }

   public function get_data($status) {
      // count query
      $this->customDB->select('m.id, m.child_name, m.child_age, m.child_weight, m.child_height, r.child_mother_name, r.child_mother_designation, r.child_mother_working_place, r.child_mother_ph_no, r.child_mother_total_salary');
      $this->customDB->from('members m');
      $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');
      $this->customDB->where('m.member_types_id', 1);
      $this->customDB->where('m.status', $status);
      $this->customDB->order_by('m.id', 'DESC');
      $query = $this->customDB->get()->result();

      return $query;
   }

   public function get_top_applicant() {
      // count query
      $this->customDB->select('m.id, m.parents_id, m.day_cares_id, m.child_name, m.child_age, m.child_weight, m.child_height, r.child_mother_name, r.child_mother_designation, r.child_mother_working_place, r.child_mother_ph_no, r.child_mother_total_salary');
      $this->customDB->from('members m');
      $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');
      $this->customDB->where('m.member_types_id', 1);
      $this->customDB->where('m.status', 0);
      $this->customDB->where('m.is_waiting_sms_send', 0);
      $this->customDB->order_by('m.id', 'ASC');
      $this->customDB->limit(1);
      $query = $this->customDB->get()->row();

      return $query;
   }

   public function get_info($id) {
      // $this->customDB->select('m.id. m.parents_id as mem_parent_id, m.registrations_id, m.day_cares_id as mem_dc_id, m.child_name, m.child_dob, m.gender, m.child_age, m.child_weight, m.child_height, m.birth_mark, m.birth_certificate_no, m.describe_food, m.describe_health_problem, m.child_vaccination`, m.created, m.updated, m.status, r.day_cares_id as reg_dc_id, r.parents_id as reg_parent_id, r.child_mother_name, r.child_mother_national_no, r.child_father_name, r.child_father_national_no, r.child_parents_name, r.child_parents_ph_no, r.child_parents_national_no, r.child_mother_designation, r.child_mother_working_place, r.child_mother_ph_no, r.child_mother_total_salary, r.child_mother_basic_salary, r.child_mother_pay_scale, r.child_mother_job_duration, r.child_father_total_salary, r.child_father_basic_salary, r.child_father_pay_scale, r.child_parents_present_address, r.child_mother_permanent_address, r.child_mother_parmanent_ph_no, r.child_father_permanent_address, r.child_father_ph_no, r.child_admit_interest, r.child_number');
      $this->customDB->select('m.id, m.registrations_id, m.child_name, m.child_dob, m.gender, m.child_age, m.child_weight, m.child_height, m.birth_mark, m.birth_certificate_no, m.describe_food, m.describe_health_problem, m.bcg, m.penta, m.pcb, m.opb, m.ipb, m.mr, m.ham, m.image_file, r.child_mother_name, r.child_mother_national_no, r.child_father_name, r.child_father_national_no, r.child_parents_name, r.child_parents_ph_no, r.child_parents_national_no, r.child_mother_designation, r.child_mother_working_place, r.child_mother_ph_no, r.child_mother_total_salary, r.child_mother_basic_salary, r.child_mother_pay_scale, r.child_mother_job_duration, r.child_father_total_salary, r.child_father_basic_salary, r.child_father_pay_scale, r.child_parents_present_address, r.child_mother_permanent_address, r.child_mother_parmanent_ph_no, r.child_father_permanent_address, r.child_father_ph_no, r.child_admit_interest, r.child_number');

      $this->customDB->from('members m');
      $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');
      $this->customDB->where('m.id', $id);
      $query = $this->customDB->get()->row();

      return $query;
   }



   public function edit_otherdb($table, $id, $field, $data) {
      $this->customDB->where($field, $id);
      if ($this->customDB->update($table, $data)) {
         return true;
      } else {
         return false;
      }
   }

   public function get_transactions($id) {
      // count query
      $this->db->select('t.*, p.project_name_en, pm.pm_name_en');
      $this->db->from('transactions t');
      $this->db->join('projects p', 'p.id = t.project_id', 'LEFT');
      $this->db->join('payment_methods pm', 'pm.id = t.trans_method', 'LEFT');
      $this->db->where('t.member_id', $id);
      $this->db->order_by('t.id', 'ASC');
      $query = $this->db->get()->result();

      return $query;
   }


   public function get_data_request() {
        // count query
    $this->db->select('u.id, u.name_bn, u.first_name, u.pay_member_fee, u.image_file, u.curr_working_place, d.desig_name_en');
    $this->db->from('users u');
    $this->db->join('designations d', 'd.id = u.curr_designation_id', 'LEFT');       
    $this->db->where('u.is_request', 1);
    $this->db->order_by('u.id', 'DESC');
    $query = $this->db->get()->result();

    return $query;
 }

 public function get_daycare_name($id){
        $this->db->select('id, title');
        $this->db->from('day_cares');
        $this->db->where('id', $id);
        $query = $this->db->get()->row()->title;        

        return $query;
    }



 function delete($id) {
    $img_path = 'member_img/';
    $info = $this->get_info($id);

    if(!empty($info->image_file)){
       @unlink($img_path.$info->image_file);
           // @unlink($img_path_thumbs.$info->image_file);
    }

    $this->db->where('id', $id);
    $this->db->delete('users');

    return TRUE;
 }
 function delete_img($id) {
    $img_path = 'member_img/';
    $info = $this->get_info($id);

    if(!empty($info->image_file)){
       @unlink($img_path.$info->image_file);
    }

    return TRUE;
 }

}
