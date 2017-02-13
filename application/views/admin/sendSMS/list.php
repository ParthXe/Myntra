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
                      <th>Heading Text:</th>
					  <th>Close Button Image:</th>
					  <th>Body Text:</th>
					  <th>Button1 Text:</th>
					  <th>Button2 Text:</th>
                    </tr>
                   <!--?php if (count($tshirts_male) > 0 ){ ?-->  
                    <?php foreach($sendSMSList as $info) : ?>
                        <tr>
							<?php $str= $info->headingTxt;$headingTxt = strip_tags($str,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $headingTxt;?></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."sendSMS/".$info->closeImageButton; ?>" /></td>
							<?php $str1= $info->bodyTxt;$bodyTxt = strip_tags($str1,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $bodyTxt;?></td>
							<?php $str2= $info->button1;$button1 = strip_tags($str2,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $button1;?></td>
							<?php $str3= $info->button2;$button2 = strip_tags($str3,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $button2;?></td>
                            <td><a href="<?php echo base_url("admin/sendSMS/edit/".$info->id); ?>"><small class="label bg-red">EDIT</small></a></td>
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