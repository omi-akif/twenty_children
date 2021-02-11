<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Day_care extends Backend_Controller {

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

      $this->data['results'] = $this->Common_model->get_data('day_cares'); 
      // print_r($this->data['results']); exit;

      //Load page
      $this->data['meta_title'] = 'All Day Care Center';
      $this->data['subview'] = 'day_care/index';
      $this->load->view('backend/_layout_main', $this->data);
      // redirect('adminpanel/news/all');
   }

   public function my_day_care_center(){
      if(!$this->ion_auth->in_group(array('dc_admin'))){
         redirect('adminpanel/dashboard');
      }

      // Find my daycare
      $DayCare = $this->Common_model->get_user_details($this->userSessID);  
      // print_r($DayCare); exit;

      // Day Care Info
      $this->data['info'] = $this->Day_care_model->get_info($DayCare->day_care_id);

      // $this->data['results'] = $this->Common_model->get_data('day_cares'); 
      // print_r($this->data['results']); exit;

      //Load page
      $this->data['meta_title'] = 'My Day Care Center';
      $this->data['subview'] = 'day_care/my_day_care_center';
      $this->load->view('backend/_layout_main', $this->data);
      // redirect('adminpanel/news/all');
   }

   public function edit($id){
      // Find my daycare
      $DayCare = $this->Common_model->get_user_details($this->userSessID);  

      if($id != $DayCare->day_care_id){
         redirect('adminpanel/dashboard');
      }

      $this->data['info'] = $this->Day_care_model->get_info($id);
      // print_r($this->data['info']); exit;

      // Validation
      $this->form_validation->set_rules('description', 'description', 'trim');
      $this->form_validation->set_rules('address', 'address', 'required|trim');
      $this->form_validation->set_rules('mobile_no', 'mobile no', 'required|trim');

      // Validate and Input      
      if ($this->form_validation->run() == true){

         $form_data = array(
            'description'  => $this->input->post('description'),
            'officer_name' => $this->input->post('officer_name'),
            'address'      => $this->input->post('address'),
            'mobile_no'    => $this->input->post('mobile_no'),
            'phone'        => $this->input->post('phone'),
            'email'        => $this->input->post('email'),
            'latitude'     => $this->input->post('latitude'),
            'longitude'    => $this->input->post('longitude')
            );

         // print_r($form_data); exit;
         if($this->Common_model->edit('day_cares', $id, 'id', $form_data)){
            $this->session->set_flashdata('success', 'Information update successfully.');

            if($this->ion_auth->is_admin()){
               redirect('adminpanel/day_care');
            }else if($this->ion_auth->in_group(array('dc_admin'))){
               redirect('adminpanel/day_care/my_day_care_center');
            }
         }
      }

      // Load View
      $this->data['meta_title'] = 'Edit Day Care';
      $this->data['subview'] = 'day_care/edit';
      $this->load->view('backend/_layout_main', $this->data);
   }

   function dc_login($dcID){

      $info = $this->Common_model->get_user_info($dcID);
      // printr($info);
      // echo $info->email;
      // exit;  

      $array = array(
         '__ci_last_regenerate' => time(),
         'identity' => $info->username,
         'email' => $info->email,
         'user_id' => $info->id,
         'first_name' => $info->first_name,
         'last_name' => $info->last_name,
         'old_last_login' => $info->last_login,
         'last_check' => '1492180858',
         'dc_id' => $info->day_care_id,
         'dc_name' => $info->title
         );
      $this->session->set_userdata($array);
      redirect('adminpanel/dashboard');
   }

   function admin_login(){

      if(!$this->session->userdata('is_superadmin')){
         $this->session->sess_destroy();
         redirect('adminpanel/login');
      }

      $info = $this->Common_model->get_row('users', 4);
      $array = array(
         '__ci_last_regenerate' => time(),
         'identity' => $info->username,
         'email' => $info->email,
         'user_id' => $info->id,
         'first_name' => $info->first_name,
         'last_name' => $info->last_name,
         'old_last_login' => $info->last_login,
         'last_check' => '1492180858',
         'dc_id' => '',
         'dc_name' => ''
         );
      $this->session->set_userdata($array);
      redirect('adminpanel/dashboard');      
   }


   function delete($id) {
      $this->data['info'] = $this->Notices_model->delete($id);
      $this->session->set_flashdata('success', 'Information delete successfully.');
      redirect('adminpanel/notices/all');
   }

}