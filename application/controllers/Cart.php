<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_item');
	}

	public function index()
	{
        $this->load->view('layout/partials/v_header');
        $this->load->view('layout/v_cart');
        $this->load->view('layout/partials/v_footer');
		
    }

    public function deleteItem()
    {
        // fungsi hapus keranjang
        $this->cart->destroy();
        redirect('/');
    }
    
    public function payItem()
    {
        $this->load->view('layout/partials/v_header');
        $this->load->view('layout/v_payment');
        $this->load->view('layout/partials/v_footer');
    }
}
