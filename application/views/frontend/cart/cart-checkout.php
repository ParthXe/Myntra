<div class="contentwrap"></div>
<div class="container ">
	<div class="innerpage"> 
		 <div class="cart">
			<div class="client-prod">
				<div class=" col-md-8 col-sm-12 cart-left-cotent clearfix">
					<div class="heading-wrapper row ">
						<div class="col-md-12 col-sm-12 col-xs-12 col-xxs-12 cart-heading text-center">SECURED CHECKOUT</div>
					</div>
					<ul class="checkout-heading row text-uppercase">
						<li><span>1</span>SIGN IN</li>
						<li class=""><span>2</span>ADDRESS</li>
						<li class="active"><span>3</span>PAYMENT</li>
					</ul>
					<div class="row">
						<div class="cart-button text-center">
						    <h4>PAY VIA : </h4>
						    <?php echo form_open('', 'id="checkout-form"') ;?>
								<div class="form-item form-item-panes-payment-payment-method form-type-radio radio">
									<label class="control-label" for="codcheckout-btn">
										<input type="radio" id="codcheckout-btn" name="payment_method" value="cod" class="form-radio payment_method">Cash on delivery
									</label>
								</div>
								<div class="form-item form-item-panes-payment-payment-method form-type-radio radio">
									<label class="control-label" for="payucheckout-btn">
										<input type="radio" id="payucheckout-btn" name="payment_method" value="payuindia" class="form-radio payment_method">Pay Online
									</label>
								</div>
						 	<?php echo form_close(); ?>
						</div>
					</div>
				   
					<div class="product-heading row text-uppercase hidden-xs">
						<span class="col-sm-6">REVIEW ORDER</span>
						<span class="col-sm-6 text-right"><a href="<?php echo site_url('cart'); ?>"><i class="fa fa-pencil"></i> EDIT CART</a></span>
					</div>
				  
					<article class="row orderdetails">
						<?php foreach($cart['products'] as $product) : ?>
							<section class="media cart-content">
								<div class="media-left cart-img-container">
									<a href="<?php echo site_url('product/details/'.$product['product_slug']); ?>"> <img class="media-object" src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $product['images']; ?>" alt="<?php echo $product['title']; ?>"></a>
								</div>
								<div class="media-body item-desc">
									<div class="row cart-inner-main">
										<div class="col-md-8 col-sm-9 col-xs-12 col-xxs-12 item-desc">
											<div class="heading">
												<div class="item-head-main">
													<a href="<?php echo site_url('product/details/'.$product['product_slug']); ?>" class="item-heading"><?php echo $product['brand']; ?></a> <a href="<?php echo site_url('product/details/'.$product['product_slug']); ?>" class="item-brief text-capitalize"><?php echo $product['title']; ?></a>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6 ">
													<div class="productwrap">
														<h4>Colour  &amp;  size</h4>
														<div class="prodsummary">
															<ul class="product_color">
																<?php foreach ($product['color'] as $key => $color) : ?> 
																	<li style="background-color:<?php echo $color['hex']; ?>; "></li>
																<?php endforeach; ?>
															</ul>
															<span class="sizescart"> <?php echo isset($product['size']) ? $product['size'] : "NA"; ?></span>
														</div>
													</div>
												</div>
												<div class="col-sm-6 ">
													<div class="productwrap">
														<h4>Product code</h4>
														<div class=""><?php echo $product['product_code']; ?></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-3 col-xs-12 col-xxs-12 item-price off-edit-hide">
											<span class="strike-through">
												<span class="rupee"></span><?php echo isset($product['list_price']) ? $product['list_price'] : "NA"; ?>
											</span>
											<span class="price">
												<span class="rupee"></span><?php echo isset($product['sell_price']) ? $product['sell_price'] : "NA"; ?>
											</span>
											<span class="discount">(-<?php echo isset($product['discount']) ? $product['discount'] : "NA"; ?>%)</span>
										</div>
									</div>
								</div>
							</section>
						<?php endforeach; ?>
					</article>	
				</div>
				<div class=" col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6  cart-summery-wrapper" id="orderSummary" >
					<div class="editdeliveryadd">
						<h3 class="text-uppercase"> delivery address <a href="<?php echo site_url('cart/address'); ?>"><i class="fa fa-pencil"></i></a></h3>
						<b><?php echo $session['selected_address']['address_name']; ?></b><br>
						<?php echo $session['selected_address']['address_line_1']; ?><br>
						<?php echo $session['selected_address']['address_line_2']; ?><br>
						<?php echo $session['selected_address']['address_city']; ?><br>
						<?php echo $session['selected_address']['address_state']; ?><br>
						<?php echo $session['selected_address']['address_zipcode']; ?><br>
						Mobile: <?php echo $session['selected_address']['address_mobile']; ?><br>        
					</div>
					<div class="theiaStickySidebar">
					  <div id="cartBox">
					    <div class="cart-summery clearfix"  >
					      <?php if(isset($_SESSION['cart'])): ?>
					        <div class="total-amt">TOTAL
					          <div>
					            <span class="rupee"></span>
					            <span class="finalAmt"><?php echo round($cart['details']->cart_discounted_total); ?></span>
					          </div>
					        </div>
					        <div class="text-center coupanwrap">
					          <div class="coupon-form">
					            <?php if(!empty($cart['coupon'])) : ?>
					              <div>
					                Applied Coupon <?php echo $cart['coupon']->cp_code ;?>
					               </div>
					            <?php endif; ?>
					            <!-- /input-group --> 
					          </div>          
					        </div>
					      <?php endif; ?>
					      <div class=" odr-summary">
					        <div class="summary-heading mob-accordion  "> order summary <span class="accor-icon common-sprite visible-xs-inline-block"></span> </div>
					        <div class="summary-content mob-accordion-content">
					          <span class="left">Price</span> <span class="right"><span class="rupee"></span><?php echo (isset($cart['details'])) ? round($cart['details']->cart_total) : ''; ?></span> 
					          <?php if($cart['details']->discount != 0) : ?>
					            <span class="left">Coupon Discount</span><span class="right"> - <span class="rupee"></span><span id="coupontotal"><?php echo $cart['details']->discount; ?></span></span> 
					          <?php endif; ?>
					          <!-- <span class="left">VAT/CST</span><span class="right green-txt"></span>  --> 
					          <span class="left">Handling Charges</span> <span class="right green-txt">FREE</span>
					          <div class="total"> <span class="left">Total</span> <span class="right"> <span class="rupee"></span><span class="finalAmt"><?php echo (isset($cart['details'])) ? round($cart['details']->cart_discounted_total) : ''; ?></span></span> </div>
					        </div>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>