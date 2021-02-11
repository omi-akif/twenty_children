<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Attendance_model extends MY_Model {

   public function __construct() {
      parent::__construct();
   }

   public function get_data($day_care) {
      // count query
      $this->customDB->select('a.*, m.child_name');
      $this->customDB->from('attendances a');
      $this->customDB->join('members m', 'm.id = a.members_id', 'LEFT');
      $this->customDB->where('a.day_cares_id', $day_care);
      $this->customDB->order_by('a.id', 'DESC');
      $query = $this->customDB->get()->result();

      return $query;
   }  

   public function get_info($id) {
      $query = $this->customDB->from('members')->where('id', $id)->get()->row();
      return $query;
   }  

   public function get_report($day_care, $member_id=NULL, $start_date=NULL, $end_date=NULL) {
      // count query
      $this->customDB->select('a.*, m.child_name');
      $this->customDB->from('attendances a');
      $this->customDB->join('members m', 'm.id = a.members_id', 'LEFT');
      $this->customDB->where('a.day_cares_id', $day_care);
      if($member_id != NULL){
         $this->customDB->where('a.members_id', $member_id);         
      }
      if($start_date != NULL){
         $this->customDB->where('date(a.time) >=', $start_date);         
      }
      if($end_date != NULL){
         $this->customDB->where('date(a.time) <=', $end_date);
      }
      $this->customDB->order_by('a.id', 'DESC');
      $query = $this->customDB->get()->result();
      // echo $this->customDB->last_query(); exit;
      return $query;
   } 

   public function get_today_attendance($day_care) {
      // count query
      $this->customDB->select('a.*, m.child_name');
      $this->customDB->from('attendances a');
      $this->customDB->join('members m', 'm.id = a.members_id', 'LEFT');
      $this->customDB->where('a.day_cares_id', $day_care);
      $this->customDB->where('DATE(a.time)', date('Y-m-d'));
      $this->customDB->order_by('a.id', 'DESC');
      $query = $this->customDB->get()->result();
      // echo $this->customDB->last_query(); exit;
      return $query;
   } 

   public function get_member_staff($day_care){
        $data[''] = '--- Select Member ---';
        $this->customDB->select('id, child_name');
        $this->customDB->from('members');
        $this->customDB->where('member_types_id', 2);
        $this->customDB->where('day_cares_id', $day_care);
        $this->customDB->order_by('id', 'ASC');
        $query = $this->customDB->get();

         foreach ($query->result_array() AS $rows) {
            $data[$rows['id']] = $rows['child_name'];
        }

        return $data;
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
