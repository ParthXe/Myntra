<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Send SMS
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
                  <h3 class="box-title">Configure Send SMS</h3>
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
							<td><?php echo isset($info->topBarImage ) ? substr($info->topBarImage,10)  : "NA";?></td>
							<td><?php echo isset($info->headingTxt) ? $info->headingTxt : "NA";?></td>
                            <td><?php echo isset($info->BackbuttonImage ) ? substr($info->BackbuttonImage,10)  : "NA";?></td>
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