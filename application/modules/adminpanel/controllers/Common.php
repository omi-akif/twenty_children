<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends Backend_Controller {

	var $img_path;

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        $this->img_path = realpath(APPPATH . '../member_img');
    }

    public function index(){
        // code
    }

    public function ajax_get_district_by_div($div_id){
        header('Content-Type: application/x-json; charset=utf-8');
        echo (json_encode($this->Common_model->get_district_by_div_id($div_id)));
    }

    public function ajax_get_upa_tha_by_dis($dis_id){
        header('Content-Type: application/x-json; charset=utf-8');
        echo (json_encode($this->Common_model->get_upa_tha_by_dis_id($dis_id)));
    }

}