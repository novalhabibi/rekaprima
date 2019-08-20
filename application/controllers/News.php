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
        $data['newss']=$this->newsmodel->getAll();
        $this->load->view('backend/news/index',$data);
    }

    public function tambah()
    {
        //load file helper
        $this->load->helper('file');
                
        $this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');
        $this->form_validation->set_rules('username_admin', 'Username Admin', 'required');
        $this->form_validation->set_rules('level_admin', 'Level Admin', 'required');
        if (empty($_FILES['foto_admin']['name']))
        {
            $this->form_validation->set_rules('foto_admin', 'Foto Admin', 'required');
        }

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('backend/news/tambah');

        }
        else
        {

           
            $data = array();
            


            //upload configuration
            $config['upload_path']   = 'uploads/avatars/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = 1024;
            $config['remove_spaces'] = TRUE;
            $config['encrypt_name'] = TRUE; //Encript Nama file
            $this->load->library('upload', $config);
            //upload file to directory
            if($this->upload->do_upload('foto_admin')){
                $uploadData = $this->upload->data();
                $uploadedFile = "./uploads/avatars/".$uploadData['file_name'];
               
                
                $password =md5($this->input->post('password_admin'));
                // $this->encryption->initialize(
                //         array(
                //                 'cipher' => 'aes-128',
                //                 'mode' => 'ctr',
                //                 'key' => 'enha3'
                //         )
                // );
                // $ciphertext = $this->encryption->encrypt($password);
                // $this->encryption->decrypt($ciphertext);

                $simpanadmin = array(
                    'username_admin'=>$this->input->post('username_admin'),
                    'password_admin'=>$password,
                    'nama_admin'=>$this->input->post('nama_admin'),
                    'level_admin'=>$this->input->post('level_admin'),
                    'foto_admin'=>$uploadedFile,
                    'log_status'=>0,
                    'cookie'=>0
                );
               
                $this->adminmodel->simpan($simpanadmin);
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('dashboard/admin');
            }else{
                // $this->upload->display_errors();
                $this->session->set_flashdata('error', 'Gagal, ada masalah');
                redirect('dashboard/admin/tambah');
                //  $this->load->view('backend/admin/tambah2');
            }
               
            
            
        }
        
    }

    public function news() {
        $this->load->view('news/news');
    }

    public function news_2019_indonesia_railway_conference() {
        $this->load->view('news/2019/indonesia-railway-conference-2019');
    }

    public function sinergi_industri_dan_pendidikan() {
        $this->load->view('news/2019/sinergi-industri-dan-pendidikan');
    }

}