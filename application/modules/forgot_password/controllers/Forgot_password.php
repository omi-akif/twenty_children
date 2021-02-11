<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends Backend_Controller {

	public function __construct(){
		parent::__construct();	
		if ($this->ion_auth->logged_in()){
			redirect('dashboard');
		}
	}

	public function index(){
		// setting validation rules by checking whether identity is username or email
		if($this->config->item('identity', 'ion_auth') != 'email'){
		   $this->form_validation->set_rules('identity', $this->lang->line('forgot_password_identity_label'), 'required');
		}else{
		   $this->form_validation->set_rules('identity', $this->lang->line('forgot_password_validation_email_label'), 'required|valid_email');
		}

		if ($this->form_validation->run() == false){
			$this->data['type'] = $this->config->item('identity','ion_auth');
			// setup the input
			$this->data['identity'] = array(
				'name' => 'identity',
				'id' => 'identity',
				'class' => 'form-control',
				'placeholder' => 'Email'
			);

			if ( $this->config->item('identity', 'ion_auth') != 'email' ){
				$this->data['identity_label'] = $this->lang->line('forgot_password_identity_label');
			}else{
				$this->data['identity_label'] = $this->lang->line('forgot_password_email_identity_label');
			}

			// set any errors and display the form
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['meta_title'] = 'Forgot Password';
			$this->data['subview'] = 'index';
	    	$this->load->view('login/_layout_main', $this->data);
		
		} else {
			$identity_column = $this->config->item('identity','ion_auth');
			$identity = $this->ion_auth->where($identity_column, $this->input->post('identity'))->users()->row();

			if(empty($identity)) {

        		if($this->config->item('identity', 'ion_auth') != 'email'){
            		$this->ion_auth->set_error('forgot_password_identity_not_found');
            	}else{
            	   $this->ion_auth->set_error('forgot_password_email_not_found');
            	}

                $this->session->set_flashdata('message', $this->ion_auth->errors());
        		$this->load->view('index');
    		}

			// run the forgotten password method to email an activation code to the user
			$forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item('identity', 'ion_auth')});

			if ($forgotten){
				// if there were no errors
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect("login"); //we should display a confirmation page here instead of the login page
			}else{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect("index");
			}
		}
	}
	
}
