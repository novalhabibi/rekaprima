<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        // $this->load->model('karyawanmodel');
		$this->load->model('adminmodel');
        $this->load->library('form_validation');
        $this->load->library('encryption');
        
    }
    

    public function index()
    {
        $data['admins']=$this->adminmodel->getAll();
        $this->load->view('backend/admin/index',$data);
    }
    public function edit()
    {
        $id_admin = $this->uri->segment(4);
        
        $data['admin']=$this->adminmodel->getById($id_admin);
        
        if ($data['admin']->num_rows() == 0) {
            $this->session->set_flashdata('error', 'Data tidak ada');
			redirect('dashboard/admin');
        } else {
            $data['admin']=$this->adminmodel->getById($id_admin)->row();
            $this->load->view('backend/admin/edit',$data);
        }

    }
    public function update()
    {
        
        $id_admin = $this->input->post('id_admin');
        // JIka Ganti password maka bikin password baru
        if (empty($this->input->post('password_admin'))) {
            $password = $this->input->post('password_lama_admin');
        } else {
            // $this->encryption->initialize(
            //         array(
            //                 'cipher' => 'aes-128',
            //                 'mode' => 'ctr',
            //                 'key' => 'enha3'
            //         )
            // );
            // $password = $this->encryption->encrypt($this->input->post('password_admin'));
            $password = md5($this->input->post('password_admin'));
            // echo "<br>";
            // echo  $this->encryption->decrypt($password);
        }
        // End ganti pasword

        // JIka Fotonya di ganti maka rubah
        if (empty($_FILES['foto_admin']['name'])) {
            $foto_admin = $this->input->post('foto_lama_admin');
        } else {
            //upload configuration
            //cek foto
            if (read_file($this->input->post('foto_lama_admin'))) {
                // jika ada maka hapus
                if (unlink($this->input->post('foto_lama_admin'))) {
                    $config['upload_path']   = 'uploads/avatars/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size']      = 1024;
                    $config['remove_spaces'] = TRUE;
                    $config['encrypt_name'] = TRUE; //Encript Nama file
                    $this->load->library('upload', $config);
                    //upload file to directory
                    if($this->upload->do_upload('foto_admin')){
                        $uploadData = $this->upload->data();
                        $foto_admin = "./uploads/avatars/".$uploadData['file_name'];
                
                    }else{
                        $foto_admin = $this->input->post('foto_lama_admin');
                        $data= $this->upload->display_errors();
                        $this->session->set_flashdata('errors', $data);
                        redirect("dashboard/admin/edit/$id_admin");
                        //  $this->load->view('backend/admin/tambah2');
                    }
                    
                } else {
                    $foto_admin = $this->input->post('foto_lama_admin');
                    $this->session->set_flashdata('error',"Terjadi Kelasahan");
                    redirect("dashboard/admin/edit/$id_admin");
                }
            } else {
                
                $config['upload_path']   = 'uploads/avatars/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = 1024;
                $config['remove_spaces'] = TRUE;
                $config['encrypt_name'] = TRUE; //Encript Nama file
                $this->load->library('upload', $config);
                //upload file to directory
                if($this->upload->do_upload('foto_admin')){
                    $uploadData = $this->upload->data();
                    $foto_admin = "./uploads/avatars/".$uploadData['file_name'];
            
                }else{
                    $foto_admin = $this->input->post('foto_lama_admin');
                    $data= $this->upload->display_errors();
                    $this->session->set_flashdata('errors', $data);
                    redirect("dashboard/admin/edit/$id_admin");
                    //  $this->load->view('backend/admin/tambah2');
                }

            }    
            


        }

        // Maka Update disini 
        $DataUpdate = array(
            'nama_admin' => $this->input->post('nama_admin'), 
            'username_admin' => $this->input->post('username_admin'), 
            'level_admin' => $this->input->post('level_admin'), 
            'foto_admin' => $foto_admin, 
            'password_admin' => $password, 
        );
        $this->adminmodel->update($DataUpdate,$id_admin);
        $this->session->set_flashdata('success', 'Berhasil diperbarui');
        redirect('dashboard/admin');
      

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
            $this->load->view('backend/admin/tambah2');

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
        $id_admin = $this->input->post('id_admin');
        
        $this->adminmodel->hapus($id_admin);
        $this->session->set_flashdata('success', 'Berhasil Dihapus');
		redirect('dashboard/admin');
    }



}