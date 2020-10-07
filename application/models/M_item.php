<?php

class M_item extends CI_Model {

    public function getItem()
    {
        return $this->db->get('tb_barang');
    }

    // mengambil total item 
    // public function getTotalItem()
    // {
    //     return $this->db->count_all_result('tb_barang', $limit, $offset);
    // }

    public function addItem($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function editItem($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateItem($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function deleteItem($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
	{
		$result = $this->db->where('id_barang', $id)
		                   ->limit(1)
			               ->get('tb_barang');
		if($result->num_rows() > 0){
			return $result->row();
		} else {
			return array();
		}

    }
    
    public function detailItem($id_barang)
    {
        $result = $this->db->where('id_barang', $id_barang)->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->result();
        } else {
            return FALSE;
        }
    }
}

?>