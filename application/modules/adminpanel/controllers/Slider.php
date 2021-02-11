<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends Backend_Controller {

	var $img_path;

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        $this->load->model('Slider_model');
        $this->img_path = realpath(APPPATH . '../assets/images/slider_img');
    }

	public function index(){
        redirect('adminpanel/slider/all');
	}

    public function all(){
        $this->data['results'] = $this->Common_model->get_data('slider'); 
        // print_r($this->data['results']); exit;
        //Load page
        $this->data['meta_title'] = 'All Slider';
        $this->data['subview'] = 'slider/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function details($id){
        $this->data['info'] = $this->Slider_model->get_info($id);

        $this->data['meta_title'] = 'Slider Details';
        $this->data['subview'] = 'slider/details';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function edit($id){

        $this->form_validation->set_rules('title', 'Slider Title', 'required|trim');
       

        $this->data['info'] = $this->Slider_model->get_info($id);
        // print_r($this->data['info']); exit;

        if(@$_FILES['userfile']['size'] > 0){
            $this->form_validation->set_rules('userfile', '', 'callback_file_check');
        }

        if ($this->form_validation->run() == true){

            

            if($_FILES['userfile']['size'] > 0){

                $this->Slider_model->delete_img($id);

                $new_file_name = $_FILES["userfile"]['name'];

                $config['allowed_types']= 'jpg|png|jpeg|gif';
                $config['upload_path']  = $this->img_path;
                $config['file_name']    = $new_file_name;
                $config['max_size']     = 1000;

                $this->load->library('upload', $config);
                //upload file to directory
                if($this->upload->do_upload()){
                    $uploadData = $this->upload->data();
                    $uploadedFile = $uploadData['file_name'];
                    // print_r($uploadedFile);
                    $this->data['message'] = 'File has been uploaded successfully.';
                }else{
                    $this->data['message'] = $this->upload->display_errors();
                }
            }

            
            
            $form_data = array(
                'title' => $this->input->post('title'),
                'details' => $this->input->post('details'),
                'display_home' => 1,
                'status' => $this->input->post('status')
            );

            if($_FILES['userfile']['size'] > 0){
                $form_data['image_file'] = $uploadedFile;
            }

            // print_r($form_data); exit;
            if($this->Common_model->edit('slider', $id, 'id', $form_data)){
                $this->session->set_flashdata('success', 'Information update successfully.');
                redirect('adminpanel/slider/all');
            }
        }


        $this->data['meta_title'] = 'Edit Slicer';
        $this->data['subview'] = 'slider/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }


	public function add(){
		$this->form_validation->set_rules('title', 'Slider Title', 'required|trim');     

        if(@$_FILES['userfile']['size'] > 0){
            $this->form_validation->set_rules('userfile', '', 'callback_file_check');
        }

        if ($this->form_validation->run() == true){

            if($_FILES['userfile']['size'] > 0){
                $new_file_name = $_FILES["userfile"]['name'];

                $config['allowed_types']= 'jpg|png|jpeg|gif';
                $config['upload_path']  = $this->img_path;
                $config['file_name']    = $new_file_name;
                $config['max_size']     = 1000;

                $this->load->library('upload', $config);
                //upload file to directory
                if($this->upload->do_upload()){
                    $uploadData = $this->upload->data();
                    $uploadedFile = $uploadData['file_name'];
                    // print_r($uploadedFile);
                    $this->data['message'] = 'File has been uploaded successfully.';
                }else{
                    $this->data['message'] = $this->upload->display_errors();
                }
            }

            $form_data = array(
                'title' => $this->input->post('title'),
                'details' => $this->input->post('details'),
                'display_home' => 1
            );

            if($_FILES['userfile']['size'] > 0){
                $form_data['image_file'] = $uploadedFile;
            }
            // print_r($form_data); exit;

            if($this->Common_model->save('slider', $form_data)){                
                $this->session->set_flashdata('success', 'New data insert successfully.');
               redirect("adminpanel/slider/all");
            }
        }


        // view
		$this->data['meta_title'] = 'Add Slider';
		$this->data['subview'] = 'slider/add';
    	$this->load->view('backend/_layout_main', $this->data);
	}

	public function file_check($str){
    	$this->load->helper('file');
        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES['userfile']['name']);
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
        }else{
            $this->form_validation->set_message('file_check', 'Please choose a image file to upload.');
            return false;
        }
    }

    function delete($id) {
        $this->data['info'] = $this->Slider_model->delete($id);
        $this->session->set_flashdata('success', 'Information delete successfully.');
        redirect('adminpanel/slider/all');
    }

}