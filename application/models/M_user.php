<?php

class M_user extends CI_Model {

    public function getUser()
    {
        return $this->db->get('tb_user');
    }

}