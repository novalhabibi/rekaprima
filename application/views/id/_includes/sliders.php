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
                        <?= $singleslider->id_slider ?>
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
                            <img src="<?php echo base_url('assets/media/image/slider/Rekaprima_50.jpg') ?>"
                                class="img-responsive" />
                            <div class="carousel-caption animated fadeInLeft">
                                <h2 class="slide-text-heading" data-animation="animated bounceInLeft">
                                    SUPPORT
                                </h2>
                                <h4 class="slide-text-desc" data-animation="animated bounceInUp">
                                    <h4 style="text-align: left;"><span>Len Rekaprima Semesta selalu memastikan untuk
                                            menjaga fungsionalitas peralatan sistem kereta api secara
                                            berkala.<br /></span></h4>
                                </h4>
                            </div>
                        </div>
                        <div class="item ">
                            <img src="<?php echo base_Url('assets/media/image/slider/Rekaprima_44.jpg') ?>"
                                class="img-responsive" />
                            <div class="carousel-caption animated fadeInLeft">
                                <h2 class="slide-text-heading" data-animation="animated bounceInLeft">
                                    MAINTAIN
                                </h2>
                                <h4 class="slide-text-desc" data-animation="animated bounceInUp">
                                    <h4><span style="color: #ffffff;">Menjaga sistem yang didukung oleh PT. Len
                                            Rekaprima Semesta sebagai anak perusahaan dari PT. Len Railway
                                            Systems</span></h4>
                                </h4>
                            </div>
                        </div>
                        <div class="item ">
                            <img src="<?php echo base_url('assets/media/image/slider/Rekaprima_43.jpg') ?>"
                                class="img-responsive" />
                            <div class="carousel-caption animated fadeInLeft">
                                <h2 class="slide-text-heading" data-animation="animated bounceInLeft">
                                    AGILE
                                </h2>
                                <h4 class="slide-text-desc" data-animation="animated bounceInUp">
                                    <h4><span style="color: #ffffff;">Menjadi mitra kelas dunia yang paling dapat
                                            diandalkan untuk Sistem Kereta Api</span></h4>
                                </h4>
                            </div>
                        </div>
                        <div class="item ">
                            <img src="<?php echo base_url('assets/media/image/slider/Rekaprima_47.jpg') ?>"
                                class="img-responsive" />
                            <div class="carousel-caption animated fadeInLeft">
                                <h2 class="slide-text-heading" data-animation="animated bounceInLeft">
                                    RESPONSIBLE
                                </h2>
                                <h4 class="slide-text-desc" data-animation="animated bounceInUp">
                                    <h4><span style="color: #ffffff;">Len Rekaprima Semesta selalu siap untuk memberikan
                                            kualitas yang sesuai dengan permintaan pelanggan, serta memberikan pelayanan
                                            yang terbaik</span></h4>
                                </h4>
                            </div>
                        </div>
                        <div class="item ">
                            <img src="<?php echo base_url('assets/media/image/slider/Rekaprima_46.jpg') ?>"
                                class="img-responsive" />
                            <div class="carousel-caption animated fadeInLeft">
                                <h2 class="slide-text-heading" data-animation="animated bounceInLeft">
                                    TOTAL
                                </h2>
                                <h4 class="slide-text-desc" data-animation="animated bounceInUp">
                                    <h4><span style="color: #ffffff;">Berkontribusi dalam meningkatkan produktivitas dan
                                            mobilitas orang melalui Sistem Kereta Api yang andal dan aman</span></h4>
                                </h4>
                            </div>
                        </div>
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