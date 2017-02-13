<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Filter
		<!--<small><a href="<?php echo base_url("admin/genderSelection/add"); ?>">Gender Selection</a></small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Gender Selection</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Configure Filter By</h3>
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
                            <td><img style="background-color:grey;height:150px;width:150px" src="<?php echo ASSET_PATH."filterby/".$info->closeImageButton; ?>" /></td>
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