<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class projectsmodel extends CI_Model {

    public $_table = "projects";
    public $_table2 = "kategori_projects";



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
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join($this->_table2,'projects.id_kategori_kategori_project=kategori_projects.id_kategori_project','left');
        $this->db->where('id_kategori_kategori_project',$id);
        return $this->db->get()->result();
        // return $this->db->get_where($this->_table,['id_kategori_kategori_project'=>$id ])->result();
    }
    public function getAllById($id)
    {
        return $this->db->get_where($this->_table,['id_kategori_kategori_project'=>$id ])->result();
    }

    public function getByLink($link)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join($this->_table2,'projects.id_kategori_kategori_project=kategori_projects.id_kategori_project');
        
        $where = "link_project='$link' OR link_project_en='$link'";
        $this->db->where($where);
        return $this->db->get()->row();
    }

}