//filter stiky

$(document).ready(function() {
	$(".loader").hide();
	// $('#form input[name="brand"]').on('change', function() {

	// 	// alert($(this).val());
	// 	alert(getParamStrings());
		
	// 	// $("#minSellPrice").val($(this).attr('data-min-val'));
	// 	// $("#maxSellPrice").val($(this).attr('data-max-val'));
	// 	// $( "#form" ).submit();

	// });
	$('#sorting').change(function() {
		$( "#sorting" ).submit();
	});

	$('.payment_method').click(function(){
		alert($(this).val());
	})

	//Filter functions
	$('#form input[type="checkbox"]').on('change', function() {


		var name = $(this).attr("name");
		if(name == "sell_price_temp"){

			//get all url parameters
			params = getParamStrings();

			if($('.'+name+':checked').length) {
	          	var minVals = '';
	          	var maxVals = '';
	        	$('.'+name+':checked').each(function() {
	        	    minVals += $(this).attr('data-min-val') + ",";
	        	    maxVals += $(this).attr('data-max-val') + ",";
		        });
	        	minVals =  minVals.slice(0,-1);
	        	maxVals =  maxVals.slice(0,-1);

	        	fMinVal = arrayMin(minVals.split(","));
	        	fMaxVal = arrayMax(maxVals.split(","));

	        	console.log(fMinVal);
	        	console.log(fMaxVal);
	       	}	       	
	        
		} else {
			//get all url parameters
			params = getParamStrings();
		        
			if($('.'+name+':checked').length) {
	          	var chkId = '';
	        	$('.'+name+':checked').each(function() {
	        	    chkId += $(this).val() + ",";
		        });
	        	chkId =  chkId.slice(0,-1);
	        	//get params
	        	if(typeof params[name] == "undefined"){
	        		params.push(name);
	        	}
		        params[name] = chkId;//update if exist or add
	        }
	        else {
	          	//no brand is set or all brands are unchecked
	          	if(typeof params[name] !== "undefined"){
	          		delete params[name];
	          	}
	        }
	        //form url and redirect
	        paramString = "";
	        $.each(params,function(k,v){
	        	if(typeof params[v] !== "undefined"){
	        		paramString = paramString + v + "=" + params[v] + "&";
	        	}
	    	});
	    	if(paramString !== ""){
	    		paramString = "?" + paramString.slice(0,-1);
	    	}
	        curUrl = document.location.origin + document.location.pathname;
	        window.location = curUrl + paramString;			
		}
	});


	//Filter remove functions
	$('.filter-remove').on('click', function() {
		var dataKey = $(this).attr('data-filter-key');
		var dataVal = $(this).attr('data-filter-value');

		removeParam(dataKey, dataVal, window.location.href); 
	});


	// Attach a submit handler to the form
	$( "#edit-address" ).submit(function( event ) {
	 
		// Stop form from submitting normally
		event.preventDefault();
	 
		// Get some values from elements on the page:
		var $form = $( this ),
		
	    url = $form.attr( "action" );
	    
		if($form.find( "input[name='address_id']" ).val() == ''){
			var postData = {
					ua_uid : usr_id,
					ua_name : $form.find( "input[name='address_name']" ).val(),
					ua_address_1 : $form.find( "input[name='address_line_1']" ).val(),
					ua_address_2 : $form.find( "input[name='address_line_2']" ).val(),
					ua_city : $form.find( "input[name='address_city']" ).val(),
					ua_state : $form.find( "select[name='address_state']" ).val(),
					ua_pincode : $form.find( "input[name='address_zipcode']" ).val(),
					ua_mobile : $form.find( "input[name='address_mobile']" ).val(),
				}
		} else {
			var postData = {
				ua_id:  $form.find( "input[name='address_id']" ).val(),
				ua_uid : usr_id,
				ua_name : $form.find( "input[name='address_name']" ).val(),
				ua_address_1 : $form.find( "input[name='address_line_1']" ).val(),
				ua_address_2 : $form.find( "input[name='address_line_2']" ).val(),
				ua_city : $form.find( "input[name='address_city']" ).val(),
				ua_state : $form.find( "select[name='address_state']" ).val(),
				ua_pincode : $form.find( "input[name='address_zipcode']" ).val(),
				ua_mobile : $form.find( "input[name='address_mobile']" ).val(),
			}
		}

		// Send the data using post
		var posting = $.post( url, { data: postData } );
	 
		// Put the results in a div
		posting.done(function( data ) {

			data = jQuery.parseJSON(data);

			location.reload();

			// console.log(data);
		});
	});

	// Attach a submit handler to the form
	$( "#edit-user-details" ).submit(function( event ) {
	 
		// Stop form from submitting normally
		event.preventDefault();	
	 
		// Get some values from elements on the page:
		var $form = $( this ),
		
	    url = $form.attr( "action" );
	    
		var postData = {
			uid : usr_id,
			name: $form.find( "input[name='mail']" ).val(),
			fname : $form.find( "input[name='first_name']" ).val(),
			lname : $form.find( "input[name='last_name']" ).val(),
			mail : $form.find( "input[name='mail']" ).val(),
			mobile : $form.find( "input[name='mobile']" ).val(),		
			existing_mail : $form.find( "input[name='existing_email']" ).val(),		
		}

		// Send the data using post
		var posting = $.post( url, { data: postData } );
	 
		// Put the results in a div
		posting.done(function( data ) {

			data = jQuery.parseJSON(data);

			if(data.status != 1){
				alert(data.msg);
			} else {
				location.reload();
			}
			
		});
	});	

function removeParam(key, value, sourceURL) {
	    var rtn = sourceURL.split("?")[0],
        param,
        params_arr = [],
        queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
    	if (queryString !== "") {
        params_arr = queryString.split("&");
        key = encodeURIComponent(key);
        for (var i = params_arr.length - 1; i >= 0; i -= 1) {
            param = params_arr[i].split("=")[0];
            param2 = params_arr[i].split("=")[1];
        	// alert(param+ " " + key+ " " + param2);
            if (param === key) {
                params_arr.splice(i, 1);

	        	temp = param2.split(',');
	        	fVals = removeA(temp, value);
            }
        }
        rtn = rtn + "?" + params_arr.join("&");
        if(fVals.length > 0) {
        	fRtn = rtn +"&"+key+"="+fVals;
        } else {
        	fRtn = rtn;
        }

    }
    window.location.href = fRtn;
}


function removeA(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax= arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}


function getParamStrings(){
	//something is set
    var vars = [], hash;
    if(window.location.href.indexOf('?') !== -1){
	    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	    for(var i = 0; i < hashes.length; i++)
	    {
	      hash = hashes[i].split('=');
	      vars.push(hash[0]);
	      vars[hash[0]] = hash[1];
	    }
	}
	return vars;
}

//cart remove button
$( '#popCart' ).on( 'click', '.removeitem', function () {
	var postData = {
		pvar_id:  parseInt($(this).attr("data-pvar-id")),
	}
	var proVarId = parseInt($(this).attr("data-pvar-id"));
	// Send the data using post
	var posting = $.post( base_url+'cart/remove', { data: postData } );

	// // // Put the results in a divcl
	posting.done(function( data ) {
		var data = jQuery.parseJSON(data);
		console.log(data);
		if(data.status == 1){
			$('#cart_pop_row_'+proVarId).remove();
			$('#cart_row_'+proVarId).remove();
			$('.cartmenu').load(document.URL +  ' .cartmenu');
			$('.cart-summery').load(document.URL +  ' .cart-summery');
		} else if(data.status == 2){
			alert("Product and Coupon Removed");
			$('#cart_pop_row_'+proVarId).remove();
			$('#cart_row_'+proVarId).remove();
			$('.cartmenu').load(document.URL +  ' .cartmenu');
			$('.cart-summery').load(document.URL +  ' .cart-summery');				
		} else {
			alert("ERR");
		}
	});
});


// Attach a submit handler to the form
// $( "#cart-coupon" ).submit(function( event ) {
$( '#cartBox' ).on( 'click', '.apply-coupon', function () {	

	$('.loader').show();
 
	var code = $('#coupon_code').val()
		cart_id = $('#cart_id').val();
    
	if(code != '' && cart_id != ''){

		var postData = {
			'cart_id': cart_id,
			'code': code
		}

		// Send the data using post
		var posting = $.post( base_url+'cart/coupon', { data: postData } );
	 
		// Put the results in a div
		posting.done(function( data ) {

			$('.loader').hide();

			data = jQuery.parseJSON(data);

			if(data.status == 1) {
				$('.cart-summery').load(document.URL +  ' .cart-summery');
			} else {				
				$('.cart-summery').load(document.URL +  ' .cart-summery');
				alert(data.msg);
			}

		});

	} else {
		alert("ERR");
	}
});



// Attach a submit handler to the form
$( '#cartBox' ).on( 'click', '.remove-coupon', function () {
	var cartId = $(this).attr('data-cart-id');
	// Send the data using post
	var posting = $.post( base_url+'cart/remove/coupon', { data: cartId } );

	// // Put the results in a divcl
	posting.done(function( data ) {
		var data = jQuery.parseJSON(data);
		console.log(data);
		if(data.status == 1){	
			$('.cartmenu').load(document.URL +  ' .cartmenu');
			$('.cart-summery').load(document.URL +  ' .cart-summery');
		} else {
			alert("ERR");
		}
	});		
})

//cart remove button
$( ".removecartitem" ).click(function() {
	var postData = {
		pvar_id:  parseInt($(this).attr("data-pvar-id"))
	}
	var proVarId = parseInt($(this).attr("data-pvar-id"));
	// Send the data using post
	var posting = $.post( base_url+'cart/remove', { data: postData } );

	// // // Put the results in a div
	posting.done(function( data ) {
		var data = jQuery.parseJSON(data);
		if(data.status == 1){
			$('#cart_pop_row_'+proVarId).remove();
			$('#cart_row_'+proVarId).remove();
			$('.cartmenu').load(document.URL +  ' .cartmenu');
			$('.cart-summery').load(document.URL +  ' .cart-summery');
		} else if(data.status == 2){
			alert("Product and Coupon Removed");
			$('#cart_pop_row_'+proVarId).remove();
			$('#cart_row_'+proVarId).remove();
			$('.cartmenu').load(document.URL +  ' .cartmenu');
			$('.cart-summery').load(document.URL +  ' .cart-summery');				
		} else {
			alert("ERR");
		}
	});
});	

	// Attach a submit handler to the form
	$( "#loginForm" ).submit(function( event ) {
	 
		// Stop form from submitting normally
		event.preventDefault();
	 
		// Get some values from elements on the page:
		var $form = $( this ),
		
	    url = $form.attr( "action" );

		// // Send the data using post
		var posting = $.post( url, {
			mail: $form.find( "input[name='uName']" ).val(),  
			password: $form.find( "input[name='uPass']" ).val(),
		} );
	 
		// Put the results in a div
		posting.done(function( data ) {

			data = jQuery.parseJSON(data);
			if(data.status == 1) {
				location.reload();
			} else {
				$("#loginForm").addClass("errormsgwrap");
			}
			
		});
	});

	$( "#registerForm" ).submit(function( event ) {
	 
		// Stop form from submitting normally
		event.preventDefault();
		
		var $form = $( this );

		if($form.find( "input[name='password']" ).val() == $form.find( "input[name='conpassword']" ).val()) {
	 
			// Get some values from elements on the page:
		    var url = $form.attr( "action" );

			// Send the data using post
			var posting = $.post( url, {
				firstname: $form.find( "input[name='fname']" ).val(),  
				lastname: $form.find( "input[name='lname']" ).val(),  
				mail: $form.find( "input[name='email']" ).val(),
				mobile: $form.find( "input[name='mobile']" ).val(),  
				password: $form.find( "input[name='password']" ).val(), 
			} );
		 
			// Put the results in a div
			posting.done(function( data ) {

				data = jQuery.parseJSON(data);
	           	if(data.status==1) {
	           		location.reload();
	           	} else if(data.status == 2){
	           		$("#errorMsg").removeClass('hidden');
	           		$("#regEmail").addClass("errormsgwrap");
	           	}else {
	       			$("#registerForm").addClass("errormsgwrap");
	           	}
			});

		} else {
			alert("PASSWORD DOESNT NOT MATCH");
		}
	});


	//Add to cart
	$( ".addtocartbtn" ).click(function() {
		$(".loader").show();
		 var pvarArray = [];
		 pvarArray.push($(this).attr("data-pvar-id"));
		// Send the data using post
		var posting = $.post(base_url+'cart/add', { data: pvarArray } );

		posting.done(function( data ) {
			$(".loader").hide();
			var data = jQuery.parseJSON(data);
			if(data.status == 1) {
				$('.cartmenu').load(document.URL +  ' .cartmenu');
			} else {
				alert(data.msg);
			}
		});			
	});

	//Add to cart
	$( ".cart-address-btn" ).click(function() {
		$('#address_name').val($(this).attr('data-address-name'));
		$('#address_line_1').val($(this).attr('data-address-line1'));
		$('#address_line_2').val($(this).attr('data-address-line2'));
		$('#address_city').val($(this).attr('data-address-city'));
		$('#address_state').val($(this).attr('data-address-state'));
		$('#address_zipcode').val($(this).attr('data-address-zipcode'));
		$('#address_mobile').val($(this).attr('data-address-mobile'));

		$( "#cart-address" ).submit();
	});	

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

function arrayMax(array) {
  return array.reduce(function(a, b) {
    return Math.max(a, b);
  });
}

function arrayMin(array) {
  return array.reduce(function(a, b) {
    return Math.min(a, b);
  });
}