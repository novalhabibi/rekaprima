<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kategorimaintenancesmodel extends CI_Model {

    public $_table = "kategori_maintenances";



    private function _hapusGambar($id)
    {
        $maintenance = $this->getById($id);
        $filename =$maintenance->header_image;
        return array_map('unlink', glob(FCPATH."$filename"));
        
    }
    private function _hapusGambarEn($id)
    {
        $maintenance_en = $this->getByIdEn($id);
        $filename_en =$maintenance_en->header_image_en;
        return array_map('unlink', glob(FCPATH."$filename_en"));
        
    }


    public function getAll()
    {
        return $this->db->get($this->_table);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table,['id_kategori_maintenance'=>$id]);
    }
    
    public function getByLink($link)
    {
        $where = "link_kategori_maintenance='$link' OR link_kategori_maintenance_en='$link'";
        $this->db->where($where);
        return $this->db->get($this->_table)->row();
    }

    public function simpan($data)
    {
        return $this->db->insert($this->_table,$data);
    }
    
    public function update($data,$id)
    {
        return $this->db->update($this->_table,$data,['id_kategori_maintenance'=>$id]);
    }
    public function hapus($id)
    {
        return $this->db->delete($this->_table,['id_kategori_maintenance'=>$id]);
    }
}