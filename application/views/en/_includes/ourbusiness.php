<?php

$CI = & get_instance();
$CI->load->model('maintenancesmodel');

$maintenances =$CI->maintenancesmodel->get_maintenance_list(3,0);
// $list_news =$CI->newsmodel->get_mahasiswa_list(4,4);

?>

<div class="row mt-md mb-xl">
    <?php 
    foreach ($maintenances->result() as $maintenance) {
        # code...
   
    ?>
    <div class="col-md-4">
        <div class="thumb-info custom-thumb-info-4 animateme scrollme" data-when="enter" data-from="0.5" data-to="0"
            data-opacity="0" data-translatex="-200">
            <div class="thumb-info-wrapper"><img
                    src="<?php echo $maintenance->image_maintenance_en ?>" class="img-responsive" />
            </div>
            <div class="thumb-info-caption custom-box-shadow" style="border-bottom : 1px solid #0e85ca;">
                <div class="thumb-info-caption-text">
                    <h4 class="text-center"><a href="<?php echo base_url('id/maintenance/') ?><?php echo $maintenance->link_maintenance_en ?>" class="text-color-dark"> <?php echo $maintenance->name_maintenance_en ?></a></h4>
                    <p class="justify"> <?php echo $maintenance->description_maintenance_en ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
   
    
</div>