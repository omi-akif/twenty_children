<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Day_care_others extends Backend_Controller {

	public function __construct(){
      parent::__construct();
      if (!$this->ion_auth->logged_in()):
         redirect('login');
      endif;

      $this->load->model('Common_model');
      $this->load->model('Day_care_model');
      $this->userSessID = $this->session->userdata('user_id');
   }

   public function index(){
      if(!$this->ion_auth->is_admin()){     
         redirect('adminpanel/dashboard');
      }

      $this->data['results'] = $this->Common_model->get_daycare_others(); 
      // print_r($this->data['results']); exit;

      //Load page
      $this->data['meta_title'] = 'All Day Care Other';
      $this->data['subview'] = 'day_care_others/index';
      $this->load->view('backend/_layout_main', $this->data);
      // redirect('adminpanel/news/all');
   }

   public function add(){
      // Validation
      $this->form_validation->set_rules('title', 'daycare name', 'required|trim');
      $this->form_validation->set_rules('address', 'address', 'required|trim');
      $this->form_validation->set_rules('owner_id', 'select organization', 'required|trim');

      // Validate and Input      
      if ($this->form_validation->run() == true){
         $form_data = array(
            'owner_id'  => $this->input->post('owner_id'),
            'title'  => $this->input->post('title'),
            'address' => $this->input->post('address'),
            'division_id' => $this->input->post('division_id'),
            'district_id' => $this->input->post('district_id'),
            'upazila_id' => $this->input->post('upazila_id'),
            'officer_name' => $this->input->post('officer_name'),
            'officer_designation' => $this->input->post('officer_designation'),
            'phone' => $this->input->post('phone'),
            'type_id' => $this->input->post('type_id'),
            );

         // print_r($form_data); exit;
         if($this->Common_model->save('day_cares_others', $form_data)){                 
            $this->session->set_flashdata('success', 'Information insert successfully.');
            redirect('adminpanel/day_care_others');        
         }
      }

      //Dropdown List
      $this->data['division'] = $this->Common_model->get_division();
      $this->data['organization'] = $this->Common_model->get_organization();
      $this->data['daycare_type'] = $this->Common_model->get_day_care_type();

      // Load View
      $this->data['meta_title'] = 'Add Daycare Center';
      $this->data['subview'] = 'day_care_others/add';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function edit($id){
      // Find my daycare
      // $DayCare = $this->Common_model->get_user_details($this->userSessID);  

      // if($id != $DayCare->day_care_id){
      //    redirect('adminpanel/dashboard');
      // }

      $this->data['info'] = $this->Day_care_model->get_info_dc_other($id);
      // print_r($this->data['info']); exit;

      // Validation
      $this->form_validation->set_rules('title', 'daycare name', 'required|trim');
      $this->form_validation->set_rules('address', 'address', 'required|trim');
      $this->form_validation->set_rules('owner_id', 'select organization', 'required|trim');

      // Validate and Input      
      if ($this->form_validation->run() == true){
         $form_data = array(
            'owner_id'  => $this->input->post('owner_id'),
            'title'  => $this->input->post('title'),
            'address' => $this->input->post('address'),
            'division_id' => $this->input->post('division_id'),
            'district_id' => $this->input->post('district_id'),
            'upazila_id' => $this->input->post('upazila_id'),
            'officer_name' => $this->input->post('officer_name'),
            'officer_designation' => $this->input->post('officer_designation'),
            'phone' => $this->input->post('phone'),
            'type_id' => $this->input->post('type_id'),
            );

         // print_r($form_data); exit;
         if($this->Common_model->edit('day_cares_others', $id, 'id', $form_data)){
            $this->session->set_flashdata('success', 'Information update successfully.');
            redirect('adminpanel/day_care_others');        
         }
      }

      //Dropdown List
      $this->data['division'] = $this->Common_model->get_division();
      $this->data['district'] = $this->Common_model->get_district();
      $this->data['upazila'] = $this->Common_model->get_upazila_thana();
      $this->data['organization'] = $this->Common_model->get_organization();
      $this->data['daycare_type'] = $this->Common_model->get_day_care_type();

      // Load View
      $this->data['meta_title'] = 'Edit Daycare Center';
      $this->data['subview'] = 'day_care_others/edit';
      $this->load->view('backend/_layout_main', $this->data);
   }




}