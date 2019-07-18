<?php

class Overview extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index() {
        $this->load->view('overview');
    }

    public function aboutus() {
        $this->load->view('aboutus');
    }

    public function sejarah() {
        $this->load->view('sejarah');
    }

    public function visimisi() {
        $this->load->view('visimisi');
    }

    public function strukturorganisasi() {
        $this->load->view('strukturorganisasi');
    }

    public function smart() {
        $this->load->view('smart');
    }

    public function management() {
        $this->load->view('management');
    }

    public function komisaris() {
        $this->load->view('komisaris');
    }

    public function signaling() {
        $this->load->view('bisniskami/signaling.php');
    }

    public function detailsignaling() {
        $this->load->view('bisniskami/detailsignaling.php');
    }
    public function detailsignaling1() {
        $this->load->view('bisniskami/detailsignaling1.php');
    }

    public function detailsignaling2() {
        $this->load->view('bisniskami/detailsignaling2.php');
    }

    public function detailsignaling3() {
        $this->load->view('bisniskami/detailsignaling3.php');
    }

    public function detailsignaling4() {
        $this->load->view('bisniskami/detailsignaling4.php');
    }

    public function detailsignaling5() {
        $this->load->view('bisniskami/detailsignaling5.php');
    }

    public function substation() {
        $this->load->view('bisniskami/substation.php');
    }

    public function detailsubstation() {
        $this->load->view('bisniskami/detailsubstation.php');
    }

    public function detailsubstation1() {
        $this->load->view('bisniskami/detailsubstation1.php');
    }

    public function detailsubstation2() {
        $this->load->view('bisniskami/detailsubstation2.php');
    }

    public function telecommunication() {
        $this->load->view('bisniskami/telecommunication.php');
    }

    public function detailtelecommunication() {
        $this->load->view('bisniskami/detailtelecommunication.php');
    }

    public function galeri() {
        $this->load->view('media/galeri.php');
    }
}