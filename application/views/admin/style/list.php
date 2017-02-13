<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Style
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List Of Style Images</h3>
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
						<th>Title</th>
						<th>Carousel</th>
						<th>Style ID</th>
						<th>Status</th>
						<th>EDIT</th>
						<th>DELETE</th>
					</tr>
                   <!--?php if (count($tshirts_male) > 0 ){ ?-->  
                    <?php foreach($styleList as $info) : ?>
                        <tr>
							<td><?php echo isset($info->title) ? $info->title : "NA";?></td>
<<<<<<< HEAD
							<td><img style="background-color:grey;height:170px;width:140px" src="<?php echo ASSET_PATH."carousel/".$info->imagePath; ?>" /></td>
							<!--<td><?php echo isset($info->carousel_id ) ? $info->imagePath : "NA";?></td>-->
=======
							<td><img style="background-color:grey;height:150px;width:150px" src="<?php echo ASSET_PATH."carousel/".$info->imagePath; ?>" /></td>
							<!--<td><!--?php echo isset($info->carousel_id ) ? $info->imagePath : "NA";?></td>-->
>>>>>>> 0fa8a6857dbc23d486798766c283b4ba5b0366a7
							<td><?php echo isset($info->style_id) ? $info->style_id : "NA";?></td>
							<td><?php echo isset($info->status) ? $info->status : "NA";?></td>
                            <td><a href="<?php echo base_url("admin/style/edit/".$info->id); ?>"><small class="label bg-red">EDIT</small></a></td>
							<td><a href="<?php echo base_url("admin/style/delete/".$info->id); ?>"><small class="label bg-red">DELETE</small></a></td>
                        </tr>
                    <?php endforeach; ?>
                  </table>
				  <p><?php echo $links; ?></p>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>