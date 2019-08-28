<?php
$uri = $this->uri->segment(1);
$link = $this->uri->segment(2);
$konten = $this->uri->segment(3);
$detail = $this->uri->segment(4);
// echo $konten = $this->uri->segment(2);

switch ($link) {
    case 'who_we_are':
        $link = "id/siapa_kami";
        break;
    case 'history':
        $link = "id/sejarah";
        break;
    case 'vision_mission':
        $link = "id/visi_misi";
        break;
    case 'organization_structure':
        $link = "id/struktur_organisasi";
        break;
    case 'management':
        $link = "id/menejemen";
        break;
    case 'commissioners':
        $link = "id/komisaris";
        break;
    case 'rekrutmen':
        $link = "id/rekrutmen";
        break;
    case 'gallery':
        $link = "id/galeri";
        break;
    case 'contact':
        $link = "id/kontak";
        break;
    case 'news':
        $link = "id/berita";
        break;
    
    default:
        $link = "id/beranda";
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

foreach ($result->result() as $link_kategori) {
    if ($link_kategori->link_kategori_maintenance_en == $konten) {
        $link="id/kategori/".$link_kategori->link_kategori_maintenance;
    }
}
// Ini Perulangan Detail Maintenance

foreach ($maintenances->result() as $maintenance) {
    if ($maintenance->link_maintenance_en == $konten) {
        $link="id/maintenance/".$maintenance->link_maintenance;
    }
}


// Ini Perulangan Project
foreach ($projects->result() as $project) {
    if ($project->link_project_en == $konten) {
        $link="id/projek/".$project->link_project;
    }
}


// Ini Perulangan News
foreach ($datanews->result() as $news) {
    if ($news->slug_title == $detail) {
        $link="id/berita/detail/".$news->slug_judul;
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
                                <a href="<?php echo base_url('en/home') ?>">
                                    <img alt="Len Rekaprima Semesta" width="110" height="50" data-sticky-width="82"
                                        data-sticky-height="40" data-sticky-top="33"
                                        src="<?php echo base_url('assets/img/lrs-logo2.png') ?>">
                                </a>
                            </div>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url('en/home') ?>">
                                <i class="fa fa-home" style="font-size:25px;"></i>
                            </a>
                        </li>
                        <li class="dropdown dropdown-mega">
                            <a href="#" class="dropdown-toggle">Profile</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="dropdown-mega-content container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h3><b>Profile</b></h3>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="dropdown-mega-sub-title">
                                                    <h4>Company Profile</h4>
                                                </span>
                                                <ul class="dropdown-mega-sub-nav">
                                                    <li><a href="<?php echo base_url('en/who_we_are') ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i> Who
                                                            We Are</a></li>
                                                    <li><a href="<?php echo base_url('en/history') ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            History Len Rekaprima
                                                            Semesta</a></li>
                                                    <li><a href="<?php echo base_url('en/vision_mission') ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            Vision &amp; Mission</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url('en/organization_structure') ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            Organization
                                                            Structure</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="dropdown-mega-sub-title">
                                                    <h4>Our Leader</h4>
                                                </span>
                                                <ul class="dropdown-mega-sub-nav">
                                                    <li><a href="<?php echo base_url('en/management') ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            Management</a></li>
                                                    <li><a href="<?php echo base_url('en/commissioners') ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            Board of
                                                            Commissioners</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-mega">
                            <a href="#" class="dropdown-toggle">Our Business</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="dropdown-mega-content container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h3><b>Our Business</b></h3>
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
                                                            href="<?php echo base_url('en/category/') ?><?=  $kategorimaintenance->link_kategori_maintenance_en ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            <?=  $kategorimaintenance->name_kategori_maintenance_en ?></a>
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
                            <a href="#" class="dropdown-toggle">Project</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="dropdown-mega-content container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h3><b>Project</b></h3>
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
                                                            href="<?php echo base_url('en/project/') ?><?=  $project->link_project ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                           <?=  $project->name_project_en ?></a></li>
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
                                                    <h4>New Acceptance</h4>
                                                </span>
                                                <ul class="dropdown-mega-sub-nav">
                                                    <li><a href="#" target="_self"><i class="fa fa-chevron-right"
                                                                aria-hidden="true"></i> Internship</a></li>
                                                    <li><a href="#" target="_self"><i class="fa fa-chevron-right"
                                                                aria-hidden="true"></i> New Graduate</a></li>
                                                    <li><a href="<?php echo base_url('en/rekrutmen') ?>"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            Experienced Staff</a>
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
                                                    <li><a href="#" target="_self"><i class="fa fa-chevron-right"
                                                                aria-hidden="true"></i> Gallery</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="dropdown-mega-sub-title">
                                                    <h4>Latest News</h4>
                                                </span>
                                                <ul class="dropdown-mega-sub-nav">
                                                    <li><a href="<?php echo base_url('en/news') ?>" target="_self"><i
                                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                                            News</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url('en/contact') ?>">Contact</a>
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
                                <img src="<?php echo base_url('assets/img/blank.gif') ?>" class="flag flag-gb"
                                    alt="English" /> <span> English</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
                                <li>
                                    <a href="<?php echo base_url("$link") ?>"><img
                                            src="<?php echo base_url('assets/img/blank.gif') ?>" class="flag flag-id"
                                            alt="Indonesia" /> Indonesia</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>