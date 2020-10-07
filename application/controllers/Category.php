<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function electronic()
    {
        $data['electronic'] = $this->M_category->electronicData()->result();
        $this->load->view('layout/partials/v_header');
		$this->load->view('layout/partials/v_header_carousel');
        $this->load->view('layout/v_electronic', $data);
        $this->load->view('layout/partials/v_footer');
    }

    public function otomotif()
    {
        $data['otomotif'] = $this->M_category->otomotifData()->result();
        $this->load->view('layout/partials/v_header');
		$this->load->view('layout/partials/v_header_carousel');
        $this->load->view('layout/v_otomotif', $data);
        $this->load->view('layout/partials/v_footer');
    }

    public function design()
    {
        $data['design'] = $this->M_category->designData()->result();
        $this->load->view('layout/partials/v_header');
		$this->load->view('layout/partials/v_header_carousel');
        $this->load->view('layout/v_design', $data);
        $this->load->view('layout/partials/v_footer');
    }

    public function classicItems()
    {
        $data['classicItems'] = $this->M_category->classic_itemsData()->result();
        $this->load->view('layout/partials/v_header');
		$this->load->view('layout/partials/v_header_carousel');
        $this->load->view('layout/v_classic_items', $data);
        $this->load->view('layout/partials/v_footer');
    }

    public function other()
    {
        $data['other'] = $this->M_category->otherData()->result();
        $this->load->view('layout/partials/v_header');
		$this->load->view('layout/partials/v_header_carousel');
        $this->load->view('layout/v_other', $data);
        $this->load->view('layout/partials/v_footer');
    }

}