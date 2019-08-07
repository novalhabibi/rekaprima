<!DOCTYPE html>
<html lang="en">



<head>
    <title>Material Admin - Form advanced</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <!-- Global CSS -->
    <?php include "_includes/css.php" ?>

    <!-- <link type="text/css" rel="stylesheet"
        href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/select2/select2.css?1422823373" /> -->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>/assets/backend/css/select2.css?1422823373" />

    <!-- <link type="text/css" rel="stylesheet"
            href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/multi-select/multi-select.css?1422823371" /> -->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>/assets/backend/css/multi-select.css?1422823371" />



    <!-- <link type="text/css" rel="stylesheet"
        href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/bootstrap-datepicker/datepicker3.css?1422823364" /> -->

    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>/assets/backend/css/datepicker3.css?1422823364" />

    <!-- <link type="text/css" rel="stylesheet"
            href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/jquery-ui/jquery-ui-theme.css?1422823370" />
     -->

    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>/assets/backend/css/jquery-ui-theme.css?1422823370" />



    <!-- <link type="text/css" rel="stylesheet" href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/bootstrap-colorpicker/bootstrap-colorpicker.css?1422823362" /> -->

    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>/assets/backend/css/bootstrap-colorpicker.css?1422823362" />

    <!-- <link type="text/css" rel="stylesheet" href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/bootstrap-tagsinput/bootstrap-tagsinput.css?1422823365" /> -->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>/assets/backend/css/bootstrap-tagsinput.css?1422823365" />

    <!-- <link type="text/css" rel="stylesheet" href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/typeahead/typeahead.css?1422823375" /> -->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>/assets/backend/css/typeahead.css?1422823375" />

    <!-- <link type="text/css" rel="stylesheet" href="http://www.codecovers.eu/assets/css/modules/materialadmin/css/theme-default/libs/dropzone/dropzone-theme.css?1422823366" /> -->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>/assets/backend/css/dropzone-theme.css?1422823366" />

    <!-- END STYLESHEETS -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/html5shiv.js?1422823601"></script>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/respond.min.js?1422823601"></script>
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
            <section>
                <div class="section-header">
                    <ol class="breadcrumb">
                        <li class="active">Form advanced</li>
                    </ol>

                </div>
                <div class="section-body contain-lg">

                    <!-- BEGIN INTRO -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-primary">Advanced form components</h1>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-8">
                            <article class="margin-bottom-xxl">
                                <p class="lead">
                                    When you are developing an Admin Template, it's always handy to have more than the
                                    standard toolset the browser gives you.
                                    That's why Material Admin provides advanced components styled to fit well inside the
                                    Material Design philosophy.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END INTRO -->

                    <!-- BEGIN AUTOCOMPLETE -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Autocomplete</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    Autocomplete inputs give you search options while typing.
                                    You can use either the autocomplete from Typeahead or jQuery, whichever you prefer.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-group">
                                            <input type="text" id="autocomplete1" class="form-control"
                                                data-source="http://www.codecovers.eu/materialadmin/forms/data/countries.json"
                                                placeholder="Countries">
                                            <label>Autocomplete (Typeahead)</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="autocomplete2" class="form-control"
                                                data-source="data/countries.json" placeholder="Countries">
                                            <label>Autocomplete (jQuery)</label>
                                        </div>
                                    </form>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Autocomplete from jQuery and Typeahead</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END AUTOCOMPLETE -->

                    <!-- BEGIN COLORPICKER -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Colorpickers</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    When you need a certain color, colorpickers can be useful.
                                    Just pick a color, and your input recieves the correct hex or rgb(a) color.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-group">
                                            <input type="text" id="cp1" class="form-control bscp" value="#8fff00">
                                            <label>Colorpicker</label>
                                        </div>
                                        <!--end .form-group -->
                                        <div class="form-group">
                                            <div id="cp2" class="input-group colorpicker-component"
                                                data-color="rgb(10, 168, 158)" data-color-format="rgba">
                                                <div class="input-group-content">
                                                    <input type="text" value="rgb(10, 168, 158)" readonly=""
                                                        class="form-control">
                                                    <label>Colorpicker</label>
                                                </div>
                                                <div class="input-group-addon"><i
                                                        style="background-color: rgb(10, 168, 158);"></i></div>
                                            </div>
                                        </div>
                                        <!--end .form-group -->
                                    </form>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Colorpickers</em>
                            <div class="card">
                                <div class="card-body style-primary">
                                    <form class="form form-inverse">
                                        <div class="form-group">
                                            <div>
                                                <input type="text" id="cp3" class="form-control" value="#c8e0df">
                                                <label>Colorpicker</label>
                                            </div>
                                        </div>
                                        <!--end .form-group -->
                                    </form>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Colorpickers</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END COLORPICKER -->

                    <!-- BEGIN DATEPICKERS -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Datepickers</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    Datepickers provide a simple way to select a single date.
                                    Using these in your template helps ensure that a user's specification of a date
                                    input is valid and formatted correctly.
                                    Datepickers can be used as a dropdown on an input field but also inline on a form.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-group control-width-normal">
                                            <div class="input-group date" id="demo-date">
                                                <div class="input-group-content">
                                                    <input type="text" class="form-control">
                                                    <label>Datepicker</label>
                                                </div>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                        <!--end .form-group -->
                                        <div class="form-group control-width-normal">
                                            <div class="input-group date" id="demo-date-month">
                                                <div class="input-group-content">
                                                    <input type="text" class="form-control">
                                                    <label>Monthpicker</label>
                                                </div>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                        <!--end .form-group -->
                                        <div class="form-group control-width-normal">
                                            <div class="input-group date" id="demo-date-format">
                                                <div class="input-group-content">
                                                    <input type="text" class="form-control">
                                                    <label>Datepicker</label>
                                                    <p class="help-block">yyyy/mm/dd</p>
                                                </div>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                        <!--end .form-group -->
                                    </form>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Datepickers</em>
                            <div class="card">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-group">
                                            <div class="input-daterange input-group" id="demo-date-range">
                                                <div class="input-group-content">
                                                    <input type="text" class="form-control" name="start" />
                                                    <label>Date range</label>
                                                </div>
                                                <span class="input-group-addon">to</span>
                                                <div class="input-group-content">
                                                    <input type="text" class="form-control" name="end" />
                                                    <div class="form-control-line"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Range datepicker</em>
                            <div class="card">
                                <div class="card-body">
                                    <form class="form">
                                        <div id="demo-date-inline"></div>
                                    </form>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Inline datepicker</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END DATEPICKERS -->

                    <!-- BEGIN FILE UPLOAD -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>File upload</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    This file uploader (Dropzone) can handle multiple files, gives previews of images,
                                    has drag and drop support and is easy to implement.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-head style-primary">
                                    <header>Drag and drop uploader</header>
                                </div>
                                <div class="card-body no-padding">
                                    <form action="http://www.codecovers.eu/materialadmin/forms/advanced"
                                        class="dropzone" id="my-awesome-dropzone">
                                        <div class="dz-message">
                                            <h3>Drop files here or click to upload.</h3>
                                            <em>(This is just a demo dropzone. Selected files are <strong>not</strong>
                                                actually uploaded.)</em>
                                        </div>
                                    </form>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Dropzone file upload</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END FILE UPLOAD -->

                    <!-- BEGIN MASKED INPUTS -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Masked inputs</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    Storing properly formatted data is important.
                                    Masked inputs can help to accomplish this.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" data-inputmask="'alias': 'date'">
                                            <label>Date mask</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" data-inputmask="'mask': 'y/m/d'">
                                            <label>Date mask alt</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control time-mask">
                                            <label>Time masks</label>
                                            <p class="help-block">Time: 24h</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control time12-mask">
                                            <label>Time masks alt</label>
                                            <p class="help-block">Time: am/pm</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                data-inputmask="'mask': '(999) 999-9999'">
                                            <label>Phone mask</label>
                                            <p class="help-block">US Telephone: (999) 999-9999</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control dollar-mask">
                                            <label>Dollar mask</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control euro-mask">
                                            <label>Euro masks</label>
                                        </div>
                                    </form>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Masked inputs</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END MASKED INPUTS -->

                    <!-- BEGIN MULTI-SELECT -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Multi-select</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    Use this multi-select to display the user multiple options.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form">
                                        <select id="optgroup" multiple="multiple">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </form>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Multi-select</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END MULTI-SELECT -->

                    <!-- BEGIN SELECT2 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Select2 (Advanced select)</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <ul class="list-divided">
                                    <li>If you want the option filtering in a <code>&lt;select&gt;</code>, you only have
                                        to add the javascript code <code>$('select').select2();</code>.</li>
                                    <li>Select2 also supports multi-value select boxes. Just add the
                                        <code>multiple</code> attribute and Select2 automatically picks up on this.</li>
                                </ul>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-group">
                                            <select class="form-control select2-list" data-placeholder="Select an item">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                            <label>Select with option filtering</label>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control select2-list" data-placeholder="Select an item"
                                                multiple>
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                            <label>Multi-Value select</label>
                                        </div>
                                    </form>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Select2</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END SELECT2 -->

                    <!-- BEGIN SLIDERS -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Sliders</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    Sliders let users select a value from a continuous or discrete range of values by
                                    moving the slider thumb.
                                    Sliders can have the selected value on the side.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-content form-control-static">
                                                    <div id="slider-step"></div>
                                                </div>
                                                <div class="input-group-addon" id="step-value">100</div>
                                            </div>
                                        </div>
                                        <!--end .form-group -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-content form-control-static">
                                                    <div id="slider"></div>
                                                </div>
                                                <div class="input-group-addon" id="slider-value">50</div>
                                            </div>
                                        </div>
                                        <!--end .form-group -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon" id="range-value1">25</div>
                                                <div class="input-group-content form-control-static">
                                                    <div id="slider-range"></div>
                                                </div>
                                                <div class="input-group-addon" id="range-value2">75</div>
                                            </div>
                                        </div>
                                        <!--end .form-group -->
                                    </form>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Vertical sliders</em>
                            <div class="card">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-group">
                                            <div class="col-lg-12">
                                                <div id="eq">
                                                    <span>88</span>
                                                    <span>77</span>
                                                    <span>55</span>
                                                    <span>33</span>
                                                    <span>40</span>
                                                    <span>45</span>
                                                    <span>70</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end .form-group -->
                                    </form>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Horizontal sliders</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END SLIDERS -->

                    <!-- BEGIN SPINNERS -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Spinners</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <p>
                                    Spinners are similar to combo boxes and lists in that they let the user choose from
                                    a range of values.
                                    Like editable combo boxes, spinners allow the user to type in a value.
                                    They are often used when the set of possible values is extremely large.
                                </p>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="spinner" value="19" />
                                            <label>Age</label>
                                            <p class="help-block">Must be over 16</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="spinner-decimal" value="0.96" />
                                            <label>Opacity</label>
                                        </div>
                                    </form>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Spinners</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END SPINNERS -->

                    <!-- BEGIN TAGS INPUT -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Tags input</h4>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-3 col-md-4">
                            <article class="margin-bottom-xxl">
                                <ul class="list-divided">
                                    <li>Just add <code>data-role="tagsinput"</code> to your input field to automatically
                                        change it to a tags input field.</li>
                                    <li>Use a <code>&lt;select multiple/&gt;</code> as your input element for a tags
                                        input, to gain true multivalue support. Instead of a comma separated string, the
                                        values will be set in an array.</li>
                                </ul>
                            </article>
                        </div>
                        <!--end .col -->
                        <div class="col-lg-offset-1 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-group">
                                            <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo"
                                                data-role="tagsinput" />
                                            <label>Tagsinput for input</label>
                                        </div>
                                        <!--end .form-group -->
                                        <div class="form-group">
                                            <select multiple data-role="tagsinput">
                                                <option value="Amsterdam">Amsterdam</option>
                                                <option value="Washington">Washington</option>
                                                <option value="Sydney">Sydney</option>
                                                <option value="Beijing">Beijing</option>
                                                <option value="Cairo">Cairo</option>
                                            </select>
                                            <label>Tagsinput for select</label>
                                        </div>
                                        <!--end .form-group -->
                                    </form>
                                </div>
                                <!--end .card-body -->
                            </div>
                            <!--end .card -->
                            <em class="text-caption">Tags input for input and select</em>
                        </div>
                        <!--end .col -->
                    </div>
                    <!--end .row -->
                    <!-- END TAGS INPUT -->

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

    <?php include "_includes/js-offline.php" ?>


    <script src="<?= base_url() ?>/assets/backend/js/jquery-ui.min.js"></script>

    <script src="<?= base_url() ?>/assets/backend/js/bootstrap-tagsinput.min.js">
    </script>
    <script src="<?= base_url() ?>/assets/backend/js/jquery.multi-select.js"></script>
    <script src="<?= base_url() ?>/assets/backend/js/jquery.inputmask.bundle.min.js">
    </script>
    <script src="<?= base_url() ?>/assets/backend/js/bootstrap-datepicker.js">
    </script>
    <script
        src="<?= base_url() ?>/assets/backend/js/bootstrap-colorpicker.min.js">
    </script>
    <script src="<?= base_url() ?>/assets/backend/js/typeahead.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/backend/js/jquery.nanoscroller.min.js">
    </script>



    <script src="<?= base_url() ?>/assets/backend/js/select2.min.js"></script>

    <script src="<?= base_url() ?>/assets/backend/js/dropzone.min.js"></script>
    <script src="<?= base_url() ?>/assets/backend/js/DemoFormComponents.js"></script>


    <!-- END JAVASCRIPT -->



</body>

</html>