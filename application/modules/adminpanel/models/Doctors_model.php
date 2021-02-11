<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Doctors_model extends MY_Model {

   public function __construct() {
      parent::__construct();
   }

   public function get_info($id) {
      $query = $this->db->from('day_cares')->where('id', $id)->get()->row();
      return $query;
   }

   public function get_doctors() {
      // count query
      $this->db->select('d.*, dv.div_name_bn, ds.dis_name_bn, up.upa_name_bn');
      $this->db->from('doctors d');
      // $this->db->join('daycare_owner o', 'o.id = dc.owner_id', 'LEFT');
      $this->db->join('divisions dv', 'dv.id = d.division_id', 'LEFT');
      $this->db->join('districts ds', 'ds.id = d.district_id', 'LEFT');
      $this->db->join('upazilas up', 'up.id = d.upazila_id', 'LEFT');       
      $this->db->order_by('d.id', 'ASC');
      $query = $this->db->get()->result();

      return $query;
   }

   public function get_info_doctor($id) {
      // count query
      $this->db->select('*');
      $this->db->from('doctors');     
      $this->db->where('id', $id);
      $query = $this->db->get()->row();

      return $query;
   }



   // public function get_info($id) {
   //    $this->customDB->select('m.id, m.child_name, m.child_age, m.child_weight, m.child_height, r.child_mother_name, r.child_mother_designation, r.child_mother_working_place, r.child_mother_ph_no, r.child_mother_total_salary');
   //    $this->customDB->from('members m');
   //    $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');
   //    $this->customDB->where('m.id', $id);
   //    $query = $this->customDB->get()->row();

   //    return $query;
   // }

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
