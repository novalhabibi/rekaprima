<?php

class Kategorimaintenance extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        // $this->load->model('karyawanmodel');
		$this->load->model('kategorimaintenancesmodel');
        $this->load->library('form_validation');
        $this->load->library('encryption');
        
    }

    public function index() {
        
        $data['kategorimaintenances']=$this->kategorimaintenancesmodel->getAll();
        $this->load->view('backend/kategorimaintenance/index',$data);
    }

    public function tambah()
    {
        //load file helper
        $this->load->helper('file');
                
        $this->form_validation->set_rules('nama_kategori_maintenance', 'Nama kategori maintenance', 'required');
        $this->form_validation->set_rules('name_kategori_maintenance_en', 'Name of  kategori maintenance', 'required');
        $this->form_validation->set_rules('deskripsi_kategori_maintenance', 'Deskripsi kategori maintenance', 'required');
        $this->form_validation->set_rules('description_kategori_maintenance_en', 'Description kategori maintenance', 'required');
        if (empty($_FILES['gambar_kategori_maintenance']['name']))
        {
            $this->form_validation->set_rules('gambar_kategori_maintenance', 'Gambar header Kategroi Maintenance', 'required');
        }
        if (empty($_FILES['image_kategori_maintenance_en']['name']))
        {
            $this->form_validation->set_rules('image_kategori_maintenance_en', 'Picture header Kategroi Maintenance', 'required');
        }

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('backend/kategorimaintenance/tambah');

        }
        else
        {
           
            $data = array();
            
            //upload configuration
            $config['upload_path']   = 'uploads/maintenances/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '5000';
            $config['max_width']  = '1350';
            $config['min_width']  = '1340';
            $config['max_height']  = '255';
            $config['min_height']  = '246';
            $config['remove_spaces'] = TRUE;
            $config['encrypt_name'] = TRUE; //Encript Nama file
            $this->load->library('upload', $config);

            //upload file to directory
            if(!$this->upload->do_upload('gambar_kategori_maintenance')){
                 $error = array('error' => $this->upload->display_errors());
                // $this->session->set_flashdata('error', 'Gagal, ada masalah');

                // redirect('dashboard/kategorimaintenance/tambah');
                //  $this->load->view('backend/admin/tambah2');
              
            }else{
                $uploadData = $this->upload->data();
                $gambar_kategori_maintenance = "./uploads/maintenances/".$uploadData['file_name'];                
            }
            // die();
            //upload file to directory
            if(!$this->upload->do_upload('image_kategori_maintenance_en')){
                $this->upload->display_errors();
                // $this->session->set_flashdata('error', 'Gagal, ada masalah');
                redirect('dashboard/kategorimaintenance/tambah');
                //  $this->load->view('backend/admin/tambah2');
            }else{
                $uploadData = $this->upload->data();
                $image_kategori_maintenance_en = "./uploads/maintenances/".$uploadData['file_name'];                
            }

            
                            
            $link_kategori_maintenance = url_title($this->input->post('nama_kategori_maintenance'), 'dash', TRUE);
            $link_kategori_maintenance_en = url_title($this->input->post('name_kategori_maintenance_en'), 'dash', TRUE);
            
            

            $simpankatmaintenance = array(
                
                'nama_kategori_maintenance'=>$this->input->post('nama_kategori_maintenance'),
                'name_kategori_maintenance_en'=>$this->input->post('name_kategori_maintenance_en'),
                'deskripsi_kategori_maintenance'=>$this->input->post('deskripsi_kategori_maintenance'),
                'description_kategori_maintenance_en'=>$this->input->post('description_kategori_maintenance_en'),
                'gambar_kategori_maintenance'=>$gambar_kategori_maintenance,
                'image_kategori_maintenance_en'=>$image_kategori_maintenance_en,
                'link_kategori_maintenance'=>$link_kategori_maintenance,
                'link_kategori_maintenance_en'=>$link_kategori_maintenance_en
            );


            // print_r($simpankatmaintenance);
            // die();
           
            $this->kategorimaintenancesmodel->simpan($simpankatmaintenance);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('dashboard/kategorimaintenance');
               
            
            
        }
        
    }

    public function edit() {
        $id_kategorimaintenance = $this->uri->segment(4);
        $data['kategorimaintenance'] = $this->kategorimaintenancesmodel->getById($id_kategorimaintenance)->row();
        $this->load->view('backend/kategorimaintenance/edit',$data);

    }
    public function update() {
        $this->form_validation->set_rules('id_kategori_maintenance', 'ID kategori maintenance', 'required');
        $this->form_validation->set_rules('nama_kategori_maintenance', 'Nama kategori maintenance', 'required');
        $this->form_validation->set_rules('name_kategori_maintenance_en', 'Name of  kategori maintenance', 'required');
        $this->form_validation->set_rules('deskripsi_kategori_maintenance', 'Deskripsi kategori maintenance', 'required');
        $this->form_validation->set_rules('description_kategori_maintenance_en', 'Description kategori maintenance', 'required');

        $data = array();
        //upload configuration
        $config['upload_path']   = 'uploads/maintenances/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5000';
        $config['max_width']  = '1350';
        $config['min_width']  = '1340';
        $config['max_height']  = '255';
        $config['min_height']  = '246';
        $config['remove_spaces'] = TRUE;
        $config['encrypt_name'] = TRUE; //Encript Nama file
        $this->load->library('upload', $config);

        $id_kategori_maintenance = $this->input->post('id_kategori_maintenance');
        $nama_kategori_maintenance= $this->input->post('nama_kategori_maintenance');
        $name_kategori_maintenance_en= $this->input->post('name_kategori_maintenance_en');
        $deskripsi_kategori_maintenance= $this->input->post('deskripsi_kategori_maintenance');
        $description_kategori_maintenance_en= $this->input->post('description_kategori_maintenance_en');
        $link_kategori_maintenance= url_title($this->input->post('nama_kategori_maintenance'), 'dash', TRUE);
        $link_kategori_maintenance_en= url_title($this->input->post('name_kategori_maintenance_en'), 'dash', TRUE);
        



        // die();

        $dataGambar= $_FILES['gambar_kategori_maintenance']['name'];
        if ($dataGambar== '') {
            $gambar_kategori_maintenance= $this->input->post('gambar_kategori_maintenance_lama');
        }else{
            // $data['gambar_kategori_maintenance'] = $_FILES['gambar_kategori_maintenance']['name'];
            //upload file to directory
            if(!$this->upload->do_upload('gambar_kategori_maintenance')){
                // $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', 'Gagal, ada masalah');
            }else{
                $uploadData = $this->upload->data();
                $gambar_kategori_maintenance= "./uploads/maintenances/".$uploadData['file_name'];
                $data = $this->kategorimaintenancesmodel->getById($id_kategori_maintenance)->row();
                $data->gambar_kategori_maintenance;
                if (file_exists($data->gambar_kategori_maintenance)) {
                    unlink($data->gambar_kategori_maintenance);
                }                
            }
        }

       
        $dataPicture = $_FILES['image_kategori_maintenance_en']['name'];
        if ($dataPicture == '') {
            $image_kategori_maintenance_en = $this->input->post('image_kategori_maintenance_en_old');
        }else{
            // $data['image_kategori_maintenance_en'] = $_FILES['image_kategori_maintenance_en']['name'];
            //upload file to directory
            if(!$this->upload->do_upload('image_kategori_maintenance_en')){
                // $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', 'Gagal, ada masalah');
            }else{
                $uploadData = $this->upload->data();
                $image_kategori_maintenance_en= "./uploads/maintenances/".$uploadData['file_name'];                
                $data = $this->kategorimaintenancesmodel->getById($id_kategori_maintenance)->row();
                $data->image_kategori_maintenance_en;
                if (file_exists($data->image_kategori_maintenance_en)) {
                    unlink($data->image_kategori_maintenance_en);
                }    
            }
        }

        $data = array(
                'nama_kategori_maintenance' => $nama_kategori_maintenance, 
                'name_kategori_maintenance_en' => $name_kategori_maintenance_en, 
                'deskripsi_kategori_maintenance' => $deskripsi_kategori_maintenance, 
                'description_kategori_maintenance_en' => $description_kategori_maintenance_en, 
                'gambar_kategori_maintenance' => $gambar_kategori_maintenance, 
                'image_kategori_maintenance_en' => $image_kategori_maintenance_en, 
                'link_kategori_maintenance' => $link_kategori_maintenance, 
                'link_kategori_maintenance_en' => $link_kategori_maintenance_en, 
        );
        // print_r($data);
        // die();
       
        $this->kategorimaintenancesmodel->update($data,$id_kategori_maintenance);
        $this->session->set_flashdata('success', 'Berhasil diupdate');
                redirect('dashboard/kategorimaintenance');
    }

    public function hapus() {
        $id_kategori_maintenance=$_POST['id_kategori_maintenance'];
        
        $data = $this->kategorimaintenancesmodel->getById($id_kategori_maintenance)->row();
        $img=$data->gambar_kategori_maintenance;
        if (file_exists($img)) {
            unlink($img);
        }
        if (file_exists($data->image_kategori_maintenance_en)) {
            unlink($data->image_kategori_maintenance_en);
        }
        $this->kategorimaintenancesmodel->hapus($id_kategori_maintenance);

         $this->session->set_flashdata('success', 'Berhasil Dihapus');
                redirect('dashboard/kategorimaintenance');


    }

    public function sinergi_industri_dan_pendidikan() {
        $this->load->view('kategorimaintenance/2019/sinergi-industri-dan-pendidikan');
    }

}