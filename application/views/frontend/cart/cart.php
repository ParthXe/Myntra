<div class="contentwrap"></div>
<div class="container">  
  <div class="cart">
    <div class="client-prod">
      <div class=" col-md-8 col-sm-12 cart-left-cotent clearfix">
        <div class="heading-wrapper row ">
          <div class="col-md-12 col-sm-12 col-xs-12 col-xxs-12 cart-heading text-center">MY SHOPPING CART </div>
        </div>
        <div class="product-heading row text-uppercase hidden-xs"> <span class="col-md-6 col-sm-8">Products</span> <span class="col-md-6 col-sm-4 text-right">total Amount</span> </div>
        <?php if(isset($cart['products'])) : ?>
          <?php
            $pVars = [];
          ?>
          <?php foreach ($cart['products'] as $product) : ?>
            <article class="row orderdetails" id="cart_row_<?php echo isset($product['pvar_id']) ? $product['pvar_id'] : NULL ;?>">
              <section class="media cart-content">
                <div class="media-left cart-img-container"> <a href="<?php echo site_url('product/details/'.$product['product_slug']); ?>"> <img class="media-object" src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $product['images']; ?>" alt="..."> </a> </div>
                <div class="media-body item-desc">
                  <div class="row cart-inner-main">
                    <div class="col-md-8 col-sm-9 col-xs-12 col-xxs-12 item-desc">
                      <div class="heading">
                        <div class="item-head-main"> <a href="<?php echo site_url('product/details/'.$product['product_slug']); ?>" class="item-heading"><?php echo isset($product['brand']) ? $product['brand'] : "NA"; ?></a> <a href="<?php echo site_url('product/details/'.$product['product_slug']); ?>" class="item-brief text-capitalize"><?php echo isset($product['title']) ? $product['title'] : "NA"; ?></a> </div>
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
                              <span class="sizescart"> <?php echo isset($product['size']) ? $product['size'] : "NA"; ?></span> </div>
                          </div>
                        </div>
                        <div class="col-sm-6 ">
                          <div class="productwrap">
                            <h4>Product code</h4>
                            <div class=""><?php echo isset($product['product_code']) ? $product['product_code'] : "NA"; ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-12 col-xxs-12 item-price off-edit-hide"> <span class="strike-through"> <span class="rupee"></span><?php echo isset($product['list_price']) ? $product['list_price'] : "NA"; ?></span> <span class="price"><span class="rupee"></span><?php echo isset($product['sell_price']) ? $product['sell_price'] : "NA"; ?></span> <span class="discount">(-<?php echo isset($product['discount']) ? $product['discount'] : "NA"; ?>%)</span> </div>
                    <div class="row col-md-12 col-sm-12 col-xs-12 col-xxs-12">
                      <div class="item-modified clearfix">
                        <div class="off-edit-hide">
                          <div class="item-modified-links">
                            <i class="fa-trash " ><img src="<?php echo site_url('assets/images/svg/remove.svg'); ?>"></i>
                            <span class="removecartitem" data-pvar-id="<?php echo isset($product['pvar_id']) ? $product['pvar_id'] : NULL ;?>">REMOVE</span>
                          </div>
                          <!--<div class="item-modified-links"> <i class="fa-edit sprite" ></i> <a href="#" class="">EDIT</a> </div>--> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </article>
            <?php array_push($pVars, $product['pvar_id']); ?>
          <?php endforeach; ?>
        <?php endif; ?>
       
      </div>
      <div class=" col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6  cart-summery-wrapper" id="orderSummary" >
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
                    <?php if(empty($cart['coupon'])) : ?>
                      <div class="input-group">
                        <input type="text" class="form-control" id="coupon_code" placeholder="Enter Coupon Code" name="code">
                        <span class="input-group-btn">
                          <input type="hidden" name="cart_id" id="cart_id" value="<?php echo (isset($_SESSION['cart'])) ? $_SESSION['cart'] : ''; ?>">
                          <button class="btn darkgraybtn apply-coupon">APPLY</button>
                        </span>
                      </div>
                    <?php else: ?>
                      <div>
                        Applied Coupon <?php echo $cart['coupon']->cp_code ;?>
                        <button class="remove-coupon" data-cart-id="<?php echo (isset($_SESSION['cart'])) ? $_SESSION['cart'] : ''; ?>">remove</button>
                      </div>
                    <?php endif; ?>
                    <!-- /input-group --> 
                  </div>          
                </div>
                <?php
                  if(isset($session['logged_in'])){
                    echo form_open('cart/address');
                  } else{
                    echo form_open('cart/login');
                  }
                ?>
                  <input type="hidden" name="order_products" value="<?php echo implode(',', $pVars); ?>" />
                  <input type="hidden" name="order_user" value="<?php echo (isset($session['usr_id'])) ? $session['usr_id']: 0 ; ?>" />
                  <input type="hidden" name="order_total" value="<?php echo round($cart['details']->cart_total); ?>" />
                  <input type="submit" class="btn pinkbtn action-btn-orange" value="PLACE ORDER" >
                <?php echo form_close(); ?>
              <?php endif; ?>
              <div class=" odr-summary">
                <div class="summary-heading mob-accordion  "> order summary <span class="accor-icon common-sprite visible-xs-inline-block"></span> </div>
                <div class="summary-content mob-accordion-content">
                  <span class="left">Price</span> <span class="right"><span class="rupee"></span><?php echo (isset($cart['details'])) ? round($cart['details']->cart_total) : ''; ?></span> 
                  <?php if((isset($cart['details'])) && $cart['details']->discount != 0) : ?>
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
  <!--end--> 
</div>
