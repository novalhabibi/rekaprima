<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class maintenancesmodel extends CI_Model {

    public $_table = "maintenances";



    public function getAll()
    {
        return $this->db->get($this->_table);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table,['id_maintenance']);
    }
    public function getByIdKategori($id)
    {
        return $this->db->get_where($this->_table,['id_kategori_kategori_maintenance'=>$id ])->result();
    }

    public function getByLink($link)
    {
        $where = "link_maintenance='$link' OR link_maintenance_en='$link'";
        $this->db->where($where);
        return $this->db->get($this->_table)->row();
    }
    function get_maintenance_list($limit, $start){
        $this->db->order_by("id_maintenances", "desc");
		$query = $this->db->get('maintenances', $limit, $start);
        return $query;
	}

}