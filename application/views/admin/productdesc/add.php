<!-- Content Wrapper. Contains page content -->
<script type="text/javascript" src="../assets/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
var config = 
	{
		width : 720,
		height : 200,
		resize_enabled : false,
		//toolbar:'full',
		toolbar : [['Source', '-', 'Bold', 'Italic', 'Underline', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', '-', 'Font', 'FontSize', 'Format', 'Styles', '-', 'TextColor', 'BGColor', '-']],
		enterMode : CKEDITOR.ENTER_BR,
		extraPlugins : 'colorbutton,font',
		colorButton_colors : '000,800000,8B4513,2F4F4F,008080,000080,4B0082,696969,' +
							'B22222,A52A2A,DAA520,006400,006600,40E0D0,0000CD,800080,808080,' +
							'F00,FF8C00,FFD700,008000,0FF,00F,EE82EE,A9A9A9,' +
							'FFA07A,FFA500,FFFF00,00FF00,AFEEEE,ADD8E6,DDA0DD,D3D3D3,' +
							'FFF0F5,FAEBD7,FFFFE0,F0FFF0,F0FFFF,F0F8FF,E6E6FA,FFF',
		basicEntities : false,
		entities : false,
		coreStyles_bold : {
			element : 'b',
			overrides : 'strong',
		},
		colorButton_foreStyle : {
			element : 'font',
			attributes : {
				'color' : '#(color)'
			}
		},
		fontSize_style : {
			element : 'font',
			attributes : {
				'size' : '#(size)'
			}
		},
	}
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Product Description
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	<ul class="nav nav-tabs">
			<li class="<?php echo ($type == "outlander") ? "active" : ""; ?>"><a href="outlander"><?php echo HEADING1; ?></a></li>
			<li class="<?php echo ($type == "motogp") ? "active" : ""; ?>"><a href="motogp"><?php echo HEADING2; ?></a></li>
			<li class="<?php echo ($type == "catalogue") ? "active" : ""; ?>"><a href="catalogue"><?php echo HEADING3; ?></a></li>
			<li class="<?php echo ($type == "roadster") ? "active" : ""; ?>"><a href="roadster"><?php echo HEADING4; ?></a></li>
	</ul>
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
					<?php echo form_open("admin/productdesc/add/$tab",'class="form-add-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
					<div class="form-group">
							<label for="screensaver">Top-Bar Image:</label>
							<input type="file" class="form-control" id="topBarImage" name="topBarImage" onchange="return checkFile(this.id);" value="" required />
						</div>
						<div class="form-group">
							<label for="backbutton">Back Button Image:</label>
							<input type="file" class="form-control" id="BackbuttonImage" name="BackbuttonImage" onchange="return checkFile(this.id);" value="" required />
						</div>
						<div class="form-group">
							<label for="homebutton">Home Button Image:</label>
							<input type="file" class="form-control" id="homebuttonImage" name="homebuttonImage" onchange="return checkFile(this.id);" value="" required />
						</div>
						<div class="form-group">
							<label for="myntralogoimg">Myntra Logo Image:</label>
							<input type="file" class="form-control" id="myntralogoImage" name="myntralogoImage" onchange="return checkFile(this.id);" value="" required />
						</div>
						<div class="form-group">
							<label for="getprodbuttonimg">Get Product Button Image:</label>
							<input type="file" class="form-control" id="getProdBtn" name="getProdBtn" onchange="return checkFile(this.id);" value="" required />
						</div>
						<div class="form-group">
							<label for="relatedprodtext">Related Product Heading Text:</label>
							<textarea cols="80" class="relatedProdHeadingTxt" id="relatedProdHeadingTxt" name="relatedProdHeadingTxt" rows="10" required>
                            </textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('relatedProdHeadingTxt',config);
							</script>
						</div>
						<div class="form-group">
							<label for="descripheadtext">Description Heading Text:</label>
							<textarea cols="80" class="descTxtHeading" id="descTxtHeading" name="descTxtHeading" rows="10" required>
                            </textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('descTxtHeading',config);
							</script>
						</div>
						<div class="form-group">
							<label for="colorselectiontext">Color Selection Heading Text:</label>
							<textarea cols="80" class="colorSelectionHeading" id="colorSelectionHeading" name="colorSelectionHeading" rows="10" required>
                            </textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('colorSelectionHeading',config);
							</script>
						</div>
						<div class="form-group">
							<label for="sizeselectiontext">Size Selection Heading Text:</label>
							<textarea cols="80" class="sizeSelectionHeading" id="sizeSelectionHeading" name="sizeSelectionHeading" rows="10" required>
                            </textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('sizeSelectionHeading',config);
							</script>
						</div>
						<div class="form-group">
							<label for="notsuretext">Not Sure Heading Text:</label>
							<textarea cols="80" class="notsureHeading" id="notsureHeading" name="notsureHeading" rows="10" required>
                            </textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('notsureHeading',config);
							</script>
						</div>
						<div class="form-group">
							<label for="clsbuttonimg">Close Button Image:</label>
							<input type="file" class="form-control" id="closeImageButton" name="closeImageButton" onchange="return checkFile(this.id);" value="" required />
						</div>
						<div class="form-group">
							<label for="sizepopuptext">Size Popup Heading Text:</label>
							<textarea cols="80" class="sizePopupHeadingTxt" id="sizePopupHeadingTxt" name="sizePopupHeadingTxt" rows="10" required>
                            </textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('sizePopupHeadingTxt',config);
							</script>
						</div>
						<div class="form-group">
							<label for="sizepopupfirsttext">Size Popup First Tab Text:</label>
							<textarea cols="80" class="sizePopupFirstTabTxt" id="sizePopupFirstTabTxt" name="sizePopupFirstTabTxt" rows="10" required>
                            </textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('sizePopupFirstTabTxt',config);
							</script>
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
							<input type="file" class="form-control" id="nextbuttonImage" name="nextbuttonImage" onchange="return checkFile(this.id);" value="" required />
						</div>
						<div class="form-group">
							<label for="prevbuttonimg">Previous Button Image:</label>
							<input type="file" class="form-control" id="backbtnImage" name="backbtnImage" onchange="return checkFile(this.id);" value="" required />
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