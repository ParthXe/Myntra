<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Edit
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
                  <h3 class="box-title">Change details for <?php echo $user['name'] ;?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('', 'class="form-user-edit" role="form" autocomplete="off"') ; ?>
						<div class="form-group">
							<label for="userEditName">Username</label>
							<input type="text" class="form-control" id="userEditName" name="name" placeholder="Username" autocomplete="off" value="<?php echo (isset($user['name'])) ? $user['name'] : "" ; ?>">
						</div>
						<div class="form-group">
							<label for="userEditPass">Password</label>
							<input type="password" class="form-control" id="userEditPass" name="password" placeholder="Password" autocomplete="off" value="<?php echo (isset($user['pass'])) ? $user['pass'] : "" ; ?>">
						</div>
						<div class="form-group">
							<label for="userEditMail">Email</label>
							<input type="email" class="form-control" id="userEditMail" name="email" placeholder="Email" value="<?php echo (isset($user['mail'])) ? $user['mail'] : "" ; ?>">
						</div>
						<div class="form-group">
							<label for="userEditFname">Firstname</label>
							<input type="text" class="form-control" id="userEditFname" name="fname" placeholder="Firstname" value="<?php echo (isset($user['fname'])) ? $user['fname'] : "" ; ?>">
						</div>
						<div class="form-group">
							<label for="userEditLname">Lastname</label>
							<input type="text" class="form-control" id="userEditLname" name="lname" placeholder="Lastname" value="<?php echo (isset($user['lname'])) ? $user['lname'] : "" ; ?>">
						</div>
						<div class="form-group">
							<label for="userEditMobile">Mobile</label>
							<input type="text" class="form-control" id="userEditMobile" name="mobile" placeholder="Mobile" value="<?php echo (isset($user['mobile'])) ? $user['mobile'] : "" ; ?>" required>
						</div>

						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Addresses</h3>
								<button type="button"
										id="user-add-address-modal"
										class="btn btn-success btn-xs"
										data-toggle="modal"
										data-target="#myModal">Add New</button>
								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
								</div>								
							</div>
							<div class="box-body">
								<div class="row" id="addressRow">
									<?php if(isset($addresses)) : ?>
										<?php foreach ($addresses as $address) : ?>
										<div class="col-md-4 col-xs-12">
											<div class="box">
												<div class="box-header">
													<b id="address_name_<?php echo $address->ua_id; ?>"><?php echo $address->ua_name; ?></b>
													<a href="#" 
														class="user-edit-modal"
														data-toggle="modal"
														data-target="#myModal"
														data-add-id="<?php echo $address->ua_id; ?>"
														data-add-name="<?php echo $address->ua_name; ?>"
														data-add-address1="<?php echo $address->ua_address_1; ?>"
														data-add-address2="<?php echo $address->ua_address_2; ?>"
														data-add-city="<?php echo $address->ua_city; ?>"
														data-add-state="<?php echo $address->ua_state; ?>"
														data-add-pincode="<?php echo $address->ua_pincode; ?>"
														data-add-mobile="<?php echo $address->ua_mobile; ?>">
														<small class="label bg-red pull-right">edit</small>
													</a>
												</div>
												<div class="box-body">
													<p id="address_line_1_<?php echo $address->ua_id; ?>">Address 1: <?php echo $address->ua_address_1; ?></p> 
													<p id="address_line_2_<?php echo $address->ua_id; ?>">Address 2: <?php echo $address->ua_address_2; ?></p> 
													<p id="address_city_<?php echo $address->ua_id; ?>">City: <?php echo $address->ua_city; ?></p> 
													<p id="address_zipcode_<?php echo $address->ua_id; ?>">Zipcode: <?php echo $address->ua_pincode; ?></p> 
													<p id="address_mobile_<?php echo $address->ua_id; ?>">Tel: <?php echo $address->ua_mobile; ?></p>
												</div>
											</div>
										</div>	
										<?php endforeach; ?>
									<?php endif; ?>
								</div>
							</div>
						</div>

						<div class="box collapsed-box">
							<div class="box-header">
								<h3 class="box-title">Bank Details</h3>
								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
									</button>
								</div>									
							</div>
							<div class="box-body">
                			
							</div>
						</div>

						<!-- checkbox -->
						<div class="form-group">
							<label>Roles</label>					
							<?php foreach($roles as $role) : ?>
								<div class="checkbox">
									<label class="no-padding">
										<input type="checkbox" name="role[]" class="minimal themed" value="<?php echo $role->rid; ?>" <?php echo (in_array($role->rid, $user['roles'])) ? "checked='checked'" : "" ; ?>>
										<?php echo $role->r_name; ?>
									</label>
								</div>
							<?php endforeach; ?>
						</div>	

		                <div class="form-group">
		                	<label>Status</label>
		                    <div class="checkbox">
		                      <label class="no-padding">
		                        <input type="checkbox" class="minimal themed" name="active" <?php echo (isset($user['is_active']) && $user['is_active'] == 1)  ? "checked='checked'" : "" ; ?>> Active
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