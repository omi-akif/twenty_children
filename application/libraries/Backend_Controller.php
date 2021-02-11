<?php
include 'awedget/classes/BanglaConverter.php';

class Backend_Controller extends MY_Controller
{

	function __construct ()
	{
      parent::__construct();
      $this->lang->load('auth');
      $this->load->model('Common_model');

      // Check Login
      if ($this->ion_auth->in_group(array('parents'))){
         $this->ion_auth->logout();
         redirect(base_url());
      }

      if($this->ion_auth->is_admin()){         
         $this->session->set_userdata('is_superadmin', '1');
      }

		// $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
      $this->form_validation->set_error_delimiters('<div class="alert alert-warning"> <i class="fa fa-warning"></i> ', '</div>');

      if ($this->ion_auth->logged_in()){
         $user_groups = $this->ion_auth->get_users_groups($this->session->userdata('user_id'))->result();
         // User Group Name
         $this->data['user_group'] = $user_groups[0]->description;

         // $this->data['userDetails'] = $this->Common_model->get_user_details();
         // print_r($this->data['userDetails']);

         // if($this->ion_auth->in_group(array(''))){            
         // }
      }

      $this->data['meta_title'] = 'Day Care';			
      $this->data['domain_title'] = 'Day Care';			
   }
}