<!DOCTYPE html>
<html lang="en">



<head>
    <title>Material Admin - Login</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <!-- Global CSS -->

    <?php $this->load->view('backend/_includes/css.php'); ?>
    <!-- END STYLESHEETS -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/html5shiv.js?1422823601"></script>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/respond.min.js?1422823601"></script>
    <![endif]-->
</head>






<body class="menubar-hoverable header-fixed ">

    <!-- BEGIN LOGIN SECTION -->
    <section class="section-account">

        <br>
        <br>
        <br>

        <div class="card contain-sm style-transparent">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-6">


                        <!-- Error -->
                        <?php
						if (validation_errors() == true) {
						?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Error !</strong>
                            <hr>
                            <?php echo validation_errors('<li>','</li>'); ?>
                        </div>
                        <?php 
						}
						?>


                        <span class="text-lg text-bold text-info">PT. Len Rekaprima Semesta</span>
                        <?php
                                $attributes = array(
                                    'class' => 'form floating-label', 
                                    'id'=>'dischargeform'
                                );
                                echo form_open('dashboard/logout_all', $attributes);
                                 ?>

                        <div class="form-group">
                            <input type="text" class="form-control" id="username" required name="username">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" required name="password">
                            <label for="password">Password</label>
                            <!-- <p class="help-block"><a href="#">Forgotten?</a></p> -->
                        </div>
                        <br />
                        <div class="row">
                            
                            <!--end .col -->
                            
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm btn-raised" type="submit">Keluar dari semua Akun</button>
                                
                            </div>
                            
                            
                            <!--end .col -->
                        </div>
                        <!--end .row -->
                        </form>
                                
                    </div>

                    <!--end .col -->
                    
                    <div class="col-sm-3">
                    </div>
                </div>
                <!--end .row -->
            </div>
            <!--end .card-body -->
        </div>
        <!--end .card -->
    </section>
    <!-- END LOGIN SECTION -->


    <!-- BEGIN JAVASCRIPT -->

    <?php $this->load->view('backend/_includes/js-offline.php'); ?>
    <!-- END JAVASCRIPT -->
    <?php $this->load->view('backend/_includes/modal.php'); ?>
    <?php $this->load->view('backend/_includes/js.php'); ?>


</body>

</html>