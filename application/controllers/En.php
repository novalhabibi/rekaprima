<?php

class En extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('kategorimaintenancesmodel');
         $this->load->model('maintenancesmodel');
         $this->load->model('projectsmodel');
    }

    public function home(){
         $data = array(
            'kategorimaintenances' => $this->kategorimaintenancesmodel->getAll(), 
        );
        $this->load->view('en/home',$data);
    }

    public function who_we_are(){
        $this->load->view('en/who_we_are');
    }

    public function history(){
        $this->load->view('en/history');
    }

    public function vision_mission(){
        $this->load->view('en/visionmission');
    }

    public function organization_structure(){
        $this->load->view('en/organizationstructure');
    }

    public function management(){
        $this->load->view('en/management');
    }

    public function commissioners(){
        $this->load->view('en/commissioners');
    }

    public function categorymaintenance() {
        $this->load->view('en/ourbusiness/category_maintenance');
    }

    public function detail_maintenance() {
        $link = $this->uri->segment(3);
        $data['datadetailmaintenances'] = $this->maintenancesmodel->getByLink($link);
        // print_r($datadetailmaintenances);
        // die();
        $this->load->view('en/ourbusiness/detailmaintenance',$data);
    }

    public function project() {
        $link = $this->uri->segment(3);
        $data['datadetailprojects'] = $this->projectsmodel->getByLink($link);
        // print_r($data['datadetailprojeks']);
        // die();
        $this->load->view('en/project/detailproject',$data);
    }



    public function signalling_systems_en() {
        $this->load->view('en/ourbusiness/signaling');
    }

    public function len_signalling_systems() {
        $this->load->view('en/ourbusiness/detailsignaling');
    }

    public function len_ctc() {
        $this->load->view('en/ourbusiness/detailsignaling1');
    }

    public function len_local_interface() {
        $this->load->view('en/ourbusiness/detailsignaling2');
    }

    public function len_axle_counter() {
        $this->load->view('en/ourbusiness/detailsignaling3');
    }

    public function len_led_signal() {
        $this->load->view('en/ourbusiness/detailsignaling4');
    }

    public function len_mdp() {
        $this->load->view('en/ourbusiness/detailsignaling5');
    }

    public function substations_systems_en() {
        $this->load->view('en/ourbusiness/substation');
    }

    public function len_substations_systems() {
        $this->load->view('en/ourbusiness/detailsubstation');
    }

    public function len_link_brake_device() {
        $this->load->view('en/ourbusiness/detailsubstation1');
    }

    public function len_visual_control_panel() {
        $this->load->view('en/ourbusiness/detailsubstation2');
    }

    public function telecommunication_systems_en() {
        $this->load->view('en/ourbusiness/telecommunication');
    }

    public function len_telecommunication_systems() {
        $this->load->view('en/ourbusiness/detailtelecommunication');
    }

    public function project_baturaja_martapura() {
        $this->load->view('en/project/mainlinedtbaturaja');
    }

    public function project_cirebon_surabaya() {
        $this->load->view('en/project/mainlinedtcirebon');
    }

    public function project_kedungbanteng_madiun() {
        $this->load->view('en/project/mainlinedtkedungbanteng');
    }

    public function project_kertapati_prabumulih() {
        $this->load->view('en/project/mainlinedtkertapati');
    }

    public function project_kroya_kutoarjo() {
        $this->load->view('en/project/mainlinedtkroya');
    }

    public function project_madiun_jombang() {
        $this->load->view('en/project/mainlinedtmadiun');
    }

    public function project_purwokerto_kroya() {
        $this->load->view('en/project/mainlinedtpurwokerto');
    }

    public function project_solo_kedungbanteng() {
        $this->load->view('en/project/mainlinedtsolo');
    }

    public function project_solo_jogja() {
        $this->load->view('en/project/mainlinedtsolojogja');
    }

    public function project_manggarai_cikarang() {
        $this->load->view('en/project/mainlineddtmanggarai');
    }

    public function project_bandartinggi_kualatanjung() {
        $this->load->view('en/project/mainlinepsbandartinggi');
    }

    public function project_binjai_besitang() {
        $this->load->view('en/project/mainlinepsbinjai');
    }

    public function project_medan_kualanamu() {
        $this->load->view('en/project/mainlinepsmedan');
    }

    public function project_apms() {
        $this->load->view('en/project/urbanapms');
    }

    public function project_lrt() {
        $this->load->view('en/project/urbanlrt');
    }

    public function project_mrt() {
        $this->load->view('en/project/urbanmrt');
    }

    public function rekrutmen() {
        $this->load->view('en/jobs/rekrutmen');
    }

    public function gallery() {
        $this->load->view('en/media/gallery');
    }

    public function news() {
        $this->load->view('en/news/news');
    }

    public function news_2019_indonesia_railway_conference() {
        $this->load->view('en/news/2019/indonesia-railway-conference-2019');
    }

    public function news_2019_synergy_industrial_and_educational() {
        $this->load->view('en/news/2019/synergy-industrial-and-educational');
    }

    public function contact() {
        $this->load->view('en/contact');
    }
}