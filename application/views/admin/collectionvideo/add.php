<!-- Content Wrapper. Contains page content -->
<script type="text/javascript" src="../assets/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
var config = 
	{
		width:720,
		height:200,
		resize_enabled : false,
		//toolbar:'full',
		toolbar:[['Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','Font','FontSize','Format','Styles','-','TextColor','BGColor','-']],
		enterMode:CKEDITOR.ENTER_BR,
		extraPlugins:'colorbutton,font',
		colorButton_colors : '000,800000,8B4513,2F4F4F,008080,000080,4B0082,696969,' +
							'B22222,A52A2A,DAA520,006400,006600,40E0D0,0000CD,800080,808080,' +
							'F00,FF8C00,FFD700,008000,0FF,00F,EE82EE,A9A9A9,' +
							'FFA07A,FFA500,FFFF00,00FF00,AFEEEE,ADD8E6,DDA0DD,D3D3D3,' +
							'FFF0F5,FAEBD7,FFFFE0,F0FFF0,F0FFFF,F0F8FF,E6E6FA,FFF',
		basicEntities : false,
		entities : false,
		coreStyles_bold: {
							   element: 'b',
							   overrides: 'strong',
						   },
		colorButton_foreStyle : {
		element: 'font',
		attributes: { 'color': '#(color)' }
		},
		fontSize_style :{
		element: 'font',
		attributes: {'size': '#(size)' }
		},
	}	 
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Collection Video
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	<ul class="nav nav-tabs">
			<li class="<?php echo ($type == "catalogue") ? "active" : ""; ?>"><a href="catalogue">Catalogue</a></li>
			<li class="<?php echo ($type == "outlander") ? "active" : ""; ?>"><a href="outlander">Outlander</a></li>
			<li class="<?php echo ($type == "motogp") ? "active" : ""; ?>"><a href="motogp">MotoGP</a></li>
			<li class="<?php echo ($type == "roadster") ? "active" : ""; ?>"><a href="roadster">Roadster</a></li>
		</ul>
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Set Collection Video Cofiguration</h3>
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
					<?php echo form_open("admin/collectionvideo/add/$tab", 'class="form-add-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
						
						<div class="form-group">
							<label for="screensaver">Screensaver:</label>
							<input type="file" class="form-control" id="bgPath" name="bgPath" value="" required/>
						</div>
						<div class="form-group">
							<label for="homebutton">Home Button Image:</label>
							<input type="file" class="form-control" id="homebuttonImage" name="homebuttonImage" value="" required/>
						</div>
						<div class="form-group">
							<label for="screentext">Screen Text:</label>
							<textarea cols="80" class="scrtext" id="scrtext" name="scrtext" rows="10">
                            </textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('scrtext',config);
							</script>
						</div>
						<div class="form-group">
							<label for="inserttext">Insert Text:</label>
							<textarea cols="80" class="insttext" id="insttext" name="insttext" rows="10">
                            </textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('insttext',config);
							</script>
						</div>
						<div class="form-group">
							<label for="motoGPvid">MotoGP Video:</label>
							<input type="file" class="form-control" id="motoGpvideo" name="motoGpvideo" value="" required/>
						</div>
						<div class="form-group">
							<label for="outlandervid">Outlander Video:</label>
							<input type="file" class="form-control" id="outLandervideo" name="outLandervideo" value="" required/>
						</div>
						<div class="form-group">
							<label for="buttonimg">Button Image:</label>
							<input type="file" class="form-control" id="buttonImage" name="buttonImage" value="" required/>
						</div>
						<div class="form-group">
							<label for="clsbutton">Close Button Image:</label>
							<input type="file" class="form-control" id="closeImageButton" name="closeImageButton" value="" required/>
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