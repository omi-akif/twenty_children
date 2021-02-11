<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Social_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data() {
        // count query
        $this->db->select('*');
        $this->db->from('social');
        $query = $this->db->get()->result();

        return $query;
    }

    public function get_info($id) {
        $query = $this->db->from('social')
                        ->where('id', $id)
                        ->get()->row();
        return $query;
    }

    function delete($id) {

        $this->db->where('id', $id);
        $this->db->delete('social');
        
        return TRUE;
    }

}
