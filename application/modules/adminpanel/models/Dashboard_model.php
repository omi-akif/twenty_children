<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends MY_Model {
   //public $customDB;

   public function __construct() {
      parent::__construct();
      // $this->load->database('another_db', TRUE);
      // $DB2 = $this->load->database('another_db', TRUE);      
   }

   public function get_members_count() {
      // count query
      $this->db->select('COUNT(*) as count');
      $this->db->from('members');
      $q = $this->db->get()->result();

      $tmp = $q;
      $ret['num_rows'] = $tmp[0]->count;

      return $ret;
   }

   public function get_count($table) {

      $this->db->select('count(*)');
      $query = $this->db->get($table);
      $cnt = $query->row_array();

      return $cnt['count(*)'];
   }

   public function get_all_member($status) {      
      $this->customDB->select('m.id, m.child_name, m.child_age, m.child_weight, m.child_height, r.child_mother_name, r.child_mother_designation, r.child_mother_working_place, r.child_mother_ph_no, r.child_mother_total_salary');
      $this->customDB->from('members m');
      $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');
      $this->customDB->where('m.member_types_id', 1);
      $this->customDB->where('m.status', $status);
      $this->customDB->order_by('m.id', 'DESC');
      $query = $this->customDB->get()->result();

      return $query;
   }


   public function get_count_child($status) {      
      $this->customDB->select('COUNT(*) as count');
      $this->customDB->where('member_types_id', 1);
      $this->customDB->where('status', $status);
      $tmp = $this->customDB->get('members')->result();
      // echo $this->customDB->last_query(); exit;        
      // return $tmp[0]->count;
      return count($tmp) > 0 ? $tmp[0]->count : 0;
   }

   public function get_count_staff() {      
      $this->customDB->select('COUNT(*) as count');
      $this->customDB->where('member_types_id', 2);
      $tmp = $this->customDB->get('members')->result();
      // echo $this->customDB->last_query(); exit;        
      // return $tmp[0]->count;
      return count($tmp) > 0 ? $tmp[0]->count : 0;
   }

   public function get_count_advance_bill() {      
      $budget_id = $this->customDB->select('MAX(id) as id')->where('budget_types_id', 2)->get('budgets')->row()->id;
      $this->customDB->select('SUM(amount) as amount');
      $this->customDB->where('budgets_id', $budget_id);
      $tmp = $this->customDB->get('budget_items')->result();
      // echo $this->customDB->last_query(); exit;        
      // return $tmp[0]->amount;
      return count($tmp) > 0 ? $tmp[0]->amount : 0;
   }

   public function get_count_attendance_today() {  
      $this->customDB->select('COUNT(*) as count');
      $this->customDB->where('DATE(time)', date('Y-m-d'));
      $this->customDB->group_by('members_id');
      $tmp = $this->customDB->get('attendances')->result();
      // echo $this->customDB->last_query(); exit;
      return count($tmp) > 0 ? $tmp[0]->count : 0;

      // if(count($tmp) > 0) {
      //    return $tmp[0]->count;                  
      // }else{
      //    return 0;
      // }
   }



   public function get_day_cares() {
      $this->db->select('*');        
      $query =  $this->db->get('day_cares');

      return $query->result();
   }

}
