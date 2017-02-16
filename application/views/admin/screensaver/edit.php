<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Configure Screensaver
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Screensaver </h3>
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
							<span><video width="320" height="240" controls>
									<source src="<?php echo ASSET_PATH."screensaver/".$screensaverinfo['type']."/".$screensaverinfo['bgPath']; ?>" type="video/mp4">
								</video>
							</span>
						</div>
						<div class="form-group">
							<label for="explorebutton">Explore Button:</label>
							<input type="file" class="form-control" id="exploreBtnPath" name="exploreBtnPath" value=""/>
							<span><img style="background-color:grey;height:50px;width:150px" src="<?php echo ASSET_PATH."screensaver/".$screensaverinfo['type']."/".$screensaverinfo['exploreBtnPath']; ?>" /></span>
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