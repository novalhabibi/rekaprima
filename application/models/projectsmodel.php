<?php

Class projectsmodel extends CI_Model {

    public $_table = "projects";



    public function getAll()
    {
        return $this->db->get($this->_table);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table,['id_project']);
    }
    public function getByIdKategori($id)
    {
        return $this->db->get_where($this->_table,['id_kategori_kategori_project'=>$id ])->result();
    }
    public function getAllById($id)
    {
        return $this->db->get_where($this->_table,['id_kategori_kategori_project'=>$id ])->result();
    }

    public function getByLink($link)
    {
        $where = "link_project='$link' OR link_project_en='$link'";
        $this->db->where($where);
        return $this->db->get($this->_table)->row();
    }

}