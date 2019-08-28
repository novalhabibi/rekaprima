<?php

$CI = & get_instance();
$CI->load->model('newsmodel');



// $singleslider = $CI->slidersmodel->singleslider()->row();
$news =$CI->newsmodel->get_mahasiswa_list(4,0);
$list_news =$CI->newsmodel->get_mahasiswa_list(4,4);
// $singleslider=$slider->row();
// $sliders = $CI->slidersmodel->sliders();
// 

?>

<div class="col-md-12">
    <div class="heading heading-border heading-middle-border heading-middle-border-center">
        <h2>BERITA <strong>TERBARU</strong></h2>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10, 'autoplay':true}">

                <?php
                foreach ($news->result() as $berita) {
                   
                ?>

                <div class="box-item">
                    <div class="box-post">
                        <h1 class="post-title">
                            <a href="<?php echo base_url('id/berita/detail/') ?><?php echo $berita->slug_judul ?>">
                                <?php echo $berita->judul ?>
                            </a>
                        </h1>
                        <span class="meta">
                            <span class="label label-secondary">Berita Terbaru</span>
                            <span><i class="fa fa-calendar"></i> <?php echo $berita->tgl_posting ?></span>
                        </span>
                    </div>
                    <img src="<?php echo base_url() ?><?php echo $berita->gambar ?>"
                        alt="Sinergi Industri dan Pendidikan" class="img-responsive">
                </div>
                <?php }?>






            </div>
        </div>
        <div class="col-md-5">

            <ul class="simple-post-list">
                <?php
                foreach ($list_news->result() as $listnews) {
                   
                ?>
                <li>
                    <div class="post-image">
                        <div class="img-thumbnail">
                            <a href="<?php echo base_url('id/berita/detail/') ?><?php echo $listnews->slug_judul ?>">
                                <img src="<?php echo base_url() ?><?php echo  $listnews->gambar ?>"
                                    alt="Indonesia Railway Conference 2019" style="width:92px; height:76px;">
                            </a>
                        </div>
                    </div>
                    <div class="post-info">
                        <a href="<?php echo base_url('id/berita/detail/') ?><?php echo $listnews->slug_judul ?>"><?php echo  $listnews->judul ?></a>
                        <div class="post-meta">
                            <span class="label label-secondary">Berita</span>
                            <i class="fa fa-calendar"></i> <?php echo  $listnews->tgl_posting ?>
                        </div>
                    </div>
                </li>
                <?php } ?>
            </ul>


        </div>
    </div>
</div>