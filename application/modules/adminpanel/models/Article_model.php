<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Article_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data() {
        // count query
        $this->db->select('*');
        $this->db->from('article');
        $query = $this->db->get()->result();

        return $query;
    }

    public function get_info($id) {
        $query = $this->db->from('article')
                        ->where('id', $id)
                        ->get()->row();
        return $query;
    }

    function delete($id) {
        $img_path = 'article_img/';
        $info = $this->get_info($id);

        if(!empty($info->image_file)){
           @unlink($img_path.$info->image_file);
           // @unlink($img_path_thumbs.$info->image_file);
        }

        $this->db->where('id', $id);
        $this->db->delete('article');
        
        return TRUE;
    }
    function delete_img($id) {
        $img_path = 'article_img/';
        $info = $this->get_info($id);

        if(!empty($info->image_file)){
           @unlink($img_path.$info->image_file);
        }
        
        return TRUE;
    }

}
