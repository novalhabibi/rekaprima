<?php

class Id extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('kategorimaintenancesmodel');
        $this->load->model('maintenancesmodel');
        $this->load->model('projectsmodel');
        $this->load->model('newsmodel');


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


    public function news() {
        
        $jumlah_data = $this->newsmodel->jumlah_data();
        $this->load->library('pagination');
      
        //konfigurasi pagination
        $config['base_url'] = site_url('id/berita/page/'); //site url
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
        
        // $data['berita'] = $this->newsmodel->getAll()->result();
        $this->load->view('id/news/news',$data);


    }


    public function single_news() {
        $slug = $this->uri->segment(4);
        $data['news'] = $this->newsmodel->getBySlug($slug)->row();
        // print_r($data['news']);
        $this->load->view('id/news/single_news',$data);
        // die();
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

    

    public function news_2019_indonesia_railway_conference() {
        $this->load->view('id/news/2019/indonesia-railway-conference-2019');
    }

    public function news_2019_sinergi_industri_dan_pendidikan() {
        $this->load->view('id/news/2019/sinergi-industri-dan-pendidikan');
    }

    public function kontak() {
        $this->load->view('id/contact');
    }

    public function enc()
    {
        echo $data = "hehehe";

         //Encrypt & Decrypt your message
        $key = sodium_crypto_secretbox_keygen();
        echo "<br>";
        $enc = safeEncrypt($data, $key); //generates random  encrypted string (Base64 related)
        echo $enc;
        echo '<br>';
        $dec = safeDecrypt($enc, $key); //decrypts encoded string generated via safeEncrypt function
        echo $dec;
        // print_r(get_loaded_extensions());
    }

    
   

}