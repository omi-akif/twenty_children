<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password extends Backend_Controller {

	public function __construct(){
        parent::__construct();

        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;
    }

	// change password
	public function index(){
		if (!$this->ion_auth->logged_in()){
			redirect('login');
		}

		$this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
		$this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
		$this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');

		$user = $this->ion_auth->user()->row();
      $identity = $this->session->userdata('identity');

		if ($this->form_validation->run() == false){
			// display the form
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
			$this->data['old_password'] = array(
				'name' => 'old',
				'id'   => 'old',
				'type' => 'password',
				'class' => 'form-control',
				'placeholder' => 'Old Password',
			);
			$this->data['new_password'] = array(
				'name'    => 'new',
				'id'      => 'new',
				'type'    => 'password',
				'class' => 'form-control',
				'placeholder' => 'New password',
				'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
			);
			$this->data['new_password_confirm'] = array(
				'name'    => 'new_confirm',
				'id'      => 'new_confirm',
				'type'    => 'password',
				'class' => 'form-control',
				'placeholder' => 'New confirm password',
				'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
			);
			$this->data['user_id'] = array(
				'name'  => 'user_id',
				'id'    => 'user_id',
				'type'  => 'hidden',
				'value' => $user->id,
			);

			//Load page       
			$this->data['page_title'] = 'Change Password';
			$this->data['subview'] = 'index';
	    	$this->load->view('backend/_layout_main', $this->data);

		} else {
			$identity = $this->session->userdata('identity');

			$change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));
         // print_r($change);
         // exit;


			if ($change){
				//if the password was successfully changed
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				//$this->logout();
			} else {
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('change_password');
			}
		}
	}

}