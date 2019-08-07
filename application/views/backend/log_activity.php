<!DOCTYPE html>
<html lang="en">

<head>
    <title>Material Admin - Dashboard</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <!-- Global CSS -->
    <?php $this->load->view('backend/_includes/css.php'); ?>
    <!-- <link type="text/css" rel="stylesheet" href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/rickshaw/rickshaw.css?1422823372" /> -->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>/assets/backend/css/rickshaw.css" />

    <!-- <link type="text/css" rel="stylesheet" href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/morris/morris.core.css?1422823370" /> -->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>/assets/backend/css/morris.core.css" />

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
                        <li class="active">Timeline</li>
                    </ol>

                </div>
                <div class="section-body">
                    <div class="container">
                        <h2 class="text-light text-center">Fixed layout</h2>
                        <br />

                        <!-- BEGIN FIXED TIMELINE -->
                        <ul class="timeline collapse-lg timeline-hairline">
                            <li class="timeline-inverted">
                                <div class="timeline-circ circ-xl style-primary"><span
                                        class="glyphicon glyphicon-leaf"></span></div>
                                <div class="timeline-entry">
                                    <div class="card style-default-bright">
                                        <div class="card-body small-padding">
                                            <img class="img-circle img-responsive pull-left width-1"
                                                src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar9.jpg?1422538626"
                                                alt="" />
                                            <span class="text-medium">Received a <a class="text-primary"
                                                    href="http://www.codecovers.eu/materialadmin/mail/inbox">message</a>
                                                from <span class="text-primary">Ann Lauren</span></span><br />
                                            <span class="opacity-50">
                                                Saturday, Oktober 18, 2014
                                            </span>
                                        </div>
                                        <!--end .card-body -->
                                    </div>
                                    <!--end .card -->
                                </div>
                                <!--end .timeline-entry -->
                            </li>
                            <li>
                                <div class="timeline-circ circ-xl style-accent"><i class="md md-location-on"></i></div>
                                <div class="timeline-entry">
                                    <div class="card style-default-bright">
                                        <div class="card-body small-padding">
                                            <p>
                                                <img class="img-circle img-responsive pull-left width-1"
                                                    src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar7.jpg?1422538626"
                                                    alt="" />
                                                <span class="text-medium">User login at <span class="text-primary">8:15
                                                        pm</span></span><br />
                                                <span class="opacity-50">
                                                    Saturday, August 2, 2014
                                                </span>
                                            </p>
                                            Check out my new location.
                                        </div>
                                        <!--end .card-body -->
                                        <div class="card-body no-padding">
                                            <div id="map-canvas2" class="border-gray height-12"></div>
                                        </div>
                                        <!--end .card-body -->
                                    </div>
                                    <!--end .card -->
                                </div>
                                <!--end .timeline-entry -->
                            </li>
                            <li>
                                <div class="timeline-circ circ-xl style-default-dark"><i class="fa fa-quote-left"></i>
                                </div>
                                <div class="timeline-entry">
                                    <div class="card style-default-dark">
                                        <div class="card-body small-padding">
                                            <img class="img-circle img-responsive pull-left width-1"
                                                src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar7.jpg?1422538626"
                                                alt="" />
                                            <span class="text-medium">Meeting in the <span
                                                    class="text-primary">conference room</span></span><br />
                                            <span class="opacity-50">
                                                Saturday, Juli 29, 2014
                                            </span>
                                        </div>
                                        <!--end .card-body -->
                                        <div class="card-body">
                                            <p><em>Walked all the way home...</em></p>
                                            <img class="img-responsive"
                                                src="http://www.codecovers.eu/assets/img/modules/materialadmin/img14.jpg?1422538632"
                                                alt="" />
                                        </div>
                                        <!--end .card-body -->
                                    </div>
                                    <!--end .card -->
                                </div>
                                <!--end .timeline-entry -->
                            </li>
                        </ul>
                        <!-- END FIXED TIMELINE -->

                    </div>
                    <!--end .container -->
                </div>
                <!--end .section-body -->
            </section>
            <br /><br />
            <section>
                <div class="section-body">
                    <div class="container">
                        <h2 class="text-light text-center">Responsive layout</h2>
                        <br />

                        <!-- BEGIN RESPONSIVE TIMELINE -->
                        <ul class="timeline collapse-md">
                            <li class="timeline-inverted">
                                <div class="timeline-circ"></div>
                                <div class="timeline-entry">
                                    <div class="card style-default-light">
                                        <div class="card-body small-padding">
                                            <img class="img-circle img-responsive pull-left width-1"
                                                src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar9.jpg?1422538626"
                                                alt="" />
                                            <span class="text-medium">Received a <a class="text-primary"
                                                    href="http://www.codecovers.eu/materialadmin/mail/inbox">message</a>
                                                from <span class="text-primary">Ann Lauren</span></span><br />
                                            <span class="opacity-50">
                                                Saturday, Oktober 18, 2014
                                            </span>
                                        </div>
                                        <!--end .card-body -->
                                    </div>
                                    <!--end .card -->
                                </div>
                                <!--end .timeline-entry -->
                            </li>
                            <li>
                                <div class="timeline-circ"></div>
                                <div class="timeline-entry">
                                    <div class="card style-default-light">
                                        <div class="card-body small-padding">
                                            <p>
                                                <img class="img-circle img-responsive pull-left width-1"
                                                    src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar7.jpg?1422538626"
                                                    alt="" />
                                                <span class="text-medium">User login at <span class="text-primary">8:15
                                                        pm</span></span><br />
                                                <span class="opacity-50">
                                                    Saturday, August 2, 2014
                                                </span>
                                            </p>
                                            Check out my new location.
                                        </div>
                                        <!--end .card-body -->
                                        <div class="card-body no-padding">
                                            <div id="map-canvas1" class="border-gray height-12"></div>
                                        </div>
                                        <!--end .card-body -->
                                    </div>
                                    <!--end .card -->
                                </div>
                                <!--end .timeline-entry -->
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-circ style-default-dark"></div>
                                <div class="timeline-entry">
                                    <div class="card style-default-dark">
                                        <div class="card-body small-padding">
                                            <img class="img-circle img-responsive pull-left width-1"
                                                src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar7.jpg?1422538626"
                                                alt="" />
                                            <span class="text-medium">Meeting in the <span
                                                    class="text-primary">conference room</span></span><br />
                                            <span class="opacity-50">
                                                Saturday, Juli 29, 2014
                                            </span>
                                        </div>
                                        <!--end .card-body -->
                                        <div class="card-body">
                                            <p><em>My new home</em></p>
                                            <img class="img-responsive"
                                                src="http://www.codecovers.eu/assets/img/modules/materialadmin/img12.jpg?1422538631"
                                                alt="" />
                                        </div>
                                        <!--end .card-body -->
                                    </div>
                                    <!--end .card -->
                                </div>
                                <!--end .timeline-entry -->
                            </li>
                            <li>
                                <div class="timeline-circ circ-xl style-primary-gradient"><span
                                        class="fa fa-arrow-up"></span></div>
                                <div class="timeline-entry">
                                    <div class="card style-primary">
                                        <div class="card-body small-padding">
                                            <p><img class="img-circle img-responsive pull-left width-1"
                                                    src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar5.jpg?1422538625"
                                                    alt="" />
                                                <span class="text-medium">Contacted <a class="text-primary-dark"
                                                        href="http://www.codecovers.eu/materialadmin/mail/inbox">Mabel
                                                        Logan</a></span><br />
                                                <span class="opacity-50">
                                                    Saturday, Juli 23, 2014
                                                </span>
                                            </p>
                                            <em>
                                                Can you send me the latest updates? Then I can see the new colors for
                                                the themes.
                                            </em>
                                        </div>
                                        <!--end .card-body -->
                                    </div>
                                    <!--end .card -->
                                </div>
                                <!--end .timeline-entry -->
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-circ circ-lg"><i class="fa fa-plus"></i>
                                </div>
                                <div class="timeline-entry">
                                    <div class="card style-default-light">
                                        <div class="card-body small-padding">
                                            <img class="img-circle img-responsive pull-left width-1"
                                                src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar7.jpg?1422538626"
                                                alt="" />
                                            <span class="text-medium">User registered on website</span><br />
                                            <span class="opacity-50">
                                                Saturday, March 2, 2014
                                            </span>
                                        </div>
                                        <!--end .card-body -->
                                    </div>
                                    <!--end .card -->
                                </div>
                                <!--end .timeline-entry -->
                            </li>
                        </ul>
                        <!-- END RESPONSIVE TIMELINE -->

                    </div>
                    <!--end .container -->
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



        <!-- BEGIN OFFCANVAS RIGHT -->
        <div class="offcanvas">



            <!-- BEGIN OFFCANVAS SEARCH -->
            <div id="offcanvas-search" class="offcanvas-pane width-8">
                <div class="offcanvas-head">
                    <header class="text-primary">Search</header>
                    <div class="offcanvas-tools">
                        <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                            <i class="md md-close"></i>
                        </a>
                    </div>
                </div>

                <div class="offcanvas-body no-padding">
                    <ul class="list ">
                        <li class="tile divider-full-bleed">
                            <div class="tile-content">
                                <div class="tile-text"><strong>A</strong></div>
                            </div>
                        </li>
                        <li class="tile">
                            <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"
                                data-backdrop="false">
                                <div class="tile-icon">
                                    <img src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar4.jpg?1422538625"
                                        alt="" />
                                </div>
                                <div class="tile-text">
                                    Alex Nelson
                                    <small>123-123-3210</small>
                                </div>
                            </a>
                        </li>
                        <li class="tile">
                            <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"
                                data-backdrop="false">
                                <div class="tile-icon">
                                    <img src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar9.jpg?1422538626"
                                        alt="" />
                                </div>
                                <div class="tile-text">
                                    Ann Laurens
                                    <small>123-123-3210</small>
                                </div>
                            </a>
                        </li>
                        <li class="tile divider-full-bleed">
                            <div class="tile-content">
                                <div class="tile-text"><strong>J</strong></div>
                            </div>
                        </li>
                        <li class="tile">
                            <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"
                                data-backdrop="false">
                                <div class="tile-icon">
                                    <img src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar2.jpg?1422538624"
                                        alt="" />
                                </div>
                                <div class="tile-text">
                                    Jessica Cruise
                                    <small>123-123-3210</small>
                                </div>
                            </a>
                        </li>
                        <li class="tile">
                            <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"
                                data-backdrop="false">
                                <div class="tile-icon">
                                    <img src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar8.jpg?1422538626"
                                        alt="" />
                                </div>
                                <div class="tile-text">
                                    Jim Peters
                                    <small>123-123-3210</small>
                                </div>
                            </a>
                        </li>
                        <li class="tile divider-full-bleed">
                            <div class="tile-content">
                                <div class="tile-text"><strong>M</strong></div>
                            </div>
                        </li>
                        <li class="tile">
                            <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"
                                data-backdrop="false">
                                <div class="tile-icon">
                                    <img src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar5.jpg?1422538625"
                                        alt="" />
                                </div>
                                <div class="tile-text">
                                    Mabel Logan
                                    <small>123-123-3210</small>
                                </div>
                            </a>
                        </li>
                        <li class="tile">
                            <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"
                                data-backdrop="false">
                                <div class="tile-icon">
                                    <img src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar11.jpg?1422538623"
                                        alt="" />
                                </div>
                                <div class="tile-text">
                                    Mary Peterson
                                    <small>123-123-3210</small>
                                </div>
                            </a>
                        </li>
                        <li class="tile">
                            <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"
                                data-backdrop="false">
                                <div class="tile-icon">
                                    <img src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar3.jpg?1422538624"
                                        alt="" />
                                </div>
                                <div class="tile-text">
                                    Mike Alba
                                    <small>123-123-3210</small>
                                </div>
                            </a>
                        </li>
                        <li class="tile divider-full-bleed">
                            <div class="tile-content">
                                <div class="tile-text"><strong>N</strong></div>
                            </div>
                        </li>
                        <li class="tile">
                            <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"
                                data-backdrop="false">
                                <div class="tile-icon">
                                    <img src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar6.jpg?1422538626"
                                        alt="" />
                                </div>
                                <div class="tile-text">
                                    Nathan Peterson
                                    <small>123-123-3210</small>
                                </div>
                            </a>
                        </li>
                        <li class="tile divider-full-bleed">
                            <div class="tile-content">
                                <div class="tile-text"><strong>P</strong></div>
                            </div>
                        </li>
                        <li class="tile">
                            <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"
                                data-backdrop="false">
                                <div class="tile-icon">
                                    <img src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar7.jpg?1422538626"
                                        alt="" />
                                </div>
                                <div class="tile-text">
                                    Philip Ericsson
                                    <small>123-123-3210</small>
                                </div>
                            </a>
                        </li>
                        <li class="tile divider-full-bleed">
                            <div class="tile-content">
                                <div class="tile-text"><strong>S</strong></div>
                            </div>
                        </li>
                        <li class="tile">
                            <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"
                                data-backdrop="false">
                                <div class="tile-icon">
                                    <img src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar10.jpg?1422538623"
                                        alt="" />
                                </div>
                                <div class="tile-text">
                                    Samuel Parsons
                                    <small>123-123-3210</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--end .offcanvas-body -->
            </div>
            <!--end .offcanvas-pane -->
            <!-- END OFFCANVAS SEARCH -->




            <!-- BEGIN OFFCANVAS CHAT -->
            <div id="offcanvas-chat" class="offcanvas-pane style-default-light width-12">
                <div class="offcanvas-head style-default-bright">
                    <header class="text-primary">Chat with Ann Laurens</header>
                    <div class="offcanvas-tools">
                        <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                            <i class="md md-close"></i>
                        </a>
                        <a class="btn btn-icon-toggle btn-default-light pull-right" href="#offcanvas-search"
                            data-toggle="offcanvas" data-backdrop="false">
                            <i class="md md-arrow-back"></i>
                        </a>
                    </div>
                    <form class="form">
                        <div class="form-group floating-label">
                            <textarea name="sidebarChatMessage" id="sidebarChatMessage" class="form-control autosize"
                                rows="1"></textarea>
                            <label for="sidebarChatMessage">Leave a message</label>
                        </div>
                    </form>
                </div>

                <div class="offcanvas-body">
                    <ul class="list-chats">
                        <li>
                            <div class="chat">
                                <div class="chat-avatar"><img class="img-circle"
                                        src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar1.jpg?1422538623"
                                        alt="" /></div>
                                <div class="chat-body">
                                    Yes, it is indeed very beautiful.
                                    <small>10:03 pm</small>
                                </div>
                            </div>
                            <!--end .chat -->
                        </li>
                        <li class="chat-left">
                            <div class="chat">
                                <div class="chat-avatar"><img class="img-circle"
                                        src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar9.jpg?1422538626"
                                        alt="" /></div>
                                <div class="chat-body">
                                    Did you see the changes?
                                    <small>10:02 pm</small>
                                </div>
                            </div>
                            <!--end .chat -->
                        </li>
                        <li>
                            <div class="chat">
                                <div class="chat-avatar"><img class="img-circle"
                                        src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar1.jpg?1422538623"
                                        alt="" /></div>
                                <div class="chat-body">
                                    I just arrived at work, it was quite busy.
                                    <small>06:44pm</small>
                                </div>
                                <div class="chat-body">
                                    I will take look in a minute.
                                    <small>06:45pm</small>
                                </div>
                            </div>
                            <!--end .chat -->
                        </li>
                        <li class="chat-left">
                            <div class="chat">
                                <div class="chat-avatar"><img class="img-circle"
                                        src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar9.jpg?1422538626"
                                        alt="" /></div>
                                <div class="chat-body">
                                    The colors are much better now.
                                </div>
                                <div class="chat-body">
                                    The colors are brighter than before.
                                    I have already sent an example.
                                    This will make it look sharper.
                                    <small>Mon</small>
                                </div>
                            </div>
                            <!--end .chat -->
                        </li>
                        <li>
                            <div class="chat">
                                <div class="chat-avatar"><img class="img-circle"
                                        src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar1.jpg?1422538623"
                                        alt="" /></div>
                                <div class="chat-body">
                                    Are the colors of the logo already adapted?
                                    <small>Last week</small>
                                </div>
                            </div>
                            <!--end .chat -->
                        </li>
                    </ul>
                </div>
                <!--end .offcanvas-body -->
            </div>
            <!--end .offcanvas-pane -->
            <!-- END OFFCANVAS CHAT -->

        </div>
        <!--end .offcanvas-->
        <!-- END OFFCANVAS RIGHT -->

    </div>
    <!--end #base-->
    <!-- END BASE -->


    <!-- BEGIN JAVASCRIPT -->
    <?php //include "_includes/js-cdn.php" ?>
    <?php $this->load->view('backend/_includes/js-offline.php'); ?>
    <script src="<?= base_url() ?>/assets/backend/js/moment.min.js"></script>
    <script src="<?= base_url() ?>/assets/backend/js/flot/jquery.flot.min.js"></script>
    <script src="<?= base_url() ?>/assets/backend/js/flot/jquery.flot.time.min.js"></script>
    <script src="<?= base_url() ?>/assets/backend/js/flot/jquery.flot.resize.min.js"></script>
    <script src="<?= base_url() ?>/assets/backend/js/flot/jquery.flot.orderBars.js"></script>
    <script src="<?= base_url() ?>/assets/backend/js/flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url() ?>/assets/backend/js/flot/curvedLines.js"></script>
    <script src="<?= base_url() ?>/assets/backend/js/d3.min.js"></script>
    <script src="<?= base_url() ?>/assets/backend/js/d3.v3.js"></script>
    <script src="<?= base_url() ?>/assets/backend/js/rickshaw.min.js"></script>
    <script src="<?= base_url() ?>/assets/backend/js/DemoDashboard.js"></script>
    <!-- END JAVASCRIPT -->


    <!-- Modal -->
    <?php $this->load->view('backend/_includes/modal.php'); ?>
   

</body>

</html>