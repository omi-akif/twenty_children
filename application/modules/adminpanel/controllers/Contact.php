<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Backend_Controller {

	var $img_path;

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        $this->load->model('Contact_model');
        $this->img_path = realpath(APPPATH . '../contact_img');

       
    }

	public function index(){
        redirect('admin/contact/all');
	}

    public function all(){
        $this->data['results'] = $this->Common_model->get_data('contact'); 
        // print_r($this->data['results']); exit;
        //Load page
        $this->data['meta_title'] = 'All Contact';
        $this->data['subview'] = 'contact/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function details($id){
        $this->data['info'] = $this->Contact_model->get_info($id);

        $this->data['meta_title'] = 'Contact Details';
        $this->data['subview'] = 'contact/details';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function edit($id){

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim'); 
        $this->form_validation->set_rules('email', 'Email', 'required|trim'); 

        $this->data['info'] = $this->Contact_model->get_info($id);
        // print_r($this->data['info']); exit;


        if ($this->form_validation->run() == true){

            $form_data = array(
                'title' => $this->input->post('title'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'display_home' => $this->input->post('display_home'),
                'status' => $this->input->post('status')
            );

            // print_r($form_data); exit;
            if($this->Common_model->edit('contact', $id, 'id', $form_data)){
                $this->session->set_flashdata('success', 'Information update successfully.');
                redirect('admin/contact/all');
            }
        }

        $this->data['meta_title'] = 'Edit contact';
        $this->data['subview'] = 'contact/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }


	public function add(){
		 $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim'); 
        $this->form_validation->set_rules('email', 'Email', 'required|trim');      

        if ($this->form_validation->run() == true){

            $form_data = array(
               'title' => $this->input->post('title'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'display_home' => $this->input->post('display_home'),
                'status' => 1
            );

           
            // print_r($form_data); exit;

            if($this->Common_model->save('contact', $form_data)){                
                $this->session->set_flashdata('success', 'New contact insert successfully.');
               redirect("admin/contact/all");
            }
        }

		$this->data['meta_title'] = 'Add Contact';
		$this->data['subview'] = 'contact/add';
    	$this->load->view('backend/_layout_main', $this->data);
	}



    function delete($id) {
        $this->data['info'] = $this->Contact_model->delete($id);
        $this->session->set_flashdata('success', 'Information delete successfully.');
        redirect('admin/contact/all');
    }

}