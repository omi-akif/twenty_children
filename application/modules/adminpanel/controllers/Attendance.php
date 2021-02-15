<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends Backend_Controller {

	public function __construct(){
      parent::__construct();
      if (!$this->ion_auth->logged_in()):
         redirect('login');
      endif;

      $this->load->model('Common_model');
      $this->load->model('Attendance_model');
      $this->userSessID = $this->session->userdata('user_id');
      
      // Load another database
      $DayCare = $this->Common_model->get_user_details($this->userSessID);  
      $this->DC_DBName  = $DayCare->database_name;
      $this->DC_ID      = $DayCare->day_care_id;
      // $this->DBName = 'daycares_1';
      $this->Attendance_model->loadCustomerDatabase($this->DC_DBName);
   }

   public function index(){
      redirect('adminpanel/attendance/all');
   }

   public function all(){      
      $this->data['results'] = $this->Attendance_model->get_data($this->DC_ID);
      
      // Load View
      $this->data['meta_title'] = 'All Attendance';
      $this->data['subview'] = 'attendance/all';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function today(){      
      $this->data['results'] = $this->Attendance_model->get_today_attendance($this->DC_ID);
      
      // Load View
      $this->data['meta_title'] = 'Today Attendance';
      $this->data['subview'] = 'attendance/today';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function report(){   
      // Validation
      $this->form_validation->set_rules('members_id', 'select member', 'required|trim');     
      $this->form_validation->set_rules('date_start', 'date start', 'required|trim');     
      $this->form_validation->set_rules('date_end', 'date end', 'required|trim');

      $this->data['results'] = 0;
      $this->data['info'] = 0;     

      if ($this->form_validation->run() == true){
         $member_id  = $this->input->post('members_id');
         $date_start = $this->input->post('date_start');
         $date_end   = $this->input->post('date_end');

         // Results
         $this->data['results'] = $this->Attendance_model->get_report($this->DC_ID, $member_id, $date_start, $date_end);
         // print_r($this->data['results']); exit;
      }

      // Dropdown
      $this->data['members'] = $this->Attendance_model->get_member_staff($this->DC_ID); 
      
      // Load View
      $this->data['meta_title'] = 'Attendance Report';
      $this->data['subview'] = 'attendance/report';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function add(){
      // Validation
      $this->form_validation->set_rules('members_id', 'select member', 'required|trim');     
      $this->form_validation->set_rules('time', 'date and time', 'required|trim');     

      // Validate and Input
      if ($this->form_validation->run() == true){

         $form_data = array(
            'members_id'   => $this->input->post('members_id'),
            'time'         => $this->input->post('time'),
            'day_cares_id' => $this->DC_ID,
            'created'      => date('Y-m-d H:i:s')
            );
         
         // print_r($form_data); exit;

         if($this->Attendance_model->save_other_db('attendances', $form_data)){                
            $this->session->set_flashdata('success', 'New data insert successfully.');
            redirect("adminpanel/attendance/all");
         }
      }

      // Dropdown
      $this->data['members'] = $this->Attendance_model->get_member_staff($this->DC_ID); 

      // view
      $this->data['meta_title'] = 'Add Attendance';
      $this->data['subview'] = 'attendance/add';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function logfileupload(){
      // Validation
      $this->form_validation->set_rules('logfile', 'select member', 'required|trim');   

      if ($this->form_validation->run() == true){
         $member_id  = $this->input->post('members_id');
         $date_start = $this->input->post('date_start');
         $date_end   = $this->input->post('date_end');

         // Results
         $this->data['results'] = $this->Attendance_model->get_report($this->DC_ID, $member_id, $date_start, $date_end);
         // print_r($this->data['results']); exit;
      }
      $this->data['results'] = $this->Attendance_model->get_today_attendance($this->DC_ID);
      
      // Load View
      $this->data['meta_title'] = 'Attendance File Upload';
      $this->data['subview'] = 'attendance/fileupload';
      $this->load->view('backend/_layout_main', $this->data);
   }

   // public function edit($id){
   //    $this->form_validation->set_rules('child_name', 'name', 'required|trim');     
   //    $this->data['info'] = $this->Attendance_model->get_info($id);
   //    // print_r($this->data['info']); exit;

   //    if ($this->form_validation->run() == true){

   //       $form_data = array(
   //          'child_name'   => $this->input->post('child_name'),
   //          'phone'        => $this->input->post('phone'),
   //          );

   //       // print_r($form_data); exit;
   //       if($this->Attendance_model->edit_otherdb('members', $id, 'id', $form_data)){
   //          $this->session->set_flashdata('success', 'Information update successfully.');
   //          redirect('adminpanel/attendance/all');
   //       }
   //    }

   //    // Load View
   //    $this->data['meta_title'] = 'Edit Attendance';
   //    $this->data['subview'] = 'attendance/edit';
   //    $this->load->view('backend/_layout_main', $this->data);
   // }

}