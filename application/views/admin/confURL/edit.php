<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Configure URL
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Change Configure URL </h3>
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
							<label for="jsonProdFilters">Products URL:</label>
							<input type="text" class="form-control" id="jsonProdFilters" name="jsonProdFilters" value="<?php echo $confURLList['jsonProdFilters'];?>" 	/>
						</div>
						<?php if($confURLList['type'] == "motogp" || $confURLList['type'] == "outlander"){ ?>
						<div class="form-group">
							<label for="image2">Looks URL:</label>
							<textarea class="form-control" id="jsonProdLooks" name="jsonProdLooks"/><?php echo $confURLList['jsonProdLooks'];?></textarea>
						</div>
						<?php } ?>
						<div class="form-group">
							<label for="rowCounts">Row Count:</label>
							<input type="text" class="form-control" id="rowCounts" name="rowCounts" value="<?php echo $confURLList['rowCounts'];?>" 	/>
						</div>
						<div class="form-group">
							<label for="timeOutSec">Time Out(In Seconds):</label>
							<input type="text" class="form-control" id="timeOutSec" name="timeOutSec" value="<?php echo $confURLList['timeOutSec'];?>" 	/>
						</div>
						<div class="form-group">
							<label for="smsCategory">Product Type:</label>
							<input type="text" class="form-control" id="productType" name="productType" value="<?php echo $confURLList['productType'];?>" 	/>
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

