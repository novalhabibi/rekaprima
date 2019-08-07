<!DOCTYPE html>
<html lang="en">



<head>
    <title>Material Admin - Form validation</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
   <!-- Global CSS -->
    <?php $this->load->view('backend/_includes/css.php'); ?>


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
                        <li class="active">Form validation</li>
                    </ol>

                </div>
                <div class="section-body contain-lg">
                    <!-- BEGIN ADVANCED VALIDATION -->
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form form-validate floating-label" novalidate="novalidate" action="<?= base_url('dashboard/admin/tambah') ?>" method="POST" >
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="minmax2" name="minmax2"
                                                data-rule-minlength="2" maxlength="5" required>
                                            <label for="minmax2">Min / Max length</label>
                                            <p class="help-block">Minimum length 2 / Maximum length 5</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="rangelength2"
                                                name="rangelength2" data-rule-rangelength="[5, 10]" required>
                                            <label for="rangelength2">Range restriction</label>
                                            <p class="help-block">Between 5 and 10</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="minmaxvalue2"
                                                name="minmaxvalue2" data-rule-min="18" data-rule-max="65" required>
                                            <label for="minmaxvalue2">Min / Max value</label>
                                            <p class="help-block">Minimum value 18 / Maximum value 65</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="rangevalue2" name="rangevalue2"
                                                data-rule-range="[18, 65]" required>
                                            <label for="rangevalue2">Range value</label>
                                            <p class="help-block">Between 18 and 65</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="url2" name="url2"
                                                data-rule-url="true" required>
                                            <label for="url2">URL</label>
                                            <p class="help-block">Starts with http://</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="date2" name="date2"
                                                data-rule-date="true" required>
                                            <label for="date2">Date</label>
                                            <p class="help-block">YYYY-MM-DD</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="number2" name="number2"
                                                data-rule-number="true" required>
                                            <label for="number2">Number</label>
                                            <p class="help-block">Numbers only</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="digits2" name="digits2"
                                                data-rule-digits="true" required>
                                            <label for="digits2">Digits</label>
                                            <p class="help-block">Digits only</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="creditcard2" name="creditcard2"
                                                data-rule-creditcard="true" required>
                                            <label for="creditcard2">Creditcard</label>
                                            <p class="help-block">try 446-667-651</p>
                                        </div>
                                    </div>
                                    <!--end .card-body -->
                                    <div class="card-actionbar">
                                        <div class="card-actionbar-row">
                                            <button type="submit"
                                                class="btn btn-flat btn-primary ink-reaction">Validate</button>
                                        </div>
                                    </div>
                                </div>
                                <!--end .card -->
                                <em class="text-caption">Page rendered in <b>{elapsed_time}</b> seconds.</em>
                            </form>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-6">
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

    <?php $this->load->view('backend/_includes/js-offline.php'); ?>


    <script src="assets2/js/jquery.validate.min.js">
    </script>
    <script src="assets2/js/additional-methods.js">
    </script>

    <!-- END JAVASCRIPT -->



</body>

</html>