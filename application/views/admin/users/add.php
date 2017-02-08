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
                  <h3 class="box-title">Add User</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php if (isset($message)) : ?>
						<div class="alert alert-success">
							<a class="close" data-dismiss="alert" href="#">×</a>
							<?php echo $message ; ?>
						</div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('', 'class="form-add-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
						<div class="form-group">
							<label for="userEditName">Username</label>
							<input type="text" class="form-control" id="userEditName" name="name" placeholder="Username" autocomplete="off" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditPass">Password</label>
							<input type="password" class="form-control" id="userEditPass" name="password" placeholder="Password" autocomplete="off" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditMail">Email</label>
							<input type="email" class="form-control" id="userEditMail" name="email" placeholder="Email" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditFname">Firstname</label>
							<input type="text" class="form-control" id="userEditFname" name="fname" placeholder="Firstname" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditLname">Lastname</label>
							<input type="text" class="form-control" id="userEditLname" name="lname" placeholder="Lastname" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Mobile</label>
							<input type="text" class="form-control" id="userEditMobile" name="mobile" placeholder="Mobile" value="" required>
						</div>				

										

						<!-- checkbox -->
						<div class="form-group">
							<label>Roles</label>
							<?php foreach($roles as $role) : ?>
								<div class="checkbox">
									<label class="no-padding">
										<input type="checkbox" name="role[]" class="minimal themed" value="<?php echo $role->rid; ?>">
										<?php echo $role->r_name; ?>
									</label>
								</div>
							<?php endforeach; ?>
						</div>				
		                <div class="form-group">
		                	<label>Status</label>
		                    <div class="checkbox">
		                      <label class="no-padding">
		                        <input type="checkbox" class="minimal themed" name="active"> Active
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