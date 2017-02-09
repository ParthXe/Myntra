<!-- Content Wrapper. Contains page content -->
<script type="text/javascript" src="../../../assets/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
var config = {
				width:720,
				height:200,
				resize_enabled : false,
				//toolbar:'full',
				toolbar:[['Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','Font','FontSize','Format','Styles','-','TextColor','BGColor','-']],
				enterMode:CKEDITOR.ENTER_BR,
				extraPlugins:'colorbutton,font',
				colorButton_colors : '000,800000,8B4513,2F4F4F,008080,000080,4B0082,696969,' +
									'B22222,A52A2A,DAA520,006400,40E0D0,0000CD,800080,808080,' +
									'F00,FF8C00,FFD700,008000,0FF,00F,EE82EE,A9A9A9,' +
									'FFA07A,FFA500,FFFF00,00FF00,AFEEEE,ADD8E6,DDA0DD,D3D3D3,' +
									'FFF0F5,FAEBD7,FFFFE0,F0FFF0,F0FFFF,F0F8FF,E6E6FA,FFF',
				basicEntities : false,
				entities : false,
				coreStyles_bold: {
                        element: 'b',
                        overrides: 'strong',
                    },
				/* colorButton_foreStyle: {
					element: 'font',
					styles: { 'color': '#(color)' },
					overrides: [ { element: 'span', attributes: { 'style': null } } ],
					childRule: function( element ) {
						return !element.is( 'a' );
					} 
				}, */

			}	  
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Modify Collection Video Configuration
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Collection Video</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Change configuration of Collection Video </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('', 'class="form-user-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
						<div class="form-group">
							<label for="screensaver">Screensaver:</label>
							<input type="file" class="form-control" id="bgPath" name="bgPath" value="" 	/>
							<span><?php echo substr($collectionvideoinfo['bgPath'],10);?></span>
						</div>
						<div class="form-group">
							<label for="homebutton">Home Button Image:</label>
							<input type="file" class="form-control" id="homebuttonImage" name="homebuttonImage" value=""/>
							<span><?php echo substr($collectionvideoinfo['homebuttonImage'],10);?></span>
						</div>
						<div class="form-group">
							<label for="screentext">Screen Text:</label>
							<textarea cols="80" class="scrtext" id="scrtext" name="scrtext" rows="10">
							<?php echo $collectionvideoinfo['scrtext'];?>
                            </textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('scrtext',config);
							</script>
						</div>
						<div class="form-group">
							<label for="inserttext">Insert Text:</label>
							<textarea cols="80" class="insttext" id="insttext" name="insttext" rows="10">
							<?php echo $collectionvideoinfo['insttext'];?>
                            </textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('insttext',config);
							</script>
						</div>
						<div class="form-group">
							<label for="motoGPvid">MotoGP Video:</label>
							<input type="file" class="form-control" id="motoGpvideo" name="motoGpvideo" value=""/>
							<span><?php echo substr($collectionvideoinfo['motoGpvideo'],10);?></span>
						</div>
						<div class="form-group">
							<label for="outlandervid">Outlander Video:</label>
							<input type="file" class="form-control" id="outLandervideo" name="outLandervideo" value=""/>
							<span><?php echo substr($collectionvideoinfo['outLandervideo'],10);?></span>
						</div>
						<div class="form-group">
							<label for="buttonimg">Button Image:</label>
							<input type="file" class="form-control" id="buttonImage" name="buttonImage" value=""/>
							<span><?php echo substr($collectionvideoinfo['buttonImage'],10);?></span>
						</div>
						<div class="form-group">
							<label for="clsbutton">Close Button Image:</label>
							<input type="file" class="form-control" id="closeImageButton" name="closeImageButton" value=""/>
							<span><?php echo substr($collectionvideoinfo['closeImageButton'],10);?></span>
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