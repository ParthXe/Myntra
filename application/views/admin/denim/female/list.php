<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Denim Products List<small><a href="<?php echo base_url("admin/denim/male_add"); ?>">Add Denim Products</a></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Denim</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Denim Female Products List</h3>
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
                      <th>Champion products title</th>
                      <th>Champion products description</th>
                      <th>Trends title</th>
                      <th>Trends launch date</th>
                      <th>vintage title</th>
                    </tr>
                    <?php if (count($denim_female) > 0 ){ ?>
                    <?php foreach($denim_female as $products_info) : ?>
                        <tr>
                            <td><?php echo isset($products_info->champion_products_title) ? $products_info->champion_products_title : "NA";?></td>
                            <td><?php echo isset($products_info->champion_products_desc) ? $products_info->champion_products_desc : "NA";?></td>
                            <td><?php echo isset($products_info->trends_title) ? $products_info->trends_title : "NA";?></td>
                            <td><?php echo isset($products_info->trends_launch_date) ? $products_info->trends_launch_date : "NA" ;?></td>
                            <td><?php echo isset($products_info->vintage_title) ? $products_info->vintage_title : "NA";?></td>
                            <td><?php echo (isset($products_info->active) ? $products_info->active : "0" == 1) ? "<small class='label bg-green'>Active</small>" : "<small class='label bg-red'>Inactive</small>" ;?></small></td>
                            <td><a href="<?php echo base_url("admin/denim/female_edit/".$products_info->Id); ?>"><small class="label bg-red">edit</small></a></td>
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