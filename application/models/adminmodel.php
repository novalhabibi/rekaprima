<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class adminmodel extends CI_Model {

    public $_table = "admins";



    public function getAll()
    {
        return $this->db->get($this->_table);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table,['id'=>$id]);
    }
    public function login($where)
    {
        $this->db->where($where);
        return $this->db->get($this->_table);
    }

    public function getByLink($link)
    {
        $where = "link_kategori_project='$link' OR link_kategori_project_en='$link'";
        $this->db->where($where);
        return $this->db->get($this->_table)->row();
    }

}