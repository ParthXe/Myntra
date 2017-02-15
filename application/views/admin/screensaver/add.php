<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Set Screensaver Configuration
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Screensaver</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<ul class="nav nav-tabs">
			<li class="<?php echo ($type == "catalouge") ? "active" : ""; ?>"><a href="catalouge">Catalouge</a></li>
			<li class="<?php echo ($type == "outlander") ? "active" : ""; ?>"><a href="outlander">Outlander</a></li>
			<li class="<?php echo ($type == "motogp") ? "active" : ""; ?>"><a href="motogp">MotoGP</a></li>
			<li class="<?php echo ($type == "roadster") ? "active" : ""; ?>"><a href="roadster">Roadster</a></li>
		</ul>
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Set Configuration of Screensaver </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open("admin/screensaver/add/$tab", 'class="form-add-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
					<!--<form action="http://localhost/myntra/admin/screensaver/add" class="form-user-edit" role="form" autocomplete="off" enctype="multipart/form-data" -->
						<div class="form-group">
							<label for="screensaver">Screensaver:</label>
							<input type="file" class="form-control" id="bgPath" name="bgPath" value="" required/>
						</div>
						<div class="form-group">
							<label for="explorebutton">Explore Button:</label>
							<input type="file" class="form-control" id="exploreBtnPath" name="exploreBtnPath" value="" required/>
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