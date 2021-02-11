<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends Backend_Controller {

	var $img_path;

	public function __construct(){
      parent::__construct();
      if (!$this->ion_auth->logged_in()):
         redirect('login');
      endif;

      $this->load->model('Common_model');
      $this->load->model('Event_model');
      $this->img_path = realpath(APPPATH . '../assets/images/event_img');
      $this->userSessID = $this->session->userdata('user_id');

      // Load another database
      $DayCare = $this->Common_model->get_user_details($this->userSessID);  
      $this->DC_DBName  = $DayCare->database_name;
      $this->DC_ID      = $DayCare->day_care_id;
      // $this->DBName = 'daycares_1';
      $this->Event_model->loadCustomerDatabase($this->DC_DBName);
   }

   public function index(){
      redirect('adminpanel/event/all');
   }

   public function all(){
      $this->data['results'] = $this->Event_model->get_data(); 
      // print_r($this->data['results']); exit;
      
      //Load page
      $this->data['meta_title'] = 'All Event';
      $this->data['subview'] = 'event/all';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function details($id){
      $this->data['info'] = $this->Event_model->get_info($id);

      $this->data['meta_title'] = 'Event Details';
      $this->data['subview'] = 'event/details';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function edit($id){
      $this->form_validation->set_rules('title', 'event title', 'required|trim');
      $this->form_validation->set_rules('description', 'event details', 'required|trim');      
      $this->form_validation->set_rules('date', 'Event datetime', 'required|trim');


      $this->data['info'] = $this->Event_model->get_info($id);
      // print_r($this->data['info']); exit;

      if(@$_FILES['userfile']['size'] > 0){
         $this->form_validation->set_rules('userfile', '', 'callback_file_check');
      }

      if ($this->form_validation->run() == true){
         if($_FILES['userfile']['size'] > 0){

            // $this->Event_model->delete_img($id);

            $new_file_name = $_FILES["userfile"]['name'];
            $config['allowed_types']= 'jpg|png|jpeg|gif';
            $config['upload_path']  = $this->img_path;
            $config['file_name']    = $new_file_name;
            $config['max_size']     = 1000;

            $this->load->library('upload', $config);
            //upload file to directory
            if($this->upload->do_upload()){
               $uploadData = $this->upload->data();
               $uploadedFile = $uploadData['file_name'];
               // print_r($uploadedFile);
               $this->data['message'] = 'File has been uploaded successfully.';
            }else{
               $this->data['message'] = $this->upload->display_errors();
            }
         }

         $form_data = array(
            'title'        => $this->input->post('title'),
            'date'         => $this->input->post('date'),
            'location'     => $this->input->post('location'),
            'description'  => $this->input->post('description'),
            'status'       => $this->input->post('status')
            );

            // echo "<pre>";
            //  print_r($form_data);
            //  exit();

         if($_FILES['userfile']['size'] > 0){
            $form_data['feature_image'] = $uploadedFile;
         }

         // print_r($form_data); exit;
         if($this->Event_model->edit_otherdb('events', $id, 'id', $form_data)){
            $this->session->set_flashdata('success', 'Information update successfully.');
            redirect('adminpanel/event/all');
         }
      }

      //Load View
      $this->data['meta_title'] = 'Edit Event';
      $this->data['subview'] = 'event/edit';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function add(){

      $this->form_validation->set_rules('title', 'event title', 'required|trim');
      $this->form_validation->set_rules('description', 'event details', 'required|trim');      
      $this->form_validation->set_rules('date', 'Event datetime', 'required|trim');
      // $this->form_validation->set_rules('meta_keys', 'meta keywords', 'max_length[255]|trim');       

      if(@$_FILES['userfile']['size'] > 0){
         $this->form_validation->set_rules('userfile', '', 'callback_file_check');
      }

      if ($this->form_validation->run() == true){

         if($_FILES['userfile']['size'] > 0){
            $new_file_name = $_FILES["userfile"]['name'];

            $config['allowed_types']= 'jpg|png|jpeg|gif';
            $config['upload_path']  = $this->img_path;
            $config['file_name']    = $new_file_name;
            $config['max_size']     = 1000;

            $this->load->library('upload', $config);
            //upload file to directory
            if($this->upload->do_upload()){
               $uploadData = $this->upload->data();
               $uploadedFile = $uploadData['file_name'];
               // print_r($uploadedFile);
               $this->data['message'] = 'File has been uploaded successfully.';
            }else{
               $this->data['message'] = $this->upload->display_errors();
            }
         }

         // $slug_data = array('event_name_en' => $this->input->post('event_name_en'));

         $form_data = array(
            'title'        => $this->input->post('title'),
            'date'         => $this->input->post('date'),
            'location'     => $this->input->post('location'),
            'description'  => $this->input->post('description'),
            'status'       => $this->input->post('status'),
            'day_cares_id' => $this->DC_ID
            );

         if($_FILES['userfile']['size'] > 0){
            $form_data['feature_image'] = $uploadedFile;
         }
         // print_r($form_data); exit;

         if($this->Event_model->save_other_db('events', $form_data)){                
            $this->session->set_flashdata('success', 'New event insert successfully.');
            redirect("adminpanel/event/all");
         }
      }

      // $this->data['category'] = $this->Common_model->get_event_category(); 

      // Load View
      $this->data['meta_title'] = 'Add Event';
      $this->data['subview'] = 'event/add';
      $this->load->view('backend/_layout_main', $this->data);
   }

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
      $this->data['info'] = $this->Event_model->delete($id);
      $this->session->set_flashdata('success', 'Information delete successfully.');
      redirect('adminpanel/event/all');
   }

}