<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        // $this->load->model('karyawanmodel');
		$this->load->model('slidermodel');
        $this->load->library('form_validation');
        
        
    }


    public function index()
    {
         $data['sliders']=$this->slidermodel->getAll();
        $this->load->view('backend/slider/index',$data);
    }

    public function tambah()
    {
        //load file helper
        $this->load->helper('file');
                
        $this->form_validation->set_rules('judul', 'Judul Slider', 'required');
        $this->form_validation->set_rules('title', 'Title Slider', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Slider', 'required');
        $this->form_validation->set_rules('description', 'Description Slider', 'required');
        
        
        if (empty($_FILES['gambar']['name']))
        {
            $this->form_validation->set_rules('gambar', 'gambar Slider', 'required');
            
        }

       
        // die();

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('backend/slider/tambah');

        }
        else
        {

           
            $data = array();
            


            //upload configuration
            $config['upload_path']   = 'uploads/sliders/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = 1024;
            $config['remove_spaces'] = TRUE;
            $config['encrypt_name'] = TRUE; //Encript Nama file
            $this->load->library('upload', $config);
            //upload file to directory
            if($this->upload->do_upload('gambar')){
                $uploadData = $this->upload->data();
                $uploadedFile = "./uploads/sliders/".$uploadData['file_name'];
                

                $simpanslider = array(
                    'judul'=>$this->input->post('judul'),
                    'title'=>$this->input->post('title'),
                    'deskripsi'=>$this->input->post('deskripsi'),
                    'description'=>$this->input->post('description'),
                    'gambar'=>$uploadedFile,
                    'picture'=>$uploadedFile,
                    'status'=>$this->input->post('status'),
                );
               
                $this->slidermodel->simpan($simpanslider);
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('dashboard/slider');
            }else{
                // $this->upload->display_errors();
                $this->session->set_flashdata('error', 'Gagal, ada masalah');
                redirect('dashboard/slider/tambah');
                //  $this->load->view('backend/slider/tambah2');
            }
               
            
            
        }
        
    }



    public function edit()
    {
        $id_slider = $this->uri->segment(4);
        
        $data['slider']=$this->slidermodel->getById($id_slider);
        // die();
        if ($data['slider']->num_rows() == 0) {
            $this->session->set_flashdata('error', 'Data tidak ada');
			redirect('dashboard/slider');
        } else {
            $data['slider']=$this->slidermodel->getById($id_slider)->row();
            $this->load->view('backend/slider/edit',$data);
        }

    }









    public function hapus()
    {
        $id_slider = $this->input->post('id_slider');

        $dataslider = $this->slidermodel->getById($id_slider)->row();
        $dataslider->gambar;
        unlink($dataslider->gambar);
        // die();
        $this->slidermodel->hapus($id_slider);
        $this->session->set_flashdata('success', 'Berhasil Dihapus');
		redirect('dashboard/slider');
    }





    
}