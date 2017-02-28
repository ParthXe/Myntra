<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sort By
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
                  <h3 class="box-title">Configure Sort By</h3>
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
					  <th>Option1:</th>
					  <th>Option2:</th>
					  <th>Option3:</th>
					  <th>Option4:</th>
					</tr>
                   <!--?php if (count($tshirts_male) > 0 ){ ?-->  
                    <?php foreach($sortByList as $info) : ?>
                        <tr>
							<?php $str= $info->headingTxt;$headingTxt = strip_tags($str,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $headingTxt;?></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."sortBy/".$info->type."/".$info->closeImageButton; ?>" /></td>
							<?php $str1= $info->option1;$option1 = strip_tags($str1,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $option1;?></td>
							<?php $str2= $info->option2;$option2 = strip_tags($str2,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $option2;?></td>
							<?php $str3= $info->option3;$option3 = strip_tags($str3,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $option3;?></td>
							<?php $str4= $info->option4;$option4 = strip_tags($str4,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $option4;?></td>
                            <td><a href="<?php echo base_url("admin/sortBy/edit/".$info->id); ?>"><small class="label bg-red">EDIT</small></a></td>
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