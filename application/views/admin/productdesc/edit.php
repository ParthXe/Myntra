<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Modify Product Description Configuration
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Product Description</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Change configuration of Product Description</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('', 'class="form-user-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
						<div class="form-group">
							<label for="screensaver">Top-Bar Image:</label>
							<input type="file" class="form-control" id="topBarImage" name="topBarImage" value="" 	/>
							<span><?php echo substr($productdescinfo['topBarImage'],10);?></span>
						</div>
						<div class="form-group">
							<label for="homebutton">Back Button Image:</label>
							<input type="file" class="form-control" id="BackbuttonImage" name="BackbuttonImage" value=""/>
							<span><?php echo substr($productdescinfo['BackbuttonImage'],10);?></span>
						</div>
						<div class="form-group">
							<label for="homebutton">Home Button Image:</label>
							<input type="file" class="form-control" id="homebuttonImage" name="homebuttonImage" value=""/>
							<span><?php echo substr($productdescinfo['homebuttonImage'],10);?></span>
						</div>
						<div class="form-group">
							<label for="homebutton">Myntra Logo Image:</label>
							<input type="file" class="form-control" id="myntralogoImage" name="myntralogoImage" value=""/>
							<span><?php echo substr($productdescinfo['myntralogoImage'],10);?></span>
						</div>
						<div class="form-group">
							<label for="homebutton">Get Product Button Image:</label>
							<input type="file" class="form-control" id="getProdBtn" name="getProdBtn" value=""/>
							<span><?php echo substr($productdescinfo['getProdBtn'],10);?></span>
						</div>
						<div class="form-group">
							<label for="screentext">Related Product Heading Text:</label>
							<input type="text" class="form-control" id="relatedProdHeadingTxt" name="relatedProdHeadingTxt" value="<?php echo $productdescinfo['relatedProdHeadingTxt'];?>"/>
						</div>
						<div class="form-group">
							<label for="screentext">Description Heading Text:</label>
							<input type="text" class="form-control" id="descTxtHeading" name="descTxtHeading" value="<?php echo $productdescinfo['descTxtHeading'];?>"/>
						</div>
						<div class="form-group">
							<label for="screentext">Color Selection Heading Text:</label>
							<input type="text" class="form-control" id="colorSelectionHeading" name="colorSelectionHeading" value="<?php echo $productdescinfo['colorSelectionHeading'];?>"/>
						</div>
						<div class="form-group">
							<label for="screentext">Size Selection Heading Text:</label>
							<input type="text" class="form-control" id="sizeSelectionHeading" name="sizeSelectionHeading" value="<?php echo $productdescinfo['sizeSelectionHeading'];?>"/>
						</div>
						<div class="form-group">
							<label for="screentext">Not Sure Heading Text:</label>
							<input type="text" class="form-control" id="notsureHeading" name="notsureHeading" value="<?php echo $productdescinfo['notsureHeading'];?>"/>
						</div>
						<div class="form-group">
							<label for="buttonimg">Close Button Image:</label>
							<input type="file" class="form-control" id="closeImageButton" name="closeImageButton" value=""/>
							<span><?php echo substr($productdescinfo['closeImageButton'],10);?></span>
						</div>
						<div class="form-group">
							<label for="screentext">Size Popup Heading Text:</label>
							<input type="text" class="form-control" id="sizePopupHeadingTxt" name="sizePopupHeadingTxt" value="<?php echo $productdescinfo['sizePopupHeadingTxt'];?>"/>
						</div>
						<div class="form-group">
							<label for="screentext">Size Popup First Tab Text:</label>
							<input type="text" class="form-control" id="sizePopupFirstTabTxt" name="sizePopupFirstTabTxt" value="<?php echo $productdescinfo['sizePopupFirstTabTxt'];?>"/>
						</div>
						<div class="form-group">
							<label for="screentext">Product URL:</label>
							<input type="text" class="form-control" id="prodUrl" name="prodUrl" value="<?php echo $productdescinfo['prodUrl'];?>"/>
						</div>
						<div class="form-group">
							<label for="screentext">Size URL:</label>
							<input type="text" class="form-control" id="sizeUrl" name="sizeUrl" value="<?php echo $productdescinfo['sizeUrl'];?>"/>
						</div>
						<div class="form-group">
							<label for="clsbutton">Next Button Image:</label>
							<input type="file" class="form-control" id="nextbuttonImage" name="nextbuttonImage" value=""/>
							<span><?php echo substr($productdescinfo['nextbuttonImage'],10);?></span>
						</div>
						<div class="form-group">
							<label for="clsbutton">Previous Button Image:</label>
							<input type="file" class="form-control" id="backbtnImage" name="backbtnImage" value=""/>
							<span><?php echo substr($productdescinfo['backbtnImage'],10);?></span>
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