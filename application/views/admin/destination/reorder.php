<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->

<script src="<?php echo site_url('assets/js/jquery-1.10.2.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/jquery-ui-1.10.4.custom.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/script.js'); ?>"></script>
 <link rel="stylesheet" href="<?php echo site_url('assets/css/core.css'); ?>">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Change details for destination <?php echo $destination['destination_name'] ;?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                	<?php $myString = isset($destination['destination_name']) ? $destination['destination_name'] : "NA";
                $strArray = explode(' ',$myString);
				$dest_title = strtolower($strArray[1]);
				$dir_name = 'dest_'.$destination['marker_code'].'_'.$dest_title ?>
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('', 'class="form-user-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
						<input type = "hidden" id="testimonial_id" name = "testimonial_id" value ="<?php echo $destination['id'];?>">
						<div class="form-group">
							<label for="userEditMobile">Destination Images</label>
							<ul class="testimonials_sortable">
							<?php if($images = $destination['destination_images']){
								$image = explode(",", $images);
								for($ii=0;$ii<count($image);$ii++) {
								echo '<li id='.$ii.'><span></span><img src="'.base_url().'myntra/section_journey/'.$dir_name.'/images_destination/'.$image[$ii].'" width="150px"></li>';
								}
							}
							else
							{

							}
							?>
							 <br>
                        <a class="btn btn-primary" href="<?php echo base_url("admin/destination/edit/".$destination['id']); ?>">Back</a>
						</ul>
						</div>	
						
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- Moment Js -->

<!-- Theme JS file -->
<script src="<?php echo site_url('assets/js/app.min.js'); ?>"></script>
<!-- TokenInput JS file -->

