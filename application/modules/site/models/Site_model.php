<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Site_model extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function save($table, $data) {
        if ($this->customDB->insert($table, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($table, $id, $field, $data) {
        $this->customDB->where($field, $id);
        if ($this->customDB->update($table, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function edit_user($table, $id, $field, $data) {
        $this->db->where($field, $id);
        if ($this->db->update($table, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function last_insert_id(){
      return $this->customDB->insert_id();
   }



    public function get_data($table) {
        $this->db->select('*');
        $this->db->from($table);
        // $this->db->where('status', 1);
        $query = $this->db->get()->result();        

        return $query;
    }
    public function get_info($id) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();        

        return $query;
    }

    public function get_day_care_detail($id){
        // count query
        $this->db->select('*');
        $this->db->from('day_cares');       
        $this->db->where('id', $id);
        $query = $this->db->get()->result();

        return $query;
    }
    

    public function get_application_data($parentID) {
        $this->customDB->select('*');
        $this->customDB->from('members');
        $this->customDB->where('parents_id', $parentID);
        $query = $this->customDB->get()->result();
        // echo $this->customDB->last_query(); exit();        
        return $query;
    }    

    public function get_application_info($id) {
      $daycare = $this->db->select('id, daycare_id, member_id')->where('id', $id)->get('users_daycares')->row();
      $dbName = $this->dc_db_name($daycare->daycare_id); //exit;
      
      // Database Load
      $this->Site_model->loadCustomerDatabase($dbName);

        $this->customDB->select("*");
        $this->customDB->from("members");
        $this->customDB->where("id", $daycare->member_id);
        $query = $this->customDB->get()->row();
        // echo $this->customDB->last_query(); exit();    
        return $query;
    }

    public function get_application($userID) {
      // $app_list = $this->count_application($userID);
      // $query = [];
      // foreach ($app_list as $item) {
         // $data_arr[$item->id] = $this->dc_applicant($item->database_name);
         //$gtotal['application'] = $data_arr[$item->id]['total_application'];
         // $dbName = $this->dc_db_name($item->daycare_id);
         // $dbName = 'demo_'.$dbName;
         $this->db->select("dm.*, ud.id as ud_table_id");
         $this->db->from("daycares_main.users_daycares ud");
         // $this->db->from("demo_daycare.users_daycares ud");         
         $this->db->join("daycares_1.members dm", "dm.id = ud.member_id", 'LEFT');
         $this->db->where("dm.status", 0);
         $this->db->where("dm.is_applied", 0);
         $this->db->where("ud.user_id", $userID);
         $this->db->where("ud.daycare_id", 1);
         // $this->db->where("ud.id", $item->id);
         $query = $this->db->get()->result();
         // echo $this->db->last_query(); exit();        
      // }
      return $query;
    } 

    /*
    public function get_application($userID) {
      $app_list = $this->count_application($userID);
      $query = [];
      foreach ($app_list as $item) {
         // $data_arr[$item->id] = $this->dc_applicant($item->database_name);
         //$gtotal['application'] = $data_arr[$item->id]['total_application'];
         $dbName = $this->dc_db_name($item->daycare_id);
         // $dbName = 'demo_'.$dbName;
         $this->db->select("dm.*, ud.id as ud_table_id");
         $this->db->from("daycares_main.users_daycares ud");
         // $this->db->from("demo_daycare.users_daycares ud");         
         $this->db->join("$dbName.members dm", "dm.id = ud.member_id", 'LEFT');
         $this->db->where("dm.status", 1);
         $this->db->where("ud.user_id", $userID);
         $this->db->where("ud.daycare_id", $item->daycare_id);
         $this->db->where("ud.id", $item->id);
         $query[$item->id] = $this->db->get()->row();
         // echo $this->db->last_query(); exit();        
      }
      return $query;
    } 
    */

    public function count_application($userID) {      
      $this->db->select('*');
      $this->db->where('user_id', $userID);
      $query = $this->db->get('users_daycares')->result();
      // echo $this->db->last_query(); exit();        

      return $query;
   }

    public function dc_db_name($id){
         $this->db->select('id, database_name');
         $this->db->from('day_cares');
         $this->db->where('id', $id);
         $query = $this->db->get()->row()->database_name;    
         // echo $this->db->last_query(); exit();        

        return $query;
    }

    public function get_daycare_name($id){
        $this->db->select('id, title');
        $this->db->from('day_cares');
        $this->db->where('id', $id);
        $query = $this->db->get()->row()->title;        

        return $query;
    }

    public function get_day_cares_address() {
      $this->db->select('*');        
      $query =  $this->db->get('day_cares');

      return $query->result();
   }



    public function get_products($data) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('status', 1);
        $this->db->where('category', $data);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_news($table) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('status', 1);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_clicen($table) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('status', 1);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_slider() {
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->where('status', 1);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_concern() {
        $this->db->select('*');
        $this->db->from('concern');
        $this->db->where('status', 1);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_testimonial() {
        $this->db->select('*');
        $this->db->from('testimonial');
        $this->db->where('status', 1);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_product() {
        $this->db->select('id, fa_icon, name, slug, image_file');
        $this->db->from('product');
        $this->db->where('status', 1);
        $query = $this->db->get()->result();        

        return $query;
    }
    public function get_contact() {
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->where('status', 1);
        $query = $this->db->get()->result();        

        return $query;
    }
    public function get_limit_product() {
        $this->db->select('id, fa_icon, name, slug, image_file');
        $this->db->from('product');
        $this->db->where('status', 1);
        $this->db->limit(2);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_footer_address_show($table) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('status', 1);
        $this->db->limit(2);
        $query = $this->db->get()->result();        

        return $query;
    }
    public function get_client() {
        $this->db->select('id, project_name, client_name, image_file, client_type');
        $this->db->from('client');
        $this->db->where('status', 1);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_info_gallery($id) {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->where('category_id', $id);
        $this->db->where('status', 1);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_category($table) {
        $this->db->select('id, slug, cat_name');
        $this->db->from($table);        
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_gallery() {
        $this->db->select('id, name, category_id, image_file, url');
        $this->db->from('gallery');        
        $this->db->where('status', '1');        
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_single_user_client($id) {
        $this->db->select('client_name');
        $this->db->from('client');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();      

        return $query;
    }

    public function get_client_name($id){
        $this->db->select('*');
        $this->db->from('client');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();        

        return $query;
    }

    public function get_info_by_slug($slug) {
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where('slug', $slug);
        $query = $this->db->get()->row(); 
        // echo $this->db->last_query(); exit;       

        return $query;
    }
    public function get_info_by_slug_of_product($slug) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('slug', $slug);
        $query = $this->db->get()->row(); 
        // echo $this->db->last_query(); exit;       

        return $query;
    }

    public function get_info_by_slug_of_services($slug) {
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('slug', $slug);
        $query = $this->db->get()->row(); 
        // echo $this->db->last_query(); exit;       

        return $query;
    }

    public function get_info_by_slug_of_choose_us($slug) {
        $this->db->select('*');
        $this->db->from('why_choose_us');
        $this->db->where('slug', $slug);
        $query = $this->db->get()->row(); 
        // echo $this->db->last_query(); exit;       

        return $query;
    }

    public function get_info_by_slug_of_news($slug) {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('slug', $slug);
        $query = $this->db->get()->row(); 
        // echo $this->db->last_query(); exit;       

        return $query;
    }


    public function get_homepage_show($table) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('status', 1);
        $this->db->where('display_home', 1);
        $this->db->limit(8);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_footershow($table) {
        $this->db->select('name, slug');
        $this->db->from($table);
        $this->db->where('status', 1);
        $this->db->order_by("id", "desc");
        $this->db->limit(6);
        $query = $this->db->get()->result();        

        return $query;
    }

    function slug_exists($slug){
        $this->db->select('slug');
        $this->db->from('article');
        $this->db->where('slug',$slug);
        $this->db->limit(1);
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        return ($query->num_rows()==1);
    }
    function service_exists($slug){
        $this->db->select('slug');
        $this->db->from('services');
        $this->db->where('slug',$slug);
        $this->db->limit(1);
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        return ($query->num_rows()==1);
    }
    function choose_us_exists($slug){
        $this->db->select('slug');
        $this->db->from('why_choose_us');
        $this->db->where('slug',$slug);
        $this->db->limit(1);
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        return ($query->num_rows()==1);
    }

}
