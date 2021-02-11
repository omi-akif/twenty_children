<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryCategory extends Backend_Controller {

    var $img_path;

    public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        $this->load->model('GalleryCategory_model');

        $config = array(
            'field' => 'slug',
            'title' => 'name',
            'table' => 'gallery_category',
            'id' => 'id',
        );
        $this->load->library('slug', $config);
  
    }

    public function index(){
        redirect('adminpanel/gallerycategory/all');
    }

    public function all(){
        $this->data['results'] = $this->Common_model->get_data('gallery_category'); 
        // print_r($this->data['results']); exit;
        //Load page
        $this->data['meta_title'] = 'All Gallery Category';
        $this->data['subview'] = 'gallery_category/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function edit($id){

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('slug', 'Slug', 'required|trim');

        $this->data['info'] = $this->GalleryCategory_model->get_info($id);
        


        if ($this->form_validation->run() == true){

            $slug_data  = array('name' => $this->input->post('name'));
            $p_slug     = $this->input->post('slug');

            $form_data = array(
                'cat_name' => $this->input->post('name'),
                'slug' => $this->slug->create_uri($slug_data),
                'status' => $this->input->post('status')
            );

            $form_data2 = array(
                'category_id' => $this->slug->create_uri($slug_data)
            );


            // print_r($form_data); exit;
            if($this->Common_model->edit('gallery_category', $id, 'id', $form_data)){

                $this->Common_model->edit('gallery', $p_slug, 'category_id', $form_data2);

                $this->session->set_flashdata('success', 'Information update successfully.');
                redirect('adminpanel/gallerycategory/all');
            }
        }

        $this->data['meta_title'] = 'Edit Gallery Category';
        $this->data['subview'] = 'gallery_category/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }


    public function add(){
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        

        if ($this->form_validation->run() == true){

            $slug_data = array('name' => $this->input->post('name'));

            $form_data = array(
                'cat_name' => $this->input->post('name'),
                'slug' => $this->slug->create_uri($slug_data),
                'status' => 1
            );

           
            // print_r($form_data); exit;

            if($this->Common_model->save('gallery_category', $form_data)){                
                $this->session->set_flashdata('success', 'New gallery_category insert successfully.');
               redirect("adminpanel/gallerycategory/all");
            }
        }

        $this->data['meta_title'] = 'Add Gallery Category';
        $this->data['subview'] = 'gallery_category/add';
        $this->load->view('backend/_layout_main', $this->data);
    }



    function delete($id) {
        $this->data['info'] = $this->GalleryCategory_model->delete($id);
        $this->session->set_flashdata('success', 'Information delete successfully.');
        redirect('adminpanel/gallerycategory/all');
    }

}