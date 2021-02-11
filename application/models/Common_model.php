<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model {

   public function __construct() {
      parent::__construct();
   }

   public function save($table, $data) {
      if ($this->db->insert($table, $data)) {
         return true;
      } else {
         return false;
      }
   }

   public function edit($table, $id, $field, $data) {
      $this->db->where($field, $id);
      if ($this->db->update($table, $data)) {
         return true;
      } else {
         return false;
      }
   }

   public function get_row($table, $id) {
      $this->db->select('*');
      $this->db->from($table);
      $this->db->where('id', $id);
      $query =  $this->db->get();
      return $query->row();
   }

   public function exists($table, $field, $item ) {
      $this->db->from($table);
      $this->db->where($field, $item);
      $query = $this->db->get();

      return ($query->num_rows() >= 1);
   }

   public function get_data($table, $orderBy=NULL) {
      $this->db->select('*');
      $this->db->from($table);
      if($orderBy != NULL){
         // ASC, DESC
         $this->db->order_by('id', $orderBy);
      }
      $query =  $this->db->get();


      if($query->num_rows() > 0){
         return $query->result();
      }else{
         return FALSE;
      }
   }

   public function get_info($table) {
      $this->db->select('*');
      $this->db->from($table);
      $this->db->where('id', 1);
      $query =  $this->db->get();
      return $query->row();
   }


   public function get_category_dd($table){
      $data[''] = '--- Select Category ---';
      $this->db->select('slug, cat_name');
      $this->db->from($table);
      $this->db->order_by('cat_name', 'ASC');
      $query = $this->db->get();

      foreach ($query->result_array() AS $rows) {
         $data[$rows['slug']] = $rows['cat_name'];
      }

      return $data;
   }

   public function get_user_details($id = NULL) {
      // if no id was passed use the current users id
      $id = isset($id) ? $id : $this->session->userdata('user_id');

      $this->db->select('u.*, d.title, d.address, d.officer_name, d.mobile_no, d.phone, d.database_name');
      $this->db->from('users u');
      $this->db->join('day_cares d', 'd.id = u.day_care_id', 'LEFT');
      $this->db->where('u.id', $id);
      $query = $this->db->get()->row();        

      return $query;
   }

    public function get_daycares(){
        $data[''] = '-Select Day Care-';
        $this->db->select("id, title");
        $this->db->from('day_cares');      
        $query = $this->db->get();

        foreach ($query->result_array() AS $rows) {
            $data[$rows['id']] = $rows["title"];
        }
        return $data;
    }

    public function get_user_info($dc_id){
        // echo $user_id = $this->db->select('userid')->where('shop_id',$shopid)->get('shop_Details')->row()->userid; //exit;
        $this->db->select('u.id, u.day_care_id, u.username, u.email, u.last_login, u.first_name, u.last_name, dc.title, dc.area');
        $this->db->from('users u');
        $this->db->join('day_cares dc', 'dc.id=u.day_care_id', 'LEFT');
        $this->db->where('u.day_care_id', $dc_id);        
        $query = $this->db->get()->row();
        // echo $this->db->last_query();  // exit;
        return $query;
    }

    public function get_day_cares() {
      $this->db->select('*');        
      $query =  $this->db->get('day_cares');

      return $query->result();
   }



}
