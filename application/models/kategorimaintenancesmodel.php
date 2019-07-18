<?php

class kategorimaintenancesmodel extends CI_Model {

    public $_table = "kategori_maintenances";



    public function getAll()
    {
        return $this->db->get($this->_table);
    }

}