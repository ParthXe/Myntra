<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Set Configuration of Gender Selection
      </h1>
    </section>

    <!-- Main content -->
	<ul class="nav nav-tabs">
			<li class="<?php echo ($type == "catalogue") ? "active" : ""; ?>"><a href="catalogue">Catalogue</a></li>
			<li class="<?php echo ($type == "outlander") ? "active" : ""; ?>"><a href="outlander">Outlander</a></li>
			<li class="<?php echo ($type == "motogp") ? "active" : ""; ?>"><a href="motogp">MotoGP</a></li>
			<li class="<?php echo ($type == "roadster") ? "active" : ""; ?>"><a href="roadster">Roadster</a></li>
		</ul>
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Gender Selection</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open("admin/genderSelection/add/$type", 'class="form-add-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
						<div class="form-group">
							<label for="image1">Men Active Image:</label>
							<input type="file" class="form-control" id="image1" name="image1" value="" required/>
						</div>
						<div class="form-group">
							<label for="image1Disabled">Men Inactive Image:</label>
							<input type="file" class="form-control" id="image1Disabled" name="image1Disabled" value="" required/>
						</div>
						<div class="form-group">
							<label for="image2">Women Active Image:</label>
							<input type="file" class="form-control" id="image2" name="image2" value="" required/>
						</div>
						<div class="form-group">
							<label for="image2Disabled">Women Inactive Image:</label>
							<input type="file" class="form-control" id="image2Disabled" name="image2Disabled" value="" required/>
						</div>
						<div class="form-group">
							<label for="thunderImage">Sepration Image:</label>
							<input type="file" class="form-control" id="thunderImage" name="thunderImage" value="" required/>
						</div>
						<div class="row">
							<!-- /.col -->
							<div class="col-xs-3">
						  		<button type="submit" class="btn btn-primary" type="submit">Submit</button>
							</div>
							<!-- /.col -->
						</div>
						<?php echo form_close() ; ?> 
					<!--/form-->
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>