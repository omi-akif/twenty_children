<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends Backend_Controller {

	var $img_path;

	public function __construct(){
      parent::__construct();
      if (!$this->ion_auth->logged_in()):
         redirect('login');
      endif;

      $this->load->model('Common_model');
      $this->load->model('Staff_model');
      $this->img_path = realpath(APPPATH . '../assets/images/staff_img');
      $this->userSessID = $this->session->userdata('user_id');
      
      // Load another database
      $DayCare = $this->Common_model->get_user_details($this->userSessID);  
      $this->DC_DBName  = $DayCare->database_name;
      $this->DC_ID      = $DayCare->day_care_id;
      // $this->DBName = 'daycares_1';
      $this->Staff_model->loadCustomerDatabase($this->DC_DBName);
   }

   public function index(){
      redirect('adminpanel/staff/all');
   }

   public function all(){
      // Load another database
      // $DayCare = $this->Common_model->get_user_details($this->userSessID);  

      $this->data['results'] = $this->Staff_model->get_data($this->DC_ID);

      // $this->data['results'] = $this->Common_model->get_data('staff'); 
      // print_r($this->data['results']); exit;
      
      // Load View
      $this->data['meta_title'] = 'All Staff';
      $this->data['subview'] = 'staff/all';
      $this->load->view('backend/_layout_main', $this->data);
   }

   

   public function edit($id){
      $this->form_validation->set_rules('child_name', 'name', 'required|trim');     
      $this->data['info'] = $this->Staff_model->get_info($id);
      // print_r($this->data['info']); exit;

      if(@$_FILES['userfile']['size'] > 0){
         $this->form_validation->set_rules('userfile', '', 'callback_file_check');
      }

      if ($this->form_validation->run() == true){

         // Image Upload
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

         $form_data = array(
            'child_name'   => $this->input->post('child_name'),
            'phone'        => $this->input->post('phone'),
            );

         if($_FILES['userfile']['size'] > 0){
            $form_data['image_file'] = $uploadedFile;
         }

         // print_r($form_data); exit;
         if($this->Staff_model->edit_otherdb('members', $id, 'id', $form_data)){
            $this->session->set_flashdata('success', 'Information update successfully.');
            redirect('adminpanel/staff/all');
         }
      }

      // Load View
      $this->data['meta_title'] = 'Edit Staff';
      $this->data['subview'] = 'staff/edit';
      $this->load->view('backend/_layout_main', $this->data);
   }


   public function add(){
      $this->form_validation->set_rules('child_name', 'name', 'required|trim');     

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

         $form_data = array(
            'child_name'   => $this->input->post('child_name'),
            'phone'        => $this->input->post('phone'),
            'day_cares_id' => $this->DC_ID,
            'member_types_id' => 2
            );

         if($_FILES['userfile']['size'] > 0){
            $form_data['image_file'] = $uploadedFile;
         }
         
         // print_r($form_data); exit;

         if($this->Staff_model->save_other_db('members', $form_data)){                
            $this->session->set_flashdata('success', 'New data insert successfully.');
            redirect("adminpanel/staff/all");
         }
      }

      // view
      $this->data['meta_title'] = 'Add Staff';
      $this->data['subview'] = 'staff/add';
      $this->load->view('backend/_layout_main', $this->data);
   }

   // public function details($id){
   //    $this->data['info'] = $this->Staff_model->get_info($id);

   //    // Load View
   //    $this->data['meta_title'] = 'Staff Details';
   //    $this->data['subview'] = 'staff/details';
   //    $this->load->view('backend/_layout_main', $this->data);
   // }

   // function delete($id) {
   //    $this->data['info'] = $this->Staff_model->delete($id);
   //    $this->session->set_flashdata('success', 'Information delete successfully.');
   //    redirect('adminpanel/staff/all');
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

}