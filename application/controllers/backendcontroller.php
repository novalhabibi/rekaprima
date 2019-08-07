<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class backendcontroller extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        // $this->load->model('karyawanmodel');
		$this->load->model('adminmodel');
		$this->load->library('form_validation');
        
	}
	
	public function index()
	{
		$cek = 1;
		if ($cek ==1) {
			redirect('dashboard');
		} else {
			redirect('login');
		}
		
		// $this->load->view('backend/index.php');
	}
	
	public function dashboard()
	{
		$this->load->view('backend/index.php');
	}
	public function log_activity()
	{
		$this->load->view('backend/log_activity.php');
	}
	public function tabel()
	{
		$this->load->view('backend/table_dynamic.php');
	}

	public function form_validation()
	{
		$this->load->view('backend/form_validation.php');
	}
	public function tambah()
	{
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
		
			$this->load->view('backend/admin/tambah.php');
		}
		else
		{
			// print_r($_POST);

			
		}
	}
    
	public function login()
	{
		
		$this->form_validation->set_rules('username', 'Username', 'required');
    	$this->form_validation->set_rules('password', 'Password', 'required');
		

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('backend/login.php');

		}
		else
		{
			
			$username_admin = $this->input->post('username');
			$password_admin = md5($this->input->post('password'));
			$where = array(
				'username_admin =' => $username_admin, 
				'password_admin =' => $password_admin
			);
			$response = $this->adminmodel->login($where);
			if ($response->num_rows() == 0) {
				echo "Tidak ada";
			} else {
				$dataadmin = $response->row_array();
				
				$this->session->set_userdata($dataadmin);
				echo $this->session->id_admin;
				// print_r($datasession);
			}
			
			
			die();
			$this->session->set_flashdata('success', 'Anda telah Login');
			redirect('dashboard');
		}
		
	}
	// public function ceklogin()
	// {
	// 	$this->form_validation->set_rules('username', 'Username', 'required');
    // 	$this->form_validation->set_rules('password', 'Password', 'required');
	// 	$this->load->view('backend/login.php');

	// 	if ($this->form_validation->run() === FALSE)
	// 	{
	// 		$this->load->view('templates/header', $data);
	// 		$this->load->view('news/create');
	// 		$this->load->view('templates/footer');

	// 	}
	// 	else
	// 	{
	// 		$this->news_model->set_news();
	// 		$this->load->view('news/success');
	// 	}

	// }


	public function logout()
	{
		unset(
					$_SESSION['some_name'],
					$_SESSION['another_name']
			);

		$this->session->set_flashdata('success', 'Anda telah logout');
		redirect('dashboard/login');
		
	}
    
	public function form()
	{
		$this->load->view('backend/form.php');
    }
	public function table()
	{
		$this->load->view('backend/table.php');
    }
    

}
