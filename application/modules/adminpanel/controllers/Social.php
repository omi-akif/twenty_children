<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social extends Backend_Controller {

	var $img_path;

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        $this->load->model('Social_model');

       
    }

	public function index(){
        redirect('admin/social_icon/all');
	}

    public function all(){
        $this->data['results'] = $this->Common_model->get_data('social'); 
        // print_r($this->data['results']); exit;
        //Load page
        $this->data['meta_title'] = 'All Social Icon';
        $this->data['subview'] = 'social_icon/all';
        $this->load->view('backend/_layout_main', $this->data);
    }


    public function edit($id){

         $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim'); 

        $this->data['info'] = $this->Social_model->get_info($id);
        // print_r($this->data['info']); exit;


        if ($this->form_validation->run() == true){

            $form_data = array(
                'icon' => $this->input->post('icon'),
                'url' => $this->input->post('url'),
                'status' => $this->input->post('status')
            );

            // print_r($form_data); exit;
            if($this->Common_model->edit('social', $id, 'id', $form_data)){
                $this->session->set_flashdata('success', 'Information update successfully.');
                redirect('admin/social/all');
            }
        }

        $this->data['meta_title'] = 'Edit Social Icon';
        $this->data['subview'] = 'social_icon/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }


	public function add(){
		 $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
         $this->form_validation->set_rules('url', 'URL', 'required|trim');
    

        if ($this->form_validation->run() == true){

            $form_data = array(
               'icon' => $this->input->post('icon'),
                'url' => $this->input->post('url'),
                'status' => 1
            );

           
            // print_r($form_data); exit;

            if($this->Common_model->save('social', $form_data)){                
                $this->session->set_flashdata('success', 'New social insert successfully.');
               redirect("admin/social/all");
            }
        }

		$this->data['meta_title'] = 'Add Social Icon';
		$this->data['subview'] = 'social_icon/add';
    	$this->load->view('backend/_layout_main', $this->data);
	}



    function delete($id) {
        $this->data['info'] = $this->Social_model->delete($id);
        $this->session->set_flashdata('success', 'Information delete successfully.');
        redirect('admin/social/all');
    }

}