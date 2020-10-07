<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_item');
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

		public function listItem()
		{
			$data['barang'] = $this->M_item->getItem()->result();
			
			$this->load->view('admin/partials/v_admin_header');
			$this->load->view('admin/partials/v_admin_topbar');
			$this->load->view('admin/partials/v_admin_sidebar');
			$this->load->view('admin/v_list_item', $data);
			$this->load->view('admin/partials/v_admin_footer');
    }
        
    public function addItem()
		{
			
			// ambil data dari v_list_item
			$nama_barang = $this->input->post('nama_barang');
			$kategori = $this->input->post('kategori');
			$stok = $this->input->post('stok');
			$harga = $this->input->post('harga');
			$gambar = $_FILES['gambar']['name'];
			
			if ($gambar = ''){} else {
				
				$config['upload_path']          = './uploads/';
				$config['allowed_types'] 				= 'jpg|jpeg|png';
				$config['max_size']             = 4000;

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload('gambar')){
					print_r($this->upload->display_errors());

				} else {
					$gambar = $this->upload->data('file_name');
				}
			}	
			
			$keterangan = $this->input->post('keterangan');

			$data = array(
				'nama_barang'	=> $nama_barang,
				'kategori'		=> $kategori,
				'stok'			=> $stok,
				'harga'			=> $harga,
				'gambar'		=> $gambar,
				'keterangan'	=> $keterangan
			);

			$this->M_item->addItem($data, 'tb_barang');
			$this->session->set_flashdata("message", '<div class="alert alert-success alert-dismissible fade show" role="alert">New Item successfully added
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>'); /* flashdata untuk data berhasil */
			redirect('Admin/Item/listItem');



		}

		public function editItem($id) 
		{
			$where = array('id_barang' => $id);
			$data['barang'] = $this->M_item->editItem($where, 'tb_barang')->result();

			$this->load->view('admin/partials/v_admin_header');
			$this->load->view('admin/partials/v_admin_topbar');
			$this->load->view('admin/partials/v_admin_sidebar');
			$this->load->view('admin/v_edit_item', $data);
			$this->load->view('admin/partials/v_admin_footer');
		}

		public function updateItem()
		{
			$id	= $this->input->post('id_barang');
			$nama_barang = $this->input->post('nama_barang');
			$kategori = $this->input->post('kategori');
			$stok = $this->input->post('stok');
			$harga = $this->input->post('harga');
			$gambar = $_FILES['gambar']['name'];
			
			if ($gambar = ''){} else {
				
				$config['upload_path']          = './uploads/';
				$config['allowed_types'] 				= 'jpg|jpeg|png';
				$config['max_size']             = 4000;

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload('gambar')){
					print_r($this->upload->display_errors());

				} else {
					$gambar = $this->upload->data('file_name');
				}
			}	

			$keterangan = $this->input->post('keterangan');

			$data = array(
				'nama_barang'	=> $nama_barang,
				'kategori'		=> $kategori,
				'stok'				=> $stok,
				'harga'				=> $harga,
				'gambar'			=> $gambar,
				'keterangan'	=> $keterangan
			);
			
			$where = array(
				'id_barang' => $id
			);

			$this->M_item->updateItem($where, $data, 'tb_barang');
			$this->session->set_flashdata("message", '<div class="alert alert-success alert-dismissible fade show" role="alert">Item successfully changed
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
			</button>
			</div>'); /* flashdata untuk data berhasil */
			redirect('Admin/Item/listItem');
		}

		public function deleteItem($id)
		{
			$where = array('id_barang' => $id);
			$this->M_item->deleteItem($where, 'tb_barang');
			$this->session->set_flashdata("message", '<div class="alert alert-danger alert-dismissible fade show" role="alert">Item successfully deleted
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
			</button>
			</div>'); /* flashdata untuk data berhasil */
			redirect('Admin/Item/listItem');
		}

		

	}
?>