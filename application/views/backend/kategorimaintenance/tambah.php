<!DOCTYPE html>
<html lang="en">



<head>
    <title>Material Admin - Dynamic tables</title>

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
    <!-- <link type="text/css" rel="stylesheet" href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/DataTables/jquery.dataTables.css?1422823365" /> -->

    <!-- <link type="text/css" rel="stylesheet" href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1422823421" /> -->
    <link type="text/css" rel="stylesheet"
        href="<?= base_url() ?>assets/backend/css/dataTables.colVis.css?1422823421" />

    <!-- <link type="text/css" rel="stylesheet" href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1422823422" /> -->
    <link type="text/css" rel="stylesheet"
        href="<?= base_url() ?>assets/backend/css/dataTables.tableTools.css?1422823422" />

    <!-- END STYLESHEETS -->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/backend/css/dropzone-theme.css?1422823366" />

    <!-- Summer CK editor -->
    <link type="text/css" rel="stylesheet"
        href="<?= base_url() ?>assets/backend/css/summernote.css?1422823374" />


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/backend/js/modules/materialadmin/libs/utils/html5shiv.js?1422823601"></script>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/backend/js/modules/materialadmin/libs/utils/respond.min.js?1422823601"></script>
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
                <div class="section-body">

                    <!-- Pesan Error -->
                    <?php
                    if (validation_errors() == true) {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Error!</strong>
                        <p>
                            <?php echo validation_errors('<li>','</li>'); ?>

                        </p>
                    </div>
                    <!-- End Pesan Error -->
                    <?php 
                    }
                    ?>

                    <div class="row">
                        <!-- BEGIN FROM ADMIN -->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-head">
                                    <header>Tambah Data Kategori Maintenance</header>
                                    <div class="tools">
                                        <a href="<?= site_url("dashboard/kategorimaintenance") ?>" class="btn btn-icon-toggle"><i
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
                                   
                                    'id'=>'kategorimaintenance'
                                );
                                echo form_open_multipart('dashboard/kategorimaintenance/tambah', $attributes);
                                 ?>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nama_kategori_maintenance" name="nama_kategori_maintenance"
                                                    data-rule-minlength="2" maxlength="30" required>
                                                <label for="nama_kategori_maintenance">Nama kategori maintenance</label>
                                                <p class="help-block">Minimum length 2 / Maximum length 30</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name_kategori_maintenance_en" name="name_kategori_maintenance_en"
                                                    data-rule-minlength="2" maxlength="30" required>
                                                <label for="name_kategori_maintenance_en">Name kategorimaintenance English</label>
                                                <p class="help-block">Minimum length 2 / Maximum length 30</p>
                                            </div>


                                            <div class="form-group">
                                                <textarea id="summernote" name="deskripsi_kategori_maintenance">
                                                <br/>
                                                
                                                  <p>Silahkan isi berita disini</p>
                                                </textarea>
                                                <label for="deskripsi_kategori_maintenance">Deskripsi</label>
                                                <p class="help-block">Minimum length 2 / Maximum length 30</p>
                                            </div>
                                            <div class="form-group">
                                                <textarea id="summernote-en" name="description_kategori_maintenance_en">
                                                <br/>
                                                
                                                   <p>Silahkan isi berita disini dalam bahsa inggris</p>
                                                </textarea>
                                                <label for="description_kategori_maintenance_en">Description for english</label>
                                                <p class="help-block">Minimum length 2 / Maximum length 30</p>
                                            </div>


                                            <div class="form-group">
                                                <br>
                                                <input type="file" class="form-control" id="gambar_kategori_maintenance" name="gambar_kategori_maintenance"
                                                    accept="image/*" required>
                                                <label for="gambar_kategori_maintenance">Gambar Header kategorimaintenance</label>
                                            </div>
                                            <div class="form-group">
                                                <br>
                                                <input type="file" class="form-control" id="image_kategori_maintenance_en" name="image_kategori_maintenance_en"
                                                    accept="image/*" required>
                                                <label for="image_kategori_maintenance_en">Iamge Header kategorimaintenance</label>
                                            </div>

                                        </div>
                                        <div class="card-actionbar">
                                            <div class="card-actionbar-row">


                                                <button class="btn ink-reaction btn-raised btn-success" type="submit">
                                                    <i class="fa fa-save"></i> Simpan
                                                </button>
                                            </div>
                                        </div>

                                        </form>
                                        <!--end .card-body -->


                                    </div>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <em class="text-caption">Menampilkan data dalam <b>{elapsed_time}</b> detik.</em>
                            <!--end .card -->
                        </div>
                        <!--end .col -->
                        <!-- END FROM ADMIN -->
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
                    <a href="http://www.codecovers.eu/materialadmin/dashboards/dashboard">
                        <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
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
    <script src="<?= base_url() ?>assets/backend/js/dropzone.min.js"></script>


    <!-- CK editor -->
    <script src="<?= base_url() ?>assets/backend/js/ckeditor.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/adapters/jquery.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/summernote.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/DemoFormEditors.js"></script>


    <!-- END JAVASCRIPT -->
    <!-- Modal -->
    <?php $this->load->view('backend/_includes/modal.php'); ?>
    <?php $this->load->view('backend/_includes/js.php'); ?>\




</body>

</html>