<?php

class News extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function news() {
        $this->load->view('news/news');
    }

    public function news_2019_indonesia_railway_conference() {
        $this->load->view('news/2019/indonesia-railway-conference-2019');
    }

    public function sinergi_industri_dan_pendidikan() {
        $this->load->view('news/2019/sinergi-industri-dan-pendidikan');
    }

}