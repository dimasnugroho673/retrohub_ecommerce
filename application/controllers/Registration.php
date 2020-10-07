<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function index()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm','Password','required|matches[password]');

        if($this->form_validation->run() == FALSE){
            $this->load->view('layout/v_registration');
        } else {
            if ($gambar = ''){} else {
                $nama = $this->input->post('nama');
                $username = $this->input->post('username');
                $gambar = $_FILES['gambar']['name'];
                $password = $this->input->post('password');
				
                $config['upload_path']          = './uploads/';
                $config['allowed_types'] 		= 'jpg|jpeg|png';
                $config['max_size']             = 4000;
    
                $this->load->library('upload', $config);
    
                if(!$this->upload->do_upload('gambar')){
                    print_r($this->upload->display_errors());
    
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }	

            $data = array (
                'id'        => '',
                'nama'      => $nama,
                'username'  => $username,
                'gambar'    => $gambar,
                'password'  => $password,
                'role_id'   => 2,
                'is_active' => 1,
            );

            // input data registrasi ke tb_user
            $this->db->insert('tb_user', $data);
            redirect('auth/login');
        }
    }
}
