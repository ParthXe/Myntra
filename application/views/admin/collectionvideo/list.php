<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Collection Video<small><a href="<?php echo base_url("admin/collectionvideo/add"); ?>">collectionvideo</a></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Collection Video</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
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
                      <th>MotoGP Video</th>
					  <th>Outlander Video</th>
					  <th>Button Image</th> 
					  <th>Close Button Image</th>
                    </tr>
                   <!--?php if (count($tshirts_male) > 0 ){ ?-->  
                    <?php foreach($collectionvideolist as $info) : ?>
                        <tr>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."collectionvideo/".$info->bgPath; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."collectionvideo/".$info->homebuttonImage; ?>" /></td>
							<?php $str= $info->scrtext;$scrtext = strip_tags($str,0);?>
							<td><?php echo $scrtext;?></td> 
							<?php $str1= $info->insttext;$insttext = strip_tags($str1,0);?>
							<td><?php echo $insttext;?></td> 
							<td><video width="125" controls>
								  <source src="<?php echo ASSET_PATH."collectionvideo/".$info->motoGpvideo; ?>" type="video/mp4">
								Your browser does not support the video tag.
							</video></td>
							<td><video width="125" controls>
								  <source src="<?php echo ASSET_PATH."collectionvideo/".$info->outLandervideo; ?>" type="video/mp4">
								Your browser does not support the video tag.
							</video></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."collectionvideo/".$info->buttonImage; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."collectionvideo/".$info->closeImageButton; ?>" /></td>
                            <td><a href="<?php echo base_url("admin/collectionvideo/edit/".$info->id); ?>"><small class="label bg-red">edit</small></a></td>
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