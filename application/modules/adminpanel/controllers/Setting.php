<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends Backend_Controller {

	var $img_path;

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        $this->load->model('Setting_model');
        $this->img_path = realpath(APPPATH . '../setting_img');

    }

	public function index(){
        redirect('admin/setting/edit/1');
	}


    public function edit($id){

        $this->form_validation->set_rules('google_map', 'Google Map', 'trim');
        // $this->form_validation->set_rules('video_link', 'Video Link description', 'trim');
        

        $this->data['info'] = $this->Setting_model->get_info($id);
        // print_r($this->data['info']); exit;

        if(@$_FILES['userfile']['size'] > 0){
            $this->form_validation->set_rules('userfile', '', 'callback_file_check');
        }

        if(@$_FILES['userfile1']['size'] > 0){
            $this->form_validation->set_rules('userfile1', '', 'callback_file_check');
        }

        if ($this->form_validation->run() == true){

            if($_FILES['userfile']['size'] > 0){

                $this->Setting_model->delete_img($id);

                $new_file_name = $_FILES["userfile"]['name'];

                $config['allowed_types']= 'jpg|png|jpeg|gif';
                $config['upload_path']  = $this->img_path;
                $config['file_name']    = $new_file_name;
                $config['max_size']     = 1000;

                $this->load->library('upload', $config);
                //upload file to directory
                if($this->upload->do_upload('userfile')){
                    $uploadData = $this->upload->data();
                    $uploadedFile = $uploadData['file_name'];
                    // print_r($uploadedFile);
                    $this->data['message'] = 'File has been uploaded successfully.';
                }else{
                    $this->data['message'] = $this->upload->display_errors();
                }
            }

            if($_FILES['userfile1']['size'] > 0){

                $this->Setting_model->delete_img1($id);

                $new_file_name1 = $_FILES["userfile1"]['name'];
                $config1['allowed_types'] = 'jpg|png|jpeg|gif';
                $config1['upload_path']  = $this->img_path;
                $config1['file_name']    = $new_file_name1;
                $config1['max_size']     = 1000;

                $this->load->library('upload', $config1);
                //upload file to directory
                if($this->upload->do_upload('userfile1')){
                    $uploadData1 = $this->upload->data();
                    $uploadedFile1 = $uploadData1['file_name'];
                    // print_r($uploadedFile);
                    $this->data['message'] = 'File has been uploaded successfully.';
                }else{
                    $this->data['message'] = $this->upload->display_errors();
                }
            }
            
            $form_data = array(
                'contact_number' => $this->input->post('contact_number'),
                'contact_email' => $this->input->post('contact_email'),
                'copyright' => $this->input->post('copyright'),
                'google_map' => $this->input->post('google_map'),
                'video_title' => $this->input->post('video_title')
                // 'video_link' => $this->input->post('video_link')
            );

            if($_FILES['userfile']['size'] > 0){
                $form_data['image_file'] = $uploadedFile;
            }
            if($_FILES['userfile1']['size'] > 0){
                $form_data['image_file1'] = $uploadedFile1;
            }


            // print_r($form_data); exit;
            if($this->Common_model->edit('setting', $id, 'id', $form_data)){
                $this->session->set_flashdata('success', 'Information update successfully.');
                redirect('admin/setting');
            }
        }

        $this->data['meta_title'] = 'Edit Setting';
        $this->data['subview'] = 'setting/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }


	public function file_check($str){
            $this->load->helper('file');
            $allowed_mime_type_arr = array('image/gif','image/jpeg','image/png','image/x-png');
            if(isset($_FILES['userfile']['name']) && $_FILES['userfile']['name']!=""){
                $mime = get_mime_by_extension($_FILES['userfile']['name']);
            }elseif(isset($_FILES['userfile1']['name']) && $_FILES['userfile1']['name']!=""){
                $mime = get_mime_by_extension($_FILES['userfile1']['name']);
            }
            $file_size = 1050000; 
            $size_kb = '1 MB';

            if(isset($_FILES['userfile']['name']) && $_FILES['userfile']['name']!=""){
                if(!in_array($mime, $allowed_mime_type_arr)){                
                    $this->form_validation->set_message('file_check', 'Please select only jpg, jpeg, png, gif file.');
                    return false;
                }elseif($_FILES["userfile"]["size"] > $file_size){
                    $this->form_validation->set_message('file_check', 'Maximum file size '.$size_kb);
                    return false;
                }else{
                    return true;
                }
            }else if(isset($_FILES['userfile1']['name']) && $_FILES['userfile1']['name']!=""){
                if($_FILES["userfile1"]["size"] > $file_size){
                    $this->form_validation->set_message('file_check', 'Maximum file size '.$size_kb);
                    return false;
                }else{
                    return true;
                }
            }else{
                $this->form_validation->set_message('file_check', 'Please choose a image file to upload.');
                return false;
            }
        }

}