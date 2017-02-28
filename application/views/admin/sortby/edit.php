<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sort By
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Configure Sort By</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('', 'class="form-user-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
						<div class="form-group">
						  <!-- button1 button2-->
							<label for="headingTxt">Heading Text:</label>
							<input type="text" class="form-control" id="headingTxt" name="headingTxt" value="<?php echo $sortByList['headingTxt'];?>" 	/>
						</div>
						<div class="form-group">
							<label for="BackbuttonImage">Close Button Image:</label>
							<input type="file" class="form-control" id="closeImageButton" name="closeImageButton"  onchange="return checkFile(this.id);" value=""/>
							<span><img style="background-color:grey;height:100px;width:100px" src="<?php echo ASSET_PATH."sortBy/".$sortByList['type']."/".$sortByList['closeImageButton']; ?>" /></span>
						</div>
						<div class="form-group">
							<label for="option1">Option1 Text:</label>
							<input type="text" class="form-control" id="option1" name="option1" value="<?php echo $sortByList['option1'];?>" />
						</div>
						<div class="form-group">
							<label for="option2">Option2 Text:</label>
							<input type="text" class="form-control" id="option2" name="option2" value="<?php echo $sortByList['option2'];?>" />
						</div>
						<div class="form-group">
							<label for="option3">Option3 Text:</label>
							<input type="text" class="form-control" id="option3" name="option3" value="<?php echo $sortByList['option3'];?>" >
						</div>
						<div class="form-group">
							<label for="option4">Option4 Text:</label>
							<input type="text" class="form-control" id="option4" name="option4" value="<?php echo $sortByList['option4'];?>" />
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

