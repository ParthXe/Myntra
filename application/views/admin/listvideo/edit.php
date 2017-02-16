<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<script type="text/javascript" src="../assets/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
var config = {
				width:720,
				height:200,
				resize_enabled : false,
				//toolbar:'full',
				toolbar:[['Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','Font','FontSize','Format','Styles','-','TextColor','BGColor','-']],
				enterMode:CKEDITOR.ENTER_BR,
				extraPlugins:'colorbutton,font',
				colorButton_colors : '000,800000,8B4513,2F4F4F,008080,000080,4B0082,696969,' +
									'B22222,A52A2A,DAA520,006400,40E0D0,0000CD,800080,808080,' +
									'F00,FF8C00,FFD700,008000,0FF,00F,EE82EE,A9A9A9,' +
									'FFA07A,FFA500,FFFF00,00FF00,AFEEEE,ADD8E6,DDA0DD,D3D3D3,' +
									'FFF0F5,FAEBD7,FFFFE0,F0FFF0,F0FFFF,F0F8FF,E6E6FA,FFF',			
				basicEntities : false,
				entities : false,
				coreStyles_bold: {
                        element: 'b',
                        overrides: 'strong',
                    },
			}
</script>
    <section class="content-header">
      <h1>
         Configure List Video
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List Video</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('', 'class="form-user-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
						<div class="form-group">
							<label for="topbarimg">Top-Bar Image:</label>
							<input type="file" class="form-control" id="topBarImage" name="topBarImage" value="" />
							<span><img style="background-color:grey;height:200px;width:150px" src="<?php echo ASSET_PATH."listvideo/".$listvideoinfo['type']."/".$listvideoinfo['topBarImage']; ?>" /></span>
						</div>
						<div class="form-group">
							<label for="headtext">Heading Text:</label>
							<textarea cols="80" class="headingTxt" id="headingTxt" name="headingTxt" rows="10">
							<?php echo $listvideoinfo['headingTxt'];?>
                            </textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('headingTxt',config);
							</script>
						</div>
						<div class="form-group">
							<label for="backbutton">Back Button Image:</label>
							<input type="file" class="form-control" id="BackbuttonImage" name="BackbuttonImage" value="" />
							<span><img style="background-color:grey;height:150px;width:150px" src="<?php echo ASSET_PATH."listvideo/".$listvideoinfo['type']."/".$listvideoinfo['BackbuttonImage']; ?>" /></span>
						</div>
						<div class="form-group">
							<label for="homebutton">Home Button Image:</label>
							<input type="file" class="form-control" id="homebuttonImage" name="homebuttonImage" value="" />
							<span><img style="background-color:grey;height:150px;width:150px" src="<?php echo ASSET_PATH."listvideo/".$listvideoinfo['type']."/".$listvideoinfo['homebuttonImage']; ?>" /></span>
						</div>
						<div class="form-group">
							<label for="sortBtnImg">Sort Buttton Image:</label>
							<input type="file" class="form-control" id="sortBtnImage" name="sortBtnImage" value="" />
							<span><img style="background-color:grey;height:40px;width:100px" src="<?php echo ASSET_PATH."listvideo/".$listvideoinfo['type']."/".$listvideoinfo['sortBtnImage']; ?>" /></span>
						</div>
						<div class="form-group">
							<label for="sortRollBtnImg">Sort Roll Button Image:</label>
							<input type="file" class="form-control" id="sortRollBtnImage" name="sortRollBtnImage" value="" />
							<span><img style="background-color:grey;height:40px;width:100px" src="<?php echo ASSET_PATH."listvideo/".$listvideoinfo['type']."/".$listvideoinfo['sortRollBtnImage']; ?>" /></span>
						</div>
						<div class="form-group">
							<label for="filterBtnImg">Filter Buttton Image:</label>
							<input type="file" class="form-control" id="filterBtnImage" name="filterBtnImage" value="" />
							<span><img style="background-color:grey;height:40px;width:100px" src="<?php echo ASSET_PATH."listvideo/".$listvideoinfo['type']."/".$listvideoinfo['filterBtnImage']; ?>" /></span>
						</div>
						<div class="form-group">
							<label for="filterrollBtnImg">Filter Roll Button Image:</label>
							<input type="file" class="form-control" id="filterRollBtnImage" name="filterRollBtnImage" value="" />
							<span><img style="background-color:grey;height:40px;width:100px" src="<?php echo ASSET_PATH."listvideo/".$listvideoinfo['type']."/".$listvideoinfo['filterRollBtnImage']; ?>" /></span>
						</div>
						<div class="form-group">
							<label for="myntralogoImg">Myntra Logo Image:</label>
							<input type="file" class="form-control" id="myntralogoImage" name="myntralogoImage" value="" />
							<span><img style="background-color:grey;height:100px;width:200px" src="<?php echo ASSET_PATH."listvideo/".$listvideoinfo['type']."/".$listvideoinfo['myntralogoImage']; ?>" /></span>
						</div>
						<div class="form-group">
							<label for="blackbgImg">Black Background Image:</label>
							<input type="file" class="form-control" id="blackbgImage" name="blackbgImage" value="" />
							<span><img style="background-color:grey;height:150px;width:150px" src="<?php echo ASSET_PATH."listvideo/".$listvideoinfo['type']."/".$listvideoinfo['blackbgImage']; ?>" /></span>
						</div>
						<div class="form-group">
							<label for="imgGalleryPos">Image Gallery Position:</label>
							<input type="text" class="form-control" id="imageGalleryPos" name="imageGalleryPos" value="<?php echo $listvideoinfo['imageGalleryPos'];?>" />
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