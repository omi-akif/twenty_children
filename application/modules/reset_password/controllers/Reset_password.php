<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_password extends Backend_Controller {

	public function __construct(){
		parent::__construct();	
		if ($this->ion_auth->logged_in()){
			redirect('dashboard');
		}
	}	

	// reset password - final step for forgotten password
	public function index($code = NULL){
		if(!$code){
			show_404();
		}

		$user = $this->ion_auth->forgotten_password_check($code);

		if($user){
			// if the code is valid then display the password reset form

			$this->form_validation->set_rules('new', $this->lang->line('reset_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
			$this->form_validation->set_rules('new_confirm', $this->lang->line('reset_password_validation_new_password_confirm_label'), 'required');

			if ($this->form_validation->run() == false) {
				// display the form

				// set the flash data error message if there is one
				$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
				$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');

				$this->data['new_password'] = array(
					'name' => 'new',
					'id'   => 'new',
					'type' => 'password',
					'class' => 'form-control',
					'placeholder' => 'New Password',
					'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
				);
				$this->data['new_password_confirm'] = array(
					'name'    => 'new_confirm',
					'id'      => 'new_confirm',
					'type'    => 'password',
					'class' => 'form-control',
					'placeholder' => 'Retype New Password',
					'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
				);
				$this->data['user_id'] = array(
					'name'  => 'user_id',
					'id'    => 'user_id',
					'type'  => 'hidden',
					'value' => $user->id,
				);
				$this->data['csrf'] = $this->_get_csrf_nonce();
				$this->data['code'] = $code;

				$this->data['meta_title'] = 'Reset Password';
				$this->data['subview'] = 'index';
		    	$this->load->view('login/_layout_main', $this->data);
			
			} else {

				// do we have a valid request?
				if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post('user_id')){

					// something fishy might be up
					$this->ion_auth->clear_forgotten_password_code($code);

					show_error($this->lang->line('error_csrf'));

				} else {
					// finally change the password
					$identity = $user->{$this->config->item('identity', 'ion_auth')};

					$change = $this->ion_auth->reset_password($identity, $this->input->post('new'));

					if ($change){
						// if the password was successfully changed
						$this->session->set_flashdata('message', $this->ion_auth->messages());
						redirect("login");
					} else {
						$this->session->set_flashdata('message', $this->ion_auth->errors());
						redirect('reset_password/index/'.$code);
					}
				}
			}
		} else {
			// if the code is invalid then send them back to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("forgot_password");
		}
	}	

	public function _get_csrf_nonce(){
		$this->load->helper('string');
		$key   = random_string('alnum', 8);
		$value = random_string('alnum', 20);
		$this->session->set_flashdata('csrfkey', $key);
		$this->session->set_flashdata('csrfvalue', $value);

		return array($key => $value);
	}

	public function _valid_csrf_nonce(){
		$csrfkey = $this->input->post($this->session->flashdata('csrfkey'));
		if ($csrfkey && $csrfkey == $this->session->flashdata('csrfvalue')){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}
