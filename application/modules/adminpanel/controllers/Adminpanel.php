<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends Backend_Controller {

	public function __construct(){
		parent::__construct();
		// if (!$this->ion_auth->logged_in()):
		// 	redirect('login');
		// endif;
		$this->load->model('Common_model');
	}

	public function ajax_get_district_by_div($div_id){
		header('Content-Type: application/x-json; charset=utf-8');
		echo (json_encode($this->Common_model->get_district_by_div_id($div_id)));
	}

	public function ajax_get_upa_tha_by_dis($dis_id){
		header('Content-Type: application/x-json; charset=utf-8');
		echo (json_encode($this->Common_model->get_upa_tha_by_dis_id($dis_id)));
	}

	public function ajax_get_member_by_id($id){
		header('Content-Type: application/x-json; charset=utf-8');
		echo (json_encode($this->Common_model->get_member_by_id($id)));
	}

	function ajax_exists_member_id(){
        // echo 'true';
		$item = $_POST['inputData'];
		$result = $this->Common_model->exists('users', 'member_id', $item);

		if ($result == 0) {
			echo 'true';
		}else{
			echo 'false';
		}
	}

	function ajax_exists_member_no(){
        // echo 'true';
		$item = $_POST['inputData'];
		$result = $this->Common_model->exists('users', 'member_no', $item);

		if ($result == 0) {
			echo 'true';
		}else{
			echo 'false';
		}
	}
	
	function ajax_exists_identity(){
        // echo 'true';
		$item = $_POST['inputData'];
		$result = $this->Common_model->exists('users', 'username', $item);

		if ($result == 0) {
			echo 'true';
		}else{
			echo 'false';
		}
	}

	public function index(){
		if (!$this->ion_auth->logged_in()):
			redirect('adminpanel/login');
		else:
			redirect('adminpanel/dashboard');				
		endif;
	}

	// public function my_profile(){
	// 	$this->data['meta_title'] = 'My Profile';
	// 	// exit;

	// 	$this->data['subview'] = 'my_profile';
	// 	$this->load->view('backend/_layout_main', $this->data);
	// }

	public function login(){
		//validate form input
		$this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
		$this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

		if ($this->form_validation->run() == true){
			// check to see if the user is logging in
			// check for "remember me"
			$remember = (bool) $this->input->post('remember');

			if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)){
				//if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect('adminpanel/dashboard');
			}else{
				// if the login was un-successful
				// redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('adminpanel/login'); // use redirects instead of loading views for compatibility with MY_Controller libraries
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
			
			$this->data['meta_title'] = 'Login';
			$this->load->view('login/index', $this->data);
		}
	}

	// log the user out
	public function logout()
	{
		// log the user out
		$logout = $this->ion_auth->logout();
		
		// redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('adminpanel/login');
	}

	// activate the user
	// public function activate($id, $code=false){
	// 	if ($code !== false){
	// 		$activation = $this->ion_auth->activate($id, $code);
	// 	}else if ($this->ion_auth->is_admin()){
	// 		$activation = $this->ion_auth->activate($id);
	// 	}

	// 	if ($activation){
	// 		// redirect them to the auth page
	// 		$this->session->set_flashdata('message', $this->ion_auth->messages());
	// 		redirect("login");
	// 	}else{
	// 		// redirect them to the forgot password page
	// 		$this->session->set_flashdata('message', $this->ion_auth->errors());
	// 		redirect("forgot_password");
	// 	}
	// }

}