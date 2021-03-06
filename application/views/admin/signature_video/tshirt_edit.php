<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<script type="text/javascript">
 function imageRemove(vid,img,id,action)
{
    $.ajax({
         type: "POST",
         url: base_url+"signature/delete_video",
        data: "video=" + vid+"&image="+ img+"&id="+id+"&action="+action,
         success: function(data){
         		  alert(data);
                  location.reload();
    }
});
}
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Signature Tshirt Video Edit
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

                <!-- /.box-header -->
                <div class="box-body">
					<?php if (isset($error)) : ?>
					  <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
					<?php endif ; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('', 'class="form-user-edit" role="form" autocomplete="off"  enctype="multipart/form-data"') ; ?>
					<?php  $path = base_url()."myntra/section_products/pro_tshirts/signature_video/".$signature['video']; ?>
          <div class="form-group">
              <label for="userEditFname">Denim Signature Video Thumbnail</label>
              <input type="file" class="form-control" name="tshirt_thumbnail" value="" required>
              <?php if($signature_images = $signature['thumbnail']){
               echo '<img src="'.base_url().'myntra/section_products/pro_tshirts/signature_video/'.$signature_images.'" width="150px"><a href="#" onclick="imageRemove('."'".$signature['video']."'".','."'".$signature['thumbnail']."'".','."'".$signature['id']."'".','."'t-shirt'".')"><i class="fa fa-times" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;'; 
                }
                else
                {

                }
               ?>
           </div>
						<div class="form-group">
							<label for="userEditMobile">Denim Signature Video</label>
							<input type="file" class="form-control" name="tshirt_signature_video" value="" >
							<?php if(!empty($signature['video'])) {?> 
							<video width="200">
                            <source src="<?php echo isset($path) ? $path : 'NA';?>" type="video/mp4">
                            </video> <?php echo '<a href="#" onclick="imageRemove('."'".$signature['video']."'".','."'".$signature['thumbnail']."'".','."'".$signature['id']."'".','."'t-shirt'".')"><i class="fa fa-times" aria-hidden="true"></i></a>' ?>
                            <?php } else { ?>
                            No videos
                           <?php } ?>
						</div>			
						<div class="form-group">
		                	<label>Status</label>
		                    <div class="checkbox">
		                      <label class="no-padding">
		                        <input type="checkbox" class="minimal themed" name="active" <?php echo (isset($signature['active']) && $signature['active'] == 1)  ? "checked='checked'" : "" ; ?>> Active
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
