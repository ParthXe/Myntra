<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Roadster Selection
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
                  <h3 class="box-title">Roadster Selection</h3>
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
						<th>Top Bar Image</th>
						<th>Back Button Image</th>
						<th>Collection Men Image</th>
						<th>Catalogue Men Image</th>
						<th>Collection Women Image</th>
						<th>Catalogue Women Image</th>
						<th>Collection Heading Text</th>
						<th>Collection Text</th>
						<th>Collection Button Image</th>
						<th>Catalogue Text</th>
						<th>Catalogue Heading Text</th>
						<th>Catalogue Button Image</th>
					</tr>
                   <!--?php if (count($tshirts_male) > 0 ){ ?-->  
                    <?php foreach($roadsterSelectionList as $info) : ?>
                        <tr>
							<td><?php echo isset($info->topBarImage ) ? substr($info->topBarImage,10) : "NA";?></td>
                            <td><?php echo isset($info->BackbuttonImage ) ? substr($info->BackbuttonImage,10)  : "NA";?></td>
							<td><?php echo isset($info->collectionMenImage ) ? substr($info->collectionMenImage,10) : "NA";?></td>
                            <td><?php echo isset($info->catalogueMenImage ) ? substr($info->catalogueMenImage,10) : "NA";?></td>
							<td><?php echo isset($info->collectionWomenImage ) ? substr($info->collectionWomenImage,10) : "NA";?></td>
							<td><?php echo isset($info->catalogueWomenImage ) ? substr($info->catalogueWomenImage,10) : "NA";?></td>
							<td><?php echo isset($info->collectionHeadingTxt) ? $info->collectionHeadingTxt : "NA";?></td>
							<td><?php echo isset($info->collectionTxt) ? $info->collectionTxt : "NA";?></td>
                            <td><?php echo isset($info->collectionBtnImage ) ? substr($info->collectionBtnImage,10)  : "NA";?></td>
                            <td><?php echo isset($info->catalogueHeadingTxt ) ? $info->catalogueHeadingTxt  : "NA";?></td>
							<td><?php echo isset($info->catalogueTxt) ? $info->catalogueTxt : "NA";?></td>
							<td><?php echo isset($info->catalogueBtnImage ) ? substr($info->catalogueBtnImage,10)  : "NA";?></td>
                            <td><a href="<?php echo base_url("admin/roadsterSelection/edit/".$info->id); ?>"><small class="label bg-red">EDIT</small></a></td>
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