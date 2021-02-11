<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data() {
        // count query
        $this->db->select('*');
        $this->db->from('contact');
        $query = $this->db->get()->result();

        return $query;
    }

    public function get_info($id) {
        $query = $this->db->from('contact')
                        ->where('id', $id)
                        ->get()->row();
        return $query;
    }

    function delete($id) {
        // $img_path = base_url().'contact_img/';
        // $info = $this->get_info($id);

        // if(file_exists($img_path.$info->image_file)){
        //    @unlink($img_path.$info->image_file);
        //    @unlink($img_path_thumbs.$info->image_file);
        // }

        $this->db->where('id', $id);
        $this->db->delete('contact');
        
        return TRUE;
    }

}
