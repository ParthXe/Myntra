<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Video
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
                  <h3 class="box-title">Configure List Video</h3>
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
                      <th>Top-Bar Image</th>
                      <th>Heading Text</th> 
					  <th>Back Button Image</th>  
					  <th>Home Button Image</th> 
					  <th>Sort Buttton Image</th>  
					  <th>Sort Roll Button Image</th> 	  
					  <th>Filter Buttton Image</th>  
					  <th>Filter Roll Button Image</th> 
					  <th>Myntra Logo Image</th>
                      <th>Black Background Image</th>
                      <th>Image Gallery Position</th>
                    </tr>
                    <?php foreach($listvideolist as $info) : ?>
                        <tr>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."listvideo/".$info->type."/".$info->topBarImage; ?>" /></td>
							<?php $str= $info->headingTxt;$headingTxt = strip_tags($str,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $headingTxt;?></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."listvideo/".$info->type."/".$info->BackbuttonImage; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."listvideo/".$info->type."/".$info->homebuttonImage; ?>" /></td>
							<td><img style="background-color:grey;width:135px;height:35px;" src="<?php echo ASSET_PATH."listvideo/".$info->type."/".$info->sortBtnImage; ?>" /></td>
							<td><img style="background-color:grey;width:135px;height:35px;" src="<?php echo ASSET_PATH."listvideo/".$info->type."/".$info->sortRollBtnImage; ?>" /></td>
							<td><img style="background-color:grey;width:135px;height:35px;" src="<?php echo ASSET_PATH."listvideo/".$info->type."/".$info->filterBtnImage; ?>" /></td>
							<td><img style="background-color:grey;width:135px;height:35px;" src="<?php echo ASSET_PATH."listvideo/".$info->type."/".$info->filterRollBtnImage; ?>" /></td>
							<td><img style="background-color:grey;width:135px;height:35px;" src="<?php echo ASSET_PATH."listvideo/".$info->type."/".$info->myntralogoImage; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."listvideo/".$info->type."/".$info->blackbgImage; ?>" /></td>
							<?php $str1= $info->imageGalleryPos;$imageGalleryPos = strip_tags($str1,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $imageGalleryPos;?></td>
							<td><a href="<?php echo base_url("admin/listvideo/edit/".$info->id); ?>"><small class="label bg-red">edit</small></a></td>
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