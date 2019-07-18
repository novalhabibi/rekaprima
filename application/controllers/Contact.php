<?php

class Contact extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('Gmail');
    }

    public function index() {
        $this->load->view('contact');
    }

    function saveData() {
        $this->load->library('gmail');
        $name = $this->input->post('customerName');
        $email = $this->input->post('customerEmail');
        $subject = $this->input->post('subject');
        $request = $this->input->post('customerRequest');
		$message= '<div style="border:medium solid;">'.'<b>Name: </b>'.$name.'<br /><b>Email: </b>'.$email.'<br /><b>Subject: </b>'.$subject.'<br /><b>Message: </b>'.$request.'</div>';
        $this->gmail->email_send('marketing@lenrekaprima.co.id','info@lenrekaprima.co.id',$subject,$message,$email);
        redirect(base_url('contact'));
    }
}