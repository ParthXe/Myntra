<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         License
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Screensaver</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Change Send SMS </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('', 'class="form-user-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
						<div class="form-group">
							<label for="topBarImage">Image:</label>
							<input type="file" class="form-control" id="topBarImage" name="topBarImage" value="" />
							<span><?php echo substr($carouselList['imagePath'],10);?></span>
						</div>
						<div class="form-group">
							<label for="title">Title:</label>
							<input type="text" class="form-control" id="title" name="title" value="<?php echo $carouselList['title'];?>" required/>
						</div>
						<div class="form-group">
							<label for="gender">Gender:</label><br>
							<select name="gender">
								<option value="men" <?php if($carouselList['gender'] == "men") echo "selected";?> >MALE</option>
								<option value="women" <?php if($carouselList['gender'] == "women") echo "selected";?>>FEMALE</option>
							</select>
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

