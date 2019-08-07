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


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/backend/js/modules/materialadmin/libs/utils/html5shiv.js?1422823601"></script>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/backend/js/modules/materialadmin/libs/utils/respond.min.js?1422823601"></script>
    <![endif]-->
</head>






<body class="menubar-hoverable header-fixed ">
    <!-- BEGIN HEADER-->
    <?php include "_includes/header.php" ?>
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
            <section class="style-default-bright">
                <div class="section-header">
                    <h2 class="text-primary">DataTables</h2>
                </div>
                <div class="section-body">

                    <!-- BEGIN DATATABLE 1 -->

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Example 1: Show/hide columns</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table id="datatable1" class="table table-responsive table-hover">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th class="sort-numeric">Engine version</th>
                                            <th class="sort-alpha">CSS grade</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td>Trident</td>
                                            <td>Internet Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td>4</td>
                                            <td>X</td>
                                            <td>
                                                <a href="<?= base_url() ?>dashboard/admin/edit/12"
                                                    class="btn ink-reaction btn-floating-action btn-info btn-sm edit"><i
                                                        class="fa fa-pencil"></i></a>
                                                |
                                                <a class="btn ink-reaction btn-floating-action btn-danger btn-sm hapus"
                                                    href="<?= base_url() ?>dashboard/admin/hapus/13"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td>5</td>
                                            <td>C</td>
                                            <td>
                                                <a href="<?= base_url() ?>dashboard/admin/edit/14"
                                                    class="btn ink-reaction btn-floating-action btn-info btn-sm edit"><i
                                                        class="fa fa-pencil"></i></a>
                                                |
                                                <a class="btn ink-reaction btn-floating-action btn-danger btn-sm hapus"
                                                    href="<?= base_url() ?>dashboard/admin/hapus/15"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.5</td>
                                            <td>Win 95+</td>
                                            <td>5.5</td>
                                            <td>A</td>
                                            <td>EDIT | HAPUS</td>
                                        </tr>

                                        <tr class="gradeU">
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>U</td>
                                            <td>EDIT | HAPUS</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--end .table-responsive -->
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END DATATABLE 1 -->

                    <hr class="ruler-xxl" />

                    <!-- BEGIN DATATABLE 2 -->

                    <!-- END DATATABLE 2 -->

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

                <?php include "_includes/main-menu.php" ?>
                <!-- END MAIN MENU -->

                <?php include "_includes/footer.php" ?>
            </div>
            <!--end .menubar-scroll-panel-->
        </div>
        <!--end #menubar-->
        <!-- END MENUBAR -->



       

    </div>
    <!--end #base-->
    <!-- END BASE -->


    <!-- BEGIN JAVASCRIPT -->
    <?php include "_includes/js-offline.php" ?>

    <script src="<?= base_url() ?>assets/backend/js/DemoTableDynamic.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/dataTables.colVis.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/dataTables.tableTools.min.js"></script>


    <!-- END JAVASCRIPT -->
    <!-- Modal -->
    <?php $this->load->view('backend/_includes/modal.php'); ?>



</body>

</html>