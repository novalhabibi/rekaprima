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
    <title>Metronic Admin Theme #1 | Material Design Form Validation</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for material design form validation states"
        name="description" />
    <meta content="" name="author" />
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

    <link href="<?= base_url() ?>assets/backend/global/plugins/select2/css/select2.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url() ?>assets/backend/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url() ?>assets/backend/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"
        rel="stylesheet" type="text/css" />


    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?= base_url() ?>assets/backend/global/css/components-md.min.css" rel="stylesheet" id="style_components"
        type="text/css" />

    <link href="<?= base_url() ?>assets/backend/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <!-- <link href="<?= base_url() ?>assets/backend/mdpro/css/mdb.css" rel="stylesheet" type="text/css" /> -->

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
                    <?php $this->load->view('backend/_includes/breadcrumb.php') ?>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h1 class="page-title"> Material Design Form Validation
                        <small>material design form validation states</small>
                    </h1>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class="portlet light portlet-fit portlet-form bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-green"></i>
                                        <span class="caption-subject font-green sbold uppercase">Basic Validation</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form action="#" class="form-horizontal" id="form_sample_1">
                                        <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> You have some form
                                                errors. Please check below. </div>
                                            <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Your form validation
                                                is successful! </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Name
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="" name="name">
                                                    <div class="form-control-focus"> </div>
                                                    <span class="help-block">enter your full name</span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Email
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="" name="email">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">URL
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="" name="url">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Number
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder=""
                                                        name="number">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Number 3
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder=""
                                                        name="number3">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Digits
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-icon">
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter digits" name="digits">
                                                        <div class="form-control-focus"> </div>
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Credit Card
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <input type="text" class="form-control" name="creditcard"
                                                            placeholder="Enter your card">
                                                        <div class="form-control-focus"> </div>
                                                        <i class="fa fa-cc-visa font-green"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Image
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <input type="file" class="form-control" name="image"
                                                            placeholder="Enter your card">
                                                        <div class="form-control-focus"> </div>
                                                        <i class="fa fa-cc-visa font-green"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Email</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <input type="text" class="form-control" name="email2"
                                                            placeholder="Enter your email">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">URL</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="url2"
                                                            placeholder="Enter URL">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-i-cursor"></i>
                                                        </span>
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label"
                                                    for="form_control_1">Delivery</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="delivery">
                                                        <option value="">Select</option>
                                                        <option value="2">Option 1</option>
                                                        <option value="3">Option 2</option>
                                                        <option value="4">Option 3</option>
                                                    </select>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>

                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Memo</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="memo" rows="3"></textarea>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>


                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Tanggal</label>
                                                <div class="col-md-9">
                                                    <input type="date" name="" id="" class="form-control date-picker">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>


                                            <div class="form-group form-md-radios">
                                                <label class="col-md-3 control-label"
                                                    for="form_control_1">Radios</label>
                                                <div class="col-md-9">
                                                    <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_8" name="radio2" value="1"
                                                                class="md-radiobtn">
                                                            <label for="checkbox1_8">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 1 </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_9" name="radio2" value="2"
                                                                class="md-radiobtn">
                                                            <label for="checkbox1_9">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 2 </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_10" name="radio2"
                                                                value="2" class="md-radiobtn">
                                                            <label for="checkbox1_10">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 3 </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">Validate</button>
                                                    <button type="reset" class="btn default">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END FORM-->
                                </div>
                            </div>
                            <!-- END VALIDATION STATES-->
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

    <div class="quick-nav-overlay"></div>
    <!-- END QUICK NAV -->
    <!--[if lt IE 9]>
<script src="<?php //base_url() ?>assets/backend/global/plugins/respond.min.js"></script>
<script src="<?php //base_url() ?>assets/backend/global/plugins/excanvas.min.js"></script> 
<script src="<?php //base_url() ?>assets/backend/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="<?= base_url() ?>assets/backend/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?= base_url() ?>assets/backend/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript">
    </script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?= base_url() ?>assets/backend/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?= base_url() ?>assets/backend/pages/scripts/form-validation-md.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="<?= base_url() ?>assets/backend/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
    <!-- <script src="<?= base_url() ?>assets/backend/mdpro/js/mdb.js" type="text/javascript"></script> -->

    <script>

    </script>
</body>

</html>