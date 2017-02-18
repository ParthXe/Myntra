<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        License
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
                      <th>Top Bar Image:</th>
					  <th>Heading Text:</th>
					  <th>Back Button Image:</th>
					  <th>LICENSE TERMS:</th>
					  <th>TERMS AND CONDITIONS:</th>
					  <th>PRIVACY POLICY:</th>
                    </tr>
                   <!--?php if (count($tshirts_male) > 0 ){ ?-->  
                    <?php foreach($licenseList as $info) : ?>
                        <tr><!-- topBarImage headingTxt BackbuttonImage tab1 tab2 tab3 tab4 tab5 -->
							<td><img style="background-color:grey;height:100px;width:100px" src="<?php echo ASSET_PATH."license/".$info->type."/".$info->topBarImage; ?>" /></td>
							<td><?php echo isset($info->headingTxt) ? $info->headingTxt : "NA";?></td>
							<td><img style="background-color:grey;height:100px;width:100px" src="<?php echo ASSET_PATH."license/".$info->type."/".$info->BackbuttonImage; ?>" /></td>
							<td><?php echo isset($info->tab1) ? $info->tab1 : "NA";?></td>
                            <td><?php echo isset($info->tab2 ) ? $info->tab2  : "NA";?></td>
							<td><?php echo isset($info->tab3) ? $info->tab3 : "NA";?></td>
                            <td><a href="<?php echo base_url("admin/license/edit/".$info->id); ?>"><small class="label bg-red">EDIT</small></a></td>
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