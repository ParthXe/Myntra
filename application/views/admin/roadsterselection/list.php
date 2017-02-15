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
	<ul class="nav nav-tabs">
			<li class="<?php echo ($type == "catalouge") ? "active" : ""; ?>"><a href="catalouge">Catalouge</a></li>
			<li class="<?php echo ($type == "outlander") ? "active" : ""; ?>"><a href="outlander">Outlander</a></li>
			<li class="<?php echo ($type == "motogp") ? "active" : ""; ?>"><a href="motogp">MotoGP</a></li>
			<li class="<?php echo ($type == "roadster") ? "active" : ""; ?>"><a href="roadster">Roadster</a></li>
		</ul>
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
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."roadsterselection/".$info->type."/".$info->topBarImage; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."roadsterselection/".$info->type."/".$info->BackbuttonImage; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."roadsterselection/".$info->type."/".$info->collectionMenImage; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."roadsterselection/".$info->type."/".$info->catalogueMenImage; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."roadsterselection/".$info->type."/".$info->collectionWomenImage; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."roadsterselection/".$info->type."/".$info->catalogueWomenImage; ?>" /></td>
							<?php $str= $info->collectionHeadingTxt;$collectionHeadingTxt = strip_tags($str,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $collectionHeadingTxt;?></td>
							<?php $str1= $info->collectionTxt;$collectionTxt = strip_tags($str1,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $collectionTxt;?></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."roadsterselection/".$info->type."/".$info->collectionBtnImage; ?>" /></td>
							<?php $str2= $info->catalogueHeadingTxt;$catalogueHeadingTxt = strip_tags($str2,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $catalogueHeadingTxt;?></td>
							<?php $str3= $info->catalogueTxt;$catalogueTxt = strip_tags($str3,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $catalogueTxt;?></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."roadsterselection/".$info->type."/".$info->catalogueBtnImage; ?>" /></td>
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