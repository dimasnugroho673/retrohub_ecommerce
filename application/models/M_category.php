<?php

class M_category extends CI_Model{

    public function electronicData()
    {
        return $this->db->get_where("tb_barang", array(
            'kategori' => 'electronic')
        );
    }

    public function otomotifData()
    {
        return $this->db->get_where("tb_barang", array(
            'kategori' => 'otomotif')
        );
    }

    public function designData()
    {
        return $this->db->get_where("tb_barang", array(
            'kategori' => 'design')
        );
    }

    public function classic_itemsData()
    {
        return $this->db->get_where("tb_barang", array(
            'kategori' => 'classic items')
        );
    }

    public function otherData()
    {
        return $this->db->get_where("tb_barang", array(
            'kategori' => 'other')
        );
    }
}

?>