<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends Backend_Controller {

	public function __construct(){
      parent::__construct();
      if (!$this->ion_auth->logged_in()):
         redirect('login');
      endif;

      $this->load->model('Common_model');
      $this->load->model('Doctors_model');
      $this->userSessID = $this->session->userdata('user_id');
   }

   public function index(){
      if(!$this->ion_auth->is_admin()){     
         redirect('adminpanel/dashboard');
      }

      $this->data['results'] = $this->Doctors_model->get_doctors(); 
      // print_r($this->data['results']); exit;

      //Load page
      $this->data['meta_title'] = 'All Doctor List';
      $this->data['subview'] = 'doctors/index';
      $this->load->view('backend/_layout_main', $this->data);
      // redirect('adminpanel/news/all');
   }

   public function add(){
      // Validation
      $this->form_validation->set_rules('institute_name', 'institute name', 'required|trim');
      $this->form_validation->set_rules('doctor_name', 'doctor name', 'required|trim');

      // Validate and Input      
      if ($this->form_validation->run() == true){
         $form_data = array(
            'institute_name'  => $this->input->post('institute_name'),
            'doctor_name'  => $this->input->post('doctor_name'),            
            'division_id' => $this->input->post('division_id'),
            'district_id' => $this->input->post('district_id'),
            'upazila_id' => $this->input->post('upazila_id'),
            'phone' => $this->input->post('phone'),
            );

         // print_r($form_data); exit;
         if($this->Common_model->save('doctors', $form_data)){                 
            $this->session->set_flashdata('success', 'Information insert successfully.');
            redirect('adminpanel/doctors');        
         }
      }

      //Dropdown List
      $this->data['division'] = $this->Common_model->get_division();

      // Load View
      $this->data['meta_title'] = 'Add Doctor';
      $this->data['subview'] = 'doctors/add';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function edit($id){
      // Find my daycare
      // $DayCare = $this->Common_model->get_user_details($this->userSessID);  

      // if($id != $DayCare->day_care_id){
      //    redirect('adminpanel/dashboard');
      // }

      $this->data['info'] = $this->Doctors_model->get_info_doctor($id);
      // print_r($this->data['info']); exit;

      // Validation
      $this->form_validation->set_rules('institute_name', 'institute name', 'required|trim');
      $this->form_validation->set_rules('doctor_name', 'doctor name', 'required|trim');

      // Validate and Input      
      if ($this->form_validation->run() == true){
         $form_data = array(
            'institute_name'  => $this->input->post('institute_name'),
            'doctor_name'  => $this->input->post('doctor_name'),            
            'division_id' => $this->input->post('division_id'),
            'district_id' => $this->input->post('district_id'),
            'upazila_id' => $this->input->post('upazila_id'),
            'phone' => $this->input->post('phone'),
            );

         // print_r($form_data); exit;
         if($this->Common_model->edit('doctors', $id, 'id', $form_data)){
            $this->session->set_flashdata('success', 'Information update successfully.');
            redirect('adminpanel/doctors');        
         }
      }

      //Dropdown List
      $this->data['division'] = $this->Common_model->get_division();
      $this->data['district'] = $this->Common_model->get_district();
      $this->data['upazila'] = $this->Common_model->get_upazila_thana();

      // Load View
      $this->data['meta_title'] = 'Edit Doctor';
      $this->data['subview'] = 'doctors/edit';
      $this->load->view('backend/_layout_main', $this->data);
   }




}