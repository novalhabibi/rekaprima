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
        return $this->db->get_where($this->_table,['id_admin'=>$id]);
    }
    public function login($where)
    {
        $this->db->where($where);
        return $this->db->get($this->_table);
    }

    public function simpan($data)
    {
        return $this->db->insert($this->_table,$data);
    }

    public function getByLink($link)
    {
        $where = "link_kategori_project='$link' OR link_kategori_project_en='$link'";
        $this->db->where($where);
        return $this->db->get($this->_table)->row();
    }

    public function update($data,$id_admin)
    {
        return $this->db->update($this->_table,$data,['id_admin'=>$id_admin]);
    }
    public function updateWhere($data,$where)
    {
        return $this->db->update($this->_table,$data,$where);
    }
    public function updateWhereId($data,$id)
    {
        return $this->db->update($this->_table,$data,['id_admin'=>$id]);
    }

    public function hapus($id_admin)
    {
        return $this->db->delete($this->_table,['id_admin'=>$id_admin]);
    }

}