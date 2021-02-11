<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Staff_model extends MY_Model {

   public function __construct() {
      parent::__construct();
   }

   public function get_data($day_care) {
      // count query
      $this->customDB->select('m.id, m.child_name, m.phone, m.image_file');
      $this->customDB->from('members m');
      $this->customDB->where('m.member_types_id', 2);
      $this->customDB->where('m.day_cares_id', $day_care);
      $this->customDB->order_by('m.id', 'DESC');
      $query = $this->customDB->get()->result();

      return $query;
   }   

   public function get_info($id) {
      $query = $this->customDB->from('members')->where('id', $id)->get()->row();
      return $query;
   }   

   // function delete($id) {
   //    $img_path = 'slider_img/';
   //    $info = $this->get_info($id);

   //    if(!empty($info->image_file)){
   //       @unlink($img_path.$info->image_file);
   //       // @unlink($img_path_thumbs.$info->image_file);
   //    }

   //    $this->db->where('id', $id);
   //    $this->db->delete('slider');

   //    return TRUE;
   // }

   // function delete_img($id) {
   //    $img_path = 'slider_img/';
   //    $info = $this->get_info($id);

   //    if(!empty($info->image_file)){
   //       @unlink($img_path.$info->image_file);
   //    }

   //    return TRUE;
   // }

}
