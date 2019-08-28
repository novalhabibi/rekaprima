<?php

class En extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('kategorimaintenancesmodel');
        $this->load->model('maintenancesmodel');
        $this->load->model('projectsmodel');
        $this->load->model('newsmodel');

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


    public function news() {
        // $data['berita'] = $this->newsmodel->getAll()->result();
        $jumlah_data = $this->newsmodel->jumlah_data();
        $this->load->library('pagination');
      
        //konfigurasi pagination
        $config['base_url'] = site_url('en/news/page/'); //site url
        $config['total_rows'] = $jumlah_data; //total row
        $config['per_page'] = 2;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['berita'] = $this->newsmodel->get_mahasiswa_list($config["per_page"], $data['page'])->result();           
 
        $data['pagination'] = $this->pagination->create_links();
        
        $this->load->view('en/news/news',$data);
    }


    public function single_news() {
        $slug = $this->uri->segment(4);
        $data['news'] = $this->newsmodel->getBySlugTitle($slug)->row();
        // print_r($data['news']);
        // die();
        $this->load->view('en/news/single_news',$data);
        // die();
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