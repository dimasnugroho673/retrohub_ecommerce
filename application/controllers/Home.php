<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_item');
		$this->load->model('M_invoice');
	}

	public function index()
	{

		$data['barang'] = $this->M_item->getItem()->result();
		$this->load->view('layout/partials/v_header');
		$this->load->view('layout/partials/v_header_carousel');
		$this->load->view('layout/v_home', $data);
		$this->load->view('layout/partials/v_footer');
		
	}

	public function addCart($id)
	{

        $barang = $this->M_item->find($id);

        $data = array(
            'id'      => $barang->id_barang,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_barang
        );
        
		$this->cart->insert($data);
		redirect('/');
	}

	public function orderProcess()
	{
		$is_processed = $this->M_invoice->index();
		if($is_processed){
			$this->cart->destroy();
			
			$this->load->view('layout/partials/v_header');
			$this->load->view('layout/v_orderprocess');
			$this->load->view('layout/partials/v_footer');
		} else {
			echo "Maaf, pesanan anda gagal diproses!";
		}
		
	}

	public function detail($id_barang)
	{
		$data['barang'] = $this->M_item->detailItem($id_barang);
		$this->load->view('layout/partials/v_header');
		$this->load->view('layout/v_detail_item', $data);
		$this->load->view('layout/partials/v_footer');
	}


}
