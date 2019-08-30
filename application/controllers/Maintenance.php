<?php

class Maintenance extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        // $this->load->model('karyawanmodel');
		$this->load->model('maintenancesmodel');
        $this->load->library('form_validation');
        $this->load->library('encryption');
        
    }

    public function index() {
        
        $data['maintenances']=$this->maintenancesmodel->getAll();
        $this->load->view('backend/maintenance/index',$data);
    }

    public function tambah()
    {
        //load file helper
        $this->load->helper('file');
                
        $this->form_validation->set_rules('nama__maintenance', 'Nama  maintenance', 'required');
        $this->form_validation->set_rules('name__maintenance_en', 'Name of   maintenance', 'required');
        $this->form_validation->set_rules('deskripsi__maintenance', 'Deskripsi  maintenance', 'required');
        $this->form_validation->set_rules('description__maintenance_en', 'Description  maintenance', 'required');
        if (empty($_FILES['gambar__maintenance']['name']))
        {
            $this->form_validation->set_rules('gambar__maintenance', 'Gambar header Kategroi Maintenance', 'required');
        }
        if (empty($_FILES['image__maintenance_en']['name']))
        {
            $this->form_validation->set_rules('image__maintenance_en', 'Picture header Kategroi Maintenance', 'required');
        }

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('backend/maintenance/tambah');

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
            if(!$this->upload->do_upload('gambar__maintenance')){
                 $error = array('error' => $this->upload->display_errors());
                // $this->session->set_flashdata('error', 'Gagal, ada masalah');

                // redirect('dashboard/maintenance/tambah');
                //  $this->load->view('backend/admin/tambah2');
              
            }else{
                $uploadData = $this->upload->data();
                $gambar__maintenance = "./uploads/maintenances/".$uploadData['file_name'];                
            }
            // die();
            //upload file to directory
            if(!$this->upload->do_upload('image__maintenance_en')){
                $this->upload->display_errors();
                // $this->session->set_flashdata('error', 'Gagal, ada masalah');
                redirect('dashboard/maintenance/tambah');
                //  $this->load->view('backend/admin/tambah2');
            }else{
                $uploadData = $this->upload->data();
                $image__maintenance_en = "./uploads/maintenances/".$uploadData['file_name'];                
            }

            
                            
            $link__maintenance = url_title($this->input->post('nama__maintenance'), 'dash', TRUE);
            $link__maintenance_en = url_title($this->input->post('name__maintenance_en'), 'dash', TRUE);
            
            

            $simpankatmaintenance = array(
                
                'nama__maintenance'=>$this->input->post('nama__maintenance'),
                'name__maintenance_en'=>$this->input->post('name__maintenance_en'),
                'deskripsi__maintenance'=>$this->input->post('deskripsi__maintenance'),
                'description__maintenance_en'=>$this->input->post('description__maintenance_en'),
                'gambar__maintenance'=>$gambar__maintenance,
                'image__maintenance_en'=>$image__maintenance_en,
                'link__maintenance'=>$link__maintenance,
                'link__maintenance_en'=>$link__maintenance_en
            );


            // print_r($simpankatmaintenance);
            // die();
           
            $this->maintenancesmodel->simpan($simpankatmaintenance);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('dashboard/maintenance');
               
            
            
        }
        
    }

    public function edit() {
        $id_maintenance = $this->uri->segment(4);
        $data['maintenance'] = $this->maintenancesmodel->getById($id_maintenance)->row();
        $this->load->view('backend/maintenance/edit',$data);

    }
    public function update() {
        $this->form_validation->set_rules('id__maintenance', 'ID  maintenance', 'required');
        $this->form_validation->set_rules('nama__maintenance', 'Nama  maintenance', 'required');
        $this->form_validation->set_rules('name__maintenance_en', 'Name of   maintenance', 'required');
        $this->form_validation->set_rules('deskripsi__maintenance', 'Deskripsi  maintenance', 'required');
        $this->form_validation->set_rules('description__maintenance_en', 'Description  maintenance', 'required');

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

        $id__maintenance = $this->input->post('id__maintenance');
        $nama__maintenance= $this->input->post('nama__maintenance');
        $name__maintenance_en= $this->input->post('name__maintenance_en');
        $deskripsi__maintenance= $this->input->post('deskripsi__maintenance');
        $description__maintenance_en= $this->input->post('description__maintenance_en');
        $link__maintenance= url_title($this->input->post('nama__maintenance'), 'dash', TRUE);
        $link__maintenance_en= url_title($this->input->post('name__maintenance_en'), 'dash', TRUE);
        



        // die();

        $dataGambar= $_FILES['gambar__maintenance']['name'];
        if ($dataGambar== '') {
            $gambar__maintenance= $this->input->post('gambar__maintenance_lama');
        }else{
            // $data['gambar__maintenance'] = $_FILES['gambar__maintenance']['name'];
            //upload file to directory
            if(!$this->upload->do_upload('gambar__maintenance')){
                // $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', 'Gagal, ada masalah');
            }else{
                $uploadData = $this->upload->data();
                $gambar__maintenance= "./uploads/maintenances/".$uploadData['file_name'];
                $data = $this->maintenancesmodel->getById($id__maintenance)->row();
                $data->gambar__maintenance;
                if (file_exists($data->gambar__maintenance)) {
                    unlink($data->gambar__maintenance);
                }                
            }
        }

       
        $dataPicture = $_FILES['image__maintenance_en']['name'];
        if ($dataPicture == '') {
            $image__maintenance_en = $this->input->post('image__maintenance_en_old');
        }else{
            // $data['image__maintenance_en'] = $_FILES['image__maintenance_en']['name'];
            //upload file to directory
            if(!$this->upload->do_upload('image__maintenance_en')){
                // $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', 'Gagal, ada masalah');
            }else{
                $uploadData = $this->upload->data();
                $image__maintenance_en= "./uploads/maintenances/".$uploadData['file_name'];                
                $data = $this->maintenancesmodel->getById($id__maintenance)->row();
                $data->image__maintenance_en;
                if (file_exists($data->image__maintenance_en)) {
                    unlink($data->image__maintenance_en);
                }    
            }
        }

        $data = array(
                'nama__maintenance' => $nama__maintenance, 
                'name__maintenance_en' => $name__maintenance_en, 
                'deskripsi__maintenance' => $deskripsi__maintenance, 
                'description__maintenance_en' => $description__maintenance_en, 
                'gambar__maintenance' => $gambar__maintenance, 
                'image__maintenance_en' => $image__maintenance_en, 
                'link__maintenance' => $link__maintenance, 
                'link__maintenance_en' => $link__maintenance_en, 
        );
        // print_r($data);
        // die();
       
        $this->maintenancesmodel->update($data,$id__maintenance);
        $this->session->set_flashdata('success', 'Berhasil diupdate');
                redirect('dashboard/maintenance');
    }

    public function hapus() {
        $id__maintenance=$_POST['id__maintenance'];
        
        $data = $this->maintenancesmodel->getById($id__maintenance)->row();
        $img=$data->gambar__maintenance;
        if (file_exists($img)) {
            unlink($img);
        }
        if (file_exists($data->image__maintenance_en)) {
            unlink($data->image__maintenance_en);
        }
        $this->maintenancesmodel->hapus($id__maintenance);

         $this->session->set_flashdata('success', 'Berhasil Dihapus');
                redirect('dashboard/maintenance');


    }

    public function sinergi_industri_dan_pendidikan() {
        $this->load->view('maintenance/2019/sinergi-industri-dan-pendidikan');
    }

}