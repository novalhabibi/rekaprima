<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class slidersmodel extends CI_Model
{
    public $_sliders= "sliders";

    public function getAll()
    {
        return $this->db->get($this->_sliders);
    }

    public function singleslider()
    {
        return $this->db->order_by('id_slider','ASC')->get_where($this->_sliders,['status'=>1]);
    }
    public function sliders()
    {
        return $this->db->order_by('id_slider','ASC')->get_where($this->_sliders,['status'=>1],4,1); 
    }


}
