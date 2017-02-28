<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Set Configuration of URL
      </h1>
    </section>

    <!-- Main content -->
	<ul class="nav nav-tabs">
			<li class="<?php echo ($type == "outlander") ? "active" : ""; ?>"><a href="outlander"><?php echo HEADING1; ?></a></li>
			<li class="<?php echo ($type == "motogp") ? "active" : ""; ?>"><a href="motogp"><?php echo HEADING2; ?></a></li>
			<li class="<?php echo ($type == "catalogue") ? "active" : ""; ?>"><a href="catalogue"><?php echo HEADING3; ?></a></li>
			<li class="<?php echo ($type == "roadster") ? "active" : ""; ?>"><a href="roadster"><?php echo HEADING4; ?></a></li>
	</ul>
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Configure URL</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open("admin/confURL/add/$type", 'class="form-add-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
						<div class="form-group">
							<label for="jsonProdFilters">Products URL:</label>
							<input type="text" class="form-control" id="jsonProdFilters" name="jsonProdFilters" value="" required/>
						</div>
						<?php if($type == "motogp" || $type == "outlander"){ ?>
						<div class="form-group">
							<label for="jsonProdLooks">Looks URL:</label>
							<input type="text" class="form-control" id="jsonProdLooks" name="jsonProdLooks" value="" required/>
						</div>
						<?php } ?>
						<div class="form-group">
							<label for="rowCounts">Row Count:</label>
							<input type="text" class="form-control" id="rowCounts" name="rowCounts" value="" required/>
						</div>
						<div class="form-group">
							<label for="timeOutSec">Time Out(In Seconds):</label>
							<input type="text" class="form-control" id="timeOutSec" name="timeOutSec" value="" required/>
						</div>
						<div class="form-group">
							<label for="productType">Product Type:</label>
							<input type="text" class="form-control" id="productType" name="productType" value="" required/>
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