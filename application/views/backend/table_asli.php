<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Metronic Admin Theme #1 | Managed Datatables</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for managed datatable samples" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PAGE FIRST SCRIPTS -->
        <!-- <script src="<?= base_url() ?>assets/backend/global/plugins/pace/pace.min.js" type="text/javascript"></script> -->
        <script src="<?= base_url() ?>assets/backend/global/plugins/pace1.0.2/pace.js" type="text/javascript"></script>
    <!-- END PAGE FIRST SCRIPTS -->
    <!-- BEGIN PAGE TOP STYLES -->
        <!-- <link href="<?= base_url() ?>assets/backend/global/plugins/pace/themes/pace-theme-flash.css" rel="stylesheet" type="text/css" /> -->
        <!-- <link href="<?= base_url() ?>assets/backend/global/plugins/pace/themes/center-circle.css" rel="stylesheet" type="text/css" /> -->
        <link href="<?= base_url() ?>assets/backend/global/plugins/pace1.0.2/themes/blue/pace-theme-flash.css" rel="stylesheet" type="text/css" />
        <!-- <link href="<?= base_url() ?>assets/backend/global/plugins/pace/themes/bounce.css" rel="stylesheet" type="text/css" /> -->
    <!-- END PAGE TOP STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url() ?>assets/backend/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url() ?>assets/backend/global/plugins/simple-line-icons/simple-line-icons.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/backend/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url() ?>assets/backend/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"
        rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="<?= base_url() ?>assets/backend/global/plugins/datatables/datatables.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url() ?>assets/backend/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"
        rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?= base_url() ?>assets/backend/global/css/components-md.min.css" rel="stylesheet" id="style_components"
        type="text/css" />
    <link href="<?= base_url() ?>assets/backend/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="<?= base_url() ?>assets/backend/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/backend/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet"
        type="text/css" id="style_color" />
    <link href="<?= base_url() ?>assets/backend/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
    <div class="page-wrapper">
        <!-- BEGIN HEADER -->
        <?php $this->load->view('backend/_includes/header.php') ?>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php $this->load->view('backend/_includes/sidebar.php') ?>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->

                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <!-- BEGIN PAGE BAR -->
                    <?php $this->load->view('backend/_includes/breadcrumb.php') ?>
                    <!-- END PAGE BAR -->
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h1 class="page-title"> Managed Datatables
                        <small>managed datatable samples</small>
                    </h1>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->

                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Managed Table</span>
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>

                                        <a href="javascript:;" class="reload"> </a>

                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="btn-group pull-right">
                                                    <button class="btn green  btn-outline dropdown-toggle"
                                                        data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-print"></i> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table
                                        class="table table-striped table-bordered table-hover table-checkable order-column"
                                        id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="group-checkable"
                                                            data-set="#sample_1 .checkboxes" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th> Username </th>
                                                <th> Email </th>
                                                <th> Status </th>
                                                <th> Joined </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> shuxer </td>
                                                <td>
                                                    <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                                <td class="center"> 12 Jan 2012 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button"
                                                            data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-left" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-trash"></i> Delete </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>



                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->

            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php $this->load->view('backend/_includes/footer.php') ?>
        <!-- END FOOTER -->
    </div>
    <!-- BEGIN QUICK NAV -->


    <!-- END QUICK NAV -->
    <!--[if lt IE 9]>
<script src="<?= base_url() ?>assets/backend/global/plugins/respond.min.js"></script>
<script src="<?= base_url() ?>assets/backend/global/plugins/excanvas.min.js"></script> 
<script src="<?= base_url() ?>assets/backend/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="<?= base_url() ?>assets/backend/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"
        type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?= base_url() ?>assets/backend/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/datatables/datatables.min.js" type="text/javascript">
    </script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"
        type="text/javascript">
    </script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?= base_url() ?>assets/backend/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?= base_url() ?>assets/backend/pages/scripts/table-datatables-managed.min.js" type="text/javascript">
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="<?= base_url() ?>assets/backend/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript">
    </script>
    <script src="<?= base_url() ?>assets/backend/layouts/global/scripts/quick-nav.min.js" type="text/javascript">
    </script>
    <!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>