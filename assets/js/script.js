$(function() {

	$('.testimonials_sortable').sortable({
        axis: 'y',
        opacity: 0.7,
        handle: 'span',
        update: function(event, ui) {
            var list_sortable = $(this).sortable('toArray').toString();
			var testimonial_id = $("#testimonial_id").val();
            //alert(list_sortable);
            //return false;
            $.ajax({
                url: base_url+"destination/reorder_images",
                type: 'POST',
                data: {list_order:list_sortable,testimonial_id:testimonial_id},
                success: function(data) {
					//window.location.href = 'all_videos_testimonials.php?id='+testimonial_id;
					return false;
                }
            });
        }
    }); // fin sortable
	
	
	
});
/*  */