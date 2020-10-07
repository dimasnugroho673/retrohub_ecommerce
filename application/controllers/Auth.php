<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function login()
	{
		// form validation untuk login
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('layout/v_auth');
		} else {
			$auth = $this->M_auth->checkLogin();

			// jika login gagal
			if($auth == FALSE)
			{
				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Username or Password is Wrong!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>');
			  redirect('auth/login');
			} else {
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('role_id', $auth->role_id);

				switch($auth->role_id){
					case 1 : redirect('Admin/dashboard');
							 break;
					case 2 : redirect('home');
							 break;
					default: break;

				}
			}
		}

		
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
		
		
	}
}
