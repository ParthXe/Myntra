<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Configure Gender Selection
		<!--<small><a href="<?php echo base_url("admin/genderSelection/add"); ?>">Gender Selection</a></small>-->
      </h1>
    </section>
	
    <!-- Main content -->
    <ul class="nav nav-tabs">
			<li class="<?php echo ($type == "catalogue") ? "active" : ""; ?>"><a href="catalogue">Catalogue</a></li>
			<li class="<?php echo ($type == "outlander") ? "active" : ""; ?>"><a href="outlander">Outlander</a></li>
			<li class="<?php echo ($type == "motogp") ? "active" : ""; ?>"><a href="motogp">MotoGP</a></li>
			<li class="<?php echo ($type == "roadster") ? "active" : ""; ?>"><a href="roadster">Roadster</a></li>
	</ul>
	<section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Gender Selection</h3>
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
                      <th>Image1:</th>
					  <th>Image2:</th>
					  <th>Image1 Disabled:</th>
					  <th>Image2 Disabled:</th>
					  <th>Thunder Image:</th>
                    </tr>
                   <!--?php if (count($tshirts_male) > 0 ){ ?-->  
                    <?php foreach($genderSelectList as $info) : ?>
                        <tr>
							<td><img style="background-color:grey;width:150px" src="<?php echo ASSET_PATH."genderSelection/".$info->type."/".$info->image1; ?>" /></td>
							<td><img style="background-color:grey;width:150px" src="<?php echo ASSET_PATH."genderSelection/".$info->type."/".$info->image2; ?>" /></td>
							<td><img style="background-color:grey;width:150px" src="<?php echo ASSET_PATH."genderSelection/".$info->type."/".$info->image1Disabled; ?>" /></td>
							<td><img style="background-color:grey;width:150px" src="<?php echo ASSET_PATH."genderSelection/".$info->type."/".$info->image2Disabled; ?>" /></td>
						    <td><img style="background-color:grey;width:150px" src="<?php echo ASSET_PATH."genderSelection/".$info->type."/".$info->thunderImage; ?>" /></td>
                            <td><a href="<?php echo base_url("admin/genderSelection/edit/".$info->id); ?>"><small class="label bg-red">EDIT</small></a></td>
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