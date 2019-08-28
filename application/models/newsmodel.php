<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class newsmodel extends CI_Model {

    public $_table = "news";



    public function getAll()
    {
        return $this->db->get($this->_table);
    }


    public function getAllJoin()
    {
        $this->db->join('admins','news.id_admin=admins.id_admin','left');
        return $this->db->get($this->_table);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table,['id_news'=>$id]);
    }
    public function getBySlug($slug)
    {
        return $this->db->get_where($this->_table,['slug_judul'=>$slug]);
    }
    public function getBySlugTitle($slug)
    {
        return $this->db->get_where($this->_table,['slug_title'=>$slug]);
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

    public function update()
    {
         $id_news = $this->input->post('id_news');
         //upload configuration
            $config['upload_path']   = 'uploads/news/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = 1024;
            $config['remove_spaces'] = TRUE;
            $config['encrypt_name'] = TRUE; //Encript Nama file
            $this->load->library('upload', $config);
            //upload file to directory
            if($this->upload->do_upload('gambar')){
                $uploadData = $this->upload->data();
                $uploadedFile = "./uploads/news/".$uploadData['file_name'];
            }else{
                $uploadedFile = "no-img.png";
            }
        if (empty($_FILES['gambar']['name']))
        {
            $gambar = $this->input->post('gambar_lama_news');
        }else {
            $gambar= $uploadedFile;
        }

        $dataupdate = array(
           
            'judul' => $this->input->post('judul'), 
            'title' => $this->input->post('title'), 
            'deskripsi' => $this->input->post('deskripsi'), 
            'description' => $this->input->post('description'), 
            'gambar' => $gambar, 
            'picture' => $gambar, 
            'tgl_posting'=>Date('Y-m-d H:i:s'),
            'id_admin'=>$this->session->id_admin
        );
        // return print_r($dataupdate);
        return $this->db->update($this->_table,$dataupdate,['id_news'=>$id_news]);
    }
    public function updateWhere($data,$where)
    {
        return $this->db->update($this->_table,$data,$where);
    }
    public function updateWhereId($data,$id)
    {
        return $this->db->update($this->_table,$data,['id_news'=>$id]);
    }

    public function hapus($id_news)
    {
        return $this->db->delete($this->_table,['id_news'=>$id_news]);
    }

    function get_mahasiswa_list($limit, $start){
        $this->db->order_by("tgl_posting", "desc");
		$query = $this->db->get('news', $limit, $start);
        return $query;
	}
 
	function jumlah_data(){
		return $this->db->get('news')->num_rows();
	}

}