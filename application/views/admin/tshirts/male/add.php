<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Male Tshirts
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Tshirt</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Add Tshirts</h3>
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
							<label for="userEditName">Anatomy</label>
							<input type="file" class="form-control" name="userFiles[]" value="" required multiple>
						</div>
						<div class="form-group">
							<label for="userEditPass">Champions Products Title</label>
							<input type="text" class="form-control" id="championsProductsTitle" name="champions_products_title" placeholder="Champions Products Title" autocomplete="off" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditMail">Champions Products Description</label>
							<textarea class="form-control" id="destinationDesc" name="champions_products_desc" placeholder="Champions Products Title" value="" required></textarea>
						</div>
						<div class="form-group">
							<label for="userEditFname">Champions Products Images</label>
							<input type="file" class="form-control" name="championsProductsImages[]" value="" required multiple>
						</div>
						<div class="form-group">
							<label for="userEditLname">Trends Launch Date</label>
							<input type="text" class="form-control" id="HowFar" name="trends_launch_date" placeholder="Trends Launch Date" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Trends Title</label>
							<input type="text" class="form-control" id="BestTimeVisit" name="trends_title" placeholder="Trends Title" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Trends Images</label>
							<input type="file" class="form-control" name="trendsImages[]" value="" required multiple>
						</div>			
						<div class="form-group">
							<label for="userEditMobile">Vintage Images</label>
							<input type="file" class="form-control" name="vintageImage[]" value="" required multiple>
						</div>	
						<div class="form-group">
							<label for="userEditMobile">Vintage Video</label>
							<input type="file" class="form-control" name="vintageVideo" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Vintage Title</label>
							<input type="text" class="form-control" id="vintageTitle" name="vintage_title" placeholder="Vintage Title" value="" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Vintage Description</label>
							<input type="text" class="form-control" id="vintageDescription" name="vintage_description" placeholder="Vintage Description" value="" required>
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