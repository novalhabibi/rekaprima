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
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/backend/lightbox/css/lightbox.css" />
    <!-- <link type="text/css" rel="stylesheet" href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/toastr/toastr.css?1422823374" /> -->


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
            <section >
                <div class="section-body">

                    <div class="row">
                        <!-- BEGIN FROM ADMIN -->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-head">
                                    <header>Data Clients</header>
                                    <div class="tools">
                                        <a href="<?= site_url("dashboard/client/tambah") ?>" class="btn btn-icon-toggle"><i class="md md-add"></i></a>
                                        <a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>
                                        <a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
                                        <!-- <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a> -->
                                    </div>
                                </div>
                                <!--end .card-head -->
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table id="datatable1" class="table table-responsive table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Nama client</th>
                                                        <th>Link client</th>
                                                        <th>Icon client</th>
                                                        <!-- <th class="sort-numeric">Engine version</th> -->
                                                        <!-- <th class="sort-alpha">CSS grade</th> -->
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                    foreach ($clients->result() as $client) {
                                    
                                    ?>
                                                    <tr class="gradeX">
                                                        <td><?= $client->nama_client ?></td>
                                                        <td><?= $client->link_client ?></td>
                                                      
                                                        <td>



                                                            <a href="<?= base_url() ?><?= $client->icon_client ?>"
                                                                data-lightbox="<?= $client->icon_client ?>"
                                                                data-title="<?= $client->nama_client ?>">
                                                                Lihat Foto
                                                            </a>

                                                        </td>
                                                        <td>
                                                            <a href="#" data-target="#edit" onclick="editConfirm('<?= site_url('dashboard/client/edit/'.$client->id_client) ?>')"
                                                                data-toggle="modal"
                                                                class="btn ink-reaction btn-raised btn-info btn-sm edit"><i
                                                                    class="fa fa-pencil"></i></a>
                                                            <!-- <a href="<?php // base_url() ?>dashboard/admin/edit/12"
                                                                class="btn ink-reaction btn-raised btn-info btn-sm edit"><i
                                                                    class="fa fa-pencil"></i></a> -->

                                                            <a data-id="<?= $client->id_client ?>" data-target="#hapusclient"
                                                                data-toggle="modal" title="Add this item"
                                                                class="open-AddBookDialog btn ink-reaction btn-raised btn-danger btn-sm"
                                                                href="#addBookDialog">
                                                                <i class="fa fa-trash"></i>
                                                            </a>


                                                        </td>
                                                    </tr>
                                                    <?php }?>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end .table-responsive -->
                                    </div>
                                    <!--end .col -->
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



        <!-- Modal -->
        <?php $this->load->view('backend/_includes/modal.php'); ?>
<!-- Hapus Via FORM -->
<div class="modal fade" id="hapusclient" tabindex="-1" role="dialog" aria-labelledby="hapus" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h3 class="modal-title" id="simpleModalLabel">
                    <i class="fa fa-exclamation-triangle"></i>
                    Hapus</h3>
            </div>
            <?php echo form_open('dashboard/client/hapus') ?>

            <div class="modal-body">
                <h5 class="text-center">Apakah anda yakin akan mengahpus data ini ?</h5>
                <input type="hidden" name="id_client" id="bookId" value="" />

            </div>
            <div class="modal-footer">
                <button type="button" class="btn ink-reaction btn-raised btn-default"
                    data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn ink-reaction btn-raised btn-danger">Hapus</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- End Hapus -->

    </div>
    <!--end #base-->
    <!-- END BASE -->


    <!-- BEGIN JAVASCRIPT -->


    <?php $this->load->view('backend/_includes/js-offline.php'); ?>
    <script src="<?= base_url() ?>assets/backend/js/DemoTableDynamic.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/dataTables.colVis.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/dataTables.tableTools.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/lightbox/js/lightbox.js"></script>


    <!-- END JAVASCRIPT -->
    <!-- Modal -->
    <?php $this->load->view('backend/_includes/js.php'); ?>


</body>

</html>