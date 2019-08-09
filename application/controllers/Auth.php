<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        // $this->load->model('karyawanmodel');
		$this->load->model('adminmodel');
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->helper('cookie');
        
	}
	
	public function index()
	{
		// $cek = 1;
		// if ($cek ==1) {
		// 	redirect('dashboard');
		// } else {
		// 	redirect('login');
		// }
		
		// $this->load->view('backend/index.php');
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
        if ($this->session->has_userdata('id_admin') == TRUE) {
            $this->session->set_flashdata('info', 'Anda telah login');
            redirect('dashboard');
        }
        // echo $_COOKIE['cookie_lenrekap'];
        // die();
		// if (isset($_COOKIE['cookie_lenrekap']) AND ($this->session->has_userdata('id_admin') == TRUE)) {
		// 	redirect('dashboard');
		// }
		
		$this->form_validation->set_rules('username', 'Username', 'required');
    	$this->form_validation->set_rules('password', 'Password', 'required');
		

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('backend/login.php');

		}
		else
		{
			$username_admin = $this->input->post('username');
			$password = md5($this->input->post('password'));
			
			if (empty($remember_me = $this->input->post('remember_me'))) {
					$datacookie =0;
			} else {
					$remember_me = $this->input->post('remember_me');
					$value = md5(rand());
				    $cookie= array(
							'name'   => 'cookie_lenrekap',
							'value'  => $value,
							// 'expire' => '3600',
							'expire' => '50',
						);
					$this->input->set_cookie($cookie);
					$datacookie =	$value;
					
			}
			// die();
			// $this->encryption->initialize(
			// 		array(
			// 				'cipher' => 'aes-128',
			// 				'mode' => 'ctr',
			// 				'key' => 'enha3'
			// 		)
			// );
			// echo $password_admin = $this->encryption->encrypt($password);
			// echo  $this->encryption->decrypt("0a035521e8dc866ea43bfe3f76ba1b53e9e127ff8df95e771ead5d5794f61054e6a73244d926290e383fbe34c2afc727fd36a32f4c984b0bcb16cda85fba726fn8BndVcc0mXb4aidZYGyL6+nonY=");
			$where = array(
				'username_admin =' => $username_admin, 
				'password_admin =' => $password
			);


            // GEt IP address
            function getUserIpAddr(){
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

            // 'User Real IP - '.getUserIpAddr();
			$updateLogin = array(
				'cookie ' => $datacookie, 
				'log_status ' => getUserIpAddr()
			);

			// print_r($updateLogin);

			$response = $this->adminmodel->login($where);
			
			if ($response->num_rows() == 0) {
				$this->session->set_flashdata('error', 'Akun tidak ditemukan');
                redirect('dashboard/login');
			} else {
                $dataadmin = $response->row_array();
                
                if (!empty($dataadmin['log_status'])) {
                    // if ($dataadmin['log_status'] != 0) {
                        $this->session->set_flashdata('error', 'Akun terdeteksi sedang login');
                        redirect('dashboard/logout_all');
                    // }else{
                    //     redirect('dashboard');
                    // }
                }else{
                    $updateLogin = $this->adminmodel->updateWhere($updateLogin,$where);
                    $this->session->set_userdata($dataadmin);
                    $this->session->id_admin;
                    // print_r($datasession);
                    // die();
                    $this->session->set_flashdata('success', 'Anda telah Login');
                    redirect('dashboard');
                }
                
                // redirect('dashboard');
				
			}
			
			
		}
		
	}


	public function ceklogin()
	{
		

	}


	public function logout()
	{
		// Hapus COokie
        delete_cookie('cookie_lenrekap');
		$id = $this->session->userdata('id_admin');
		$updateLogin = array(
				
				'cookie' => 0,
				'log_status' => 0
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
	public function logout_session()
	{
		// Hapus COokie
        delete_cookie('cookie_lenrekap');
		$id = $this->session->userdata('id_admin');
		$updateLogin = array(
				
				'cookie' => 0,
				'log_status' => 0
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

		$this->session->set_flashdata('error', 'Waktu anda habis');
		redirect('dashboard/login');
		
    }
    
    public function logout_all()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
    	$this->form_validation->set_rules('password', 'Password', 'required');
		

		if ($this->form_validation->run() === FALSE)
		{
            $this->load->view('backend/logout.php');
            // redirect('dashboard/login');

		}else{
            // JIka Keluar semua device
            if (isset($_POST)) {
                $username_admin = $this->input->post('username');
                $password = md5($this->input->post('password'));
                $where = array(
                    'username_admin =' => $username_admin, 
                    'password_admin =' => $password
                );
                $updateLogin = array(
                    
                    'cookie' => 0,
                    'log_status' => 0
                );
                $updateLogin = $this->adminmodel->updateWhere($updateLogin,$where);
                $this->session->set_flashdata('success', 'Anda telah logout dari semua device');
                redirect('dashboard/login');
            }
            // JIka Keluar semua device END
        }
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
