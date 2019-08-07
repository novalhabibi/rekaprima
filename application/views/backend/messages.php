<!DOCTYPE html>
<html lang="en">



<head>
    <title>Material Admin - Messages</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <!-- Global CSS -->
    <?php include "_includes/css.php" ?>

    <!-- <link type="text/css" rel="stylesheet" href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/toastr/toastr.css?1422823374" /> -->
    <link type="text/css" rel="stylesheet" href="assets2/css/toastr.css?1422823374" />

    <!-- END STYLESHEETS -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/html5shiv.js?1422823601"></script>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/respond.min.js?1422823601"></script>
    <![endif]-->
</head>






<body class="menubar-hoverable header-fixed menubar-pin ">
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
            <section>
                <div class="section-header">
                    <ol class="breadcrumb">
                        <li class="active">Toastr messages</li>
                    </ol>

                </div>
                <div class="section-body contain-lg">

                    <!-- BEGIN INTRO -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-primary">Messages</h1>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-8">
                            <article class="margin-bottom-xxl">
                                <p class="lead">
                                    With Material Admin, there are various ways to notify the user.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END INTRO -->

                    <!-- BEGIN TOASTR MESSAGE - STATES -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-primary">Toastr messages</h2>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-12">
                            <h4>Contextual colors</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    Toastr messages provide lightweight feedback about an operation.
                                    They show a brief message on screen.
                                    Toastr messages appear above all other elements on screen.
                                    They can contain actions.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-6">
                                            <a id="toast-info"
                                                class="btn btn-block btn-raised btn-default-bright ink-reaction"><i
                                                    class="md md-notifications pull-right text-default-dark"></i>Info
                                                message</a>
                                            <a id="toast-error"
                                                class="btn btn-block btn-raised btn-default-bright ink-reaction"><i
                                                    class="md md-notifications pull-right text-danger"></i>Error
                                                message</a>
                                            <a id="toast-warning"
                                                class="btn btn-block btn-raised btn-default-bright ink-reaction"><i
                                                    class="md md-notifications pull-right text-warning"></i>Warning
                                                message</a>
                                            <a id="toast-success"
                                                class="btn btn-block btn-raised btn-default-bright ink-reaction"><i
                                                    class="md md-notifications pull-right text-success"></i>Success
                                                message</a>
                                        </div>
                                    </div>
                                    <!--end .row -->
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Click the buttons to see the toasts</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END TOASTR MESSAGE - STATES -->

                    <!-- BEGIN TOASTR MESSAGE - POSITION -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Toastr positioning</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    You can position the Toastr messages on several corners on the screen.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row margin-bottom-xl">
                                        <div class="col-lg-12 text-center">
                                            <a class="btn btn-block btn-raised btn-default-bright ink-reaction position-toast pull-left"
                                                data-position="toast-top-full-width">Top full width</a>
                                        </div>
                                        <!--end .col -->
                                    </div>
                                    <!--end .row -->
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <a class="btn btn-raised btn-default-bright ink-reaction position-toast pull-left"
                                                data-position="toast-top-left">
                                                <div class="width-3 hidden-xs">Top left</div><span
                                                    class="visible-xs">TL</span>
                                            </a>
                                            <a class="btn btn-raised btn-default-bright ink-reaction position-toast"
                                                data-position="toast-top-center">
                                                <div class="width-3 hidden-xs">Top center</div><span
                                                    class="visible-xs">TC</span>
                                            </a>
                                            <a class="btn btn-raised btn-default-bright ink-reaction position-toast pull-right"
                                                data-position="toast-top-right">
                                                <div class="width-3 hidden-xs">Top right</div><span
                                                    class="visible-xs">TR</span>
                                            </a>
                                        </div>
                                        <!--end .col -->
                                    </div>
                                    <!--end .row -->
                                    <p>&nbsp;</p>
                                    <div class="row margin-bottom-xl">
                                        <div class="col-lg-12 text-center">
                                            <a class="btn btn-raised btn-default-bright ink-reaction position-toast pull-left"
                                                data-position="toast-bottom-left">
                                                <div class="width-3 hidden-xs">Bottom left</div><span
                                                    class="visible-xs">BL</span>
                                            </a>
                                            <a class="btn btn-raised btn-default-bright ink-reaction position-toast"
                                                data-position="toast-bottom-center">
                                                <div class="width-3 hidden-xs">Bottom center</div><span
                                                    class="visible-xs">BC</span>
                                            </a>
                                            <a class="btn btn-raised btn-default-bright ink-reaction position-toast pull-right"
                                                data-position="toast-bottom-right">
                                                <div class="width-3 hidden-xs">Bottom right</div><span
                                                    class="visible-xs">BR</span>
                                            </a>
                                        </div>
                                        <!--end .col -->
                                    </div>
                                    <!--end .row -->
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <a class="btn btn-block btn-raised btn-default-bright ink-reaction position-toast pull-left"
                                                data-position="toast-bottom-full-width">Bottom full width</a>
                                        </div>
                                        <!--end .col -->
                                    </div>
                                    <!--end .row -->
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Click the buttons to see the toasts</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END TOASTR MESSAGE - POSITION -->

                    <!-- BEGIN TOASTR MESSAGE - ACTIONS -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Toastr messages with actions</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    Toastr messages can contain actions.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-6">
                                            <a id="toast-action"
                                                class="btn btn-block btn-raised btn-default-bright ink-reaction"><i
                                                    class="fa fa-hand-o-up pull-right"></i>Short message with action</a>
                                            <a id="toast-long-action"
                                                class="btn btn-block btn-raised btn-default-bright ink-reaction"><i
                                                    class="fa fa-hand-o-up pull-right"></i>Long message with action</a>
                                            <a id="toast-info-progress"
                                                class="btn btn-block btn-raised btn-default-bright ink-reaction"><i
                                                    class="md md-battery-60 pull-right"></i>Message with progressbar</a>
                                            <a id="toast-info-close"
                                                class="btn btn-block btn-raised btn-default-bright ink-reaction"><i
                                                    class="md md-close pull-right"></i>Message with close button</a>
                                        </div>
                                    </div>
                                    <!--end .row -->
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Click the buttons to see the toasts</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END TOASTR MESSAGE - ACTIONS -->

                    <!-- BEGIN CUSTOM TOASTR MESSAGE -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Easy configuration</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    Toastr messages are easy to configure in javascript.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="highlight">
                                                <pre class="prettyprint">toastr.options = {
  "closeButton": <select name="closeButton">
	<option selected>true</option>
	<option>false</option>
</select>,
  "progressBar": <select name="progressBar">
	<option>true</option>
	<option selected>false</option>
</select>,
  "debug": <select name="debug">
	<option>true</option>
	<option selected>false</option>
</select>,
  "positionClass": <select name="positionClass">
	<option selected>toast-bottom-left</option>
	<option >toast-bottom-right</option>
	<option >toast-bottom-center</option>
	<option >toast-top-right</option>
	<option >toast-top-left</option>
	<option >toast-top-center</option>
	<option>toast-top-full-width</option>
	<option>toast-bottom-full-width</option>
</select>,
  "showDuration": <select name="showDuration">
	<option selected>330</option>
	<option>1000</option>
	<option>2000</option>
	<option>4000</option>
</select>,
  "hideDuration": <select name="hideDuration">
	<option selected>330</option>
	<option>1000</option>
	<option>2000</option>
	<option>4000</option>
</select>,
  "timeOut":  <select name="timeOut">
	<option>0</option>
	<option>1000</option>
	<option>2000</option>
	<option selected>5000</option>
	<option>10000</option>
</select>,
  "extendedTimeOut": <select name="extendedTimeOut">
	<option>0</option>
	<option>500</option>
	<option selected>1000</option>
	<option>2000</option>
	<option>4000</option>
</select>,
  "showEasing": <select name="showEasing">
	<option>linear</option>
	<option selected>swing</option>
</select>,
  "hideEasing": <select name="hideEasing">
	<option>linear</option>
	<option selected>swing</option>
</select>,
  "showMethod": <select name="showMethod">
	<option>show</option>
	<option>fadeIn</option>
	<option selected>slideDown</option>
</select>,
  "hideMethod": <select name="hideMethod">
	<option>hide</option>
	<option>fadeOut</option>
	<option selected>slideUp</option>
</select>,
  "onclick": null
}

										</pre>
                                            </div>
                                            <!--end .highlight -->
                                        </div>
                                        <!--end .col -->
                                        <div class="col-sm-4">
                                            <form class="form">
                                                <div class="form-group">
                                                    <select id="state" name="state" class="form-control">
                                                        <option value="info">Info</option>
                                                        <option value="error">Error</option>
                                                        <option value="warning">Warning</option>
                                                        <option value="success">Success</option>
                                                    </select>
                                                    <label for="state">State</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="message"
                                                        value="Message sent">
                                                    <label for="message">Message</label>
                                                </div>
                                            </form>
                                        </div>
                                        <!--end .col -->
                                    </div>
                                    <!--end .row -->
                                </div>
                                <!--end .card-body -->
                                <div class="card-actionbar">
                                    <div class="card-actionbar-row">
                                        <a id="toast-custom" class="btn btn-raised btn-primary ink-reaction">Show
                                            message</a>
                                    </div>
                                </div>
                            </div>
                            <!--end .card -->
                            <em class="text-caption">There are several options you can use to customize the
                                messages</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END CUSTOM TOASTR MESSAGE -->


                    <hr class="ruler-xxl" />

                    <!-- BEGIN ALERTS -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-primary">Alerts</h2>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-12">
                            <h4>Examples</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    Provide contextual feedback messages for typical user actions with the handful of
                                    available and flexible alert messages.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="alert alert-success" role="alert">
                                        <strong>Well done!</strong> You successfully read this important alert message.
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        <strong>Heads up!</strong> This alert needs your attention, but it's not super
                                        important.
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                    </div>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Contextual colors</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END ALERTS -->

                    <!-- BEGIN ALERTS -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Callout</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    Add the class <code>.alert-callout</code> for a more minimalistic style.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="alert alert-callout alert-success" role="alert">
                                        <strong>Well done!</strong> You successfully read this important alert message.
                                    </div>
                                    <div class="alert alert-callout alert-info" role="alert">
                                        <strong>Heads up!</strong> This alert needs your attention, but it's not super
                                        important.
                                    </div>
                                    <div class="alert alert-callout alert-warning" role="alert">
                                        <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                    </div>
                                    <div class="alert alert-callout alert-danger" role="alert">
                                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                    </div>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Contextual colors</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END ALERTS -->

                    <hr class="ruler-xxl" />

                    <!-- BEGIN SUPPORTING MESSAGES -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-primary">Supporting Messages</h2>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-12">
                            <h4>Tooltip</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    The tooltip plugin generates content and markup on demand.
                                    Options can be passed via data attributes or JavaScript.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <button type="button" class="btn btn-default-bright btn-raised"
                                        data-toggle="tooltip" data-placement="left" title=""
                                        data-original-title="Tooltip on left">Left</button>
                                    <button type="button" class="btn btn-default-bright btn-raised"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Tooltip on top">Top</button>
                                    <button type="button" class="btn btn-default-bright btn-raised"
                                        data-toggle="tooltip" data-placement="bottom" title=""
                                        data-original-title="Tooltip on bottom">Bottom</button>
                                    <button type="button" class="btn btn-default-bright btn-raised"
                                        data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Tooltip on right">Right</button>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Hover to see the tooltips</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Popover</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    Add small overlays of content, like those on the iPad, to any element for housing
                                    secondary information.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <button type="button" class="btn btn-default-bright btn-raised"
                                        data-container="body" data-toggle="popover" data-placement="left"
                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                        data-original-title="" title="">
                                        Left
                                    </button>
                                    <button type="button" class="btn btn-default-bright btn-raised"
                                        data-container="body" data-toggle="popover" data-placement="top"
                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                        data-original-title="" title="">
                                        Top
                                    </button>
                                    <button type="button" class="btn btn-default-bright btn-raised"
                                        data-container="body" data-toggle="popover" data-placement="bottom"
                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                        data-original-title="" title="">
                                        Bottom
                                    </button>
                                    <button type="button" class="btn btn-default-bright btn-raised"
                                        data-container="body" data-toggle="popover" data-placement="right"
                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                        data-original-title="" title="">
                                        Right
                                    </button>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Click to see the tooltips</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END SUPPORTING MESSAGES -->

                    <hr class="ruler-xxl" />

                    <!-- BEGIN MODALS -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-primary">Modals</h2>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-12">
                            <h4>Examples</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    Modals are streamlined, but flexible, dialog prompts with the minimum required
                                    functionality and smart defaults
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <button class="btn btn-default-bright btn-raised" data-toggle="modal"
                                        data-target="#simpleModal">Simple modal</button>
                                    <button class="btn btn-default-bright btn-raised" data-toggle="modal"
                                        data-target="#formModal">Form modal</button>
                                    <button class="btn btn-default-bright btn-raised" data-toggle="modal"
                                        data-target="#textModal">Text modal</button>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Click to see the modals</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END MODALS -->

                    <!-- BEGIN SIMPLE MODAL MARKUP -->
                    <div class="modal fade" id="simpleModal" tabindex="-1" role="dialog"
                        aria-labelledby="simpleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="simpleModalLabel">Save changes</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Do you want to save changes?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- END SIMPLE MODAL MARKUP -->

                    <!-- BEGIN FORM MODAL MARKUP -->
                    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="formModalLabel">Login to continue</h4>
                                </div>
                                <form class="form-horizontal" role="form">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <label for="email1" class="control-label">Email</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="email" name="email1" id="email1" class="form-control"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <label for="password1" class="control-label">Password</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="password" name="password1" id="password1"
                                                    class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="cb1"> Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- END FORM MODAL MARKUP -->

                    <!-- BEGIN LARGE TEXT MODAL MARKUP -->
                    <div class="modal fade" id="textModal" tabindex="-1" role="dialog" aria-labelledby="textModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="textModalLabel">License terms</h4>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <p>
                                        Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius,
                                        turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis
                                        sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus
                                        et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut
                                        ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt
                                        sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum.
                                        Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget,
                                        consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl
                                        adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque
                                        nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis,
                                        laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu,
                                        feugiat in, orci. In hac habitasse platea dictumst.
                                    </p>
                                    <p>
                                        Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris,
                                        sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non
                                        elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In
                                        hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum,
                                        nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci
                                        magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris.
                                        Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae,
                                        elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse
                                        platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In
                                        semper bibendum libero.
                                    </p>
                                    <p>
                                        Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae
                                        tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula,
                                        dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend
                                        molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa.
                                        Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et
                                        augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus
                                        et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean
                                        vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum
                                        dapibus.
                                    </p>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="cb2"> I have read and accept the licence terms.
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-success">Accept and continue</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- END LARGE TEXT MODAL MARKUP -->

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

    <!-- Global JS -->
    <?php include "_includes/js-offline.php" ?>


    <!-- <script src="//www.codecovers.eu/assets/js/modules/materialadmin/libs/toastr/toastr.js"></script> -->
    <script src="assets2/js/toastr.js"></script>
    <script src="assets2/js/DemoUIMessages.js"></script>

    <!-- END JAVASCRIPT -->



</body>

</html>