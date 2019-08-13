<!DOCTYPE html>
<html lang="en">



<head>
    <title>Material slider - Dynamic tables</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <!-- Global CSS -->
    <?php $this->load->view('backend/_includes/css.php'); ?>

    <link type="text/css" rel="stylesheet"
        href="<?= base_url() ?>assets/backend/css/jquery.dataTables.css?1422823365" />
    <!-- <link type="text/css" rel="stylesheet" href="http://www.codecovers.eu/assets/css/modules/materialslider/css/theme-default/libs/DataTables/jquery.dataTables.css?1422823365" /> -->

    <!-- <link type="text/css" rel="stylesheet" href="http://www.codecovers.eu/assets/css/modules/materialslider/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1422823421" /> -->
    <link type="text/css" rel="stylesheet"
        href="<?= base_url() ?>assets/backend/css/dataTables.colVis.css?1422823421" />

    <!-- <link type="text/css" rel="stylesheet" href="http://www.codecovers.eu/assets/css/modules/materialslider/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1422823422" /> -->
    <link type="text/css" rel="stylesheet"
        href="<?= base_url() ?>assets/backend/css/dataTables.tableTools.css?1422823422" />

    <!-- END STYLESHEETS -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/backend/js/modules/materialslider/libs/utils/html5shiv.js?1422823601"></script>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/backend/js/modules/materialslider/libs/utils/respond.min.js?1422823601"></script>
    <![endif]-->
</head>






<body class="menubar-hoverable header-fixed ">
    <!-- BEGIN HEADER-->
    <?php $this->load->view('backend/_includes/header.php'); ?>
    <!-- END HEADER-->


    <!-- BEGIN BASE-->
    <div id="base">
        <!-- BEGIN OFFCANVAS LEFT -->
        <div class="offcanvas">
        </div>
        <!--end .offcanvas-->
        <!-- END OFFCANVAS LEFT -->

        <!-- BEGIN CONTENT-->
        <div id="content">
            <section>
                <div class="section-body ">
                    <!-- Pesan Error -->
                    <?php
                    if ($this->session->flashdata('errors') == true){
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Error!</strong>
                        <p>
                            <?php echo $this->session->flashdata('errors'); ?>

                        </p>
                    </div>
                    <!-- End Pesan Error -->
                    <?php 
                    }
                    ?>
                    <div class="row">
                        <!-- BEGIN FROM slider -->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-head">
                                    <header>Edit Data Clinet</header>
                                    <div class="tools">
                                        <a href="<?= site_url("dashboard/client") ?>" class="btn btn-icon-toggle"><i
                                                class="md md-keyboard-arrow-left" title="Kembali"></i></a>
                                        <a class="btn btn-icon-toggle btn-refresh" title="Refresh"><i
                                                class="md md-refresh"></i></a>
                                        <a class="btn btn-icon-toggle btn-collapse" title="Kecilkan"><i
                                                class="fa fa-angle-down"></i></a>
                                        <!-- <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a> -->
                                    </div>
                                </div>
                                <!--end .card-head -->
                                <div class="card-body ">
                                    <div class="col-lg-12">
                                        <?php
                                $attributes = array(
                                    'class' => 'form form-validate floating-label form-responsive', 
                                    'novalidate' => 'novalidate',
                                    'id'=>'EditClient'
                                );
                                echo form_open_multipart('dashboard/client/update', $attributes);
                                 ?>
                                        <!-- <div class="card"> -->
                                        <div class="card-body">
                                            <div class="form-group">
                                                <input type="hidden" name="id_client" value="<?= $client->id_client ?>">
                                                <input type="text" class="form-control" id="nama_client" name="nama_client"
                                                    value="<?= $client->nama_client ?>" data-rule-minlength="2" maxlength="30"
                                                    required>
                                                <label for="nama_client">Nama Client</label>
                                                <p class="help-block">Minimum length 2 / Maximum length 30</p>
                                            </div>


                                            <div class="form-group">
                                                <input type="url" class="form-control" id="link_client" name="link_client"
                                                    value="<?= $client->link_client ?>" data-rule-minlength="2" maxlength="30"
                                                    required>
                                                <label for="link_client">Link Client</label>
                                                <p class="help-block">Minimum length 2 / Maximum length 30</p>
                                            </div>

                                           
                                            <div class="form-group">
                                                <br>
                                                <input type="file" class="form-control" id="icon_client" name="icon_client"
                                                    accept="image/*" >
                                                <label for="icon_client">Icon Client</label>
                                            </div>
                                            
                                            <div class="form-group">

                                                <input type="hidden" class="form-control"
                                                    value="<?= $client->icon_client ?>" name="icon_lama_client">
                                                <label for="foto_client">Icon Client</label>

                                                <img src="<?= base_url() ?><?= $client->icon_client ?>" width="200px"
                                                    alt="" class="img-responsive">

                                            </div>
                                        </div>
                                        <!--end .card-body -->
                                        <div class="card-actionbar">
                                            <div class="card-actionbar-row">
                                                <button type="submit" class="btn ink-reaction btn-raised btn-success">
                                                    <i class="fa fa-save"></i>
                                                    Perbarui</button>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                        <!--end .card -->

                                        </form>

                                    </div>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <em class="text-caption">Menampilkan data dalam <b>{elapsed_time}</b> detik.</em>
                            <!--end .card -->
                        </div>
                        <!--end .col -->
                        <!-- END FROM slider -->
                    </div>
                    <!--end .row -->
                </div>
                <!--end .section-body -->
            </section>
        </div>
        <!--end #content-->
        <!-- END CONTENT -->

        <!-- BEGIN MENUBAR-->
        <div id="menubar" class="menubar-inverse ">
            <div class="menubar-fixed-panel">
                <div>
                    <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar"
                        href="javascript:void(0);">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="expanded">
                    <a href="http://www.codecovers.eu/materialslider/dashboards/dashboard">
                        <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;slider</span>
                    </a>
                </div>
            </div>
            <div class="menubar-scroll-panel">
                <!-- BEGIN MAIN MENU -->

                <?php $this->load->view('backend/_includes/main-menu.php'); ?>
                <!-- END MAIN MENU -->


                <?php $this->load->view('backend/_includes/footer.php'); ?>
            </div>
            <!--end .menubar-scroll-panel-->
        </div>
        <!--end #menubar-->
        <!-- END MENUBAR -->





    </div>
    <!--end #base-->
    <!-- END BASE -->


    <!-- BEGIN JAVASCRIPT -->

    <?php $this->load->view('backend/_includes/js-offline.php'); ?>


    <script src="<?= base_url() ?>assets/backend/js/jquery.validate.min.js">
    </script>
    <script src="<?= base_url() ?>assets/backend/js/additional-methods.js">
    </script>
    <script src="<?= base_url() ?>assets/backend/js/DemoTableDynamic.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/dataTables.colVis.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/dataTables.tableTools.min.js"></script>


    <!-- END JAVASCRIPT -->
    <!-- Modal -->
    <?php $this->load->view('backend/_includes/modal.php'); ?>
    <?php $this->load->view('backend/_includes/js.php'); ?>




</body>

</html>