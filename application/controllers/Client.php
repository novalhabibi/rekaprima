<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
		$this->load->model('clientmodel');
        $this->load->library('form_validation');
       
        
    }
    

    public function index()
    {
        $data['clients']=$this->clientmodel->getAll();
        $this->load->view('backend/client/index',$data);
    }
    public function edit()
    {
        $id_client = $this->uri->segment(4);
        
        $data['client']=$this->clientmodel->getById($id_client);
        
        if ($data['client']->num_rows() == 0) {
            $this->session->set_flashdata('error', 'Data tidak ada');
			redirect('dashboard/client');
        } else {
            $data['client']=$this->clientmodel->getById($id_client)->row();
            $this->load->view('backend/client/edit',$data);
        }

    }
    public function update()
    {
        
        $id_client = $this->input->post('id_client');
        // JIka iconnya di ganti maka rubah
        if (empty($_FILES['icon_client']['name'])) {
            $icon_client = $this->input->post('icon_lama_client');
        } else {
            //upload configuration
            //cek icon
            if (read_file($this->input->post('icon_lama_client'))) {
                // jika ada maka hapus
                if (unlink($this->input->post('icon_lama_client'))) {
                    $config['upload_path']   = 'uploads/clients/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size']      = 1024;
                    $config['remove_spaces'] = TRUE;
                    $config['encrypt_name'] = TRUE; //Encript Nama file
                    $this->load->library('upload', $config);
                    //upload file to directory
                    if($this->upload->do_upload('icon_client')){
                        $uploadData = $this->upload->data();
                        $icon_client = "./uploads/clients/".$uploadData['file_name'];
                
                    }else{
                        $icon_client = $this->input->post('icon_lama_client');
                        $data= $this->upload->display_errors();
                        $this->session->set_flashdata('errors', $data);
                        redirect("dashboard/client/edit/$id_client");
                        //  $this->load->view('backend/client/tambah2');
                    }
                } else {
                    $this->session->set_flashdata('error',"Terjadi Kelasahan");
                    redirect("dashboard/client/edit/$id_client");
                }
            } else {
                
                $config['upload_path']   = 'uploads/clients/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = 1024;
                $config['remove_spaces'] = TRUE;
                $config['encrypt_name'] = TRUE; //Encript Nama file
                $this->load->library('upload', $config);
                //upload file to directory
                if($this->upload->do_upload('icon_client')){
                    $uploadData = $this->upload->data();
                    $icon_client = "./uploads/clients/".$uploadData['file_name'];
            
                }else{
                    $icon_client = $this->input->post('icon_lama_client');
                    $data= $this->upload->display_errors();
                    $this->session->set_flashdata('errors', $data);
                    redirect("dashboard/client/edit/$id_client");
                    //  $this->load->view('backend/client/tambah2');
                }

            }    
            


        }

        // Maka Update disini 
        $DataUpdate = array(
            'nama_client' => $this->input->post('nama_client'), 
            'link_client' => $this->input->post('link_client'), 
            'icon_client' => $icon_client, 
            
        );
        $this->clientmodel->update($DataUpdate,$id_client);
        $this->session->set_flashdata('success', 'Berhasil diperbarui');
        redirect('dashboard/client');
      

    }

    public function tambah()
    {
      
                
        $this->form_validation->set_rules('nama_client', 'Nama client', 'required');
        $this->form_validation->set_rules('link_client', 'Link client', 'required');
        if (empty($_FILES['icon_client']['name']))
        {
            $this->form_validation->set_rules('icon_client', 'Icon client', 'required');
        }

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('backend/client/tambah');

        }
        else
        {

           
            $data = array();
            


            //upload configuration
            $config['upload_path']   = 'uploads/clients/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = 1024;
            $config['remove_spaces'] = TRUE;
            $config['encrypt_name'] = TRUE; //Encript Nama file
            $this->load->library('upload', $config);
            //upload file to directory
            if($this->upload->do_upload('icon_client')){
                $uploadData = $this->upload->data();
                $uploadedFile = "./uploads/clients/".$uploadData['file_name'];

                $simpanclient = array(
                    'nama_client'=>$this->input->post('nama_client'),
                    'link_client'=>$this->input->post('link_client'),
                    'icon_client'=>$uploadedFile,
                );
               
                $this->clientmodel->simpan($simpanclient);
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('dashboard/client');
            }else{
                // $this->upload->display_errors();
                $this->session->set_flashdata('error', 'Gagal, ada masalah');
                redirect('dashboard/client/tambah');
                //  $this->load->view('backend/client/tambah2');
            }
               
            
            
        }
        
    }



    // Validasi Cek
    
    public function file_check($str){
        $allowed_mime_type_arr = array('application/pdf','image/gif','image/jpeg','image/pjpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES['file']['name']);
        if(isset($_FILES['file']['name']) && $_FILES['file']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check', 'Please select only pdf/gif/jpg/png file.');
                return false;
            }
        }else{
            $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
            return false;
        }
    }
    // End Validasi Cek


    public function hapus()
    {
        $id_client = $this->input->post('id_client');

        // Hapus File
        $dataclient = $this->clientmodel->getById($id_client)->row();
        $dataclient->icon_client;
        unlink($dataclient->icon_client);
        // END Hapus File
        $this->clientmodel->hapus($id_client);
        $this->session->set_flashdata('success', 'Berhasil Dihapus');
		redirect('dashboard/client');
    }



}