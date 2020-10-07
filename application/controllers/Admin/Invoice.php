<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_invoice');
        // cek session admin
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . "
            You're not logged in!" . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['invoice'] = $this->M_invoice->viewData();
        $this->load->view('admin/partials/v_admin_header');
        $this->load->view('admin/partials/v_admin_topbar');
        $this->load->view('admin/partials/v_admin_sidebar');
        $this->load->view('admin/v_invoice', $data);
        $this->load->view('admin/partials/v_admin_footer');
    }

    public function detail($id_invoice)
    {
        // ambil ID invoice
        $data['invoice'] = $this->M_invoice->getIdInvoice($id_invoice);

        // ambil ID Pesanan
        $data['pesanan'] = $this->M_invoice->getIdOrder($id_invoice);

        $this->load->view('admin/partials/v_admin_header');
        $this->load->view('admin/partials/v_admin_topbar');
        $this->load->view('admin/partials/v_admin_sidebar');
        $this->load->view('admin/v_detail_invoice', $data);
        $this->load->view('admin/partials/v_admin_footer');
    }
}
