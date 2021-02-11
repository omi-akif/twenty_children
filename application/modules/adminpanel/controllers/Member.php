<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends Backend_Controller {
   var $img_path;
   var $img_path_immunization;

   public function __construct(){
      parent::__construct();
      if (!$this->ion_auth->logged_in()):
         redirect('login');
      endif;

      $this->load->model('Common_model');
      $this->load->model('Member_model');
      $this->img_path = realpath(APPPATH . '../member_img');
      $this->img_path_immunization = realpath(APPPATH . '../immunization_img');
      
      $this->userSessID = $this->session->userdata('user_id');

      
      // Load another database
      $DayCare = $this->Common_model->get_user_details($this->userSessID);  
      $this->DC_DBName  = $DayCare->database_name;
      $this->DC_ID      = $DayCare->day_care_id;
      // $this->DBName = 'daycares_1';
      $this->Member_model->loadCustomerDatabase($this->DC_DBName);
   }  

   public function index(){       
      $this->data['results'] = $this->Member_model->get_data(1);
      // print_r($this->data['results']); exit;

      //Load page
      $this->data['meta_title'] = 'Member List';
      $this->data['subview'] = 'member/index';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function request(){      
      $this->data['results'] = $this->Member_model->get_data(0); 
      // print_r($this->data['results']); exit;

      //Load page
      $this->data['meta_title'] = 'Member Request/Application';
      $this->data['subview'] = 'member/request';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function completed(){      
      $this->data['results'] = $this->Member_model->get_data(2); 
      // print_r($this->data['results']); exit;

      //Load page
      $this->data['meta_title'] = 'Member Completed';
      $this->data['subview'] = 'member/completed';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function complete_status($id){      
      // $this->data['results'] = $this->Member_model->get_data(2); 
      // print_r($this->data['results']); exit;
      $this->data['info'] = $this->Member_model->get_info($id);

      $form_data = array('status' => 2);

      if($this->Member_model->edit_otherdb('members', $id, 'id', $form_data)){
         // Get user
         $member = $this->Member_model->get_top_applicant();
         $user = $this->ion_auth->user($member->parents_id)->row();

         // Change is waiting list 
         $form_data2 = array('is_waiting_sms_send' => 1);
         $this->Member_model->edit_otherdb('members', $member->id, 'id', $form_data2);

         $dc_name = $this->Member_model->get_daycare_name($member->day_cares_id);
         $exp = explode(" ", $dc_name);
         $daycare_name = $exp[0];

         // Send Message
         $mobile = '+88'.$user->phone;
         $message = $daycare_name.' দিবাযত্ন কেন্দ্রে আপনার শিশু ভর্তি কোটা উন্মুক্ত হয়েছে, অনুগ্রহ করে যোগাযোগ করুন';
         $this->send_sms($mobile, $message);

         $this->session->set_flashdata('success', 'Change status successfully.');
         redirect('adminpanel/member');
      }

      //Load page
      // $this->data['meta_title'] = 'Member Completed';
      // $this->data['subview'] = 'member/completed';
      // $this->load->view('backend/_layout_main', $this->data);
   }


   public function approve($id){
      $this->data['info'] = $this->Member_model->get_info($id);

      $this->form_validation->set_rules('is_verified', 'verify status', 'required|trim');

      // Validate and insert data
      if ($this->form_validation->run() == true){

         $form_data['status'] = $this->input->post('is_verified');
         // print_r($form_data); exit;

         if($this->Member_model->edit_otherdb('members', $id, 'id', $form_data)){
            if($this->input->post('is_verified')){
               $row = $this->Common_model->get_row('users', $this->data['info']->registrations_id);
               // Send Message
               $mobile = '+88'.$row->phone;
               $message = 'Your application approve successfully. Please contact us as soon as possible. Thank You!';
               $this->send_sms($mobile, $message);
            }
            $this->session->set_flashdata('success', 'Approve member status change successfully.');
            redirect('adminpanel/member');
         }
      }

      $this->data['meta_title'] = 'Member Approve';
      $this->data['subview'] = 'member/approve';
      $this->load->view('backend/_layout_main', $this->data);
   }



   public function details($id){
      $this->data['info'] = $this->Member_model->get_info($id);

      $this->data['meta_title'] = 'Member Details';
      $this->data['subview'] = 'member/details';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function details_pdf($id){
      // echo phpinfo(); exit;
      $this->data['headding'] = "PDF Details";

      $this->data['info'] = $this->Member_model->get_info($id);        
      $html = $this->load->view('member/details_pdf', $this->data, true);   
      $file_name = $id.".pdf";

      // Generate PDF
      $mpdf = new mPDF('', 'A4', 10, 'nikosh', 10, 10, 10, 5);
      // $mpdf->showImageErrors = true;
      $mpdf->WriteHtml($html);
      $mpdf->output($file_name, 'I'); //download it for 'D'. 
   }

   function send_sms($mobile, $message){
      $api_key = "C20019945dde54c4697d80.43761214";
      $contacts = $mobile;
      $senderid = '8804445629106';
      $sms = $message;

      $URL = "http://sms.nanoitworld.com/smsapi?api_key=".urlencode($api_key)."&type=text&contacts=".urlencode($contacts)."&senderid=".urlencode($senderid)."&msg=".urlencode($sms);

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,$URL);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
      curl_setopt($ch, CURLOPT_POST, 0);
      try{
         $output = $content=curl_exec($ch);
        // print_r($output);
      }catch(Exception $ex){
         $output = "-100";
      }
      return $output; 
   }

   public function ajax_get_district_by_div($id){
      header('Content-Type: application/x-json; charset=utf-8');
      echo (json_encode($this->Common_model->get_district_by_div_id($id)));
   }

   public function username_valid($str){
      // alpha_dash_space
      // return (!preg_match("/^([-a-z0-9_ ])+$/i", $str)) ? FALSE : TRUE;
      if (! preg_match('/^\S*$/', $str)) {
         $this->form_validation->set_message('username_valid', 'The %s field may only contain alpha characters & no white spaces.');
         return FALSE;
      } else {
         return TRUE;
      }
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
      $this->data['info'] = $this->Member_model->delete($id);
      $this->session->set_flashdata('success', 'Information delete successfully.');
      redirect('adminpanel/member');
   }

}