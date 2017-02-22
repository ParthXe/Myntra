<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<script type="text/javascript">
 function imageRemove(img,id,action)
{
	
    $.ajax({
         type: "POST",
         url: base_url+"destination/delete_image",
        data: "image=" + img+"&id="+id+"&action="+action,
         success: function(data){
         		  alert('delete');
                  location.reload();
    }
});
}
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Destination Edit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Users</a></li>
      </ol>
    </section>

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
						<div class="form-group">
							<label for="userEditName">Marker Code</label>
							<input type="text" class="form-control" id="destinationMarker" name="marker_code" placeholder="Marker Code" autocomplete="off" value="<?php echo isset($destination['marker_code']) ? $destination['marker_code'] : "NA"; ?>" required>
						</div>
						<div class="form-group">
							<label for="userEditName">Destination Name</label>
							<input type="text" class="form-control" id="destinationName" name="destination_name" placeholder="Destination Name" autocomplete="off" value="<?php echo isset($destination['destination_name']) ? $destination['destination_name'] : "NA"; ?>" required>
						</div>
						<div class="form-group">
							<label for="userEditPass">Destination State</label>
							<input type="text" class="form-control" id="destinationState" name="destination_state" placeholder="Destination State" autocomplete="off" value="<?php echo isset($destination['destination_state']) ? $destination['destination_state'] : "NA"; ?>" required>
						</div>
						<div class="form-group">
							<label for="userEditMail">Destination Description</label>
							<textarea class="form-control" id="destinationDesc" name="destination_desc" placeholder="Destination Description" required><?php echo isset($destination['destination_desc']) ? $destination['destination_desc'] : "NA"; ?></textarea>
						</div>
						<div class="form-group">
							<label for="userEditFname">Why Go There</label>
							<input type="text" class="form-control" id="WhyGoThere" name="why_go" placeholder="Why Go There" value="<?php echo isset($destination['why_go_there']) ? $destination['why_go_there'] : "NA"; ?>" required>
						</div>
						<div class="form-group">
							<label for="userEditLname">How Far</label>
							<input type="text" class="form-control" id="HowFar" name="how_far" placeholder="How Far" value="<?php echo isset($destination['how_far']) ? $destination['how_far'] : "NA"; ?>" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Best Time Visit</label>
							<input type="text" class="form-control" id="BestTimeVisit" name="best_time_visit" placeholder="Best Time Visit" value="<?php echo isset($destination['best_time_visit']) ? $destination['best_time_visit'] : "NA"; ?>" required>
						</div>
		
						<div class="form-group">
							<label for="userEditMobile">Destination Images</label>
							<input type="file" class="form-control" name="userFiles[]" value="" multiple>
							<?php if($images = $destination['destination_images']){
								$image = explode(",", $images);
								foreach ($image as $img) {
								echo '<img src="'.base_url().'myntra/section_journey/'.$dir_name.'/images_destination/'.$img.'" width="150px"><a href="#" onclick="imageRemove('."'".$img."'".','."'".$destination['id']."'".')"><i class="fa fa-times" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;';
								}
							}
							else
							{

							}
							?><a class="btn btn-primary" href="<?php echo base_url("admin/destination/reorder/".$destination['id']); ?>">Reorder</a>
						</div>	
						<div class="form-group">
							<label for="userEditMobile">Destination Matching Male Image</label>
							<input type="file" class="form-control" name="destination_matching_male" value="" >
							<?php if($destination['destination_matching_male_img']){
								echo '<img src="'.base_url().'myntra/section_journey/'.$dir_name.'/images_game/'.$destination['destination_matching_male_img'].'" width="150px"><a href="#" onclick="imageRemove('."'".$destination['destination_matching_male_img']."'".','."'".$destination['id']."'".','."'matching-male'".')"><i class="fa fa-times" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;';
								
							}
							else
							{

							}
							?>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Destination Matching Male Info</label>
							<textarea class="form-control" name="destination_info_male" placeholder="Destination Matching Male Info" ><?php echo isset($destination['destination_matching_male_info']) ? $destination['destination_matching_male_info'] : "NA"; ?></textarea>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Destination Matching Female Image</label>
							<input type="file" class="form-control" name="destination_matching_female" value="" >
							<?php if($destination['destination_matching_female_img']){
								echo '<img src="'.base_url().'myntra/section_journey/'.$dir_name.'/images_game/'.$destination['destination_matching_female_img'].'" width="150px"><a href="#" onclick="imageRemove('."'".$destination['destination_matching_female_img']."'".','."'".$destination['id']."'".','."'matching-female'".')"><i class="fa fa-times" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;';
								
							}
							else
							{

							}
							?>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Destination Matching Female Info</label>
							<textarea class="form-control" name="destination_info_female" placeholder="Destination Matching Female Info" required><?php echo isset($destination['destination_matching_female_info']) ? $destination['destination_matching_female_info'] : "NA"; ?></textarea>
						</div>					

		                <div class="form-group">
		                	<label>Status</label>
		                    <div class="checkbox">
		                      <label class="no-padding">
		                        <input type="checkbox" class="minimal themed" name="active" <?php echo (isset($destination['active']) && $destination['active'] == 1)  ? "checked='checked'" : "" ; ?>> Active
		                      </label>
		                    </div>
		                </div>
												
						<div class="row">
							<!-- /.col -->
							<div class="col-xs-3">
						  		<button type="submit" class="btn btn-primary" type="submit">Submit</button>
							</div>
							<!-- /.col -->
						</div>
					<?php echo form_close() ; ?> 
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
