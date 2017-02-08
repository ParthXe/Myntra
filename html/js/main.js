

//filter stiky

$(document).ready(function() {

//filter sticky start
$('.filterwrap').theiaStickySidebar({
		additionalMarginTop: 100,
		//additionalMarginBottom: 150
});
//filter sticky end

// mobile menu start
	var $bdy = $('body');
	//
	$('.hamburger-menu').click(function(event){
		if($bdy.hasClass('menu-open')) {
		$('.hamburger').removeClass('open');	
		$('body').removeClass('menu-open');
			setTimeout(function(){
				$('.menu-container .inner-container').fadeOut(); 
				$('.menu-container').animate({
					//width: "0%", 
					 opacity:1,
					 right:"-100%",
				}, 500);	
			}, 500);
		} else {
			$('.hamburger').addClass('open');
			$('body').addClass('menu-open');
			 $(this).addClass('menu-open-sec');
			 $('.menu-container').animate({
					//width: "100%", 
					 opacity:1,
					 right:0,
				}, 500);
			setTimeout(function(){
				$('.menu-container .inner-container').fadeIn(); 
			}, 800);
		}
	});
// Menu open end


//navbar sticky 
 	var menu = $('.mainnavbar');
    var origOffsetY = menu.offset().top;
	
	var filtermenu = $('.filterview');
   // var forigOffsetY = filtermenu.offset().top;
	
	var mobilebar = $('#topNavmain');
    var mobilebarOffsetY = mobilebar.offset().top;
 
function scroll() {

//main menu stiky
        if ($(window).scrollTop() >= origOffsetY) {
            $('.mainnavbar').addClass('sticky');
			$('.top-nav-links').find('.cartmenu').addClass('cartstiky');
            $('.contentwrap').addClass('menu-padding');
        } else {
            $('.mainnavbar').removeClass('sticky');
			$('.top-nav-links').find('.cartmenu').removeClass('cartstiky');
            $('.contentwrap').removeClass('menu-padding');
        }

//filter stiky
		/*if ($(window).scrollTop() >= forigOffsetY) {
            $('.filterview').addClass('sticky');
        } else {
            $('.filterview').removeClass('sticky');
        }*/

//mobile stiky
		if ($(window).scrollTop() >= mobilebarOffsetY) {
            $('#topNavmain').addClass('sticky');
        } else {
            $('#topNavmain').removeClass('sticky');
        }

}

 document.onscroll = scroll;
//navbar sticky end

// 
$('.addaddress-btn').click(function(){
	$('#addressSet').slideToggle();
});



$(window).on("resize", function () {
var windowwidth = $(window).width();
if ($(window).width() >= 992) {
//cart sticky
$('#orderSummary').theiaStickySidebar({
	additionalMarginTop: 50,
});
 
}
}).resize(); 	


});
//document.ready end

//hamburger animation mobile cross
$('#menu-toggle').click(function(){
  $(this).toggleClass('open');
})

//Mobile Navigation
	$("#btnShow").click(function() {
		$('#dialog').show();
		$('body').addClass('productlistingmbl');
		$('body').css('overflow', 'hidden');	
		//$('#dialog').height(hgtpop);
	});

	$("#btnbackfilter").click(function() {
		$('body').css('overflow', 'auto');
		$('body').removeClass('productlistingmbl');
		$('#dialog').hide();
	});
//Mobile Navigation end

//filter tooltip
$('.tooltiptop').tooltip()

// Owl carousel homepageslider on home page
$('.homepageslider .owl-carousel').owlCarousel({
	margin:0,
	slideSpeed : 300,
	navigation : false, // Show next and prev buttons
	//Pagination
	pagination : true,
	paginationSpeed : 400,
	singleItem:true
});


// Owl carousel ProductSlider on home page
var owlProductslider = $(".ProductSlider .owl-carousel");
owlProductslider.owlCarousel({
    	 navigation : true, // Show next and prev buttons
         pagination : false,
      itemsCustom : [
        [0, 1],
        [450, 2],
        [650, 3],
        [900, 4],
		[1100, 4],
 
      ],
  });
 
 

// Scroll to top page right button
$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('.scrollup').fadeIn();
			} else {
				$('.scrollup').fadeOut();
			}
			
			if ($(this).scrollTop() > 100) {
				$('.scrollup').fadeIn();
			} else {
				$('.scrollup').fadeOut();
			}
});

$('.scrollup').click(function () {
			$("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
});
	
// top sign in  popup hover effect 
$('.top-nav-links   li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

// Slimscroll for filter left
var filterheight = $('.filter-sidebar .filteroption .vscroll, .filter-selected ul:first').each(function() {
 
if($(this).height() >= 150){
$(this).slimScroll({
    height: '150px',
	alwaysVisible: true
});
}
});

//filter left heading filter option click like sizes, brand
$('.tname').on('click', function(){
	$(this).toggleClass('closed').siblings('.filteroption').slideToggle(300);
	var filteroptiion = 250;
	 var filterwrap = $('.theiaStickySidebar').offset();
	var filterwrapt = filterwrap.top;
	//$('.theiaStickySidebar').css('top', filteroptiion);
  // alert(filterwrapt);
});

// filter left categories heading options
$('.categoriesfilter .subdropdown').on('click', function(){
/*	if($(this).parent('li').hasClass('closed')){
			$(this).next('ul:first').slideDown('fast');
			$(this).parent('li').removeClass('closed');
	}else {
		$(this).parent('li').find('.subdropdown').each(function( index ) {
			$(this).next('ul:first').slideUp('fast');
  			$(this).parent('li').addClass('closed');
		});
	}*/
});


// filter list grid and grid add active class
$('.viewsec a').on('click', function(){
	$(this).parents('.viewsec').find('.active').removeClass('active');
	$(this).addClass('active');		
});

	
// Filter close selected option of filter
$('.selClose').on('click', function(){

});
//if( ){
//	$(this).fadeOut(500, function () {
//		$(this).parent('li').remove();
//    });
//}


 

	 
// input field js classec.js call
(function() {
	// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
	if (!String.prototype.trim) {
		(function() {
			// Make sure we trim BOM and NBSP
			var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
			String.prototype.trim = function() {
				return this.replace(rtrim, '');
			};
		})();
	}

	[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
		// in case the input is already filled..
		if( inputEl.value.trim() !== '' ) {
			classie.add( inputEl.parentNode, 'input--filled' );
		}

		// events:
		inputEl.addEventListener( 'focus', onInputFocus );
		inputEl.addEventListener( 'blur', onInputBlur );
	} );

	function onInputFocus( ev ) {
		classie.add( ev.target.parentNode, 'input--filled' );
	}

	function onInputBlur( ev ) {
		if( ev.target.value.trim() === '' ) {
			classie.remove( ev.target.parentNode, 'input--filled' );
		}
	}
})();
		
	



$(".forgot-password").click(function(){
	$(".loginf").hide()
    $(".retrieve-password").fadeIn()
});

//signup start
	$('.signinsectionbtn').click(function() { 
			$('.registerwrap, .retrieve-password').hide();
			$('.loginf').fadeIn();
	});	

	$('.signupsectionbtn').click(function() { 
			$('.loginf, .retrieve-password').hide();
			$('.registerwrap').fadeIn();
	});

	$('.forgot-password').click(function() { 
		 	$('.loginf, .registerwrap').hide();
			$('.retrieve-password').fadeIn();
	});



 // filter left categories heading options
$('.vertical-navbar .subdropdown').on('click', function(){
	if($(this).parent('li').hasClass('closed')){
		$(this).next('ul:first').slideDown('fast');
		$(this).parent('li').removeClass('closed');
	}else {
		$(this).next('ul:first').slideUp('fast');
		$(this).parent('li').addClass('closed');
	}
});
 


//Product details slider start
//Window.resize Event
//$(window).on("resize", function () {
//	 zoomprodctdetail();
//}).resize();

 $( window ).on( "resize", function() {
        var windowWidth = $( window ).width(), // get window width
            imgWidth = $( "#product-zoom").width(); // get image width
        //Init elevateZoom
        zoomprodctdetail();
        //display status
       // $( "#status" ).html("Status: Window resized!.");
        //display image and window width
       // $( "#imgWidth" ).html("Image width: " + imgWidth + "px" + "<br />" + "Window width: " + windowWidth + "px");
    });

zoomprodctdetail();

function zoomprodctdetail() {
	        $("#product-zoom").ezPlus({
            responsive : true,
			gallery: 'smallGallery',
			galleryActiveClass: "active",
            scrollZoom : false,
            showLens: true,
			borderColour: '#ccc',
  			 borderSize: 1,

            tint: true,
            tintColour: '#fff',
            tintOpacity: 0.4,
            respond: [
                {
                    range: '600-799',
                  //  tintColour: '#ff0000',
                    zoomWindowHeight: 100,
                    zoomWindowWidth: 100
                },
                {
                    range: '800-1199',
                //    tintColour: '#ffff00',
                    zoomWindowHeight: 200,
                     zoomWindowWidth: 200
                },
                {
                    range: '100-599',
					zoomType: 'inner',
                  //  enabled: false,
                  //  showLens: false
                }
            ]
        });
	
                $("#product-zoom").bind("click", function (e) {
                    var ez = $('#product-zoom').data('ezPlus');
                    ez.closeAll(); 
                   $.fancybox(ez.getGalleryList());
				   $('body').addClass('fancyboxbody');
                    return false;
                });
//	var hgtpop = $(window).height();
//	var windowwidth = $(window).width();
//	
//	  if (windowwidth >= 768) {
//				$("#product-zoom").ezPlus({
//                    gallery: 'smallGallery',
//                    cursor: 'pointer',
//                    galleryActiveClass: "active",
//                    imageCrossfade: true,
//					// zoomType: 'inner',
//					 responsive:'true',
//					 easing:'true',
//					 borderColour: '#ccc',
//        			 borderSize: 1,
//                //    loadingIcon: "images/spinner.gif"
//                });
//
//                $("#product-zoom").bind("click", function (e) {
//                    var ez = $('#product-zoom').data('ezPlus');
//                    ez.closeAll(); 
//                   $.fancybox(ez.getGalleryList());
//                    return false;
//                });
//	  }
//  	else {}
}
$('.fancybox-overlay').on('click', function(){
	alert(0);
	$('body').removeClass('fancyboxbody');
});
$(".fancybox-overlay").trigger('click');

//Product details slider end


 //my account tab profile details 
$('.acordian-t').on('click', function(){
	if($(this).parent('.acordian-wrap').hasClass('closed')){
		$(this).next('.acordian-b').slideDown();
		$(this).parents('.acordian-wrap').removeClass('closed');
	}else {
		$(this).parents('.acordian-wrap').addClass('closed');
		$(this).next('.acordian-b').slideUp('fast');

	} 
});

//
