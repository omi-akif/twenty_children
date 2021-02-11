<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends Backend_Controller {

	var $img_path;

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        $this->load->model('Category_model');

        $config = array(
            'field' => 'slug',
            'title' => 'name',
            'table' => 'category',
            'id' => 'id',
        );
        $this->load->library('slug', $config);
  
    }

	public function index(){
        redirect('admin/category/all');
	}

    public function all(){
        $this->data['results'] = $this->Common_model->get_data('category'); 
        // print_r($this->data['results']); exit;
        //Load page
        $this->data['meta_title'] = 'All Category';
        $this->data['subview'] = 'category/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function edit($id){

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('slug', 'Slug', 'required|trim');

        $this->data['info'] = $this->Category_model->get_info($id);
        


        if ($this->form_validation->run() == true){

            $slug_data  = array('name' => $this->input->post('name'));
            $p_slug     = $this->input->post('slug');

            $form_data = array(
                'title' => $this->input->post('title'),
                'cat_name' => $this->input->post('name'),
                'slug' => $this->slug->create_uri($slug_data,$id),
                'status' => $this->input->post('status')
            );

            $form_data2 = array(
                'category' => $this->slug->create_uri($slug_data,$id)
            );


            // print_r($form_data); exit;
            if($this->Common_model->edit('category', $id, 'id', $form_data)){

                $this->Common_model->edit('product', $p_slug, 'category', $form_data2);

                $this->session->set_flashdata('success', 'Information update successfully.');
                redirect('admin/category/all');
            }
        }

        $this->data['meta_title'] = 'Edit Category';
        $this->data['subview'] = 'category/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }


	public function add(){
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        

        if ($this->form_validation->run() == true){

            $slug_data = array('name' => $this->input->post('name'));

            $form_data = array(
                'title' => $this->input->post('title'),
                'cat_name' => $this->input->post('name'),
                'slug' => $this->slug->create_uri($slug_data),
                'status' => 1
            );

           
            // print_r($form_data); exit;

            if($this->Common_model->save('category', $form_data)){                
                $this->session->set_flashdata('success', 'New category insert successfully.');
               redirect("admin/category/all");
            }
        }

		$this->data['meta_title'] = 'Add Category';
		$this->data['subview'] = 'category/add';
    	$this->load->view('backend/_layout_main', $this->data);
	}



    function delete($id) {
        $this->data['info'] = $this->Category_model->delete($id);
        $this->session->set_flashdata('success', 'Information delete successfully.');
        redirect('admin/category/all');
    }

}