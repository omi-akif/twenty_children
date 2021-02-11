<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Backend_Controller {

	var $img_path;

	public function __construct(){
      parent::__construct();
      if (!$this->ion_auth->logged_in()):
         redirect('login');
      endif;

      $this->load->model('Common_model');
      $this->load->model('Gallery_model');
      $this->img_path = realpath(APPPATH . '../assets/images/gallery_img');
      $this->userSessID = $this->session->userdata('user_id');

      // Load another database
      $DayCare = $this->Common_model->get_user_details($this->userSessID);  
      $this->DC_DBName  = $DayCare->database_name;
      $this->DC_ID      = $DayCare->day_care_id;
      // $this->DBName = 'daycares_1';
      $this->Gallery_model->loadCustomerDatabase($this->DC_DBName);
   }

   public function index(){
      redirect('adminpanel/gallery/all');
   }

   public function all(){
      $this->data['results'] = $this->Gallery_model->get_data(); 
      // print_r($this->data['results']); exit;

      //Load page
      $this->data['meta_title'] = 'All Gallery';
      $this->data['subview'] = 'gallery/all';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function add(){
      $this->form_validation->set_rules('userfile', '', 'callback_file_check');

      if ($this->form_validation->run() == true){

         if($_FILES['userfile']['size'] > 0){
            $new_file_name = $this->DC_ID.'-'.$_FILES["userfile"]['name'];

            $config['allowed_types']= 'jpg|png|jpeg|gif';
            $config['upload_path']  = $this->img_path;
            $config['file_name']    = $new_file_name;
            $config['max_size']     = 1000;

            $this->load->library('upload', $config);
            //upload file to directory
            if($this->upload->do_upload('userfile')){
               $uploadData = $this->upload->data();
               $uploadedFile = $uploadData['file_name'];
               // print_r($uploadedFile);
               $this->data['message'] = 'File has been uploaded successfully.';
            }else{
               $this->data['message'] = $this->upload->display_errors();
            }
         }

         $form_data = array(
            'image'        => $uploadedFile,
            'status'       => 1,
            'day_cares_id' => $this->DC_ID
            );
         // print_r($form_data); exit;

         if($this->Gallery_model->save_other_db('galleries', $form_data)){                
            $this->session->set_flashdata('success', 'New data insert successfully.');
            redirect("adminpanel/gallery/all");
         }
      }

      // $this->data['category'] = $this->Common_model->get_category_dd('gallery_category');

      // Load View
      $this->data['meta_title'] = 'Add Image';
      $this->data['subview'] = 'gallery/add';
      $this->load->view('backend/_layout_main', $this->data);
   }


   // public function edit($id){
   //    // Validation
   //    $this->form_validation->set_rules('name', 'Gallery name', 'required|trim');
   //    // $this->form_validation->set_rules('category_id', 'Category', 'required|trim');

   //    $this->data['info'] = $this->Gallery_model->get_info($id);
   //    // print_r($this->data['info']); exit;

   //    if(@$_FILES['userfile']['size'] > 0){
   //       $this->form_validation->set_rules('userfile', '', 'callback_file_check');
   //    }

   //    if ($this->form_validation->run() == true){
   //       if($_FILES['userfile']['size'] > 0){

   //       // $this->Gallery_model->delete_img($id);

   //          $new_file_name = $_FILES["userfile"]['name'];

   //          $config['allowed_types']= 'jpg|png|jpeg|gif';
   //          $config['upload_path']  = $this->img_path;
   //          $config['file_name']    = $new_file_name;
   //          $config['max_size']     = 1000;

   //          $this->load->library('upload', $config);
   //              //upload file to directory
   //          if($this->upload->do_upload()){
   //             $uploadData = $this->upload->data();
   //             $uploadedFile = $uploadData['file_name'];
   //             // print_r($uploadedFile);
   //             $this->data['message'] = 'File has been uploaded successfully.';
   //          }else{
   //             $this->data['message'] = $this->upload->display_errors();
   //          }
   //       }

   //       // $slug_data = array('name' => $this->input->post('name'));

   //       $form_data = array(
   //          'name' => $this->input->post('name'),
   //          'url' => $this->input->post('url'),
   //          'category_id' => $this->input->post('category_id'),
   //          'display_home' => $this->input->post('display_home'),
   //          'status' => $this->input->post('status')
   //          );

   //       if($_FILES['userfile']['size'] > 0){
   //          $form_data['image_file'] = $uploadedFile;
   //       }

   //       // print_r($form_data); exit;
   //       if($this->Common_model->edit('gallery', $id, 'id', $form_data)){
   //          $this->session->set_flashdata('success', 'Information update successfully.');
   //          redirect('admin/gallery/all');
   //       }
   //    }

   //    // $this->data['category'] = $this->Common_model->get_category_dd('gallery_category');

   //    // Load View
   //    $this->data['meta_title'] = 'Edit Gallery';
   //    $this->data['subview'] = 'gallery/edit';
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
      $this->data['info'] = $this->Gallery_model->delete($id);
      $this->session->set_flashdata('success', 'Information delete successfully.');
      redirect('adminpanel/gallery/all');
   }

}