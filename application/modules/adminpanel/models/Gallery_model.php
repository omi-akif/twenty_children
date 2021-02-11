<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_model extends MY_Model {

   public function __construct() {
      parent::__construct();
   }

   public function get_data() {
      // count query
      $this->customDB->select('*');
      $this->customDB->from('galleries');
      $query = $this->customDB->get()->result();

      return $query;
   }

   public function get_info($id) {
      $query = $this->customDB->from('galleries')->where('id', $id)->get()->row();
      return $query;
   }

   function delete($id) {
      $img_path = '/assets/images/gallery_img/';
      $info = $this->get_info($id);

      if(!empty($info->image)){
         @unlink($img_path.$info->image);
         // @unlink($img_path_thumbs.$info->image_file);
      }

      $this->customDB->where('id', $id);
      $this->customDB->delete('galleries');

      return TRUE;
   }

   // function delete_img($id) {
   //    $img_path = 'gallery_img/';
   //    $info = $this->get_info($id);

   //    if(!empty($info->image_file)){
   //       @unlink($img_path.$info->image_file);
   //    }

   //    return TRUE;
   // }

}
