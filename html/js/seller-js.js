
$(window).on("resize", function () {
var windowwidth = $(window).width();
if ($(window).width() >= 768) {
	 
 
    var $el, leftPos, newWidth,
        $mainNav = $("#example-one");
    
    $mainNav.append("<li id='magic-line'></li>");
    var $magicLine = $("#magic-line");
    
    $magicLine
        .width($(".current_page_item").width())
        .css("left", $(".current_page_item a").position().left)
        .data("origLeft", $magicLine.position().left)
        .data("origWidth", $magicLine.width());
        
    $("#example-one li a").hover(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.parent().width();
        $magicLine.stop().animate({
            left: leftPos,
            width: newWidth
        });
    }, function() {
        $magicLine.stop().animate({
            left: $magicLine.data("origLeft"),
            width: $magicLine.data("origWidth")
        });    
     
});

} 
 
}).resize();


// Owl carousel homepageslider on home page
$('.sellerbanner .owl-carousel').owlCarousel({
	margin:0,
	slideSpeed : 300,
	navigation : false, // Show next and prev buttons
	//Pagination
	pagination : true,
	paginationSpeed : 400,
	singleItem:true,
	autoplay:true,
	autoplayTimeout:1000,
	autoplayHoverPause:true
});