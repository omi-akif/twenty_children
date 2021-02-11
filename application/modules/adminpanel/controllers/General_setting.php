<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General_setting extends Backend_Controller {

	var $img_path;

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        $this->load->model('General_setting_model');

        $config = array(
            'field' => 'slug',
            'title' => 'name',
            'table' => 'gallery_category',
            'id' => 'id',
        );
        $this->load->library('slug', $config);
    }

    public function index(){
        redirect('adminpanel/general_setting/social_icon');
    }


    /******************************** Union *********************************/
    /************************************************************************/    
    public function union(){
        $this->data['results'] = $this->General_setting_model->get_union_list(); 
        // print_r($this->data['results']); exit;

        // Load page
        $this->data['meta_title'] = 'Union List';
        $this->data['subview'] = 'general_setting/union/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    /*************************** Upazila / Thana ****************************/
    /************************************************************************/    
    public function upazila_thana($offset=0){
        $limit = 25;

        $results = $this->General_setting_model->get_upa_tha_list($limit, $offset); 
        // print_r($this->data['results']); exit;\

        //Results
        $this->data['results'] = $results['rows'];
        $this->data['total_rows'] = $results['num_rows'];

        //pagination
        $this->data['pagination'] = create_pagination('adminpanel/general_setting/upazila_thana/', $this->data['total_rows'], $limit, 4, $full_tag_wrap = true);        

        // Load page
        $this->data['meta_title'] = 'Upazila List';
        $this->data['subview'] = 'general_setting/upazila/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    /****************************** District ********************************/
    /************************************************************************/    
    public function district(){
        $this->data['results'] = $this->General_setting_model->get_district_list(); 
        // print_r($this->data['results']); exit;

        // Load page
        $this->data['meta_title'] = 'District List';
        $this->data['subview'] = 'general_setting/district/all';
        $this->load->view('backend/_layout_main', $this->data);
    }



    /******************************** Division ******************************/
    /************************************************************************/    
    public function division(){
        $this->data['results'] = $this->Common_model->get_data('divisions'); 
        // print_r($this->data['results']); exit;

        // Load page
        $this->data['meta_title'] = 'Division List';
        $this->data['subview'] = 'general_setting/division/all';
        $this->load->view('backend/_layout_main', $this->data);
    }


/******************************** Batch ******************************/
    /************************************************************************/    
    public function batch(){
        $this->data['results'] = $this->Common_model->get_data('batch'); 
        // print_r($this->data['results']); exit;

        // Load page
        $this->data['meta_title'] = 'Batch List';
        $this->data['subview'] = 'general_setting/batch/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

/******************************** Designation ******************************/
    /************************************************************************/    
    public function designation(){
        $this->data['results'] = $this->Common_model->get_data('designations'); 
        // print_r($this->data['results']); exit;

        // Load page
        $this->data['meta_title'] = 'Designation List';
        $this->data['subview'] = 'general_setting/designation/all';
        $this->load->view('backend/_layout_main', $this->data);
    }



        public function designation_edit($id){
        // CI Validation
        $this->form_validation->set_rules('desig_name_bn', 'Designation Name Bn', 'required|trim');
        $this->form_validation->set_rules('desig_name_en', 'Designation Name En', 'required|trim');         

        // Validate and insert data
        if ($this->form_validation->run() == true){
            $form_data = array(
               'desig_name_bn' => $this->input->post('desig_name_bn'),
               'desig_name_en' => $this->input->post('desig_name_en')
                );

            // print_r($form_data); exit;
            if($this->Common_model->edit('designations', $id, 'id', $form_data)){
                $this->session->set_flashdata('success', 'Information update successfully.');
                redirect('adminpanel/general_setting/designation');
            }
        }

        // Result
        $this->data['info'] = $this->General_setting_model->get_info_designation($id);
        // print_r($this->data['info']); exit;

        // Load Page
        $this->data['meta_title'] = 'Edit Designation';
        $this->data['subview'] = 'general_setting/designation/edit';
        $this->load->view('backend/_layout_main', $this->data);
        }

        public function designation_add(){

        // CI Validation
        $this->form_validation->set_rules('desig_name_bn', 'Designation Name Bn', 'required|trim');
        $this->form_validation->set_rules('desig_name_en', 'Designation Name En', 'required|trim');

        // Validate and insert data
        if ($this->form_validation->run() == true){
            $form_data = array(
                'desig_name_bn' => $this->input->post('desig_name_bn'),
                'desig_name_en' => $this->input->post('desig_name_en')
                // 'status' => 1
                );
            // print_r($form_data); exit;

            if($this->Common_model->save('designations', $form_data)){                
                $this->session->set_flashdata('success', 'New item insert successfully');
                redirect("adminpanel/general_setting/designation");
            }
        }

        // Load Page
        $this->data['meta_title'] = 'Add Designation';
        $this->data['subview'] = 'general_setting/designation/add';
        $this->load->view('backend/_layout_main', $this->data);
    }


    function designation_delete($id) {
        if($this->General_setting_model->get_designation_delete($id)){
            $this->session->set_flashdata('success', 'Information delete successfully');
            redirect('adminpanel/general_setting/designation');
        }else{
            $this->session->set_flashdata('warning', 'Something is wrong!');
            redirect('adminpanel/general_setting/designation');
        }
    }





    /****************************** Social Icon *****************************/
    /************************************************************************/

    public function social_icon(){
        $this->data['results'] = $this->Common_model->get_data('social'); 
        // print_r($this->data['results']); exit;

        //Load page
        $this->data['meta_title'] = 'Social Icon List';
        $this->data['subview'] = 'general_setting/social_icon/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function social_icon_edit($id){
        // CI Validation
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');         

        // Validate and insert data
        if ($this->form_validation->run() == true){
            $form_data = array(
                'icon' => $this->input->post('icon'),
                'url' => $this->input->post('url'),
                'status' => $this->input->post('status')
                );

            // print_r($form_data); exit;
            if($this->Common_model->edit('social', $id, 'id', $form_data)){
                $this->session->set_flashdata('success', 'Information update successfully.');
                redirect('adminpanel/general_setting/social_icon');
            }
        }

        // Result
        $this->data['info'] = $this->General_setting_model->get_info_social_icon($id);
        // print_r($this->data['info']); exit;

        // Load Page
        $this->data['meta_title'] = 'Edit Social Icon';
        $this->data['subview'] = 'general_setting/social_icon/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function social_icon_add(){
        // CI Validation
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');

        // Validate and insert data
        if ($this->form_validation->run() == true){
            $form_data = array(
                'icon' => $this->input->post('icon'),
                'url' => $this->input->post('url'),
                'status' => 1
                );
            // print_r($form_data); exit;

            if($this->Common_model->save('social', $form_data)){                
                $this->session->set_flashdata('success', 'New item insert successfully');
                redirect("adminpanel/general_setting/social_icon");
            }
        }

        // Load Page
        $this->data['meta_title'] = 'Add Social Icon';
        $this->data['subview'] = 'general_setting/social_icon/add';
        $this->load->view('backend/_layout_main', $this->data);
    }

    function social_icon_delete($id) {
        if($this->General_setting_model->get_social_icon_delete($id)){
            $this->session->set_flashdata('success', 'Information delete successfully');
            redirect('adminpanel/general_setting/social_icon');
        }else{
            $this->session->set_flashdata('warning', 'Something is wrong!');
            redirect('adminpanel/general_setting/social_icon');
        }
    }


    public function batch_add(){

        // CI Validation
        $this->form_validation->set_rules('batch_name_bn', 'Batch Name Bn', 'required|trim');
        $this->form_validation->set_rules('batch_name_en', 'Batch Name En', 'required|trim');

        // Validate and insert data
        if ($this->form_validation->run() == true){
            $form_data = array(
                'batch_name_bn' => $this->input->post('batch_name_bn'),
                'batch_name_en' => $this->input->post('batch_name_en')
                // 'status' => 1
                );
            // print_r($form_data); exit;

            if($this->Common_model->save('batch', $form_data)){                
                $this->session->set_flashdata('success', 'New item insert successfully');
                redirect("adminpanel/general_setting/batch");
            }
        }

        // Load Page
        $this->data['meta_title'] = 'Add Batch';
        $this->data['subview'] = 'general_setting/batch/add';
        $this->load->view('backend/_layout_main', $this->data);
    }


        public function batch_edit($id){
        // CI Validation
        $this->form_validation->set_rules('batch_name_bn', 'Batch Name Bn', 'required|trim');
        $this->form_validation->set_rules('batch_name_en', 'Batch Name En', 'required|trim');         

        // Validate and insert data
        if ($this->form_validation->run() == true){
            $form_data = array(
                'batch_name_bn' => $this->input->post('batch_name_bn'),
                'batch_name_en' => $this->input->post('batch_name_en')
                );

            // print_r($form_data); exit;
            if($this->Common_model->edit('batch', $id, 'id', $form_data)){
                $this->session->set_flashdata('success', 'Information update successfully.');
                redirect('adminpanel/general_setting/batch');
            }
        }

        // Result
        $this->data['info'] = $this->General_setting_model->get_info_batch($id);
        // print_r($this->data['info']); exit;

        // Load Page
        $this->data['meta_title'] = 'Edit Batch';
        $this->data['subview'] = 'general_setting/batch/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }

    function batch_delete($id) {
        if($this->General_setting_model->get_batch_delete($id)){
            $this->session->set_flashdata('success', 'Information delete successfully');
            redirect('adminpanel/general_setting/batch');
        }else{
            $this->session->set_flashdata('warning', 'Something is wrong!');
            redirect('adminpanel/general_setting/batch');
        }
    }


    public function gallery_category(){
        $this->data['results'] = $this->Common_model->get_data('gallery_category'); 
        // print_r($this->data['results']); exit;

        // Load page
        $this->data['meta_title'] = 'Gallery Category List';
        $this->data['subview'] = 'general_setting/gallery_category/all';
        $this->load->view('backend/_layout_main', $this->data);
    }



    public function gallery_category_add(){
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
               redirect("adminpanel/general_setting//gallery_category");
            }
        }

        $this->data['meta_title'] = 'Add Gallery Category';
        $this->data['subview'] = 'general_setting/gallery_category/add';
        $this->load->view('backend/_layout_main', $this->data);
    }


    public function gallery_category_edit($id){

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('slug', 'Slug', 'required|trim');

        $this->data['info'] = $this->General_setting_model->get_gallery_category($id);
        


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
                redirect('adminpanel/general_setting//gallery_category');
            }
        }

        $this->data['meta_title'] = 'Edit Gallery Category';
        $this->data['subview'] = 'general_setting/gallery_category/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }

        function gallery_category_delete($id) {
        if($this->General_setting_model->get_gallery_category_delete($id)){
            $this->session->set_flashdata('success', 'Information delete successfully');
            redirect('adminpanel/general_setting//gallery_category');
        }else{
            $this->session->set_flashdata('warning', 'Something is wrong!');
            redirect('adminpanel/general_setting//gallery_category');
        }
    }



}