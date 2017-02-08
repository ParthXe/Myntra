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
            <li class="active"><span>1</span>SIGN IN</li>
            <li class=""><span>2</span>ADDRESS</li>
            <li><span>3</span>PAYMENT</li>
          </ul>
          <div class="cartlogin row">
            <div class="modal-body signup-modal-body">
              <div class="row">
                <div class="col-sm-6 col-xs-12 signup-form login-form">
                  <h4> CHECKOUT AS GUEST</h4>
                  <form action="cart.php" method="post" id="guest-checkout-form" accept-charset="UTF-8">
                    <div>
                      <div id="email_wrapper">
                        <div class="form-group">
                          <div class="input input--sae">
                            <input class="input__field input__field--sae" type="text"   />
                            <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Email</span> </label>
                          </div>
                        </div>
                        <button class="anon-email-checkout btn pinkbtn borderround form-submit" type="submit" id="edit-submit" name="op" value="Next">NEXT</button>
                      </div>
                    </div>
                  </form>
                </div>
                <span class="signup-seperator">OR</span>
                <div class="col-sm-6 col-xs-12 signup-other">
                  <h4>SIGN IN TO YOUR ACCOUNT</h4>
                  <a class="btn pinkbtn loginModalLink borderround" href="#signin" role="button"  data-toggle="modal" data-target="#signin" >SIGN IN</a> </div>
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