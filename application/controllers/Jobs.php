<?php

class Jobs extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function tenagaberpengalaman() {
        $this->load->view('jobs/tenagaberpengalaman');
    }

    public function rekrutmen() {
        $this->load->view('jobs/2019/rekrutmen');
    }

}