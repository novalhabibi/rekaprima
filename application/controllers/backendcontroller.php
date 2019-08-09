<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backendcontroller extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        // $this->load->model('karyawanmodel');
		$this->load->model('adminmodel');
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->helper('cookie');

		if (!isset($_COOKIE['cookie_lenrekap']) AND ($this->session->has_userdata('id_admin') == FALSE )) {
			// cek realtime log_status admin
			$this->session->set_flashdata('error', 'Sessi anda telah habis');
			redirect('dashboard/logout_session');
		}
		$cek = $this->adminmodel->getById($this->session->id_admin)->row();
		$ip_addres= $this->getUserIpAddr();
		if ($cek->log_status == $ip_addres ) {
		}else{
			$this->session->set_flashdata('error', 'Silahkan login ulang');
			redirect('dashboard/logout');
		}
        
	}
	
	public function index()
	{
	
		$this->load->view('backend/index.php');
		
		
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
    
	// public function login()
	// {
	// 	if (isset($_COOKIE['cookie_lenrekap'])) {
	// 		redirect('dashboard');
	// 	}
		
	// 	$this->form_validation->set_rules('username', 'Username', 'required');
    // 	$this->form_validation->set_rules('password', 'Password', 'required');
		

	// 	if ($this->form_validation->run() === FALSE)
	// 	{
	// 		$this->load->view('backend/login.php');

	// 	}
	// 	else
	// 	{
	// 		$username_admin = $this->input->post('username');
	// 		$password = md5($this->input->post('password'));
			
	// 		if (empty($remember_me = $this->input->post('remember_me'))) {
	// 				$datacookie =0;
	// 		} else {
	// 				$remember_me = $this->input->post('remember_me');
	// 				$value = md5(rand());
	// 			    $cookie= array(
	// 						'name'   => 'cookie_lenrekap',
	// 						'value'  => $value,
	// 						'expire' => '3600',
	// 					);
	// 				$this->input->set_cookie($cookie);
	// 				$datacookie =	$value;
					
	// 		}
	// 		// die();
	// 		// $this->encryption->initialize(
	// 		// 		array(
	// 		// 				'cipher' => 'aes-128',
	// 		// 				'mode' => 'ctr',
	// 		// 				'key' => 'enha3'
	// 		// 		)
	// 		// );
	// 		// echo $password_admin = $this->encryption->encrypt($password);
	// 		// echo  $this->encryption->decrypt("0a035521e8dc866ea43bfe3f76ba1b53e9e127ff8df95e771ead5d5794f61054e6a73244d926290e383fbe34c2afc727fd36a32f4c984b0bcb16cda85fba726fn8BndVcc0mXb4aidZYGyL6+nonY=");
	// 		$where = array(
	// 			'username_admin =' => $username_admin, 
	// 			'password_admin =' => $password
	// 		);

	// 		$updateLogin = array(
	// 			'cookie ' => $datacookie, 
	// 			'log_status ' => 1
	// 		);

	// 		// print_r($updateLogin);

	// 		$response = $this->adminmodel->login($where);
	// 		$updateLogin = $this->adminmodel->updateWhere($updateLogin,$where);
	// 		if ($response->num_rows() == 0) {
	// 			echo "Tidak ada";
	// 		} else {
	// 			$dataadmin = $response->row_array();
				
	// 			$this->session->set_userdata($dataadmin);
	// 			$this->session->id_admin;
	// 			// print_r($datasession);
				
	// 		}
			
			
	// 		// die();
	// 		$this->session->set_flashdata('success', 'Anda telah Login');
	// 		redirect('dashboard');
	// 	}
		
	// }


	 // GEt IP address
	public function getUserIpAddr(){
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			//ip from share internet
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			//ip pass from proxy
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}else{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}


	public function logout()
	{
		// print_r($this->session->userdata());
		delete_cookie('cookie_lenrekap');
		$id = $this->session->userdata('id_admin');
		$updateLogin = array(
				
				'log_status ' => 0
			);
		$updateLogin = $this->adminmodel->updateWhereId($updateLogin,$id);
		// die();
		unset(
					$_SESSION['id_admin'],
					$_SESSION['log_status'],
					$_SESSION['username_admin'],
					$_SESSION['password_admin'],
					$_SESSION['level_admin'],
					$_SESSION['nama_admin']
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
