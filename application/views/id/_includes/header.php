<?php
$uri = $this->uri->segment(1);

$link = $this->uri->segment(2);
$konten = $this->uri->segment(3);
switch ($link) {
    case 'siapa_kami':
        $link = "en/who_we_are";
        break;
    case 'sejarah':
        $link = "en/history";
        break;

    case 'visi_misi':
        $link = "en/vision_mission";
        break;
    case 'struktur_organisasi':
        $link = "en/organization_structure";
        break;
    case 'menejemen':
        $link = "en/management";
        break;
        
    case 'komisaris':
        $link = "en/commissioners";
        break;
    case 'rekrutmen':
        $link = "en/rekrutmen";
        break;
    case 'galeri':
        $link = "en/gallery";
        break;
    case 'kontak':
        $link = "en/contact";
        break;
    case 'berita':
        $link = "en/news";
        break;
    
    default:
        $link = "en/home";
        break;
}


$CI = & get_instance();
$CI->load->model('kategorimaintenancesmodel');
$CI->load->model('maintenancesmodel');
$CI->load->model('kategoriprojectsmodel');
$CI->load->model('projectsmodel');
$CI->load->model('newsmodel');


$result = $CI->kategorimaintenancesmodel->getAll();
$maintenances = $CI->maintenancesmodel->getAll();
$kategoriprojects = $CI->kategoriprojectsmodel->getAll();
$projects = $CI->projectsmodel->getAll();
$datanews = $CI->newsmodel->getAll();

// Ini Perulangan Kateori Maintenance

foreach ($result->result() as $link_kategori) {
    if ($link_kategori->link_kategori_maintenance == $konten) {
        $link="en/category/".$link_kategori->link_kategori_maintenance_en;
    }
}
// Ini Perulangan Detail Maintenance

foreach ($maintenances->result() as $maintenance) {
    if ($maintenance->link_maintenance == $konten) {
        $link="en/maintenance/".$maintenance->link_maintenance_en;
    }
}

// Ini Perulangan Projects

foreach ($projects->result() as $project) {
    if ($project->link_project == $konten) {
        $link="en/project/".$project->link_project_en;
    }
}


// Ini Perulangan News
foreach ($datanews->result() as $news) {
    if ($news->slug_judul == $konten) {
        $link="en/news/".$news->slug_title;
    }
}
?>

<header id="header" class="header-no-border-bottom"
    data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 10, 'stickySetTop': '0px', 'stickyChangeLogo': false}">
    <div class="header-body">
        <div class="header-container">
            <div class="header-row">
                <div class="header-column">
                </div>
            </div>
        </div>
        <div class="header-container header-nav header-nav-center header-nav-bar header-nav-bar-primary">
            <div class="header-logo-collapse-nav">
                <a href="#">
                    <img alt="Len Rekaprima Semesta" width="90" height="40" data-sticky-width="82"
                        data-sticky-height="40" data-sticky-top="33"
                        src="<?php echo base_url('assets/img/lrs-logo.png') ?>">
                </a>
            </div>
            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                <i class="fa fa-bars"></i>
            </button>
            <div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse"
                style="padding-top:3px;">
                <nav>
                    <ul class="nav nav-pills container" id="mainNav">
                        <li style="float: left">
                            <div class="logo col-md-3 logo-collapse-nav">
                                <a href="<?php echo base_url('id/beranda') ?>">
                                    <img alt="Len Rekaprima Semesta" width="110" height="50" data-sticky-width="82"
                                        data-sticky-height="40" data-sticky-top="33"
                                        src="<?php echo base_url('assets/img/lrs-logo2.png') ?>">
                                </a>
                            </div>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url('id/beranda') ?>">
                                <i class="fa fa-home" style="font-size:25px;"></i>
                            </a>
                        </li>
                        <li class="dropdown dropdown-mega">
                            <a href="#" class="dropdown-toggle">Profil</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="dropdown-mega-content container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h3><b>Profil</b></h3>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="dropdown-mega-sub-title">
                                                    <h4>Profil Perusahaan</h4>
                                                </span>
                                                <ul class="dropdown-mega-sub-nav">
                                                    <li><a href="<?php echo base_url('id/siapa_kami') ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            Siapa Kami</a></li>
                                                    <li><a href="<?php echo base_url('id/sejarah') ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            Sejarah Len Rekaprima
                                                            Semesta</a></li>
                                                    <li><a href="<?php echo base_url('id/visi_misi') ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i> Visi
                                                            &amp; Misi</a></li>
                                                    <li><a href="<?php echo base_url('id/struktur_organisasi') ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            Struktur Organisasi</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="dropdown-mega-sub-title">
                                                    <h4>Pemimpin Kami</h4>
                                                </span>
                                                <ul class="dropdown-mega-sub-nav">
                                                    <li><a href="<?php echo base_url('id/management') ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            Manajemen</a></li>
                                                    <li><a href="<?php echo base_url('id/komisaris') ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            Dewan Komisaris</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-mega">
                            <a href="#" class="dropdown-toggle">Bisnis Kami</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="dropdown-mega-content container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h3><b>Bisnis Kami</b></h3>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="dropdown-mega-sub-title">
                                                    <h4>Maintenance</h4>
                                                </span>
                                                <ul class="dropdown-mega-sub-nav">
                                                    <?php
                                                            foreach ($result->result() as $kategorimaintenance) {
                                                              
                                                            ?>
                                                    <li><a
                                                            href="<?php echo base_url('id/kategori/') ?><?=  $kategorimaintenance->link_kategori_maintenance ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            <?=  $kategorimaintenance->nama_kategori_maintenance ?></a>
                                                    </li>
                                                    <?php
                                                            }
                                                            ?>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-mega">
                            <a href="#" class="dropdown-toggle">Proyek</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="dropdown-mega-content container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h3><b>Proyek</b></h3>
                                            </div>

                                            <?php 
                                            foreach ($kategoriprojects->result() as $kategoriproject) {
                                                
                                            ?>
                                            <div class="col-md-4">
                                                <span class="dropdown-mega-sub-title">
                                                    <h4><?= $kategoriproject->nama_kategori_project ?></h4>
                                                </span>
                                                <ul class="dropdown-mega-sub-nav">
                                                    <?php
                                                    $projects = $CI->projectsmodel->getAllById($kategoriproject->id_kategori_project);
                                                    // Ini Perulangan Project
                                                    foreach ($projects as $project) {
                                                        
                                                    ?>
                                                    <li><a
                                                            href="<?php echo base_url('id/projek/') ?><?=  $project->link_project ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                           <?=  $project->nama_project ?></a></li>
                                                    <?php
                                                    }
                                                    ?>

                                                </ul>
                                            </div>
                                            <?php
                                           # code...
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-mega">
                            <a href="#" class="dropdown-toggle">Jobs</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="dropdown-mega-content container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h3><b>Jobs</b></h3>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="dropdown-mega-sub-title">
                                                    <h4>Penerimaan Baru</h4>
                                                </span>
                                                <ul class="dropdown-mega-sub-nav">
                                                    <li><a href="#" target="_self"><i class="fa fa-chevron-right"
                                                                aria-hidden="true"></i> Magang</a></li>
                                                    <li><a href="#" target="_self"><i class="fa fa-chevron-right"
                                                                aria-hidden="true"></i> Lulusan Baru</a></li>
                                                    <li><a href="<?php echo base_url('id/rekrutmen') ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            Tenaga Berpengalaman</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-mega">
                            <a href="#" class="dropdown-toggle">Media</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="dropdown-mega-content container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h3><b>Media</b></h3>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="dropdown-mega-sub-title">
                                                    <h4>Media Digital</h4>
                                                </span>
                                                <ul class="dropdown-mega-sub-nav">
                                                    <li><a href="<?php echo base_url('id/galeri') ?>" target="_self"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            Galeri</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="dropdown-mega-sub-title">
                                                    <h4>Berita Terbaru</h4>
                                                </span>
                                                <ul class="dropdown-mega-sub-nav">
                                                    <li><a href="<?php echo base_url('id/berita') ?>" target="_self"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            Berita</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url('id/contact') ?>">Contact</a>
                        </li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li>
                            <a href="#" class="dropdown-menu-toggle" id="dropdownLanguage" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true">
                                <img src="<?php echo base_Url('assets/img/blank.gif') ?>" class="flag flag-id"
                                    alt="Indonesia" /><span> Indonesia</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
                                <li>
                                    <a href="<?php echo base_url("$link") ?>"><img
                                            src="<?php echo base_Url('assets/img/blank.gif') ?>" class="flag flag-gb"
                                            alt="English" /> English</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>