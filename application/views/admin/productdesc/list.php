<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Collection Video<small><a href="<?php echo base_url("admin/collectionvideo/add"); ?>">collectionvideo</a></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Collection Video</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Configure Collection Video</h3>
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
                           <td><?php echo isset($info->topBarImage) ? substr($info->topBarImage,10) : "NA";?></td>
                            <td><?php echo isset($info->BackbuttonImage ) ? substr($info->BackbuttonImage,10)  : "NA";?></td>
							<td><?php echo isset($info->homebuttonImage) ? substr($info->homebuttonImage,10) : "NA";?></td>
                            <td><?php echo isset($info->myntralogoImage ) ? substr($info->myntralogoImage,10)  : "NA";?></td>
							<td><?php echo isset($info->getProdBtn ) ? substr($info->getProdBtn,10)  : "NA";?></td>
							<td><?php echo isset($info->relatedProdHeadingTxt ) ? $info->relatedProdHeadingTxt  : "NA";?></td>
							<td><?php echo isset($info->descTxtHeading ) ? $info->descTxtHeading  : "NA";?></td>
							<td><?php echo isset($info->colorSelectionHeading ) ? $info->colorSelectionHeading  : "NA";?></td>
							<td><?php echo isset($info->sizeSelectionHeading ) ? $info->sizeSelectionHeading  : "NA";?></td>
							<td><?php echo isset($info->notsureHeading ) ? $info->notsureHeading  : "NA";?></td>
							<td><?php echo isset($info->closeImageButton ) ? substr($info->closeImageButton,10)  : "NA";?></td>
							<td><?php echo isset($info->sizePopupHeadingTxt ) ? $info->sizePopupHeadingTxt  : "NA";?></td>
							<td><?php echo isset($info->sizePopupFirstTabTxt ) ? $info->sizePopupFirstTabTxt  : "NA";?></td>
							<td><?php echo isset($info->prodUrl ) ? $info->prodUrl  : "NA";?></td>
							<td><?php echo isset($info->sizeUrl ) ? $info->sizeUrl  : "NA";?></td>
							<td><?php echo isset($info->nextbuttonImage ) ? substr($info->nextbuttonImage,10)  : "NA";?></td>
							<td><?php echo isset($info->backbtnImage ) ? substr($info->backbtnImage,10)  : "NA";?></td>
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