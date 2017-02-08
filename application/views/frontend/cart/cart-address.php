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
            <li class="active"><span>2</span>ADDRESS</li>
            <li class=""><span>3</span>PAYMENT</li>
          </ul>
          <div class="product-heading row text-uppercase hidden-xs"> <span class="col-sm-6">Select Address</span> </div>
          <div class="saveaddress">
            <?php if(isset($session['logged_in']) && $session['logged_in'] == TRUE): ?>
              <?php foreach ($user['address'] as $address) : ?>          
                <div class="col-sm-6 adresspanel "> <b><?php echo $address['name']; ?></b><br>
                  <?php echo $address['address1']; ?> <?php echo $address['address2']; ?><br>
                  <?php echo $address['city']; ?><br>
                  <?php echo $address['state']; ?><br>
                  <?php echo $address['zipcode']; ?><br>
                  Mobile: <?php echo $address['mobile']; ?><br>
                  <button
                    class="btn cart-address-btn"
                    type="button"
                    data-address-name="<?php echo $address['name']; ?>"
                    data-address-line1="<?php echo $address['address1']; ?>"
                    data-address-line2="<?php echo $address['address2']; ?>"
                    data-address-city="<?php echo $address['city']; ?>"
                    data-address-state="<?php echo $address['state']; ?>"
                    data-address-zipcode="<?php echo $address['zipcode']; ?>"
                    data-address-mobile="<?php echo $address['mobile']; ?>">
                    Deliver to this address <i class="glyphicon glyphicon-chevron-right"></i>
                  </button>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>

            <?php echo form_open('cart/checkout', 'id="cart-address"'); ?>
              <input type="hidden" id="order_products" name="order_products" value="<?php echo implode(',', json_decode($cart['details']->cart_prod_vars)); ?>" />
              <input type="hidden" id="order_user" name="order_user" value="<?php echo $cart['details']->cart_uid; ?>" />
              <input type="hidden" id="order_total" name="order_total" value="<?php echo $cart['details']->cart_total; ?>" />
              <input type="hidden" id="address_name" name="address_name" value="" />
              <input type="hidden" id="address_line_1" name="address_line_1" value="" />
              <input type="hidden" id="address_line_2" name="address_line_2" value="" />
              <input type="hidden" id="address_city" name="address_city" value="" />
              <input type="hidden" id="address_state" name="address_state" value="" />
              <input type="hidden" id="address_zipcode" name="address_zipcode" value="" />
              <input type="hidden" id="address_mobile" name="address_mobile" value="" />
            <?php echo form_close(); ?>
          </div>
          <div class="product-heading row text-uppercase text-center hidden-xs"> <span class="btn black-btn borderround addaddress-btn">ADD ADDRESS</span> </div>
          <div class="addaddresswrap">
            <div id="addressSet" class="uniqform">
              <div class="form-group">
                <div class="input input--sae">
                  <input class="input__field input__field--sae" type="text"   />
                  <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Name *</span> </label>
                </div>
              </div>
              <div class="form-group">
                <div class="input input--sae">
                  <input class="input__field input__field--sae" type="text"   />
                  <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Phone *</span> </label>
                </div>
              </div>
              <div class="form-group">
                <div class="input input--sae">
                  <input class="input__field input__field--sae" type="text"   />
                  <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Address 1 *</span> </label>
                </div>
              </div>
              <div class="form-group">
                <div class="input input--sae">
                  <input class="input__field input__field--sae" type="text"   />
                  <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Address 2 *</span> </label>
                </div>
              </div>
              <div class="form-group">
                <div class="input input--sae">
                  <input class="input__field input__field--sae" type="text"   />
                  <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">City *</span> </label>
                </div>
              </div>
              <div class="form-group">
                <div class="input input--sae selecteliment">
                  <select name="" class="input__field input__field--sae">
                    <option value="" selected="selected">-- Any --</option>
                    <option value="AN">Andaman and Nicobar</option>
                  </select>
                  <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">State *</span> </label>
                </div>
              </div>
              <div class="form-group">
                <div class="input input--sae">
                  <input class="input__field input__field--sae" type="text"   />
                  <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Pincode *</span> </label>
                </div>
              </div>
              <div class="form-group">
                <input name="" type="button" value="SUBMIT" class="btn black-btn borderround ">
              </div>
            </div>
          </div>
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
    <!--end--> 
  </div>
</div>