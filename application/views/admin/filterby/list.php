<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Filter By
		<!--<small><a href="<?php echo base_url("admin/genderSelection/add"); ?>">Gender Selection</a></small>-->
      </h1>
    </section>

    <!-- Main content -->
	<ul class="nav nav-tabs">
			<li class="<?php echo ($type == "outlander") ? "active" : ""; ?>"><a href="outlander"><?php echo HEADING1; ?></a></li>
			<li class="<?php echo ($type == "motogp") ? "active" : ""; ?>"><a href="motogp"><?php echo HEADING2; ?></a></li>
			<li class="<?php echo ($type == "catalogue") ? "active" : ""; ?>"><a href="catalogue"><?php echo HEADING3; ?></a></li>
			<li class="<?php echo ($type == "roadster") ? "active" : ""; ?>"><a href="roadster"><?php echo HEADING4; ?></a></li>
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
					  <th>Heading Text:</th>
					  <th>Close Button Image:</th>
					  <th>Clear Button Text:</th>
					  <th>Apply Button Text:</th>
					  <th>Option1:</th>
					  <th>Option2:</th>
					  <th>Option3:</th>
					  <th>Option4:</th>
					</tr>
                   <!--?php if (count($tshirts_male) > 0 ){ ?-->  
                    <?php foreach($filterByList as $info) : ?>
                        <tr>
							<td><?php echo isset($info->headingTxt) ? $info->headingTxt : "NA";?></td>
                            <td><img style="background-color:grey;height:150px;width:150px" src="<?php echo ASSET_PATH."filterby/".$info->type."/".$info->closeImageButton; ?>" /></td>
							<!--td><!--?php echo isset($info->closeImageButton ) ? substr($info->closeImageButton,10)  : "NA";?></td-->
							<td><?php echo isset($info->clearButton) ? $info->clearButton : "NA";?></td>
							<td><?php echo isset($info->applyButton) ? $info->applyButton : "NA";?></td>
							<td><?php echo isset($info->option1) ? $info->option1 : "NA";?></td>
                            <td><?php echo isset($info->option2 ) ? $info->option2  : "NA";?></td>
							<td><?php echo isset($info->option3) ? $info->option3 : "NA";?></td>
							<td><?php echo isset($info->option4) ? $info->option4 : "NA";?></td>
                            <td><a href="<?php echo base_url("admin/filterBy/edit/".$info->id); ?>"><small class="label bg-red">EDIT</small></a></td>
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