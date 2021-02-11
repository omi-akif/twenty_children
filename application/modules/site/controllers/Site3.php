<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site3 extends Frontend_Controller {

   function __construct (){
      parent::__construct();
      $this->form_validation->set_error_delimiters('<div class="alert alert-warning"> <i class="fa fa-warning"></i> ', '</div>');

      $this->img_path = realpath(APPPATH . '../assets/images/member_img');

      if ($this->ion_auth->logged_in()){
         // $this->DB2 = $this->load->database('another_db', TRUE);
         $this->userSessID = $this->session->userdata('user_id');

         // Load another database
         $DayCare = $this->Common_model->get_user_details($this->userSessID);
         // print_r($DayCare); exit;
         if($DayCare->day_care_id){
            $this->DC_DBName  = $DayCare->database_name;
            $this->DC_ID      = $DayCare->day_care_id;   
            // $this->DC_DBName = 'daycares_1';
            $this->Site_model->loadCustomerDatabase($this->DC_DBName);
         }else{
            if($_SERVER['HTTP_HOST'] === 'localhost'){
               $this->Site_model->loadCustomerDatabase('daycares_1');
            }else{
               $this->Site_model->loadCustomerDatabase('demo_daycares_1');
            }
         }
      }

   }

   public function index()
   {
      // Load View

      $this->data['meta_title'] = 'হোম';
      $this->data['subview'] = 'index';
      $this->load->view('frontend/_layout_main', $this->data);
   }

   public function immunization()
   {
      // Load View

      $this->data['meta_title'] = 'টিকাদান কর্মসূচী';
      $this->data['subview'] = 'immunization';
      $this->load->view('frontend/_layout_main', $this->data);
   }

   public function about_us()
   {
      // Load View

      $this->data['meta_title'] = 'আমাদের কথা';
      $this->data['subview'] = 'about_us';
      $this->load->view('frontend/_layout_main', $this->data);
   }

   public function services(){
      // Load View

      $this->data['meta_title'] = 'সেবা সমূহ';      
      $this->data['subview'] = 'services';
      $this->load->view('frontend/_layout_main', $this->data);
   }


   public function contact_us(){

      $this->data['day_care_address'] = $this->Site_model->get_day_cares_address();

         // Load View

      $this->data['meta_title'] = 'যোগাযোগ';
      $this->data['subview'] = 'contact_us';
      $this->load->view('frontend/_layout_main', $this->data);
   }

   public function registration(){   

      //user
      $tables = $this->config->item('tables','ion_auth');
      $identity_column = $this->config->item('identity','ion_auth');
      $this->data['identity_column'] = $identity_column;

      // validate form input field
      if($identity_column!=='email') {
         $this->form_validation->set_rules('identity','username','required|is_unique['.$tables['users'].'.'.$identity_column.']|callback_username_valid');
         $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'valid_email');
      } else {
         $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique[' . $tables['users'] . '.email]');
      }
      $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']');

      $this->form_validation->set_rules('first_name', 'first name (Bangla)', 'required|trim');
      $this->form_validation->set_rules('last_name', 'last name (Bangla)', 'required|trim');
      $this->form_validation->set_rules('mobile_no', 'mobile number', 'required|trim');

      //Validate and input data
      if ($this->form_validation->run() == true) {
         $email    = strtolower($this->input->post('email'));
         $identity = ($identity_column==='email') ? $email : $this->input->post('identity');
         $password = $this->input->post('password');

         // Array data
         $additional_data = array(
           'first_name'    => $this->input->post('first_name'),
           'last_name'     => $this->input->post('last_name'),                
           'phone'         => $this->input->post('mobile_no'),                
           'email'         => $this->input->post('identity'),
           'gender'        => $this->input->post('gender')              
           );

         // echo "<pre>";
         // print_r($additional_data);
         // exit();

         //$user_group = array('3'); // parents 
         $id = $this->ion_auth->register($identity, $password, $email, $additional_data);

         // Send Message
         $name = $this->input->post('first_name').' '.$this->input->post('last_name');
         $mobile = '+88'.$this->input->post('mobile_no');
         $message = 'প্রিয় '. $name .', শিশু দিবাযত্ন কেন্দ্রে আপনাকে স্বাগতম।';
         $this->send_sms($mobile, $message);
         
         // redirect them back to the admin page
         redirect("my-profile");
      }

      // Load View
      $this->data['meta_title'] = 'রেজিস্ট্রেশন';                
      $this->data['subview'] = 'registration';
      $this->load->view('frontend/_layout_main', $this->data);
   }

   public function login(){   

      //validate form input
      $this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
      $this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

      $this->data['login_error'] = '';

      if ($this->form_validation->run() == true){
         // check to see if the user is logging in
         // check for "remember me"
         $remember = (bool) $this->input->post('remember');

         if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)){

            // Check group
            if (!$this->ion_auth->in_group(array('parents'))){
               // redirect them to the login page
               $this->ion_auth->logout();
               $this->session->set_flashdata('error', 'Parents login only!');
               $this->data['login_error'] = 'Parents login only!';
               // redirect('login');
            }

            //if the login is successful
            //redirect them back to the home page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect('my-profile');
         }else{
            // if the login was un-successful
            // redirect them back to the login page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
               redirect('login'); // use redirects instead of loading views for compatibility with MY_Controller libraries
            }
         }else{
            // the user is not logging in so display the login page
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $this->data['identity'] = array('name' => 'identity',
               'id'    => 'identity',
               'type'  => 'text',
               'class' => 'form-control',
               'placeholder' => 'Email',
               'value' => $this->form_validation->set_value('identity'),
               );
            $this->data['password'] = array('name' => 'password',
               'id'   => 'password',
               'type' => 'password',
               'class' => 'form-control',
               'placeholder' => 'Password',
               );
         }
         
      // Load View
         $this->data['meta_title'] = 'লগইন';                
         $this->data['subview'] = 'login';
         $this->load->view('frontend/_layout_main', $this->data);
      }


      // log the user out
      public function logout()
      {
         // log the user out
         $logout = $this->ion_auth->logout();

         // redirect them to the login page
         $this->session->set_flashdata('message', $this->ion_auth->messages());
         redirect(base_url());
      }

      public function app_view($id){
         // echo $id;

         $info = $this->Site_model->get_application_info($id);
         // print_r()
         // echo json_encode($this->Site_model->get_application_info($id));



         $html = '<table class="tg">';

         $html .= '<tr> <td class="tg-dath">শিশুর নাম: </td><td class="tg-wra3">'.$info->child_name.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর জন্ম তারিখ: </td><td class="tg-wra3">'.$info->child_dob.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">লিঙ্গ: </td><td class="tg-wra3">'.$info->gender.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">ভর্তির তারিখে শিশুর বয়স: </td><td class="tg-wra3">'.$info->child_age.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর ওজন: </td><td class="tg-wra3">'.$info->child_weight.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর উচ্চতা: </td><td class="tg-wra3">'.$info->child_height.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর জন্ম চিহ্ন: </td><td class="tg-wra3">'.$info->birth_mark.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর জন্ম সনদ নম্বর: </td><td class="tg-wra3">'.$info->birth_certificate_no.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর কোন বিশেষ খাদ্যে সমস্যা থাকলে উহার বর্ণনা: </td><td class="tg-wra3">'.$info->describe_food.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর বিশেষ কোন শারীরিক অসুস্থতা থাকলে উহার বর্ণনা: </td><td class="tg-wra3">'.$info->describe_health_problem.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর কয়টি টিকা সম্পন্ন করেছে?: </td><td class="tg-wra3">'.$info->describe_health_problem.'</td></tr>';         
         $html .= '</table><br><br>';
         echo $html;
      }  


      public function my_profile( $edit = 'no'){   
         if (!$this->ion_auth->logged_in()):
            redirect('login');
         endif;

         // User Info
         $this->data['user_info'] = $this->Site_model->get_info($this->userSessID);
         // Basic
         $this->data['info'] = $this->Common_model->get_user_details($this->userSessID);
         // Application List
         // $this->data['results'] = $this->Site_model->get_application_data($this->userSessID);
         $this->data['results'] = $this->Site_model->get_application($this->userSessID);

         // echo '<pre>';
         // print_r($this->data['results']); exit;

         // Update Basic Info
         if($this->input->post('hide_update_info') == '11111'){

            $this->form_validation->set_rules('first_name', 'first name', 'required|trim');

            // update the password if it was posted
            if ($this->input->post('password')){
               $this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
               $this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');
            }


            //Validate and input data
            if ($this->form_validation->run() == true) {
               $form_data = array(
                  'first_name'   => $this->input->post('first_name'),
                  'last_name'    => $this->input->post('last_name'),
                  'phone'        => $this->input->post('phone'),
                  'gender'       => $this->input->post('gender')     
                  );

               // update the password if it was posted
               if ($this->input->post('password')){
                  $data['password'] = $this->input->post('password');
                  // check to see if we are updating the user
                  $this->ion_auth->update($this->userSessID, $data);
               }

               $this->Common_model->edit('users', $this->userSessID, 'id', $form_data);
               // Message
               $this->session->set_flashdata('success', 'আপনার প্রোফাইল সংশোধন  হয়েছে। ধন্যবাদ');
               redirect('my-profile');
            }
         }

         if($this->input->post('hide_app_info') == '22222'){

            // Application Form
            $this->form_validation->set_rules('day_cares_id', 'Day Cares Id', 'required|trim');
            // $this->form_validation->set_rules('child_name', 'Child name', 'required|trim');

            // If file selected
            if(@$_FILES['userfile']['size'] > 0){
               $this->form_validation->set_rules('userfile', '', 'callback_file_check');
            }

            // If Immunization selected
            if(@$_FILES['userfile1']['size'] > 0){
               $this->form_validation->set_rules('userfile1', '', 'callback_file_check');
            }

            //Validate and input data
            if ($this->form_validation->run() == true) {

            // Dynamic DB Name
               $day_care_info = $this->Common_model->get_row('day_cares', $this->input->post('day_cares_id'));
               $this->Site_model->loadCustomerDatabase($day_care_info->database_name);


               //Registration table
               $registrations_data  = $_POST['registrations'];
               $registrations_data_ = array(
                  'day_cares_id' => $this->input->post('day_cares_id'),
                  'parents_id'   => $this->userSessID,
                  'created'      => date('Y-m-d H:i:s'),        
                  );
               $registrations_data = array_merge($registrations_data, $registrations_data_);
               // echo "<pre>";
               // print_r($registrations_data);
               // echo "</pre>";
               $this->Site_model->save_other_db('registrations', $registrations_data);
               $insert_id = $this->Site_model->last_insert_id();

               //Member table 
               $members_data  = $_POST['members'];
               $members_data_ = array(
                  'parents_id'         => $this->userSessID,
                  'registrations_id'   => $insert_id,
                  'member_types_id'    => 1,
                  'day_cares_id'       => $this->input->post('day_cares_id'),
                  'created'   => date('Y-m-d H:i:s'),        
                  );
               $members_data = array_merge($members_data, $members_data_);

               // Image Upload
               if($_FILES['userfile']['size'] > 0){
                  $new_file_name = time().'-'.$_FILES["userfile"]['name'];
                  $config['allowed_types']= 'jpg|png|jpeg';
                  $config['upload_path']  = $this->img_path;
                  $config['file_name']    = $new_file_name;
                  $config['max_size']     = 600;

                  $this->load->library('upload', $config);
                  //upload file to directory
                  if($this->upload->do_upload()){
                     $uploadData = $this->upload->data();
                     $config = array(
                        'source_image' => $uploadData['full_path'],
                        'new_image' => $this->img_path,
                        'maintain_ratio' => TRUE,
                        'width' => 300,
                        'height' => 300
                        );
                     $this->load->library('image_lib',$config);
                     $this->image_lib->initialize($config);
                     $this->image_lib->resize();

                     $uploadedFile = $uploadData['file_name'];
                     // print_r($uploadedFile);
                  }else{
                     $this->data['message'] = $this->upload->display_errors();
                  }
               }


               // Immunization Image Upload
               if($_FILES['userfile1']['size'] > 0){
                  $new_file_name = time().'-'.$_FILES["userfile"]['name'];
                  $config['allowed_types']= 'jpg|png|jpeg';
                  $config['upload_path']  = $this->img_path;
                  $config['file_name']    = $new_file_name;
                  $config['max_size']     = 600;

                  $this->load->library('upload', $config);
                  //upload file to directory
                  if($this->upload->do_upload('userfile1')){
                     $uploadData = $this->upload->data();
                     $config = array(
                        'source_image' => $uploadData['full_path'],
                        'new_image' => $this->img_path,
                        'maintain_ratio' => TRUE,
                        'width' => 300,
                        'height' => 300
                        );
                     $this->load->library('image_lib',$config);
                     $this->image_lib->initialize($config);
                     $this->image_lib->resize();

                     $uploadedFile = $uploadData['file_name'];
                     // print_r($uploadedFile);
                  }else{
                     $this->data['message'] = $this->upload->display_errors();
                  }
               }


               if($_FILES['userfile']['size'] > 0){
                  $members_data['image_file'] = $uploadedFile;
               }

               if($_FILES['userfile1']['size'] > 0){
                  $members_data['immunization_file'] = $uploadedFile;
               }

               // echo "<pre>";
               // print_r($members_data);
               // echo "</pre>";
               // exit;
               $this->Site_model->save_other_db('members', $members_data);
               $insert_member_id = $this->Site_model->last_insert_id();

               // update user Day care
               $user_daycare_data = array(
                  'user_id'      => $this->userSessID,
                  'daycare_id'   => $this->input->post('day_cares_id'),
                  'member_id'    => $insert_member_id
                  );
               // $this->Site_model->edit_user('users', $this->userSessID, 'id', $user_data);
               $this->Common_model->save('users_daycares', $user_daycare_data);


               // Send Message
               $dc_name = $this->Site_model->get_daycare_name($this->input->post('day_cares_id'));
               $exp = explode(" ", $dc_name);
               $daycare_name = $exp[0];
               $user = $this->ion_auth->user()->row();
               // $name = $this->input->post('first_name').' '.$this->input->post('last_name');
               $mobile = '+88'.$user->phone;
               $message = $daycare_name.' কেন্দ্রে,আপনার শিশু অপেক্ষমাণ তালিকাভুক্ত হয়েছে,ধন্যবাদ';
               $this->send_sms($mobile, $message);

               // Message
               $this->session->set_flashdata('success', 'আপনার আবেদনটি সম্পন্ন হয়েছে। ধন্যবাদ');
               redirect('my-profile');
            }
         }

         // Dropdown
         $this->data['day_cares'] = $this->Common_model->get_daycares(); 


         // Load View
         $this->data['method'] = 'my_profile'; 
         $this->data['meta_title'] = 'প্রোফাইল';                
         $this->data['subview'] = 'my_profile';
         $this->data['edit'] = $edit == 'edit' ? true : false;
         $this->load->view('frontend/_layout_main', $this->data);
      }


      public function success()
      {   
      //view
         $this->data['meta_title'] = 'Success';
         $this->data['subview'] = 'success';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function day_care_centers()
      {   
      //view
         $this->data['meta_title'] = 'Day Care Centers';
         $this->data['subview'] = 'day_care_centers'; #Name of the file
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }

      public function mohila_day_care_centers()
      {

         // echo "hello"; 
         // exit;
         $this->data['meta_title'] = "Care Center Supervision under Mohila Bishoyok's supervision";
         $this->data['subview'] = 'day_care_centers_under_mohila'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
         
      }

      public function six_to_twelve_children_day_care()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age day care";
         $this->data['subview'] = 'six_to_twelve_children_day_care'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }

      #6-12 year children

      public function six_to_twelve_children_food_nutrition()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_children_food_nutrition'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }

      public function six_to_twelve_children_excitement()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_children_excitement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }

      public function six_to_twelve_children_health_care()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_children_health_care'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout   
      }

      public function six_to_twelve_children_mental_improvement()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_children_mental_improvement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout   
      }

      public function six_to_twelve_children_health_improvement()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_children_health_improvement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout   
      }

      public function six_to_twelve_childen_curricular()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_childen_curricular'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }


      #12-30 year children

      public function twelve_to_thirty_children_day_care()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_children_food_nutrition'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }

      public function twelve_to_thirty_children_food_nutrition()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_children_excitement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }

      public function twelve_to_thirty_children_excitement()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_children_health_care'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout   
      }

      public function twelve_to_thirty_children_mental_improvement()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_children_mental_improvement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout   
      }

      public function twelve_to_thirty_children_health_improvement()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_children_health_improvement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout   
      }

      public function twelve_to_thirty_childen_curricular()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_childen_curricular'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }

      public function day_care_details($id)
      {   

         $this->data['day_care_detail'] = $this->Site_model->get_day_care_detail($id);

      //view
         $this->data['meta_title'] = 'Day Care Details';
         $this->data['subview'] = 'day_care_details';
         $this->load->view('frontend/_layout_main', $this->data);
         // $this->load->view('day_care_centers.php', $this->data);
      }

















   // public function application_list(){   

   //    if (!$this->ion_auth->logged_in()):
   //       redirect('login');
   //    endif;


   //    $this->data['results'] = $this->Site_model->get_application_data($this->userSessID);
   //    // print_r($this->data['results']); exit();
   //    // $this->data['get_user_details'] = $this->Common_model->get_user_details();
   //    $this->data['method'] = 'application_list';
   //    $this->data['meta_title'] = 'আবেদনের তালিকা';                
   //    $this->data['subview'] = 'application_list';
   //    $this->load->view('frontend/_layout_main', $this->data);
   // }

   // public function application_form(){   

   //    $this->form_validation->set_rules('day_cares_id', 'Day Cares Id', 'required|trim');
   //    // $this->form_validation->set_rules('child_name', 'Child name', 'required|trim');

   //    //Validate and input data
   //    if ($this->form_validation->run() == true) {

   //       //Registration table
   //       $registrations_data  = $_POST['registrations'];
   //       $registrations_data_ = array(
   //          'day_cares_id' => $this->input->post('day_cares_id'),
   //          'parents_id'   => $this->userSessID,
   //          'created'      => date('Y-m-d H:i:s'),        
   //       );
   //       $registrations_data = array_merge($registrations_data, $registrations_data_);
   //       // echo "<pre>";
   //       // print_r($registrations_data);
   //       // echo "</pre>";
   //       $this->Site_model->save('registrations', $registrations_data);
   //       // $insert_id = $this->DB2->insert_id();
   //       $insert_id = $this->Site_model->last_insert_id();

   //       //Member table 
   //       $members_data  = $_POST['members'];
   //       $members_data_ = array(
   //          'parents_id'         => $this->userSessID,
   //          'registrations_id'   => $insert_id,
   //          'member_types_id'    => 1,
   //          'day_cares_id'       => $this->input->post('day_cares_id'),
   //          'created'   => date('Y-m-d H:i:s'),        
   //       );
   //       $members_data = array_merge($members_data, $members_data_);
   //       // echo "<pre>";
   //       // print_r($members_data);
   //       // echo "</pre>";
   //       // exit;
   //       $this->Site_model->save('members', $members_data);
   //       // $insert_id = $this->db->insert_id();

   //       // update user Day care
   //       $user_data = array(
   //          'day_care_id'   => $this->input->post('day_cares_id')
   //       );
   //       $this->Site_model->edit_user('users', $this->userSessID, 'id', $user_data);

   //       // Message
   //       $this->session->set_flashdata('success', 'Registration successfully.');
   //       redirect('my-profile');
   //    }

   //    // Dropdown
   //    $this->data['day_cares'] = $this->Common_model->get_daycares(); 

   //    //Load View
   //    $this->data['method'] = 'application_form';
   //    $this->data['meta_title'] = 'আবেদনের ভর্তি ফরম';                
   //    $this->data['subview'] = 'application_form';
   //    $this->load->view('frontend/_layout_main', $this->data);
   // } 


      public function events(){   

         $this->data['meta_title'] = 'ইভেন্টস';                   
         $this->data['method'] = 'events';        
         $this->data['subview'] = 'events';
         $this->load->view('frontend/_layout_main', $this->data);
      } 

      public function event_details(){   

         $this->data['meta_title'] = 'ইভেন্টের বিস্তারিত';                   
         $this->data['method'] = 'events details';        
         $this->data['subview'] = 'event_details';
         $this->load->view('frontend/_layout_main', $this->data);
      } 

      public function gallery(){        
         $this->data['category'] = $this->Site_model->get_category('gallery_category');
         $this->data['gallery'] = $this->Site_model->get_gallery();
         $this->data['method'] = 'gallery';        
         $this->data['meta_title'] = 'গ্যালারি';        
         $this->data['subview'] = 'gallery';
         $this->load->view('frontend/_layout_main', $this->data);
      }  

      public function err404(){
         // $this->data['related_item'] = $this->Site_model->get_related_course_not_found();

         $this->data['meta_title'] = 'Page not found';
         $this->data['subview'] = 'err404';
         $this->load->view('frontend/_layout_main', $this->data);
      }


      public function sendemail(){
         $this->data['setting'] = $this->Common_model->get_info('setting');
         $this->load->library('email');

         // $this->email->initialize(array(
         //   'protocol' => 'smtp',
         //   'smtp_host' => 'smtp.sendgrid.net',
         //   'smtp_user' => 'sendgridusername',
         //   'smtp_pass' => 'sendgridpassword',
         //   'smtp_port' => 587,
         //   'crlf' => "\r\n",
         //   'newline' => "\r\n"
         // ));

         $this->email->from($this->input->post('email'), $this->input->post('name'));
         $this->email->to($this->data['setting']->contact_email);
         $this->email->subject($this->input->post('subject'));
         $this->email->message($this->input->post('message'));
         $this->email->send();

         // echo $this->email->print_debugger();
         redirect('contact-us');
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

      function ajax_exists_identity(){
         // echo 'true';
         $item = $_POST['inputData'];
         $result = $this->Common_model->exists('users', 'username', $item);
         // echo $this->db->last_query(); exit;
         if ($result == 0) {
            echo 'true';
         }else{
            echo 'false';
         }
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
   }