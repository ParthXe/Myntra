<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Configure URL
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
                      <th>Products URL:</th>
					  <?php if($type == "motogp" || $type == "outlander") { ?>
					  <th>Looks URL:</th>
					  <?php } ?>
					  <th>Row Count:</th>
					  <th>Time Out(In Seconds):</th>
					  <th>Product Type:</th>
                    </tr>
                   <!--?php if (count($tshirts_male) > 0 ){ ?-->  
                    <?php foreach($confURLList as $info) : ?>
                        <tr>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $info->jsonProdFilters;?></td>
							<?php if($type == "motogp" || $type == "outlander") { ?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $info->jsonProdLooks;?></td>
							<?php } ?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $info->rowCounts;?></td>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $info->timeOutSec;?></td>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $info->productType;?></td>
                            <td><a href="<?php echo base_url("admin/confURL/edit/".$info->id); ?>"><small class="label bg-red">EDIT</small></a></td>
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