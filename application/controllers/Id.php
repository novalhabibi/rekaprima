<?php

class Id extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('kategorimaintenancesmodel');
        $this->load->model('maintenancesmodel');
        $this->load->model('projectsmodel');


    }

    public function beranda() {
     
        $this->load->view('id/beranda');
    }

    public function siapa_kami() {
        $this->load->view('id/siapa_kami');
    }

    public function sejarah() {
        $this->load->view('id/sejarah');
    }

    public function visi_misi() {
        $this->load->view('id/visimisi');
    }

    public function struktur_organisasi() {
        $this->load->view('id/strukturorganisasi');
    }

    public function menejemen() {
        $this->load->view('id/management');
    }

    public function komisaris() {
        $this->load->view('id/komisaris');
    }

    public function kategorimaintenance() {

        $link = $this->uri->segment(3);
        $datakategorimaintenances = $this->kategorimaintenancesmodel->getByLink($link);

        $this->load->view('id/bisniskami/kategori_maintenances');
    }

    public function detail_maintenance() {
        $link = $this->uri->segment(3);
        $data['datadetailmaintenances'] = $this->maintenancesmodel->getByLink($link);
        // print_r($datadetailmaintenances);
        // die();
        $this->load->view('id/bisniskami/detailmaintenance',$data);
    }



    public function projek() {
        $link = $this->uri->segment(3);
        $data['datadetailprojeks'] = $this->projectsmodel->getByLink($link);
        // print_r($data['datadetailprojeks']);
        // die();
        $this->load->view('id/project/detailprojek',$data);
    }


    public function signalling_systems() {
        $this->load->view('id/bisniskami/signaling');
    }

    public function len_signalling_systems() {
        $this->load->view('id/bisniskami/detailsignaling');
    }
    

    public function len_ctc() {
        $this->load->view('id/bisniskami/detailsignaling1');
    }

    public function len_local_interface() {
        $this->load->view('id/bisniskami/detailsignaling2');
    }

    public function len_axle_counter() {
        $this->load->view('id/bisniskami/detailsignaling3');
    }

    public function len_led_signal() {
        $this->load->view('id/bisniskami/detailsignaling4');
    }

    public function len_mdp() {
        $this->load->view('id/bisniskami/detailsignaling5');
    }

    public function substations_systems() {
        $this->load->view('id/bisniskami/substation');
    }

    public function len_substations_systems() {
        $this->load->view('id/bisniskami/detailsubstation');
    }

    public function len_link_brake_device() {
        $this->load->view('id/bisniskami/detailsubstation1');
    }

    public function len_visual_control_panel() {
        $this->load->view('id/bisniskami/detailsubstation2');
    }

    public function telecommunication_systems() {
        $this->load->view('id/bisniskami/telecommunication');
    }

    public function len_telecommunication_systems() {
        $this->load->view('id/bisniskami/detailtelecommunication');
    }

    public function proyek_baturaja_martapura() {
        $this->load->view('id/project/mainlinedtbaturaja');
    }

    public function proyek_cirebon_surabaya() {
        $this->load->view('id/project/mainlinedtcirebon');
    }

    public function proyek_kedungbanteng_madiun() {
        $this->load->view('id/project/mainlinedtkedungbanteng');
    }

    public function proyek_kertapati_prabumulih() {
        $this->load->view('id/project/mainlinedtkertapati');
    }

    public function proyek_kroya_kutoarjo() {
        $this->load->view('id/project/mainlinedtkroya');
    }

    public function proyek_madiun_jombang() {
        $this->load->view('id/project/mainlinedtmadiun');
    }

    public function proyek_purwokerto_kroya() {
        $this->load->view('id/project/mainlinedtpurwokerto');
    }

    public function proyek_solo_kedungbanteng() {
        $this->load->view('id/project/mainlinedtsolo');
    }

    public function proyek_solo_jogja() {
        $this->load->view('id/project/mainlinedtsolojogja');
    }

    public function proyek_manggarai_cikarang() {
        $this->load->view('id/project/mainlineddtmanggarai');
    }

    public function proyek_bandartinggi_kualatanjung() {
        $this->load->view('id/project/mainlinepsbandartinggi');
    }

    public function proyek_binjai_besitang() {
        $this->load->view('id/project/mainlinepsbinjai');
    }

    public function proyek_medan_kualanamu() {
        $this->load->view('id/project/mainlinepsmedan');
    }

    public function proyek_apms() {
        $this->load->view('id/project/urbanapms');
    }

    public function proyek_lrt() {
        $this->load->view('id/project/urbanlrt');
    }

    public function proyek_mrt() {
        $this->load->view('id/project/urbanmrt');
    }

    public function rekrutmen() {
        $this->load->view('id/jobs/rekrutmen');
    }

    public function galeri() {
        $this->load->view('id/media/galeri');
    }

    public function news() {
        $this->load->view('id/news/news');
    }

    public function news_2019_indonesia_railway_conference() {
        $this->load->view('id/news/2019/indonesia-railway-conference-2019');
    }

    public function news_2019_sinergi_industri_dan_pendidikan() {
        $this->load->view('id/news/2019/sinergi-industri-dan-pendidikan');
    }

    public function kontak() {
        $this->load->view('id/contact');
    }
}