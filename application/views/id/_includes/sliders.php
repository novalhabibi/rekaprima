<?php

$CI = & get_instance();
$CI->load->model('slidersmodel');



// $singleslider = $CI->slidersmodel->singleslider()->row();
$slider =$CI->slidersmodel->singleslider();
$singleslider=$slider->row();
$sliders = $CI->slidersmodel->sliders();


?>

<!-- Sliders -->
<div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                        
                        </li>
                        <?php
                        $no=1;
                        foreach ($sliders->result() as $slider) {
                        
                        ?>
                        <li data-target="#carousel-example-generic" data-slide-to="<?= $no ?>" class=""></li>
                        <?php
                        $no++;
                        }
                        ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo base_Url() ?><?= $slider->gambar ?>"
                                class="img-responsive" />
                            <div class="carousel-caption animated fadeInLeft">
                                <h2 class="slide-text-heading" data-animation="animated bounceInLeft">
                                    <?= $singleslider->judul ?>
                                </h2>
                                <h4 class="slide-text-desc" data-animation="animated bounceInUp">
                                    <h4 style="text-align: left;"><span><?= $singleslider->deskripsi ?><br /></span></h4>
                                </h4>
                            </div>
                        </div>
                        <?php
                        $no=1;
                        foreach ($sliders->result() as $slider) {
                        
                        ?>

                        <div class="item ">
                            <img src="<?php echo base_Url('assets/media/image/slider/Rekaprima_44.jpg') ?>"
                                class="img-responsive" />
                            <div class="carousel-caption animated fadeInLeft">
                                <h2 class="slide-text-heading" data-animation="animated bounceInLeft">
                                    <?= $slider->judul ?>
                                </h2>
                                <h4 class="slide-text-desc" data-animation="animated bounceInUp">
                                    <h4><span style="color: #ffffff;"><?= $slider->deskripsi ?></span></h4>
                                </h4>
                            </div>
                        </div>
                        <?php
                        $no++;
                        }
                        ?>
                        
                    </div><!-- /.carousel-inner -->
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div><!-- /.carousel -->
<!-- End Sliders -->