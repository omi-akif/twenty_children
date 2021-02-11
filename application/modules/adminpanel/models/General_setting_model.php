<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class General_setting_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /************** Division, District, Upazila, Union **********************/
    /************************************************************************/

    public function get_union_list() {
        $this->db->select('un.*, up.upa_name_bn, up.upa_name_en, ds.dis_name_bn, ds.dis_name_en');
        $this->db->from('unions un');
        $this->db->join('upazilas up', 'up.id = un.upazila_id');   
        $this->db->join('districts ds', 'ds.id = up.district_id');   
        $query = $this->db->get()->result();
        // echo $this->db->last_query(); exit;     

        return $query;
    }

    public function get_upa_tha_list($limit=1000, $offset=0) {
        $this->db->select('up.*, ds.dis_name_bn, ds.dis_name_en, dv.div_name_bn, dv.div_name_en');
        $this->db->from('upazilas up');
        $this->db->join('districts ds', 'ds.id = up.district_id');   
        $this->db->join('divisions dv', 'dv.id = ds.division_id');   
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->order_by('up.id', 'DESC');
        $query = $this->db->get()->result();
        // echo $this->db->last_query(); exit;     

        $result['rows'] = $query;

        // count query
        $this->db->select('COUNT(*) as count');
        $this->db->from('upazilas');  
        $query2 = $this->db->get()->result();      
        $tmp = $query2;
        $result['num_rows'] = $tmp[0]->count;

        return $result;
    }

    public function get_district_list() {
        $this->db->select('ds.*, dv.div_name_bn, dv.div_name_en');
        $this->db->from('districts ds');
        $this->db->join('divisions dv', 'dv.id = ds.division_id');   
        $query = $this->db->get()->result();
        // echo $this->db->last_query(); exit;     

        return $query;
    }



    /*************************** Gallary Category ***************************/
    /************************************************************************/
    // public function get_gallery_category_list() {
    //     $this->db->select('*');
    //     $this->db->from('gallery_category');
    //     $query = $this->db->get()->result();

    //     return $query;
    // }

    // public function get_info_gallery_category($id) {
    //     $query = $this->db->from('gallery_category')->where('id', $id)->get()->row();
    //     // echo $this->db->last_query(); 
    //     return $query;
    // }

    // public function get_gallery_category_delete($id) {
    //     $this->db->where('id', $id);
    //     $this->db->delete('gallery_category');
    //     return TRUE;
    // }

    /****************************** Social Icon *****************************/
    /************************************************************************/

    public function get_social_icon_list() {
        $this->db->select('*');
        $this->db->from('social');
        $query = $this->db->get()->result();

        return $query;
    }

    public function get_info_social_icon($id) {
        $query = $this->db->from('social')->where('id', $id)->get()->row();
        return $query;
    }

    public function get_social_icon_delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('social');
        return TRUE;
    }

    public function get_info_designation($id) {
        $query = $this->db->from('designations')->where('id', $id)->get()->row();
        return $query;
    }

    public function get_designation_delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('designations');
        return TRUE;
    }


    public function get_info_batch($id) {
        $query = $this->db->from('batch')->where('id', $id)->get()->row();
        return $query;
    }

    public function get_batch_delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('batch');
        return TRUE;
    }


    public function get_gallery_category($id) {
       $query = $this->db->from('gallery_category')->where('id', $id)->get()->row();
        return $query;
    }

    public function get_gallery_category_delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('gallery_category');
        return TRUE;
    }


}
