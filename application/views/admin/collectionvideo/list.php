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
                           <td><?php echo isset($info->bgPath) ? substr($info->bgPath,10) : "NA";?></td>
                            <td><?php echo isset($info->homebuttonImage ) ? substr($info->homebuttonImage,10)  : "NA";?></td>
							<td><?php echo isset($info->scrtext ) ? $info->scrtext  : "NA";?></td>
							<td><?php echo isset($info->insttext ) ? $info->insttext  : "NA";?></td>
							<td><?php echo isset($info->motoGpvideo ) ? substr($info->motoGpvideo,10)  : "NA";?></td>	
							<td><?php echo isset($info->outLandervideo ) ? substr($info->outLandervideo,10)  : "NA";?></td>
							<td><?php echo isset($info->buttonImage ) ? substr($info->buttonImage,10)  : "NA";?></td>
							<td><?php echo isset($info->closeImageButton ) ? substr($info->closeImageButton,10)  : "NA";?></td>
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