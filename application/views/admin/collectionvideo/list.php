<!-- Content Wrapper. Contains page content -->
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
			<li class="<?php echo ($type == "outlander") ? "active" : ""; ?>"><a href="outlander"><?php echo HEADING1; ?></a></li>
			<li class="<?php echo ($type == "motogp") ? "active" : ""; ?>"><a href="motogp"><?php echo HEADING2; ?></a></li>
			<!--<li class="<?php echo ($type == "catalogue") ? "active" : ""; ?>"><a href="catalogue"><?php echo HEADING3; ?></a></li>
			<li class="<?php echo ($type == "roadster") ? "active" : ""; ?>"><a href="roadster"><?php echo HEADING4; ?></a></li>-->
		</ul>
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Configure Collection Video</h3>
                  <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <?php if (isset($message)) : ?>
                    <div class="alert alert-success">
                      <a class="close" data-dismiss="alert" href="#">×</a>
                      <?php echo $message ; ?>
                    </div>
                  <?php endif ; ?>                
                  <table class="table">
                    <tr>
                      <th>Screensaver</th>
                      <th>Home Button Image</th>
                      <th>Screen Text</th>
					  <th>Insert Text</th>
                      <th>Screen Video</th>
					  <th>Button Image</th> 
					  <th>Close Button Image</th>
                    </tr>
                   <!--?php if (count($tshirts_male) > 0 ){ ?-->  
                    <?php foreach($collectionvideolist as $info) : ?>
                        <tr>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."collectionvideo/".$info->type."/".$info->bgPath; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."collectionvideo/".$info->type."/".$info->homebuttonImage; ?>" /></td>
							<?php $str= $info->scrtext;$scrtext = strip_tags($str,0);?>
							<td><?php echo $scrtext;?></td> 
							<?php $str1= $info->insttext;$insttext = strip_tags($str1,0);?>
							<td><?php echo $insttext;?></td>	
							<td><video width="125" controls>
								  <source src="<?php echo ASSET_PATH."collectionvideo/".$info->type."/".$info->screen_video; ?>" type="video/mp4">
								Your browser does not support the video tag.
							</video></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."collectionvideo/".$info->type."/".$info->buttonImage; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."collectionvideo/".$info->type."/".$info->closeImageButton; ?>" /></td>
                            <td><a href="<?php echo base_url("admin/collectionvideo/edit/".$info->id); ?>"><small class="label bg-red">EDIT</small></a></td>
                        </tr>
                    <?php endforeach; ?>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>