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

   public function get_day_care_type(){
        $data[''] = '-- Daycare Type --';
        $this->db->select('id, type_name');
        $this->db->from('day_care_type');        
        // $this->db->order_by('sort_order', 'ASC');
        $query = $this->db->get();

         foreach ($query->result_array() AS $rows) {
            $data[$rows['id']] = $rows['type_name'];
        }

        return $data;
    }

   public function get_organization(){
        $data[''] = '-- Organization --';
        $this->db->select('id, owner_name');
        $this->db->from('daycare_owner');        
        // $this->db->order_by('sort_order', 'ASC');
        $query = $this->db->get();

         foreach ($query->result_array() AS $rows) {
            $data[$rows['id']] = $rows['owner_name'];
        }

        return $data;
    }

   public function get_division(){
        $data[''] = '-- Division --';
        $this->db->select('id, div_name_bn');
        $this->db->from('divisions');        
        $this->db->order_by('sort_order', 'ASC');
        $query = $this->db->get();

         foreach ($query->result_array() AS $rows) {
            $data[$rows['id']] = $rows['div_name_bn'];
        }

        return $data;
    }

    public function get_district(){
        $district[''] = '-- District --';
        $this->db->select('id, dis_name_bn');
        $this->db->from('districts');
        $this->db->order_by('dis_name_bn', 'ASC');
        $query = $this->db->get();

         foreach ($query->result_array() AS $rows) {
            $district[$rows['id']] = $rows['dis_name_bn'];
        }

        return $district;
    }

    public function get_upazila_thana(){
        $district[''] = '-- Upazila --';
        $this->db->select('id, upa_name_bn');
        $this->db->from('upazilas');
        $this->db->order_by('upa_name_bn', 'ASC');
        $query = $this->db->get();

         foreach ($query->result_array() AS $rows) {
            $district[$rows['id']] = $rows['upa_name_bn'];
        }

        return $district;
    }


   public function get_district_by_div_id($id){
        $data['0'] = '-- District --';
        $this->db->select('id, dis_name_bn');
        $this->db->from('districts');
        $this->db->where('dis_div_id', $id);
        // $this->db->where('status',1);
        $this->db->order_by('dis_name_bn', 'ASC');
        $query = $this->db->get();

        foreach ($query->result_array() AS $rows) {
            $data[$rows['id']] = $rows['dis_name_bn'];
        }

        return $data;
    }

    public function get_upa_tha_by_dis_id($id){
        $data['0'] = '-- Upazila --';
        $this->db->select('id, upa_name_bn');
        $this->db->from('upazilas');
        $this->db->where('upa_dis_id',$id);
        // $this->db->where('status',1);
        $this->db->order_by('upa_name_bn', 'ASC');
        $query = $this->db->get();

        foreach ($query->result_array() AS $rows) {
            $data[$rows['id']] = $rows['upa_name_bn'];
        }

        return $data;
    }

    public function get_daycare_others() {
      // count query
      $this->db->select('dc.*, o.owner_name, dv.div_name_bn, ds.dis_name_bn, up.upa_name_bn');
      $this->db->from('day_cares_others dc');
      $this->db->join('daycare_owner o', 'o.id = dc.owner_id', 'LEFT');
      $this->db->join('divisions dv', 'dv.id = dc.division_id', 'LEFT');
      $this->db->join('districts ds', 'ds.id = dc.district_id', 'LEFT');
      $this->db->join('upazilas up', 'up.id = dc.upazila_id', 'LEFT');       
      $this->db->order_by('dc.id', 'ASC');
      $query = $this->db->get()->result();

      return $query;
   }



}
