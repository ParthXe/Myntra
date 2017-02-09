<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Carousel
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit Carousel Image </h3>
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
							<input type="file" class="form-control" id="imagePath" name="imagePath" value="" />
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
						<div class="form-group">
							<label for="type">Type:</label><br>
							<select name="type">
								<option value="motogp" <?php if($carouselList['type'] == "motogp") echo "selected";?> >MOTOGP</option>
								<option value="outlander" <?php if($carouselList['type'] == "outlander") echo "selected";?>>OUTLANDER</option>
							</select>
						</div>
						<div class="form-group">
		                	<label>Status</label>
		                    <div class="checkbox">
		                      <label class="no-padding">
		                        <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" <?php if($carouselList['status']=="1")  echo "checked";?> class="minimal themed" name="active" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Active
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

