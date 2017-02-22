<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->

<script src="<?php echo site_url('assets/js/jquery-1.10.2.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/jquery-ui-1.10.4.custom.min.js'); ?>"></script>
<script>
$(function() {

    $('.testimonials_sortable').sortable({
        axis: 'y',
        opacity: 0.7,
        handle: 'span',
        update: function(event, ui) {
            var list_sortable = $(this).sortable('toArray').toString();
            var testimonial_id = $("#testimonial_id").val();
            // alert(list_sortable);
            // return false;
            $.ajax({
                url: base_url+"denim/reorder_trends",
                type: 'POST',
                data: {list_order:list_sortable,testimonial_id:testimonial_id},
                success: function(data) {
                    alert(data);
                    //window.location.href = 'all_videos_testimonials.php?id='+testimonial_id;
                    return false;
                }
            });
        }
    }); // fin sortable
    
    
    
});
</script>
 <link rel="stylesheet" href="<?php echo site_url('assets/css/core.css'); ?>">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Change details for Denim <?php echo $denim_male['champion_products_title'] ;?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if (isset($error)) : ?>
                      <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
                    <?php endif ; ?>
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('', 'class="form-user-edit" role="form" autocomplete="off" enctype="multipart/form-data"') ; ?>
                        <input type = "hidden" id="testimonial_id" name = "testimonial_id" value ="<?php echo $denim_male['id'];?>">
                        <div class="form-group">
                            <label for="userEditMobile">Trends Images</label>
                            <ul class="testimonials_sortable">
                            <?php if($images = $denim_male['trends_images']){
                                $image = explode(",", $images);
                                for($ii=0;$ii<count($image);$ii++) {
                                echo '<li id='.$ii.'><span></span><img src="'.base_url().'myntra/section_products/pro_denims/trends_images/'.$image[$ii].'" width="150px"></li>';
                                }

                            }
                            else
                            {

                            }
                            ?>
                        </ul>
                        </div>  
                        <br>
                        <a class="btn btn-primary" href="<?php echo base_url("admin/denim/male_edit/".$denim_male['id']); ?>">Back</a>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- Moment Js -->

<!-- Theme JS file -->
<script src="<?php echo site_url('assets/js/app.min.js'); ?>"></script>
<!-- TokenInput JS file -->

