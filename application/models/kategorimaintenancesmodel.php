<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kategorimaintenancesmodel extends CI_Model {

    public $_table = "kategori_maintenances";



    public function getAll()
    {
        return $this->db->get($this->_table);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table,['id']);
    }

    public function getByLink($link)
    {
        $where = "link_kategori_maintenance='$link' OR link_kategori_maintenance_en='$link'";
        $this->db->where($where);
        return $this->db->get($this->_table)->row();
    }

}