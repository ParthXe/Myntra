<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Destination Add
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
                  <h3 class="box-title">Add Destination</h3>
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
							<label for="userEditName">Destination Name</label>
							<input type="text" class="form-control" id="destinationName" name="destination_name" placeholder="Destination Name" autocomplete="off" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditName">Marker Code</label>
							<input type="text" class="form-control" id="destinationMarker" name="marker_code" placeholder="Marker Code" autocomplete="off" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditPass">Destination State</label>
							<input type="text" class="form-control" id="destinationState" name="destination_state" placeholder="Destination State" autocomplete="off" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditMail">Destination Description</label>
							<textarea class="form-control" id="destinationDesc" name="destination_desc" placeholder="Destination Description" value="" required></textarea>
						</div>
						<div class="form-group">
							<label for="userEditFname">Why Go There</label>
							<input type="text" class="form-control" id="WhyGoThere" name="why_go" placeholder="Why Go There" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditLname">How Far</label>
							<input type="text" class="form-control" id="HowFar" name="how_far" placeholder="How Far" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Best Time Visit</label>
							<input type="text" class="form-control" id="BestTimeVisit" name="best_time_visit" placeholder="Best Time Visit" value="" required>
						</div>
<!-- 						<div class="form-group">
							<label for="userEditMobile">Destination Background Image</label>
							<input type="file" class="form-control" name="destination_bg_img" value="" required>
						</div>	 -->		
						<div class="form-group">
							<label for="userEditMobile">Destination Images</label>
							<input type="file" class="form-control" name="userFiles[]" value="" required multiple>
						</div>	
						<div class="form-group">
							<label for="userEditMobile">Destination Matching Male Image</label>
							<input type="file" class="form-control" name="destination_matching_male" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Destination Matching Male Info</label>
							<textarea class="form-control" name="destination_info_male" placeholder="Destination Matching Male Info" value="" required></textarea>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Destination Matching Female Image</label>
							<input type="file" class="form-control" name="destination_matching_female" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Destination Matching Female Info</label>
							<textarea class="form-control" name="destination_info_female" placeholder="Destination Matching Female Info" value="" required></textarea>
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