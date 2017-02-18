<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Set Configuration of Filter
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
                  <h3 class="box-title">Filter</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open("admin/filterBy/add/$type", 'class="form-add-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
						<div class="form-group">
							<label for="headingTxt">Heading Text:</label>
							<input type="text" class="form-control" id="headingTxt" name="headingTxt" value="" required/>
						</div>
						<div class="form-group">
							<label for="closeImageButton">Close Button Image:</label>
							<input type="file" class="form-control" id="closeImageButton" name="closeImageButton" value="" required/>
						</div>
						<div class="form-group">
							<label for="clearButton">Clear Button Text:</label>
							<input type="text" class="form-control" id="clearButton" name="clearButton" value="" required/>
						</div>
						<div class="form-group">
							<label for="applyButton">Apply Button Text:</label>
							<input type="text" class="form-control" id="applyButton" name="applyButton" value="" required/>
						</div>
						<div class="form-group">
							<label for="option1">Option1:</label>
							<input type="text" class="form-control" id="option1" name="option1" value="" required/>
						</div>
						<div class="form-group">
							<label for="option2">Option2:</label>
							<input type="text" class="form-control" id="option2" name="option2" value="" required/>
						</div>
						<div class="form-group">
							<label for="option3">Option3:</label>
							<input type="text" class="form-control" id="option3" name="option3" value="" required/>
						</div>
						<div class="form-group">
							<label for="option4">Option4:</label>
							<input type="text" class="form-control" id="option4" name="option4" value="" required/>
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