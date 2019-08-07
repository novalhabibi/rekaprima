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
    <title>Metronic Admin Theme #1 | Admin Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports"
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
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="<?= base_url() ?>assets/backend/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/backend/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/backend/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url() ?>assets/backend/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet"
        type="text/css" />
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
                    <?php $this->load->view('backend/_includes/breadcrumb.php') ?>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h1 class="page-title"> Admin Dashboard
                        <small>statistics, charts, recent events and reports</small>
                    </h1>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                <div class="visual">
                                    <i class="fa fa-comments"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="1349">0</span>
                                    </div>
                                    <div class="desc"> New Feedbacks </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                <div class="visual">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="12,5">0</span>M$ </div>
                                    <div class="desc"> Total Profit </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="549">0</span>
                                    </div>
                                    <div class="desc"> New Orders </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                                <div class="visual">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="details">
                                    <div class="number"> +
                                        <span data-counter="counterup" data-value="89"></span>% </div>
                                    <div class="desc"> Brand Popularity </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bar-chart font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Site Visits</span>
                                        <span class="caption-helper">weekly stats...</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn red btn-outline btn-circle btn-sm active">
                                                <input type="radio" name="options" class="toggle"
                                                    id="option1">New</label>
                                            <label class="btn red btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle"
                                                    id="option2">Returning</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="site_statistics_loading">
                                        <img src="<?= base_url() ?>assets/backend/global/img/loading.gif"
                                            alt="loading" /> </div>
                                    <div id="site_statistics_content" class="display-none">
                                        <div id="site_statistics" class="chart"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PORTLET-->
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-red-sunglo hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Revenue</span>
                                        <span class="caption-helper">monthly stats...</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a href="" class="btn dark btn-outline btn-circle btn-sm dropdown-toggle"
                                                data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                Filter Range
                                                <span class="fa fa-angle-down"> </span>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;"> Q1 2014
                                                        <span class="label label-sm label-default"> past </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"> Q2 2014
                                                        <span class="label label-sm label-default"> past </span>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="javascript:;"> Q3 2014
                                                        <span class="label label-sm label-success"> current </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"> Q4 2014
                                                        <span class="label label-sm label-warning"> upcoming </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="site_activities_loading">
                                        <img src="<?= base_url() ?>assets/backend/global/img/loading.gif"
                                            alt="loading" /> </div>
                                    <div id="site_activities_content" class="display-none">
                                        <div id="site_activities" style="height: 228px;"> </div>
                                    </div>
                                    <div style="margin: 20px 0 10px 30px">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                <span class="label label-sm label-success"> Revenue: </span>
                                                <h3>$13,234</h3>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                <span class="label label-sm label-info"> Tax: </span>
                                                <h3>$134,900</h3>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                <span class="label label-sm label-danger"> Shipment: </span>
                                                <h3>$1,134</h3>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                <span class="label label-sm label-warning"> Orders: </span>
                                                <h3>235090</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PORTLET-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-cursor font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">General Stats</span>
                                    </div>
                                    <div class="actions">
                                        <a href="javascript:;" class="btn btn-sm btn-circle red easy-pie-chart-reload">
                                            <i class="fa fa-repeat"></i> Reload </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="easy-pie-chart">
                                                <div class="number transactions" data-percent="55">
                                                    <span>+55</span>% </div>
                                                <a class="title" href="javascript:;"> Transactions
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="margin-bottom-10 visible-sm"> </div>
                                        <div class="col-md-4">
                                            <div class="easy-pie-chart">
                                                <div class="number visits" data-percent="85">
                                                    <span>+85</span>% </div>
                                                <a class="title" href="javascript:;"> New Visits
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="margin-bottom-10 visible-sm"> </div>
                                        <div class="col-md-4">
                                            <div class="easy-pie-chart">
                                                <div class="number bounce" data-percent="46">
                                                    <span>-46</span>% </div>
                                                <a class="title" href="javascript:;"> Bounce
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-equalizer font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Server Stats</span>
                                        <span class="caption-helper">monthly stats...</span>
                                    </div>
                                    <div class="tools">
                                        <a href="" class="collapse"> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                        <a href="" class="reload"> </a>
                                        <a href="" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="sparkline-chart">
                                                <div class="number" id="sparkline_bar5"></div>
                                                <a class="title" href="javascript:;"> Network
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="margin-bottom-10 visible-sm"> </div>
                                        <div class="col-md-4">
                                            <div class="sparkline-chart">
                                                <div class="number" id="sparkline_bar6"></div>
                                                <a class="title" href="javascript:;"> CPU Load
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="margin-bottom-10 visible-sm"> </div>
                                        <div class="col-md-4">
                                            <div class="sparkline-chart">
                                                <div class="number" id="sparkline_line"></div>
                                                <a class="title" href="javascript:;"> Load Rate
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <!-- BEGIN REGIONAL STATS PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Regional Stats</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen"
                                            data-container="false" data-placement="bottom" href="javascript:;"> </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="region_statistics_loading">
                                        <img src="<?= base_url() ?>assets/backend/global/img/loading.gif"
                                            alt="loading" /> </div>
                                    <div id="region_statistics_content" class="display-none">
                                        <div class="btn-toolbar margin-bottom-10">
                                            <div class="btn-group btn-group-circle" data-toggle="buttons">
                                                <a href="" class="btn grey-salsa btn-sm active"> Users </a>
                                                <a href="" class="btn grey-salsa btn-sm"> Orders </a>
                                            </div>
                                            <div class="btn-group pull-right">
                                                <a href="" class="btn btn-circle grey-salsa btn-sm dropdown-toggle"
                                                    data-toggle="dropdown" data-hover="dropdown"
                                                    data-close-others="true"> Select Region
                                                    <span class="fa fa-angle-down"> </span>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;" id="regional_stat_world"> World </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" id="regional_stat_usa"> USA </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" id="regional_stat_europe"> Europe </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" id="regional_stat_russia"> Russia </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" id="regional_stat_germany"> Germany </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="vmap_world" class="vmaps display-none"> </div>
                                        <div id="vmap_usa" class="vmaps display-none"> </div>
                                        <div id="vmap_europe" class="vmaps display-none"> </div>
                                        <div id="vmap_russia" class="vmaps display-none"> </div>
                                        <div id="vmap_germany" class="vmaps display-none"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END REGIONAL STATS PORTLET-->
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class="icon-globe font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Feeds</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" class="active" data-toggle="tab"> System </a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab"> Activities </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <!--BEGIN TABS-->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1_1">
                                            <div class="scroller" style="height: 339px;" data-always-visible="1"
                                                data-rail-visible="0">
                                                <ul class="feeds">
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> You have 4 pending tasks.
                                                                        <span class="label label-sm label-info"> Take
                                                                            action
                                                                            <i class="fa fa-share"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> Just now </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-sm label-success">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc"> New version v1.4 just
                                                                            lunched! </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date"> 20 mins </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-danger">
                                                                        <i class="fa fa-bolt"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> Database server #12 overloaded.
                                                                        Please fix the issue. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 24 mins </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> New order received. Please take
                                                                        care of it. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 30 mins </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> New order received. Please take
                                                                        care of it. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 40 mins </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-warning">
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> New user registered. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 1.5 hours </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> Web server hardware needs to be
                                                                        upgraded.
                                                                        <span class="label label-sm label-default ">
                                                                            Overdue </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 2 hours </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-default">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> New order received. Please take
                                                                        care of it. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 3 hours </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-warning">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> New order received. Please take
                                                                        care of it. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 5 hours </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> New order received. Please take
                                                                        care of it. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 18 hours </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-default">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> New order received. Please take
                                                                        care of it. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 21 hours </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> New order received. Please take
                                                                        care of it. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 22 hours </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-default">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> New order received. Please take
                                                                        care of it. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 21 hours </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> New order received. Please take
                                                                        care of it. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 22 hours </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-default">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> New order received. Please take
                                                                        care of it. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 21 hours </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> New order received. Please take
                                                                        care of it. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 22 hours </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-default">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> New order received. Please take
                                                                        care of it. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 21 hours </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> New order received. Please take
                                                                        care of it. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 22 hours </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_1_2">
                                            <div class="scroller" style="height: 290px;" data-always-visible="1"
                                                data-rail-visible1="1">
                                                <ul class="feeds">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-sm label-success">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc"> New user registered </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date"> Just now </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-sm label-success">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc"> New order received </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date"> 10 mins </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-danger">
                                                                        <i class="fa fa-bolt"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> Order #24DOP4 has been rejected.
                                                                        <span class="label label-sm label-danger "> Take
                                                                            action
                                                                            <i class="fa fa-share"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 24 mins </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-sm label-success">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc"> New user registered </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date"> Just now </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-sm label-success">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc"> New user registered </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date"> Just now </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-sm label-success">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc"> New user registered </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date"> Just now </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-sm label-success">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc"> New user registered </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date"> Just now </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-sm label-success">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc"> New user registered </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date"> Just now </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-sm label-success">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc"> New user registered </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date"> Just now </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-sm label-success">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc"> New user registered </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date"> Just now </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END TABS-->
                                </div>
                            </div>
                            <!-- END PORTLET-->
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

    <div class="quick-nav-overlay"></div>
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
    <script src="<?= base_url() ?>assets/backend/global/plugins/moment.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/counterup/jquery.waypoints.min.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/counterup/jquery.counterup.min.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript">
    </script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/amcharts/amcharts/serial.js" type="text/javascript">
    </script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/amcharts/amcharts/pie.js" type="text/javascript">
    </script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/amcharts/amcharts/radar.js" type="text/javascript">
    </script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/amcharts/amcharts/themes/light.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/amcharts/amcharts/themes/patterns.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/amcharts/amcharts/themes/chalk.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/amcharts/ammap/ammap.js" type="text/javascript">
    </script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/amcharts/ammap/maps/js/worldLow.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/amcharts/amstockcharts/amstock.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/fullcalendar/fullcalendar.min.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/horizontal-timeline/horizontal-timeline.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/flot/jquery.flot.min.js" type="text/javascript">
    </script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript">
    </script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/flot/jquery.flot.categories.min.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/jquery.sparkline.min.js" type="text/javascript">
    </script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript">
    </script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js"
        type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/backend/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"
        type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?= base_url() ?>assets/backend/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?= base_url() ?>assets/backend/pages/scripts/dashboard.min.js" type="text/javascript"></script>
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