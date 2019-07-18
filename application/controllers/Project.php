<?php

class Project extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function mainlinedtbaturaja() {
        $this->load->view('project/mainlinedtbaturaja');
    }

    public function mainlinedtcirebon() {
        $this->load->view('project/mainlinedtcirebon');
    }

    public function mainlinedtkedungbanteng() {
        $this->load->view('project/mainlinedtkedungbanteng');
    }

    public function mainlinedtkertapati() {
        $this->load->view('project/mainlinedtkertapati');
    }

    public function mainlinedtkroya() {
        $this->load->view('project/mainlinedtkroya');
    }

    public function mainlinedtmadiun() {
        $this->load->view('project/mainlinedtmadiun');
    }

    public function mainlinedtpurwokerto() {
        $this->load->view('project/mainlinedtpurwokerto');
    }

    public function mainlinedtsolo() {
        $this->load->view('project/mainlinedtsolo');
    }

    public function mainlinedtsolojogja() {
        $this->load->view('project/mainlinedtsolojogja');
    }

    public function mainlineddtmanggarai() {
        $this->load->view('project/mainlineddtmanggarai');
    }

    public function mainlinepsbandartinggi() {
        $this->load->view('project/mainlinepsbandartinggi');
    }

    public function mainlinepsbinjai() {
        $this->load->view('project/mainlinepsbinjai');
    }

    public function mainlinepsmedan() {
        $this->load->view('project/mainlinepsmedan');
    }

    public function urbanapms() {
        $this->load->view('project/urbanapms');
    }

    public function urbanlrt() {
        $this->load->view('project/urbanlrt');
    }

    public function urbanmrt() {
        $this->load->view('project/urbanmrt');
    }
}