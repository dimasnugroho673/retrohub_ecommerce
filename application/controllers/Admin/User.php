<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
		// cek session admin
		if($this->session->userdata('role_id') != 1){
			$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">'."
			You're not logged in!".'
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button></div>');
			redirect('auth/login');	
		}
    }

    public function index()
    {
        $data['user'] = $this->M_user->getUser()->result();
        $this->load->view('admin/partials/v_admin_header');
        $this->load->view('admin/partials/v_admin_topbar');
        $this->load->view('admin/partials/v_admin_sidebar');
        $this->load->view('admin/v_user', $data);
        $this->load->view('admin/partials/v_admin_footer');
    }

}