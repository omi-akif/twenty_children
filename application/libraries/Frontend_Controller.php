<?php
class Frontend_Controller extends MY_Controller
{
	function __construct ()
	{
		parent::__construct();
		
      // Check Login
      if ($this->ion_auth->logged_in()){
         if (!$this->ion_auth->in_group(array('parents'))){
            // echo 'not parent';
            // redirect them to the login page
            $this->ion_auth->logout();
            // $this->session->set_flashdata('message', $this->ion_auth->messages());
            // redirect('login');
            redirect('adminpanel/login');
         }
      }      

      $this->form_validation->set_error_delimiters('<div class="alert alert-warning"> <i class="fa fa-warning"></i> ', '</div>');
      
      // Model      
      $this->load->model('Site_model');
      $this->load->model('Common_model');

      $this->data['day_care_list'] = $this->Common_model->get_day_cares();

      // $this->data['setting'] = $this->Common_model->get_info('setting');
      // $this->data['address_footer'] = $this->Site_model->get_footer_address_show('contact');


      $this->data['meta_title'] = '২০টি শিশু দিবাযন্ত কেন্দ্র স্থাপন প্রকল্প';
      $this->data['meta_keywords'] = '২০টি শিশু দিবাযন্ত কেন্দ্র স্থাপন প্রকল্প';
      $this->data['meta_description'] = '২০টি শিশু দিবাযন্ত কেন্দ্র স্থাপন প্রকল্প';

      $this->data['contact_email'] = 'pddcdwa@gmail.com';
      $this->data['contact_phone'] = '0255138540';
      $this->data['domain_title'] = '২০টি শিশু দিবাযন্ত কেন্দ্র স্থাপন প্রকল্প';
      $this->data['method'] = '';
   }
}