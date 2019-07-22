<?php
$link = $this->uri->segment(3);


$CI = & get_instance();
$CI->load->model('kategorimaintenancesmodel');
$CI->load->model('maintenancesmodel');
$result = $CI->kategorimaintenancesmodel->getByLink($link);
$maintenancewherecategory = $CI->maintenancesmodel->getByIdKategori($result->id_kategori_maintenance);


?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <!-- start: Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Lenrekaprima.co.id" />
    <meta name="keywords" content="Lenrekaprima.co.id" />
    <meta name="author" content="PT Len Rekaprima Semesta" />
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="PT Len Rekaprima Semesta">
    <meta property="og:description" content="Sebagai Anak Perusahaan PT.Len Industri (Persero)">
    <meta property="og:url" content="https://lenrekaprima.co.id/">
    <meta property="og:image" content="<?php echo base_url('assets/img/lrs-logo.png') ?>">
    <meta property="business:contact_data:street_address" content="Jl. Soekarno Hatta No. 293">
    <meta property="business:contact_data:locality" content="Bandung">
    <meta property="business:contact_data:region" content="Jawa Barat">
    <meta property="business:contact_data:postal_code" content="40235">
    <meta property="business:contact_data:country_name" content="Indonesia">
    <!-- end: Meta -->
    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="google-site-verification" content="8Bx47pDr8O2O2xjd70u0QNe8eYR9qqEacilPvkYyKfE" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" type="image/x-icon" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/animate/animate.min.css') ?>">
    <link rel="stylesheet"
        href="<?php echo base_url('assets/vendor/simple-line-icons/css/simple-line-icons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.theme.default.min.css') ?>">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/theme-elements.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/theme-blog.css') ?>">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/default.css') ?>">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>">

    <title>Signalling System | PT Len Rekaprima Semesta</title>

    <!-- Head Libs -->
    <script src="<?php echo base_url('assets/vendor/modernizr/modernizr.min.js') ?>"></script>

    <!-- Slider Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/slider-bootstrap/slider-bootstrap.css') ?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-20166082-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-20166082-2');
    </script>
</head>

<body>
    <div class="body sticky-header-active">
        <?php $this->load->view('id/_includes/header.php') ?>

        <div class="main" role="main">

            <section class="page-header page-header-custom-background"
                style="background-image:url(<?php echo base_url('assets/media/image/signalling2.jpg') ?>);height:250px;">

            </section>

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="siderbar">
                            <div class="pin-wrapper">
                                <h3 class="mb-none"><?= $result->nama_kategori_maintenance ?></h3>
                                <div class="divider divider-primary divider-small mb-xl">
                                    <hr>
                                </div>
                                <ul class="nav nav-list mb-xl show-bg-active">
                                    <?php
                                    foreach ($maintenancewherecategory as $maintenancekategori) {
                                      
                                    
                                    ?>
                                    <li><a data-hash="" data-hash-offset="110"
                                            href="<?php echo base_url('id/maintenance/') ?><?= $maintenancekategori->link_maintenance ?> "><?= $maintenancekategori->nama_maintenance ?></a>
                                    </li>
                                    <?php
                                      # code...
                                    }
                                    
                                    ?>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-lg-12 col-md-12" style="height: 200px;">
                                <h3><?= $result->nama_kategori_maintenance ?></h3>
                                <p style="text-align: justify;">Signalling Systems adalah sistem yang digunakan untuk
                                    mengarahkan lalu lintas kereta api. Kereta bergerak di rel tetap, membuatnya secara
                                    unik rentan terhadap tabrakan.</p>
                                <a href="<?php echo base_url('overview/detailsignaling') ?>"
                                    class="btn btn-primary btn-block"
                                    style="border-color: #0068a5 #0068a5 #035381">Details</a>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="row">
                                    <div class="col-md-4" style="height: 500px;">
                                        <div class="thumb-info custom-thumb-info-4"><img
                                                src="<?php echo base_url('assets/media/image/len_ctc.jpg') ?>"
                                                class="img-responsive" caption="false" width="369" height="184"></div>
                                        <h3>LEN CTC</h3>
                                        <p style="text-align: justify;">Len Centralized Traffic Control (CTC) adalah
                                            sistem terintegrasi untuk mengendalikan dan mengawasi sistem persinyalan dan
                                            atau jenis peralatan di stasiun dari stasiun pusat.</p>
                                        <a href="<?php echo base_url('overview/detailsignaling1') ?>"
                                            class="btn btn-primary btn-block"
                                            style="border-color: #0068a5 #0068a5 #035381">Details</a>
                                    </div>
                                    <div class="col-md-4" style="height: 500px;">
                                        <div class="thumb-info custom-thumb-info-4"><img
                                                src="<?php echo base_url('assets/media/image/len_local_interface.jpg') ?>"
                                                class="img-responsive" caption="false" width="369" height="184"></div>
                                        <h3>LEN LOCAL INTERFACE</h3>
                                        <p style="text-align: justify;">Len Local Interface adalah operator antarmuka
                                            yang dapat terhubung ke berbagai sistem yang saling mengunci.</p>
                                        <a href="<?php echo base_url('overview/detailsignaling2') ?>"
                                            class="btn btn-primary btn-block"
                                            style="border-color: #0068a5 #0068a5 #035381">Details</a>
                                    </div>
                                    <div class="col-md-4" style="height: 500px;">
                                        <div class="thumb-info custom-thumb-info-4"><img
                                                src="<?php echo base_url('assets/media/image/len_axle_counter.jpg') ?>"
                                                class="img-responsive" caption="false" width="369" height="184"></div>
                                        <h3>Axle Counter Len - Altpro</h3>
                                        <p style="text-align: justify;">Axle Counter adalah perangkat di kereta yang
                                            mendeteksi kereta yang lewat alih-alih sirkuit trek Counting head (atau
                                            'titik deteksi') dipasang di setiap ujung bagian.</p>
                                        <a href="<?php echo base_url('overview/detailsignaling3') ?>"
                                            class="btn btn-primary btn-block"
                                            style="border-color: #0068a5 #0068a5 #035381">Details</a>
                                    </div>
                                    <div class="col-md-4" style="height: 500px;">
                                        <div class="thumb-info custom-thumb-info-4"><img
                                                src="<?php echo base_url('assets/media/image/len_led_signal.jpg') ?>"
                                                class="img-responsive" caption="false" width="369" height="184"></div>
                                        <h3>LEN LED SIGNAL</h3>
                                        <p style="text-align: justify;">LED Signal adalah sistem pensinyalan yang
                                            memberi perintah kepada masinis berdasarkan warna cahaya yang aktif pada
                                            suatu waktu.</p>
                                        <a href="<?php echo base_url('overview/detailsignaling4') ?>"
                                            class="btn btn-primary btn-block"
                                            style="border-color: #0068a5 #0068a5 #035381">Details</a>
                                    </div>
                                    <div class="col-md-4" style="height: 500px;">
                                        <div class="thumb-info custom-thumb-info-4"><img
                                                src="<?php echo base_url('assets/media/image/len_mdp.jpg') ?>"
                                                class="img-responsive" caption="false" width="369" height="184"></div>
                                        <h3>LEN MDP</h3>
                                        <p style="text-align: justify;">Sistem persinyalan perlu didukung oleh catu daya
                                            yang optimal, salah satunya adalah persinyalan panel distribusi, atau Main
                                            Distribution Panel (MDP).</p>
                                        <a href="<?php echo base_url('overview/detailsignaling5') ?>"
                                            class="btn btn-primary btn-block"
                                            style="border-color: #0068a5 #0068a5 #035381">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--Footer Start-->
        <footer class="footer-copyright" id="footer" style="padding: 30px; font-size: 14px">
            <div class="container">
                <div class="row">
                    <div class="col-md-11">
                        <span class='copyright'>Copyright &copy; 2019 <a href="#">PT Len Rekaprima Semesta</a>. All
                            rights reserved.</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Vendor -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery-3.3.1.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery/jquerysc.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery.appear/jquery.appear.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery-cookie/jquery-cookie.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/common/common.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery.validation/jquery.validation.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery.gmap/jquery.gmap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/isotope/jquery.isotope.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/vide/vide.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/slider-bootstrap/slider-bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/dataTables/datatables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.scrollme.js') ?>"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url('assets/js/theme.js') ?>"></script>

    <!-- Theme Custom -->
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url('assets/js/theme.init.js') ?>"></script>

    <script type="text/javascript">
    function langSwitch(content, langId) {
        if (content != '') {
            var url = "/" + langId + "/" + content;
            //console.log(url);
            window.location = url;
        } else {
            if (langId == "id") {
                alert("Maaf, halaman ini tidak tersedia untuk bahasa inggris");
                return false;
            } else {
                alert("Sorry, this content not available in English.");
                return false;
            }

        }
    }

    $('a#btnDownload').each(function() {
        $(this).click(function(e) {
            e.preventDefault();
            //alert('clicked');
            var getdocName = $(this).data('doc');
            var lang = $(this).data('lang');
            console.log(getdocName);
            $.post({
                type: "GET",
                url: window.location.origin + "/Ajax/getDownloadDoc?doc=" + getdocName +
                    "&lang=" + lang,
                //data: { docName: "'" + getdocName + "'" },
                contentType: "application/json",
                success: function(response) {
                    console.log(window.location.origin + response);
                    window.location = window.location.origin + response;
                },
                failure: function(response) {
                    alert('Terjadi kesalahan!');
                }
            });

        });
    });
    </script>
    <script>
    // --------------------------------------------------
    // Analytics
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-523605-4', 'nckprsn.com');
    ga('send', 'pageview');

    (function($) {
        $.fn.fitText = function(kompressor, options) {
            // Setup options
            var compressor = kompressor || 1,
                settings = $.extend({
                    'minFontSize': Number.NEGATIVE_INFINITY,
                    'maxFontSize': Number.POSITIVE_INFINITY
                }, options);
            return this.each(function() {
                // Store the object
                var $this = $(this);
                // Resizer() resizes items based on the object width divided by the compressor * 10
                var resizer = function() {
                    $this.css('font-size', Math.max(Math.min($this.width() / (compressor * 10),
                        parseFloat(settings.maxFontSize)), parseFloat(settings
                        .minFontSize)));
                };
                // Call once to set.
                setTimeout(function() {
                    resizer();
                }, 250);
                // Call on resize. Opera debounces their resize by default.
                $(window).on('resize.fittext orientationchange.fittext', resizer);
            });
        };
    })(jQuerysc);
    // --------------------------------------------------
    // FitText init + animate to hash
    $(document).ready(function() {
        // Set FitText for main heading
        $('.fittext').fitText(0.45);
        // Scroll to hash animation
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').stop().animate({
                            scrollTop: target.offset().top - 120
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    });
    // --------------------------------------------------
    </script>
</body>

</html>