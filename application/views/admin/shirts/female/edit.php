<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<script type="text/javascript">
 function imageRemove(img,id,action)
{
    $.ajax({
         type: "POST",
         url: base_url+"shirts/remove_femaleimage",
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
        Shirt Female Edit
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
                  <h3 class="box-title">Change details for Shirt female <?php echo $shirt_female['champion_products_title'] ;?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('', 'class="form-user-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
<!-- 						<div class="form-group">
							<label for="userEditName">Anatomy</label>
							<input type="file" class="form-control" name="userFiles[]" value="" required multiple>
						</div> -->
						<div class="form-group">
							<label for="userEditPass">Champions Products Title</label>
							<input type="text" class="form-control" id="championsProductsTitle" name="champions_products_title1" placeholder="Champions Products Title" autocomplete="off" value="<?php echo isset($shirt_female['champion_products_title']) ? $shirt_female['champion_products_title'] : "NA"; ?>" required>
						</div>
						<div class="form-group">
							<label for="userEditMail">Champions Products Description</label>
							<textarea class="form-control" id="destinationDesc" name="champions_products_desc" placeholder="Champions Products Description" required><?php echo isset($shirt_female['champion_products_desc']) ? $shirt_female['champion_products_desc'] : "NA"; ?></textarea>
						</div>
						<div class="form-group">
							<label for="userEditFname">Champions Products Images</label>
							<input type="file" class="form-control" name="championsProductsImages[]" value=""  multiple>
							<?php if($champion_images = $shirt_female['champion_products_images']){
								$champion_image = explode(",", $champion_images);
								foreach ($champion_image as $champion_img) {
								echo '<img src="'.base_url().'upload/shirts/female/champion_products/'.$champion_img.'" width="150px"><a href="#" onclick="imageRemove('."'".$champion_img."'".','."'".$shirt_female['id']."'".','."'champion-image'".')"><i class="fa fa-times" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;';
								}
							}
							else
							{

							}
							?>
						</div>
						<div class="form-group">
							<label for="userEditLname">Trends Launch Date</label>
							<input type="text" class="form-control" id="HowFar" name="trends_launch_date" placeholder="Trends Launch Date" value="<?php echo isset($shirt_female['trends_launch_date']) ? $shirt_female['trends_launch_date'] : "NA"; ?>" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Trends Title</label>
							<input type="text" class="form-control" id="BestTimeVisit" name="trends_title" placeholder="Trends Title" value="<?php echo isset($shirt_female['trends_title']) ? $shirt_female['trends_title'] : "NA"; ?>" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Trends Images</label>
							<input type="file" class="form-control" name="trendsImages[]" value="" multiple>
							<?php if($trends_images = $shirt_female['trends_images']){
								$trends_image = explode(",", $trends_images);
								foreach ($trends_image as $trends_img) {
								echo '<img src="'.base_url().'upload/shirts/female/trend_images/'.$trends_img.'" width="150px"><a href="#" onclick="imageRemove('."'".$trends_img."'".','."'".$shirt_female['id']."'".','."'trends_img'".')"><i class="fa fa-times" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;';
								}
							}
							else
							{

							}
							?>
						</div>			
						<div class="form-group">
							<label for="userEditMobile">Vintage Images</label>
							<input type="file" class="form-control" name="vintageImage[]" value="" multiple>
							<?php if($vintage_images = $shirt_female['vintage_images']){
								$vintage_image = explode(",", $vintage_images);
								foreach ($vintage_image as $vintage_img) {
								echo '<img src="'.base_url().'upload/shirts/female/vintage_images/'.$vintage_img.'" width="150px"><a href="#" onclick="imageRemove('."'".$vintage_img."'".','."'".$shirt_female['id']."'".','."'vintage_img'".')"><i class="fa fa-times" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;';
								}
							}
							else
							{

							}
							?>
						</div>	
<!-- 						<div class="form-group">
							<label for="userEditMobile">Vintage Video</label>
							<input type="file" class="form-control" name="vintageVideo" value="" required>
						</div> -->
						<div class="form-group">
							<label for="userEditMobile">Vintage Title</label>
							<input type="text" class="form-control" id="vintageTitle" name="vintage_title" placeholder="Vintage Title" value="<?php echo isset($shirt_female['vintage_title']) ? $shirt_female['vintage_title'] : "NA"; ?>" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Vintage Description</label>
							<textarea class="form-control" id="vintageDescription" name="vintage_description" placeholder="Vintage Description" required><?php echo isset($shirt_female['vintage_desc']) ? $shirt_female['vintage_desc'] : "NA"; ?></textarea>
						</div>				

		                <div class="form-group">
		                	<label>Status</label>
		                    <div class="checkbox">
		                      <label class="no-padding">
		                        <input type="checkbox" class="minimal themed" name="active" <?php echo (isset($shirt_female['active']) && $shirt_female['active'] == 1)  ? "checked='checked'" : "" ; ?>> Active
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