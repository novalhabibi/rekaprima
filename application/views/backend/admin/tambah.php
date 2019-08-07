<!DOCTYPE html>
<html lang="en">



<head>
    <title>Material Admin - Admin</title>

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
	<script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/html5shiv.js?1422823601"></script>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/respond.min.js?1422823601"></script>
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
                <div class="section-header">
                    <ol class="breadcrumb">
                        <li class="active">Tambah Admin</li>
                    </ol>

                </div>

                <!-- Notif Error -->
                <?php if(validation_errors() == TRUE): ?>
                <div class="alert alert-danger" role="alert">
                    <h4>
                        <i class="fa fa-exclamation-triangle"></i>
                        Error</h4>
                    <p>
                        <?php echo validation_errors('<li>','</li>'); ?>
                    </p>
                </div>
                <?php endif; ?>
                <!-- END Notif Error -->


                <div class="section-body contain-lg">
                    <!-- BEGIN ADVANCED VALIDATION -->
                    <div class="row">
                        <div class="col-md-4">
                            <form class="form form-validate floating-label" novalidate="novalidate"
                                action="<?= base_url('dashboard/admin/tambah') ?>" method="POST">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username_admin"
                                                name="username_admin" data-rule-minlength="2" maxlength="12" required>
                                            <label for="username_admin">Min / Max length</label>
                                            <p class="help-block">Minimum length 2 / Maximum length 12</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nama_admin" name="nama_admin"
                                                data-rule-minlength="2" maxlength="5" required>
                                            <label for="nama_admin">Min / Max length</label>
                                            <p class="help-block">Minimum length 2 / Maximum length 5</p>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="level_admin" name="level_admin" required>
                                                <option value="Amsterdam">Amsterdam</option>
                                                <option value="Washington">Washington</option>
                                                <option value="Sydney">Sydney</option>
                                                <option value="Beijing">Beijing</option>
                                                <option value="Cairo">Cairo</option>
                                            </select>
                                            <label for="level_admin">Tagsinput for select</label>
                                        </div>
                                    </div>
                                    <!--end .card-body -->
                                    <div class="card-actionbar">
                                        <div class="card-actionbar-row">
                                            <button type="submit"
                                                class="btn btn-flat btn-primary ink-reaction">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                                <!--end .card -->
                                <em class="text-caption">Page rendered in <b>{elapsed_time}</b> seconds.</em>
                            </form>
                        </div>
                        <!--end .col -->
                        <div class="col-md-8">
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
                    <!-- END ADVANCED VALIDATION -->

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




        <!-- END OFFCANVAS RIGHT -->

    </div>
    <!--end #base-->
    <!-- END BASE -->


    <!-- BEGIN JAVASCRIPT -->

    <?php $this->load->view('backend/_includes/js-offline.php'); ?>


    <script src="assets2/js/jquery.validate.min.js">
    </script>
    <script src="assets2/js/additional-methods.js">
    </script>
    <script src="<?= base_url() ?>assets/backend/js/DemoTableDynamic.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/dataTables.colVis.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/dataTables.tableTools.min.js"></script>


    <!-- END JAVASCRIPT -->
    <!-- Modal -->
    <?php $this->load->view('backend/_includes/modal.php'); ?>




</body>

</html>