<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Setting_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data() {
        // count query
        $this->db->select('*');
        $this->db->from('setting');
        $query = $this->db->get()->result();

        return $query;
    }

    public function get_info($id) {
        $query = $this->db->from('setting')
                        ->where('id', $id)
                        ->get()->row();
        return $query;
    }

    function delete_img($id) {
        $img_path = 'setting_img/';
        $info = $this->get_info($id);

        if(!empty($info->image_file)){
           @unlink($img_path.$info->image_file);
        }
        
        return TRUE;
    }


    function delete_img1($id) {
        $img_path = 'setting_img/';
        $info = $this->get_info($id);

        if(!empty($info->image_file1)){
           @unlink($img_path.$info->image_file1);
        }
        
        return TRUE;
    }

}
