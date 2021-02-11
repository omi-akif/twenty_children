<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budget extends Backend_Controller {

   public function __construct(){
      parent::__construct();
      if (!$this->ion_auth->logged_in()):
         redirect('login');
      endif;

      $this->load->model('Common_model');
      $this->load->model('Budget_model');
      $this->userSessID = $this->session->userdata('user_id');

      // Load another database
      $DayCare = $this->Common_model->get_user_details($this->userSessID);  
      $this->DC_DBName  = $DayCare->database_name;
      $this->DC_ID      = $DayCare->day_care_id;
      $this->DC_Title   = $DayCare->title;
      $this->DC_Officer = $DayCare->officer_name;
      $this->DC_Address = $DayCare->address;
      $this->Budget_model->loadCustomerDatabase($this->DC_DBName);
   }

   public function index(){
      redirect('adminpanel/budget/monthly_demand');
   }

   public function monthly_demand(){     
      
      $this->data['results'] = $this->Budget_model->get_data(1); 
      // print_r($this->data['results']); exit;

      //Load View
      $this->data['meta_title'] = 'Monthly Demand';
      $this->data['subview'] = 'budget/monthly_demand';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function monthly_demand_details($id){

      // $this->Budget_model->loadCustomerDatabase($this->DBName);
      $this->data['info'] = $this->Budget_model->get_budget($id);
      $this->data['item_results'] = $this->Budget_model->get_budget_item($id);

      //Load View
      $this->data['meta_title'] = 'Monthly Demand Details';
      $this->data['subview'] = 'budget/monthly_demand_details';
      $this->load->view('backend/_layout_main', $this->data);
   }


   public function monthly_demand_add(){
      $this->form_validation->set_rules('title', 'budget title', 'required|trim');

      if ($this->form_validation->run() == true){

         // echo '<pre>';
         // print_r($_POST); exit;

         $form_data = array(
            'title' => $this->input->post('title'),
            'day_cares_id' => $this->DC_ID,
            'budget_types_id' => 1,
            'description'  => $this->input->post('description'),
            'created'  => date('Y-m-d H:i:s')
            );

         if($this->Budget_model->save('budgets', $form_data)){
            $insert_id = $this->Budget_model->last_insert_id();
         
            for ($i=0; $i<sizeof($_POST['item_name']); $i++) { 
               $form_data2 = array(
                  'budgets_id'   => $insert_id,
                  'item_name'    => $_POST['item_name'][$i],
                  'item_count'   => $_POST['item_count'][$i], 
                  'created'      => date('Y-m-d H:i:s')
                  );
               $this->Budget_model->save('budget_items', $form_data2);
            }
            // echo '<pre>';
            // print_r($form_data2); exit;
         }

         $this->session->set_flashdata('success', 'Monthly budget data insert successfully.');
         redirect("adminpanel/budget/monthly_demand");         
      }

      // $this->data['category'] = $this->Common_model->get_event_category(); 

      // Load View
      $this->data['meta_title'] = 'Add Monthly Demand';
      $this->data['subview'] = 'budget/monthly_demand_add';
      $this->load->view('backend/_layout_main', $this->data);
   }


   public function advance_bill(){     
      
      $this->data['results'] = $this->Budget_model->get_data(2); 
      // print_r($this->data['results']); exit;

      //Load View
      $this->data['meta_title'] = 'Advance Bill';
      $this->data['subview'] = 'budget/advance_bill';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function advance_bill_details($id){

      $this->data['info'] = $this->Budget_model->get_budget($id);
      $this->data['item_results'] = $this->Budget_model->get_budget_item($id);

      //Load View
      $this->data['meta_title'] = 'Advance Bill Details';
      $this->data['subview'] = 'budget/advance_bill_details';
      $this->load->view('backend/_layout_main', $this->data);
   }


   public function advance_bill_add(){
      $this->form_validation->set_rules('title', 'bill title', 'required|trim');

      if ($this->form_validation->run() == true){

         $form_data = array(
            'title' => $this->input->post('title'),
            'day_cares_id' => $this->DC_ID,
            'budget_types_id' => 2,
            'description'  => $this->input->post('description'),
            'created'  => date('Y-m-d H:i:s')
            );

         if($this->Budget_model->save('budgets', $form_data)){
            $insert_id = $this->Budget_model->last_insert_id();
         
            for ($i=0; $i<sizeof($_POST['item_name']); $i++) { 
               $form_data2 = array(
                  'budgets_id'   => $insert_id,
                  'item_name'    => $_POST['item_name'][$i],
                  'amount'       => $_POST['amount'][$i], 
                  'created'      => date('Y-m-d H:i:s')
                  );
               $this->Budget_model->save('budget_items', $form_data2);
            }
            // echo '<pre>';
            // print_r($form_data2); exit;
         }

         $this->session->set_flashdata('success', 'Advance data insert successfully.');
         redirect("adminpanel/budget/advance_bill");         
      }
      // $this->data['category'] = $this->Common_model->get_event_category(); 

      // Load View
      $this->data['meta_title'] = 'Add Advance Bill';
      $this->data['subview'] = 'budget/advance_bill_add';
      $this->load->view('backend/_layout_main', $this->data);
   }



   // public function edit($id){

   //    $this->form_validation->set_rules('event_name_bn', 'Event name bn', 'required|trim');
   //    $this->form_validation->set_rules('event_name_en', 'Event name en', 'required|trim');
   //    $this->form_validation->set_rules('event_details_bn', 'Event Details bn', 'required|trim');
   //    $this->form_validation->set_rules('event_details_en', 'Event Details en', 'required|trim');
   //    $this->form_validation->set_rules('event_datetime', 'Event Datetime', 'required|trim'); 
   //    $this->form_validation->set_rules('slug', 'slug url', 'required|trim');


   //    $this->data['info'] = $this->Budget_model->get_info($id);
   //    // print_r($this->data['info']); exit;

   //    if ($this->form_validation->run() == true){

   //       $form_data = array(
   //          'event_name_bn' => $this->input->post('event_name_bn'),
   //          'event_name_en' => $this->input->post('event_name_en'),
   //          'event_category_id' => $this->input->post('event_category_id'),
   //          'event_details_bn' => $this->input->post('event_details_bn'),
   //          'event_details_en' => $this->input->post('event_details_en'),
   //          'event_datetime' => date_db_format($this->input->post('event_datetime')),
   //          );

   //          // echo "<pre>";
   //          //  print_r($form_data);
   //          //  exit();

   //       // print_r($form_data); exit;
   //       if($this->Common_model->edit('events', $id, 'id', $form_data)){
   //          $this->session->set_flashdata('success', 'Information update successfully.');
   //          redirect('adminpanel/event/all');
   //       }
   //    }

   //    $this->data['category'] = $this->Common_model->get_event_category();

   //    // Load View
   //    $this->data['meta_title'] = 'Edit Event';
   //    $this->data['subview'] = 'event/edit';
   //    $this->load->view('backend/_layout_main', $this->data);
   // }



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
      $this->data['info'] = $this->Budget_model->delete($id);
      $this->session->set_flashdata('success', 'Information delete successfully.');
      redirect('adminpanel/event/all');
   }

}