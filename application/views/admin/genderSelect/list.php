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
							<td><?php echo isset($info->image1) ? substr($info->image1,10) : "NA";?></td>
                            <td><?php echo isset($info->image2 ) ? substr($info->image2,10)  : "NA";?></td>
							<td><?php echo isset($info->image1Disabled) ? substr($info->image1Disabled,10) : "NA";?></td>
                            <td><?php echo isset($info->image2Disabled ) ? substr($info->image2Disabled,10)  : "NA";?></td>
							<td><?php echo isset($info->thunderImage) ? substr($info->thunderImage,10) : "NA";?></td>
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