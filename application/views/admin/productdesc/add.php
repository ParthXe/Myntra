<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Product Description
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Product Description</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Set Product Description Cofiguration</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php if (isset($message)) : ?>
						<div class="alert alert-success">
							<a class="close" data-dismiss="alert" href="#">×</a>
							<?php echo $message ; ?>
						</div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('admin/productdesc/add', 'class="form-add-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
					<div class="form-group">
							<label for="screensaver">Top-Bar Image:</label>
							<input type="file" class="form-control" id="topBarImage" name="topBarImage" value="" required />
						</div>
						<div class="form-group">
							<label for="backbutton">Back Button Image:</label>
							<input type="file" class="form-control" id="BackbuttonImage" name="BackbuttonImage" value="" required />
						</div>
						<div class="form-group">
							<label for="homebutton">Home Button Image:</label>
							<input type="file" class="form-control" id="homebuttonImage" name="homebuttonImage" value="" required />
						</div>
						<div class="form-group">
							<label for="myntralogoimg">Myntra Logo Image:</label>
							<input type="file" class="form-control" id="myntralogoImage" name="myntralogoImage" value="" required />
						</div>
						<div class="form-group">
							<label for="getprodbuttonimg">Get Product Button Image:</label>
							<input type="file" class="form-control" id="getProdBtn" name="getProdBtn" value="" required />
						</div>
						<div class="form-group">
							<label for="relatedprodtext">Related Product Heading Text:</label>
							<input type="text" class="form-control" id="relatedProdHeadingTxt" name="relatedProdHeadingTxt" value="" required />
						</div>
						<div class="form-group">
							<label for="descripheadtext">Description Heading Text:</label>
							<input type="text" class="form-control" id="descTxtHeading" name="descTxtHeading" value="" required />
						</div>
						<div class="form-group">
							<label for="colorselectiontext">Color Selection Heading Text:</label>
							<input type="text" class="form-control" id="colorSelectionHeading" name="colorSelectionHeading" value="" required />
						</div>
						<div class="form-group">
							<label for="sizeselectiontext">Size Selection Heading Text:</label>
							<input type="text" class="form-control" id="sizeSelectionHeading" name="sizeSelectionHeading" value="" required />
						</div>
						<div class="form-group">
							<label for="notsuretext">Not Sure Heading Text:</label>
							<input type="text" class="form-control" id="notsureHeading" name="notsureHeading" value="" required />
						</div>
						<div class="form-group">
							<label for="clsbuttonimg">Close Button Image:</label>
							<input type="file" class="form-control" id="closeImageButton" name="closeImageButton" value="" required />
						</div>
						<div class="form-group">
							<label for="sizepopuptext">Size Popup Heading Text:</label>
							<input type="text" class="form-control" id="sizePopupHeadingTxt" name="sizePopupHeadingTxt" value="" required />
						</div>
						<div class="form-group">
							<label for="sizepopupfirsttext">Size Popup First Tab Text:</label>
							<input type="text" class="form-control" id="sizePopupFirstTabTxt" name="sizePopupFirstTabTxt" value="" required />
						</div>
						<div class="form-group">
							<label for="produrl">Product URL:</label>
							<input type="text" class="form-control" id="prodUrl" name="prodUrl" value="" required />
						</div>
						<div class="form-group">
							<label for="sizeurl">Size URL:</label>
							<input type="text" class="form-control" id="sizeUrl" name="sizeUrl" value="" required />
						</div>
						<div class="form-group">
							<label for="nextbuttonimg">Next Button Image:</label>
							<input type="file" class="form-control" id="nextbuttonImage" name="nextbuttonImage" value="" required />
						</div>
						<div class="form-group">
							<label for="prevbuttonimg">Previous Button Image:</label>
							<input type="file" class="form-control" id="backbtnImage" name="backbtnImage" value="" required />
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