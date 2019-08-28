<?php

class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        // $this->load->model('karyawanmodel');
		$this->load->model('newsmodel');
        $this->load->library('form_validation');
        $this->load->library('encryption');
        
    }

    public function index() {
        
        $data['newss']=$this->newsmodel->getAllJoin();
        $this->load->view('backend/news/index',$data);
    }

    public function tambah()
    {
        //load file helper
        $this->load->helper('file');
                
        $this->form_validation->set_rules('judul', 'Judul Berita', 'required');
        $this->form_validation->set_rules('title', 'Title News', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi berita', 'required');
        $this->form_validation->set_rules('description', 'Description news', 'required');
        if (empty($_FILES['gambar']['name']))
        {
            $this->form_validation->set_rules('gambar', 'Foto Berita', 'required');
        }

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('backend/news/tambah');

        }
        else
        {

           
            $data = array();
            


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
               
                
                $id_news =uniqid();
                $slug_judul = url_title($this->input->post('judul'), 'dash', TRUE);
                $slug_title = url_title($this->input->post('title'), 'dash', TRUE);
                
                

                $simpanadmin = array(
                    'id_news'=>$id_news,
                    'judul'=>$this->input->post('judul'),
                    'title'=>$this->input->post('title'),
                    'slug_judul'=>$slug_judul,
                    'slug_title'=>$slug_title,
                    'deskripsi'=>$this->input->post('deskripsi'),
                    'description'=>$this->input->post('description'),
                    'gambar'=>$uploadedFile,
                    'picture'=>$uploadedFile,
                    'tgl_posting'=>Date('Y-m-d H:i:s'),
                    'id_admin'=>$this->session->id_admin
                );

                // print_r($simpanadmin);
               
                $this->newsmodel->simpan($simpanadmin);
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('dashboard/news');
            }else{
                // $this->upload->display_errors();
                $this->session->set_flashdata('error', 'Gagal, ada masalah');
                redirect('dashboard/news/tambah');
                //  $this->load->view('backend/admin/tambah2');
            }
               
            
            
        }
        
    }

    public function edit() {
        $id_news = $this->uri->segment(4);
        $data['news'] = $this->newsmodel->getById($id_news)->row();
        $this->load->view('backend/news/edit',$data);

    }
    public function update() {
        $this->newsmodel->update();
        $this->session->set_flashdata('success', 'Berhasil diupdate');
                redirect('dashboard/news');
    }

    public function news_2019_indonesia_railway_conference() {
        $this->load->view('news/2019/indonesia-railway-conference-2019');
    }

    public function sinergi_industri_dan_pendidikan() {
        $this->load->view('news/2019/sinergi-industri-dan-pendidikan');
    }

}