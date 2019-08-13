<?php

$CI = & get_instance();
$CI->load->model('clientmodel');

$clients = $CI->clientmodel->getAll();


?>


<?php
foreach ($clients->result() as $client) {
    
?>
<div class="thumb-info custom-thumb-info-4">
    <img src="<?php  echo base_url() ?><?= $client->icon_client ?>">
</div>

<?php
}?>


<!-- <div class="thumb-info custom-thumb-info-4">
    <img src="<?php // echo base_url('assets/media/image/partner/LEN.png') ?>">
</div>
<div class="thumb-info custom-thumb-info-4">
    <img src="<?php // echo base_url('assets/media/image/partner/LRS2.png') ?>">
</div>
<div class="thumb-info custom-thumb-info-4">
    <img src="<?php // echo base_url('assets/media/image/partner/KAI.png') ?>">
</div>
<div class="thumb-info custom-thumb-info-4">
    <img src="<?php // echo base_url('assets/media/image/partner/egis.png') ?>">
</div>
<div class="thumb-info custom-thumb-info-4">
    <img src="<?php // echo base_url('assets/media/image/partner/Angkasapura2.png') ?>">
</div>
<div class="thumb-info custom-thumb-info-4">
    <img src="<?php // echo base_url('assets/media/image/partner/MRT_Jakarta.png') ?>">
</div>
<div class="thumb-info custom-thumb-info-4">
    <img src="<?php // echo base_url('assets/media/image/partner/Kemenhub2.png') ?>">
</div>
<div class="thumb-info custom-thumb-info-4">
    <img src="<?php // echo base_url('assets/media/image/partner/akademi2.png') ?>">
</div> -->