<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         License
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit License </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('', 'class="form-user-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
						<div class="form-group">
							<label for="topBarImage">Top Bar Image:</label>
							<input type="file" class="form-control" id="topBarImage" name="topBarImage" onchange="return checkFile(this.id);" value=""/>
							<span><img style="background-color:grey;height:150px;width:100px" src="<?php echo ASSET_PATH."license/".$licenseList['type']."/".$licenseList['topBarImage']; ?>" /></span>
						</div>
						<div class="form-group">
						  <!-- button1 button2-->
							<label for="headingTxt">Heading Text:</label>
							<input type="text" class="form-control" id="headingTxt" name="headingTxt" value="<?php echo $licenseList['headingTxt'];?>" 	/>
						</div>
						<div class="form-group">
							<label for="BackbuttonImage">Back Button Image:</label>
							<input type="file" class="form-control" id="BackbuttonImage" name="BackbuttonImage" onchange="return checkFile(this.id);" value=""/>
							<span><img style="background-color:grey;height:100px;width:150px" src="<?php echo ASSET_PATH."license/".$licenseList['type']."/".$licenseList['BackbuttonImage']; ?>" /></span>
						</div>
						<div class="form-group">
							<label for="thunderImage">Button1 Text:</label>
							<textarea class="form-control" id="tab1" name="tab1"><?php echo $licenseList['tab1'];?></textarea>
						</div>
						<div class="form-group">
							<label for="thunderImage">Button2 Text:</label>
							<textarea class="form-control" id="tab2" name="tab2" ><?php echo $licenseList['tab2'];?></textarea>
						</div>
						<div class="form-group">
							<label for="thunderImage">Button2 Text:</label>
							<textarea class="form-control" id="tab3" name="tab3" ><?php echo $licenseList['tab3'];?></textarea>
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

