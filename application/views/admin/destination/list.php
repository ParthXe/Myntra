<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Destination List<small><a href="<?php echo base_url("admin/destination/add"); ?>">Add Destination</a></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Destination</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Destination List</h3>
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
                      <th>Destination Name</th>
                      <th>Destination State</th>
                      <th>Destination Description</th>
                      <th>Why Go There</th>
                      <th>Best Time to visit</th>
                    </tr>
                    <?php if (count($destinations) > 0 ){ ?>
                    <?php foreach($destinations as $destination) : ?>
                        <tr>
                            <td><?php echo isset($destination->destination_name) ? $destination->destination_name : "NA" ;?></td>
                            <td><?php echo isset($destination->destination_state) ? $destination->destination_state : "NA" ;?></td>
                            <td><?php echo isset($destination->destination_desc) ? $destination->destination_desc : "NA" ;?></td>
                            <td><?php echo isset($destination->why_go_there) ? $destination->why_go_there : "NA" ;?></td>
                            <td><?php echo isset($destination->best_time_visit) ? $destination->best_time_visit : "NA" ;?></td>
                            <td><?php echo (isset($destination->active) ? $destination->active : "0" == 1) ? "<small class='label bg-green'>Active</small>" : "<small class='label bg-red'>Inactive</small>" ;?></small></td>
                            <td><a href="<?php echo base_url("admin/destination/edit/".$destination->Id); ?>"><small class="label bg-red">edit</small></a></td>
                        </tr>
                    <?php endforeach; ?>
                    <?php } else{ ?>
                    <tr><td colspan="5"> No records found</td></tr>
                    <?php } ?>
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