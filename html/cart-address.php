<?php
include 'header.php';
?>
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
            <div class="col-sm-6 adresspanel "> <b>Darshan Choudhary</b><br>
              B 706, Mohan Mansion, Gulmohar Lane<br>
              Mumbai<br>
              Gulmohar Lane<br>
              Maharashtra<br>
              400022<br>
              Mobile: <br>
              <form action="https://www.pretmode.com/cart/checkout" method="post" class="cartaddresp">
                <button class="btn" type="submit" > Deliver to this address <i class="glyphicon glyphicon-chevron-right"></i></button>
              </form>
            </div>
            <div class="col-sm-6 adresspanel "> <b>Darshan Choudhary</b><br>
              B 706, Mohan Mansion, Gulmohar Lane<br>
              Mumbai<br>
              Gulmohar Lane<br>
              Maharashtra<br>
              400022<br>
              Mobile: <br>
              <form action="https://www.pretmode.com/cart/checkout" method="post" class="cartaddresp">
                <button class="btn" type="submit" > Deliver to this address <i class="glyphicon glyphicon-chevron-right"></i></button>
              </form>
            </div>
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
            <div class="cart-summery clearfix"  >
              <div class="total-amt">TOTAL &nbsp;
                <div><span class="rupee"></span>18000</div>
              </div>
              <div class="text-center coupanwrap">
                <div class="coupon-form">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Coupon Code">
                    <span class="input-group-btn">
                    <button class="btn darkgraybtn" type="button">APPLY</button>
                    </span> </div>
                  <!-- /input-group --> 
                </div>
              </div>
              <div class="text-center coupanwrap"> 
                
                <!--              <div class="row grandtotalcart">
            <div class="col-xs-12 text-right">                   
              <div id="cashbackForm">
                              </div>
            </div>
          </div> 
         --> 
                
              </div>
              <div class=" odr-summary"> <a href="cart-checkout.php" class="btn  pinkbtn action-btn-orange">PLACE ORDER</a>
                <div class="summary-heading mob-accordion  "> order summary <span class="accor-icon common-sprite visible-xs-inline-block"></span> </div>
                <div class="summary-content mob-accordion-content"> <span class="left">Price</span> <span class="right"><span class="rupee"></span>18000.00</span> 
                  
                  <!--             <span class="left">VAT/CST</span>
            <span class="right green-txt"></span> --> 
                  
                  <span class="left">Handling Charges</span> <span class="right green-txt">FREE</span>
                  <div class="total"> <span class="left">Total</span> <span class="right"> <span id="finalAmt" class="rupee"></span>18000 </span> </div>
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
<?php
include 'footer.php';
?>
