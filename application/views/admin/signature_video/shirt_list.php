<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Signature Video List<small><a href="<?php echo base_url("admin/signature/add_shirt_video"); ?>">Add Signature Video</a></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Signature Video</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Signature Video List</h3>
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
                      <th>Video</th>
                      <th>Status</th>
                    </tr>
                     <?php if (count($videos) > 0 ){ ?>
                    <?php foreach($videos as $video) : ?>
                        <tr>
                          <?php $path = base_url()."myntra/section_products/pro_shirts/signature_video/".$video->video; ?>
                            <td><video width="200">
                            <source src="<?php echo isset($path) ? $path : 'NA';?>" type="video/mp4">
                            </video></td>
                            <td><?php echo (isset($video->active) ? $video->active : "0" == 1) ? "<small class='label bg-green'>Active</small>" : "<small class='label bg-red'>Inactive</small>" ;?></small></td>
                            <td><a href="<?php echo base_url("admin/signature/shirt_edit/".$video->Id); ?>"><small class="label bg-red">edit</small></a></td>
                        </tr>
                    <?php endforeach; ?>
                    <?php } else { ?>
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