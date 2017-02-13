<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Carousel
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
                  <h3 class="box-title">List Of Carousel Images</h3>
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
						<th>Carousel Image</th>
						<th>Gender</th>
						<th>Type</th>
						<th>Status</th>
						<th>LINK</th>
						<th>EDIT</th>
						<th>DELETE</th>
					</tr>
                   <!--?php if (count($tshirts_male) > 0 ){ ?-->  
                    <?php foreach($carouselList as $info) : ?>
                        <tr>
							<td><?php echo isset($info->title) ? $info->title : "NA";?></td>
							<td><img style="background-color:grey;height:150px;width:150px" src="<?php echo ASSET_PATH."carousel/".$info->imagePath; ?>" /></td>
							<td><?php echo isset($info->gender) ? $info->gender : "NA";?></td>
							<td><?php echo isset($info->type) ? strtoupper($info->type) : "NA";?></td>
							<td><?php echo isset($info->status) ? $info->status : "NA";?></td>
							<td><a href="<?php echo base_url("admin/style/add_style/".$info->id); ?>"><small class="label bg-red">LINK</small></a></td>
                            <td><a href="<?php echo base_url("admin/carousel/edit/".$info->id); ?>"><small class="label bg-red">EDIT</small></a></td>
							<td><a href="<?php echo base_url("admin/carousel/delete/".$info->id); ?>"><small class="label bg-red">DELETE</small></a></td>
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