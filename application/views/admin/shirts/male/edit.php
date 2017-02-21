<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<script type="text/javascript">
 function imageRemove(img,id,action)
{
    $.ajax({
         type: "POST",
         url: base_url+"shirts/remove_maleimage",
        data: "image=" + img+"&id="+id+"&action="+action,
         success: function(data){
         		  alert('delete');
                  location.reload();
    }
});
}
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Shirt Male Edit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Users</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Change details for Shirt male <?php echo $shirt_male['champion_products_title'] ;?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('', 'class="form-user-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
<!-- 						<div class="form-group">
							<label for="userEditName">Anatomy</label>
							<input type="file" class="form-control" name="userFiles[]" value="" required multiple>
						</div> -->
						<div class="form-group">
							<label for="userEditPass">Champions Products Title</label>
							<input type="text" class="form-control" id="championsProductsTitle" name="champions_products_title" placeholder="Champions Products Title" autocomplete="off" value="<?php echo isset($shirt_male['champion_products_title']) ? $shirt_male['champion_products_title'] : "NA"; ?>" required>
						</div>
						<div class="form-group">
							<label for="userEditMail">Champions Products Description</label>
							<textarea class="form-control" id="destinationDesc" name="champions_products_desc" placeholder="Champions Products Description" required><?php echo isset($shirt_male['champion_products_desc']) ? $shirt_male['champion_products_desc'] : "NA"; ?></textarea>
						</div>
						<div class="form-group">
							<label for="userEditFname">Champions Products Images</label>
							<input type="file" class="form-control" name="championsProductsImages[]" value="" multiple>
							<?php if($champion_images = $shirt_male['champion_products_images']){
								$champion_image = explode(",", $champion_images);
								foreach ($champion_image as $champion_img) {
								echo '<img src="'.base_url().'myntra/section_products/pro_shirts/champion_product_images/'.$champion_img.'" width="150px"><a href="#" onclick="imageRemove('."'".$champion_img."'".','."'".$shirt_male['id']."'".','."'champion-image'".')"><i class="fa fa-times" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;';
								}
							}
							else
							{

							}
							?>
						</div>
						<div class="form-group">
							<label for="userEditLname">Trends Launch Date</label>
							<input type="text" class="form-control" id="HowFar" name="trends_launch_date" placeholder="Trends Launch Date" value="<?php echo isset($shirt_male['trends_launch_date']) ? $shirt_male['trends_launch_date'] : "NA"; ?>" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Trends Title</label>
							<input type="text" class="form-control" id="BestTimeVisit" name="trends_title" placeholder="Trends Title" value="<?php echo isset($shirt_male['trends_title']) ? $shirt_male['trends_title'] : "NA"; ?>" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Trends images</label>
							<input type="file" class="form-control" name="trendsImages[]" value="" multiple>
							<?php if($trends_images = $shirt_male['trends_images']){
								$trends_image = explode(",", $trends_images);
								foreach ($trends_image as $trends_img) {
								echo '<img src="'.base_url().'myntra/section_products/pro_shirts/trends_images/'.$trends_img.'" width="150px"><a href="#" onclick="imageRemove('."'".$trends_img."'".','."'".$shirt_male['id']."'".','."'trends_img'".')"><i class="fa fa-times" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;';
								}
							}
							else
							{

							}
							?>
						</div>			
						<div class="form-group">
							<label for="userEditMobile">Process Video Thumbnail</label>
							<input type="file" class="form-control" name="vintageImage[]" value="" multiple>
							<?php if($vintage_images = $shirt_male['vintage_images']){
								$vintage_image = explode(",", $vintage_images);
								foreach ($vintage_image as $vintage_img) {
								echo '<img src="'.base_url().'myntra/section_products/pro_shirts/process_video_and_tumbnails/'.$vintage_img.'" width="150px"><a href="#" onclick="imageRemove('."'".$vintage_img."'".','."'".$shirt_male['id']."'".','."'vintage_img'".')"><i class="fa fa-times" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;';
								}
							}
							else
							{

							}
							?>
						</div>	
						<div class="form-group">
							<label for="userEditMobile">Process Video</label>
							<input type="file" class="form-control" name="vintageVideo" value="">
							<?php
							$path = base_url()."upload/shirts/male/vintage_video/".$shirt_male['vintage_video'];  if(!empty($shirt_male['vintage_video'])) {?> 
							<video width="200">
                            <source src="<?php echo isset($path) ? $path : 'NA';?>" type="video/mp4">
                            </video> <?php echo '<a href="#" onclick="imageRemove('."'".$shirt_male['vintage_video']."'".','."'".$shirt_male['id']."'".','."'vintage_video'".')"><i class="fa fa-times" aria-hidden="true"></i></a>' ?>
                            <?php } else { ?>
                            No videos
                           <?php } ?>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Process Title</label>
							<input type="text" class="form-control" id="vintageTitle" name="vintage_title" placeholder="Vintage Title" value="<?php echo isset($shirt_male['vintage_title']) ? $shirt_male['vintage_title'] : "NA"; ?>" required>
						</div>
						<div class="form-group">
							<label for="userEditMobile">Process Description</label>
							<textarea class="form-control" id="vintageDescription" name="vintage_description" placeholder="Vintage Description" required><?php echo isset($shirt_male['vintage_desc']) ? $shirt_male['vintage_desc'] : "NA"; ?></textarea>
						</div>				

		                <div class="form-group">
		                	<label>Status</label>
		                    <div class="checkbox">
		                      <label class="no-padding">
		                        <input type="checkbox" class="minimal themed" name="active" <?php echo (isset($shirt_male['active']) && $shirt_male['active'] == 1)  ? "checked='checked'" : "" ; ?>> Active
		                      </label>
		                    </div>
		                </div>
												
						<div class="row">
							<!-- /.col -->
							<div class="col-xs-3">
						  		<button type="submit" class="btn btn-primary" type="submit">Submit</button>
							</div>
							<!-- /.col -->
						</div>
					<?php echo form_close() ; ?> 
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
