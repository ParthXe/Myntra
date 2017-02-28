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
			<li class="<?php echo ($type == "outlander") ? "active" : ""; ?>"><a href="outlander"><?php echo HEADING1; ?></a></li>
			<!--<li class="<?php echo ($type == "motogp") ? "active" : ""; ?>"><a href="motogp"><?php echo HEADING2; ?></a></li>-->
			<li class="<?php echo ($type == "catalogue") ? "active" : ""; ?>"><a href="catalogue"><?php echo HEADING3; ?></a></li>
			<li class="<?php echo ($type == "roadster") ? "active" : ""; ?>"><a href="roadster"><?php echo HEADING4; ?></a></li>
		</ul>
	<section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Gender Selection</h3>
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
                      <th>Men Active:</th>
					  <th>Women Active:</th>
					  <th>Men Inactive:</th>
					  <th>Women Inactive:</th>
					  <th>Sepration Image:</th>
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