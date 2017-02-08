$(document).ready( function() {
	//main category
	$( "input[type=radio][name=main_cat]" ).change(function() {
		var mainCat = $(this).val(); // <-- change this line

		$.ajax({
			url: base_url+"products/getParent",
			async: false,
			type: "POST",
			data: "main_category="+mainCat,
			dataType: "html",
			success: function(data) {
				var data = jQuery.parseJSON(data);
			 	
			 	$('#parent_cat').html("");

				// Set Parent Categories
				var sel = $('#parent_cat');
				sel.append($("<option>").attr('value','').text('--Any--'));
				$.each(data, function(i, item) {
					// console.log(i+" -- "+item);
					sel.append($("<option>").attr('value',i).text(item));
				});
			
			}
		})
	});

	// user add / edit address modal
	$( ".user-edit-modal" ).click(function() {
		// alert($(this).attr("data-add-id"));
		$("#userAddressEditAddressId").val($(this).attr("data-add-id"));
		$("#userAddressEditName").val($(this).attr("data-add-name"));
		$("#userAddressEditAddress1").val($(this).attr("data-add-address1"));
		$("#userAddressEditAddress2").val($(this).attr("data-add-address2"));
		$("#userAddressEditCity").val($(this).attr("data-add-city"));
		$("#userAddressEditState").val($(this).attr("data-add-state"));
		$("#userAddressEditZipcode").val($(this).attr("data-add-pincode"));
		$("#userAddressEditMobile").val($(this).attr("data-add-mobile"));
	});

	$('#user-add-address-modal').click(function(){
		$("#userAddressEditAddressId").val('');
		$("#userAddressEditName").val('');
		$("#userAddressEditAddress1").val('');
		$("#userAddressEditAddress2").val('');
		$("#userAddressEditCity").val('');
		$("#userAddressEditZipcode").val('');
		$("#userAddressEditMobile").val('');		
	})

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

			// console.log(data);

			if(data.status == 1 && data.type == "update") {
				// Populate the field that are saved
				$("#address_name_"+postData.ua_id).html(postData.ua_name);
				$("#address_line_1_"+postData.ua_id).html('Address 1: '+postData.ua_address_1);
				$("#address_line_2_"+postData.ua_id).html('Address 2: '+postData.ua_address_2);
				$("#address_city_"+postData.ua_id).html('City: '+postData.ua_city);
				$("#address_zipcode_"+postData.ua_id).html('Zipcode: '+postData.ua_pincode);
				$("#address_mobile_"+postData.ua_id).html('Tel: '+postData.ua_mobile);

				// change the attributes values so next time edit is clicked the latest values reflect
				$(".user-edit-modal").attr({
					"data-add-name" : postData.ua_name,
					"data-add-address1" : postData.ua_address_1,
					"data-add-address2" : postData.ua_address_2,
					"data-add-city" : postData.ua_city,
					"data-add-pincode" : postData.ua_pincode,
					"data-add-mobile" : postData.ua_mobile
				});				
			} else if(data.status == 1 && data.type == "add") {
				//Create an array of books
				var books = [
				    { title: "ASP.NET 4 Unleashed", price: 37.79, picture: "AspNet4Unleashed.jpg" },
				    { title: "ASP.NET MVC Unleashed", price: 44.99, picture: "AspNetMvcUnleashed.jpg" },
				    { title: "ASP.NET Kick Start", price: 4.00, picture: "AspNetKickStart.jpg" },
				    { title: "ASP.NET MVC Unleashed iPhone", price: 44.99, picture: "AspNetMvcUnleashedIPhone.jpg" },
				];

				// Render the books using the template
				$("#newAddressTemp").tmpl(data.address).appendTo("#addressRow");
			} else {
				alert("Something went wrong. Please try again");
			}

			$('#myModal').modal('hide');
		});
	});

	// Toggle is parent filter hide show on category add / edit page
	$("#cat_is_parent").change(function() {
		$("#category_filters").toggle();
	});	

	//get child category 
	$('select[name=category]').change(function () {
		var selDpto = $(this).val(); // <-- change this line

		$.ajax({
			url: base_url+"products/ajax_call",
			async: false,
			type: "POST",
			data: "category="+selDpto,
			dataType: "html",
			success: function(data) {
				// console.log(data);
				var data = jQuery.parseJSON(data);

				$('#child_cat').html("");
				$('.sizes').html("");

				// Set Child Categories
				var sel = $('<select class="form-control" name="child_cat">').appendTo('#child_cat');
				$.each(data[1], function(i, item) {
					// console.log(i+" -- "+item);
					sel.append($("<option>").attr('value',i).text(item));					
				});

				// Set sizes
				var sel = $('<select class="form-control" name="size">').appendTo('.sizes');
				$.each(data[0], function(i, item) {
					// console.log(i+" -- "+item);
					sel.append($("<option>").attr('value',i).text(item));					
				});				
			}
		})
	});	

	// Order quick view js
	$( ".btn-quickview" ).click(function() {
		// alert($(this).attr("data-orderid"));

		var postData = {
			order_id:  $(this).attr("data-orderid")
		}
	 
		// Send the data using post
		var posting = $.post( base_url+'orders/order_quick', { data: postData } );

		// Put the results in a div
		posting.done(function( data ) {

			var data = jQuery.parseJSON(data);

			$("#modal_order_id").html(data.order_id);
			$("#modal_order_status").html(data.order_status);
			$("#customer_name").html(data.delivery_first_name);
			$("#customer_email").html(data.primary_email);
			$("#customer_address_1").html(data.delivery_street1);
			$("#customer_address_2").html(data.delivery_street2);
			$("#customer_city").html(data.delivery_city);
			$("#customer_pincode").html(data.delivery_postal_code);
			$("#customer_state").html(data.delivery_state);
			$("#customer_country").html(data.delivery_country);
			$("#customer_phone").html(data.delivery_phone);
			$("#modal_order_total").html(Math.round(data.order_total * 1000) / 1000);

			var productData = "";
			$.each(data.products, function(i, item) {
				productData += "<tr><td>"+item.title+"</td><td>"+item.qty+"</td><td>"+Math.round(item.price * 1000) / 1000+"</td></tr>";
			});		
			$("#modal_products").html(productData);
		});				
	});

	// Add Order search customer by main ajax
	$("#userEditEmail").tokenInput(base_url+"orders/getUserByMail", {
	    tokenLimit: 1,
	    preventDuplicates: true,
	   	prePopulate: existingUser,
	    theme: "bootstrap",
        onAdd: function (item) {
        	$("#customer_email").val(item.name);
        },
        onDelete: function (item) {
        	$("#customer_email").val();
        }, 	    
	});

	// Add Coupon search Brand by main ajax
	$("#couponApplicable").tokenInput(base_url+"coupons/getProducts", {
	    preventDuplicates: true,
	    theme: "bootstrap",
        onAdd: function (item) {
        	$("#cApplicable").val(item.name);
        },
        onDelete: function (item) {
        	$("#cApplicable").val();
        },
		prePopulate: function(item){
        	$("#cApplicable").val(item.name);
        } 
	});


    $("#couponApplicableEdit").tokenInput(base_url+"coupons/getProducts", {
    	theme: "bootstrap",
    	preventDuplicates: true,
        prePopulate: existingProducts
    }); 


	$("#couponApplicableCats").tokenInput(base_url+"coupons/getCats", {
	    preventDuplicates: true,
	    theme: "bootstrap", 
	});          

	// Update the address field from the user selected
	$("#userEditEmail").change(function(){
		var postData = {
			uid:  $(this).val()
		}
	 
		// Send the data using post
		var posting = $.post( base_url+'orders/getUserDetailsAddress', { data: postData } );

		// Put the results in a div
		posting.done(function( data ) {

			var data = jQuery.parseJSON(data);
			$("#customer_name").val(data.ua_name);
			$("#customer_street_1").val(data.ua_address_1);
			$("#customer_street_2").val(data.ua_address_2);
			$("#customer_city").val(data.ua_city);
			$("#customer_pincode").val(data.ua_pincode);
			$("#customer_mobile").val(data.ua_mobile);
			$("#customer_state").val(data.ua_state);
		});	
	}) 

    bookIndex = (typeof(varCount) != "undefined" && varCount !== null) ? varCount : 0;

    $('#bookForm')

        // Add button click handler
        .on('click', '.addButton', function() {

        	if($('#userEditEmail').val() != "" && $('#parent_cat').val() != null ) {
	        	var curCount = $('#rowNumber').val();

	        	$('#rowNumber').val( parseInt(curCount) + 1);

	            bookIndex++;
	            var $template = $('#bookTemplate'),
	                $clone    = $template
	                                .clone()
	                                .removeClass('hide')
	                                .removeAttr('id')
	                                .attr('data-book-index', bookIndex)
	                                .insertBefore($template);

	            // Update the name attributes
	            $clone
	            	//.find('[name="userfile[]"]').attr('name', 'userfile_' + bookIndex + '[]').end()
	            	.find('[name="color[]"]').attr('name', 'color_' + bookIndex + '[]').end()
	            	.find('[name="check_update"]').attr('name', 'check_update_' + bookIndex + '').end()
	            	.find('[name="varient_id"]').attr('name', 'varient_id_' + bookIndex + '').end()
	                .find('[name="pvar_title"]').attr('name', 'pvar_title_' + bookIndex + '').end()
	                .find('[name="pvar_desc"]').attr('name', 'pvar_desc_'+ bookIndex + '').end()
	                .find('[name="size"]').attr('name', 'size_'+ bookIndex + '').end()
	                .find('[name="condition"]').attr('name', 'condition_'+ bookIndex + '').end()
	                .find('[name="pvar_list_price"]').attr('name', 'pvar_list_price_'+ bookIndex + '').end()
	                .find('[name="pvar_sell_price"]').attr('name', 'pvar_sell_price_'+ bookIndex + '').end()
	                .find('[name="comm_id"]').attr('name', 'comm_id_'+ bookIndex + '').end()
	              	.find('[name="pvar_comm"]').attr('name', 'pvar_comm_'+ bookIndex + '').end()
	                .find('[name="pvar_min_price"]').attr('name', 'pvar_min_price_'+ bookIndex + '').end()
	                .find('[name="pvar_max_price"]').attr('name', 'pvar_max_price_'+ bookIndex + '').end()
	                .find('[name="stock"]').attr('name', 'stock_'+ bookIndex + '').end()
	                .find('[name="productImg[]"]').attr('name', 'productImg_'+ bookIndex + '[]').end()
	                .find('[name="pvar_mesurment"]').attr('name', 'pvar_mesurment_'+ bookIndex + '').end()
	                .find('[name="pvar_materials"]').attr('name', 'pvar_materials_'+ bookIndex + '').end()
	                .find('[name="active"]').attr('name', 'active_'+ bookIndex + '').end();
	                 // .find('[name="userfile"]').attr('name', 'userfile_'+ bookIndex + '').end();

	            $('input[name=pvar_sell_price_'+bookIndex+']').attr('data-var-counter', bookIndex);
	            $('input[name=comm_id'+bookIndex+']').attr('data-var-counter', bookIndex);

	            // Add new fields
	            // Note that we also pass the validator rules for new field as the third parameter        		
        	} else {
        		alert("Please select a seller and parent category first");
        	}
        })

        // Remove button click handler
        .on('click', '.removeButton', function() {
            var $row  = $(this).parents('.form-group'),
                index = $row.attr('data-book-index');

            // Remove fields
            $('#bookForm')
  

            // Remove element containing the fields
            $row.remove();
        });
	})

	// Search product on order add page
	$(".addProduct").tokenInput(base_url+"orders/getProductsByName", {
	    tokenLimit: 1,
	    preventDuplicates: true,
	    theme: 'bootstrap',
        onAdd: function (item) {
            $(this).parents( ".productBox" ).find('.add-another').attr("data-prd-id",item.id);
            // $(this).parents( ".productBox" ).find('.product_vars').attr("class","product_vars_"+item.id);

			var postData = {
				prod_id:  item.id
			}
			prd_id =  item.id;
			// Send the data using post
			var posting = $.post( base_url+'orders/getProductsVarsByPrdId', { data: postData } );

			// Put the results in a div
			posting.done(function( data ) {
				$('.product_vars').html(data);
			});

			$('.product_vars').show();
			$(this).parents( ".productBox" ).find('.add-another').show();
        },
        onDelete: function (item) {
			$('.product_vars').hide();
			$(this).parents( ".productBox" ).find('.add-another').hide();
        },            
	});

	var varName = [];

	// Append the product to order table
	$(".add-another").click(function(){
			var prod_var_id = $("select[name='product_vars']").val();

			var postData = {
				prod_var_id:  prod_var_id
			}
			prod_var_id =  prod_var_id;
			// Send the data using post
			var posting = $.post( base_url+'orders/getProductsVarsDetails', { data: postData } );

			// Put the results in a div
			posting.done(function( data ) {

				var data = jQuery.parseJSON(data);

				// Only add to order if already not added
				if(varName.indexOf(data.pvar_id) == -1){
					varName.push(data.pvar_id);

					$(".addProduct").tokenInput("clear");

					$('.product_vars_'+prd_id).hide();
					$(this).parents( ".productBox" ).find('.add-another').hide();

					var listPrice = parseFloat(data.pvar_list_price)
						sellPrice = parseFloat(data.pvar_sell_price)
						subtotal = Number($('#subtotal').html()) + (sellPrice / 1.055)
						vat = (Number($('#subtotal').html()) + (sellPrice / 1.055)) * 0.055
						curOrderTotal = Number($("#order_total").val());

					$('#prdTable tr:last').after('<tr><input type="hidden" name="products[]" value="'+data.pvar_id+'"><td>'+data.pvar_title+'</td><td>'+data.pvar_sku+'</td><td>'+listPrice.toFixed(2)+'</td><td>'+sellPrice.toFixed(2)+'</td><td>remove</td></tr>');

					$('#subtotal').html(subtotal.toFixed(2));
					$('#totalvat').html(vat.toFixed(2));
					$('#ordertotal').html( (curOrderTotal + Number(data.pvar_sell_price)).toFixed(2) );
					$("#order_total").val( curOrderTotal + Number(data.pvar_sell_price) );	

					$("#added_vars").val(varName);	

				} else {
					alert("Already added to order");
				}

			});
	});

	$( "#couponForm" ).validate({
		rules: {
			cCode: {
				required: true,
				remote: base_url+'coupons/checkCouponExists',		
			}
		},
		messages:{
			cCode:{
				remote: $.validator.format('{0} already exists.')
			}
		}		    
	});

	$( "#colorForm" ).validate({
		rules: {
			clothColors: {
				required: true,
				remote: base_url+'colors/checkColorExists',		
			}
		},
		messages:{
			clothColors:{
				remote: $.validator.format('{0} already exists.')
			}
		}		    
	});

	// Remove product from the order
	$(".removeProduct").click(function(){

		if($('#product_count').val() > 1) {
			var varId = $(this).attr('data-var-id')
				OrderId = $(this).attr('data-order-id')
				OrderVat =  parseFloat($('#totalvat').html()) - $(this).attr('data-var-vat')
				OrderSubtotal = parseFloat($('#subtotal').html()) - $(this).attr('data-var-subvat-price')
				OrderTotal = parseFloat($('#ordertotal').html()) - $(this).attr('data-var-price');

			$('#subtotal').html(OrderSubtotal.toFixed(2));
			$('#totalvat').html(OrderVat.toFixed(2));
			$('#ordertotal').html(OrderTotal.toFixed(2));
			$('#order_total').val(OrderTotal.toFixed(2));

			$('#product_count').val($('#product_count').val() - 1);


			$('#var_id_'+varId).remove();
		} else {
			alert("No cant do bro");
		}
	});	

	// Add commission fields
    //commIndex = (typeof(varCount) != "undefined" && varCount !== null) ? varCount : 0;
    commIndex =1;
    $('#commForm')

        // Add button click handler
        .on('click', '.addButton', function() {
        	var curCount = $('#rowNumber').val();

        	$('#rowNumber').val( parseInt(curCount) + 1);

            commIndex++;
            var $template = $('#commTemplate'),
                $clone    = $template
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .attr('data-book-index', bookIndex)
                                .insertBefore($template);

            // Update the name attributes
            $clone
            	//.find('[name="userfile[]"]').attr('name', 'userfile_' + bookIndex + '[]').end()
            	.find('[name="min_range"]').attr('name', 'min_range_' + commIndex + '').end()
                .find('[name="max_range"]').attr('name', 'max_range_' + commIndex + '').end()
                .find('[name="comm_type"]').attr('name', 'comm_type_'+ commIndex + '').end()
                .find('[name="amount"]').attr('name', 'amount_'+ commIndex + '').end();
                 // .find('[name="userfile"]').attr('name', 'userfile_'+ bookIndex + '').end();

            // Add new fields
            // Note that we also pass the validator rules for new field as the third parameter
        })

    // Remove button click handler
    .on('click', '.removeButton', function() {
        var $row  = $(this).parents('.form-group'),
            index = $row.attr('data-book-index');

        // Remove fields
        $('#commForm')


        // Remove element containing the fields
        $row.remove();
    });

	// commission quick view js
	$( ".btn-commquickview" ).click(function() {
		//alert($(this).attr("data-commid"));

		var postData = {
			comm_id:  $(this).attr("data-commid")
		}
	 
		// Send the data using post
		var posting = $.post( base_url+'commission/comm_quick', { data: postData } );

		// Put the results in a div
		posting.done(function( data )

		 {
			var data = jQuery.parseJSON(data);
		 	// console.log(data);
			$("#modal_comm_id").html(data.comm_id);
			$("#seller_name").html(data.name);
			$("#seller_email").html(data.mail);

			var commissionData = "";
			$.each(data.commission, function(i, item) {
				if(item.type == "Percentage") {
					var type = "%";
				} else {
					var type = "";
				}
				commissionData += "<tr><td>"+item.minimum+"</td><td>"+item.max+"</td><td>"+Math.round(item.amount)+type+"</td></tr>";
			});		
			$("#comm_details").html(commissionData);
		});				
	});

	$("input#full-popover").ColorPickerSliders({
	          placement: 'right',
	          hsvpanel: true,
	          previewformat: 'hex'
    });

	// Order quick view js
	$( ".returnquickview" ).click(function() {

		// Send the data using post
		var posting = $.post( base_url+'orders/returnQuickId', { data: $(this).attr('data-return-vars') } );

		// Put the results in a div
		posting.done(function( data ) {
		
			var data = jQuery.parseJSON(data);

			// console.log(data);

			$("#modal_rtn_id").html(data.id);
			$("#modal_rtn_order_id").html(data.order_id);
			$("#modal_rtn_user_id").html(data.user.mail);
			$("#modal_rtn_reason ").html(data.status);
			$("#modal_rtn_date").html(data.created_on);


			var productData = "";
			$.each(data.vars, function(i, item) {
				// productData += "<tr><td>"+item.title+"</td><td>"+item.qty+"</td><td>"+Math.round(item.price * 1000) / 1000+"</td></tr>";
				productData += "<tr><td>"+item.pvar_title+"</td><td>"+item.pvar_sell_price+"</td></tr>";

			});		
			$("#modal_products").html(productData);
		});
	});	

	// Add Order search customer by main ajax
	$("#getCoupons").tokenInput(base_url+"coupons/getCouponsToken", {
	    tokenLimit: 1,
	    prePopulate: existingCoupon,
	    preventDuplicates: true,
	    theme: "bootstrap"
	});

	$('#couponRange').daterangepicker({format: 'DD/MM/YYYY'});

	// Update the address field from the user selected
	$("#getCoupons").change(function(){

		if($(this).val() == "") {
			OrderTotal = parseInt($('#ordertotal').html());
			OrderDiscount = parseInt($('#totaldisc').html());
			$('#coupon_is_applied').val(0);
			$('#couponRow').addClass('hidden');
			$('#ordertotal').html(OrderTotal + OrderDiscount);
			$('#order_total').html(OrderTotal + OrderDiscount);
		} else {

			var postData = {
				coupon_id: $(this).val(),
				var_id: $('#added_vars').val(),
				order_total: $('#order_total').val(),
			}

			// Send the data using post
			var posting = $.post( base_url+'coupons/applyCoupon', { data: postData } );

			// Put the results in a div
			// posting.done(function( data ) {
			// 	var data = jQuery.parseJSON(data)
			// 		OrderTotal = parseInt($('#ordertotal').html());

			// 	if(data.cp_type == "percent") {
			// 		var totalDiscount = (OrderTotal * data.cp_value / 100);
			// 	} else {
			// 		var totalDiscount = data.cp_value;
			// 	}

			// 	$('#couponRow').removeClass('hidden');

			// 	$('#coupon_is_applied').val(1);
			// 	$('#coupon_amt').val(totalDiscount);
			// 	$('#coupon_id').val(data.cp_id);

			// 	$('#couponcode').html(data.cp_code);
			// 	$('#totaldisc').html(totalDiscount);
			// 	$('#ordertotal').html(OrderTotal - totalDiscount);
			// 	$('#order_total').html(OrderTotal - totalDiscount);
			// });				
		}
	})

	// $(".product_cat_select").click(function(){
	// 	var catId = $(this).attr('data-cat-id');
	// 	$("#main_cat_"+catId).attr('checked', 'checked');	
	// })


// Add varient count
function incrementValue() {
	var value = parseInt(document.getElementById('number').value, 10);
	value = isNaN(value) ? 0 : value;
	value++;
	document.getElementById('number').value = value;
}

function decrementValue() {
	var value = parseInt(document.getElementById('number').value, 10);
	value = isNaN(value) ? 0 : value;
	value--;
	document.getElementById('number').value = value;
}

$(document).on('change', '.sell_price', function(){

	var i = $(this).attr('data-var-counter');

	var postData = {
		sellPrice:  $(this).val(),
		userId:  $('#userEditEmail').val(),
		commissionId: $('#commissionId').val()
	}

	// Send the data using post
	var posting = $.post( base_url+'products/commission', { data: postData } );

	// Put the results in a div
	posting.done(function( data )

	 {
		var data = jQuery.parseJSON(data);
	 	console.log(data);

	 	console.log(i);

		 $('input[name=pvar_comm_'+i+']').val(Math.round(data.amount));
		 $('input[name=comm_id_'+i+']').val(data.common_id);
	});
});