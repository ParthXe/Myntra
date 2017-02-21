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
							?>
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

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Change Address</h4>
      </div>
		<?php echo form_open('admin/users/update_address', 'class="form-user-address-edit" id="edit-address" role="form"') ; ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="userAddressEditName">Name</label>
					<input type="text" name="address_name" class="form-control" id="userAddressEditName" placeholder="Name" required>
				</div>
				<div class="form-group">
					<label for="userAddressEditAddress1">Address 1</label>
					<input type="text" name="address_line_1" class="form-control" id="userAddressEditAddress1" placeholder="Address 1">
				</div>
				<div class="form-group">
					<label for="userAddressEditAddress2">Address 2</label>
					<input type="text" name="address_line_2" class="form-control" id="userAddressEditAddress2" placeholder="Address 2">
				</div>
				<div class="form-group">
					<label for="userAddressEditCity">City</label>
					<input type="text" name="address_city" class="form-control" id="userAddressEditCity" placeholder="City">
				</div>
				<div class="form-group">
					<label for="userAddressEditState">State</label>
					<select name="address_state" id="userAddressEditState" class="form-control" style="width: 100%;">
						<?php foreach($states as $state) : ?>
							<option value="<?php echo $state->state_2_code; ?>"><?php echo $state->state_name; ?></option>                                       
						<?php endforeach; ?>
					</select>					
				</div>				
				<div class="form-group">
					<label for="userAddressEditZipcode">Zipcode</label>
					<input type="text" name="address_zipcode" class="form-control" id="userAddressEditZipcode" placeholder="Zipcode">
				</div>
				<div class="form-group">
					<label for="userAddressEditMobile">Mobile</label>
					<input type="text" name="address_mobile" class="form-control" id="userAddressEditMobile" placeholder="Mobile">
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" name="address_id" class="form-control" id="userAddressEditAddressId" value="">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		<?php echo form_close() ; ?> 
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<script id="newAddressTemp" type="text/x-jQuery-tmpl">
	<div class="col-md-4 col-xs-12">
		<div class="box">
			<div class="box-header">
				<b id="address_name_${ua_id}">${ua_name}</b>
				<a href="#" 
					class="user-edit-modal"
					data-toggle="modal"
					data-target="#myModal"
					data-add-id="${ua_id}"
					data-add-name="${ua_name}"
					data-add-address1="${ua_address_1}"
					data-add-address2="${ua_address_2}"
					data-add-city="${ua_city}"
					data-add-state="${ua_state}"
					data-add-pincode="${ua_pincode}"
					data-add-mobile="${ua_mobile}">
					<small class="label bg-red pull-right">edit</small>
				</a>
			</div>
			<div class="box-body">
				<p id="address_line_1_${ua_id}">Address 1: ${ua_address_1}</p> 
				<p id="address_line_2_${ua_id}">Address 2: ${ua_address_2}</p> 
				<p id="address_city_${ua_id}">City: ${ua_city}</p> 
				<p id="address_zipcode_${ua_id}">Zipcode: ${ua_pincode}</p> 
				<p id="address_mobile_${ua_id}">Tel: ${ua_mobile}</p>
			</div>			
		</div>
	</div>
</script>


<script id="bookTemplate" type="text/x-jQuery-tmpl">
    <div>
        <img src="BookPictures/${picture}" alt="" />
        <h2>${title}</h2>
        price: ${formatPrice(price)}
    </div>
</script>