<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Budget_model extends MY_Model {

   public function __construct() {
      parent::__construct();
   }

   public function get_data($type = NULL) {
      $this->customDB->select('*');
      $this->customDB->from('budgets');
      if($type != NULL){
         $this->customDB->where('budget_types_id', $type);         
      }
      $this->customDB->order_by('id', 'DESC');
      $query = $this->customDB->get()->result();

      return $query;
   }

   public function get_budget($id) {
      $query = $this->customDB->from('budgets')->where('id', $id)->get()->row();
      return $query;
   }

   public function get_budget_item($id) {
      $query = $this->customDB->from('budget_items')->where('budgets_id', $id)->get()->result();
      return $query;
   }

   public function save($table, $data) {
      if ($this->customDB->insert($table, $data)) {
         return true;
      } else {
         return false;
      }
   }

   public function last_insert_id(){
      return $this->customDB->insert_id();
   }














   public function get_info($id) {
      $query = $this->DB2->from('events')->where('id', $id)->get()->row();
      return $query;
   }







   function delete($id) {
     $img_path = 'event_img/';
     $info = $this->get_info($id);

     if(!empty($info->image_file)){
        @unlink($img_path.$info->image_file);
           // @unlink($img_path_thumbs.$info->image_file);
     }

     $this->db->where('id', $id);
     $this->db->delete('events');

     return TRUE;
  }
  function delete_img($id) {
     $img_path = 'event_img/';
     $info = $this->get_info($id);

     if(!empty($info->image_file)){
        @unlink($img_path.$info->image_file);
     }

     return TRUE;
  }

}
