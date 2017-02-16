<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product Description
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	<ul class="nav nav-tabs">
			<li class="<?php echo ($type == "catalouge") ? "active" : ""; ?>"><a href="catalouge">Catalouge</a></li>
			<li class="<?php echo ($type == "outlander") ? "active" : ""; ?>"><a href="outlander">Outlander</a></li>
			<li class="<?php echo ($type == "motogp") ? "active" : ""; ?>"><a href="motogp">MotoGP</a></li>
			<li class="<?php echo ($type == "roadster") ? "active" : ""; ?>"><a href="roadster">Roadster</a></li>
		</ul>
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Configure Product Description</h3>
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
                      <th>Top-Bar Image</th>
                      <th>Back Button Image</th> 
					  <th>Home Button Image</th> 
					  <th>Myntra Logo Image</th>
                      <th>Get Product Button Image</th>
                      <th>Related Product Heading Text</th>
					  <th>Description Heading Text</th>  
					  <th>Color Selection Heading Text</th> 
					  <th>Size Selection Heading Text</th> 
					  <th>Not Sure Heading Text</th>
					  <th>Close Button Image</th> 
					  <th>Size Popup Heading Text</th> 
					  <th>Size Popup First Tab Text</th>
					  <th>Product URL</th> 
					  <th>Size URL</th> 
					  <th>Next Button Image</th> 
					  <th>Previous Button Image</th>
                    </tr>
                   <!--?php if (count($tshirts_male) > 0 ){ ?-->  
                    <?php foreach($productdesclist as $info) : ?>
                        <tr>
                            <td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."productdesc/".$info->type."/".$info->topBarImage; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."productdesc/".$info->type."/".$info->BackbuttonImage; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."productdesc/".$info->type."/".$info->homebuttonImage; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."productdesc/".$info->type."/".$info->myntralogoImage; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."productdesc/".$info->type."/".$info->getProdBtn; ?>" /></td>
							<?php $str= $info->relatedProdHeadingTxt;$relatedProdHeadingTxt = strip_tags($str,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $relatedProdHeadingTxt;?></td>
							<?php $str1= $info->descTxtHeading;$descTxtHeading = strip_tags($str1,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $descTxtHeading;?></td>
							<?php $str2= $info->colorSelectionHeading;$colorSelectionHeading = strip_tags($str2,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $colorSelectionHeading;?></td>
							<?php $str3= $info->sizeSelectionHeading;$sizeSelectionHeading = strip_tags($str3,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $sizeSelectionHeading;?></td>
							<?php $str4= $info->notsureHeading;$notsureHeading = strip_tags($str4,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $notsureHeading;?></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."productdesc/".$info->type."/".$info->closeImageButton; ?>" /></td>
							<?php $str5= $info->sizePopupHeadingTxt;$sizePopupHeadingTxt = strip_tags($str5,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $sizePopupHeadingTxt;?></td>
							<?php $str6= $info->sizePopupFirstTabTxt;$sizePopupFirstTabTxt = strip_tags($str6,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $sizePopupFirstTabTxt;?></td>
							<?php $str7= $info->prodUrl;$prodUrl = strip_tags($str7,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $prodUrl;?></td>
							<?php $str8= $info->sizeUrl;$sizeUrl = strip_tags($str8,0);?>
							<td style="font-color:#000;margin-top: 15px;"><?php echo $sizeUrl;?></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."productdesc/".$info->type."/".$info->nextbuttonImage; ?>" /></td>
							<td><img style="background-color:grey;width:75px;" src="<?php echo ASSET_PATH."productdesc/".$info->type."/".$info->backbtnImage; ?>" /></td>
                            <td><a href="<?php echo base_url("admin/productdesc/edit/".$info->id); ?>"><small class="label bg-red">edit</small></a></td>
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