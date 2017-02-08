        <!--footer start-->
     
     
        
        <footer>
          <div class="container">
            <div class="row footer-top">
              <div class="col-sm-3 hidden-xs">
                <h4 class="footerheading ">PRET MODE</h4>
                  <ul class="fLinks">
                    <li><a href="https://www.pretmode.com/about-us">About us</a></li>
                    <li><a href="https://www.pretmode.com/contact-us">Contact us </a></li>
                    <li><a href="https://www.pretmode.com/faq">FAQ's </a></li>
                    <li><a href="https://www.pretmode.com/coupon-partners">Coupon Partners </a></li>
                  </ul>
              </div>
              <div class="col-sm-3 hidden-xs">
                <h4 class="footerheading">PRODUCTS</h4>
                <ul class="fLinks">
                  <li><a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=1">Top Wear</a></li>
                  <li><a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=7">Bottom Wear</a></li>
                  <li><a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=14">Dresses</a></li>
                  <li><a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=15">Designer Dresses</a></li>
                  <li><a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=16">Ethnic</a></li>
                  <li><a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=17">Accessories</a></li>
                  <li><a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=22">Footwear</a></li>
                  <li><a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=178">Jumpsuits</a></li>
                </ul>
              </div>
              <div class="col-sm-3 hidden-xs">
                <h4 class="footerheading">POLICIES</h4>
                <ul class="fLinks">
          			<li><a href="https://www.pretmode.com/return-policy">return policy</a></li>
          			<li><a href="https://www.pretmode.com/terms-conditions">terms &amp; conditions</a></li>
          			<li><a href="https://www.pretmode.com/privacy-policy">privacy policy</a></li>
                </ul>
              </div>
              <!--<div class="col-sm-4">
                <h4 class="footerheading">Contact Us</h4>
                <ul class="fLinks">
                  <li><span class="sprite flocation"></span>201, 2nd Floor, Gagangiri, Mumbai, 400055</li>
                  <li><span class="sprite fcall"></span>Toll free: 1800-300-23456 (9 AM - 8 PM)</li>
                  <li><span class="sprite fmail"></span><a href="mailto:care@medibridge.com">care@medibridge.com</a></li>
                </ul>
              </div>-->
              <div class="col-sm-3">
               <!-- <h4 class="footerheading">Subscription</h4>
                <div class="subscriptionhld">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Please enter your email">
                    <span class="input-group-btn">
                    <button class="btn" type="button">Subscribe</button>
                    </span> </div>
                  <p class="mtb10">Register now to get updates on promotions and coupons.</p>
                </div>-->
                <h4 class="footerheading">Follow Us</h4>
                <ul class="social-icons">
                 <!-- <li><a href="" class="gmailicn sprite"></a></li>-->
                  <li><a href="https://www.facebook.com/pretmodeindia" target="_blank" class="facebbokicn sprite"></a></li>
                  <li><a href="https://twitter.com/pretmode" target="_blank"   class="twitericn sprite"></a></li>
                  <li><a href="https://www.instagram.com/pretmode/"  target="_blank"  class="instaicn sprite"></a></li>
                </ul>
              </div>
            </div>
             
          </div>
        </footer>
        
<!--popup on page load start-->
<div id="pageloadpopup" class="modal fade pageloadpopup ">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>-->
            <div class="modal-body">
				<p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                <a data-dismiss="modal" data-toggle="modal" href="#signin">Click</a>
            </div>
        </div>
    </div>
</div>
<!--popup on page load start-->

<!--signinpopup start-->
<div id="signin" class="modal fade" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Welcome to the all-new fashion dimension!</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6   col-xs-12 signup-form login-form">
            <div class="loginhld loginf">
              <h3> LOGIN</h3>
              <?php echo form_open('api/login', 'id="loginForm" class="form-add-edit" role="form" autocomplete="off"') ; ?>
                <div class="form-group">
                  <div class="errormsg"><span class="glyphicon glyphicon-alert"></span></div>
                  <div class="input input--sae">
                    <input class="input__field input__field--sae" type="text"  name="uName"/>
                    <label class="input__label input__label--sae"> <span class="input__label-content input__label-content--sae">Email address</span> </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="errormsg"><span class="glyphicon glyphicon-alert"></span></div>
                  <div class="input input--sae">
                    <input class="input__field input__field--sae" type="password" name="uPass" />
                    <label class="input__label input__label--sae"> <span class="input__label-content input__label-content--sae">Password</span> </label>
                  </div>
                </div>
                <div class="form-group">
                  <input name="" type="submit" value="Log In" class="btn pinkbtn ">
                </div>
              <?php echo form_close() ; ?>
              <a href="javascript:void(0);" class="forgot-password fpassword-link" >Forgot password ?</a>
              <div class="newcustomertext">NOT REGISTERED? <a class="signupsectionbtn" href="#" >SIGN UP</a> </div>
            </div>
            <div class="loginhld retrieve-password">
              <h3 class="text-uppercase">Forgot Password?</h3>
              <p>Enter your email address or mobile number and we will send you a link to reset your password.</p>
              <div class="form-group">
                <div class="input input--sae">
                  <input class="input__field input__field--sae" type="text" id="input-17" />
                  <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Email address or Mobile number</span> </label>
                </div>
              </div>
              <div class="form-group">
                <input name="" type="button" value="SEND" class="btn pinkbtn ">
              </div>
              <div class="newcustomertext">New Customer? <a class="signupsectionbtn" href="#" >Register FREE</a> </div>
            </div>
            <div class="loginhld registerwrap">
              <?php echo form_open('api/registration', 'id="registerForm" class="form-add-edit" role="form" autocomplete="off"') ; ?>
              <div class="">
                <h3 class="text-uppercase"> Register</h3>
                <h5 id="errorMsg" class="hidden">User already registered</h5>
                <div class="form-group">
                  <div class="input input--sae">
                    <input class="input__field input__field--sae" type="text" name="fname" required/>
                    <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Name</span> </label>
                  </div>
                </div>
                  <div class="form-group">
                  <div class="input input--sae">
                    <input class="input__field input__field--sae" type="text" name="lname" required/>
                    <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Lastname</span> </label>
                  </div>
                </div>
                <div class="form-group" id="regEmail">
                  <div class="input input--sae">
                    <input class="input__field input__field--sae" type="text" name="email" required/>
                    <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Email Id</span> </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input input--sae">
                    <input class="input__field input__field--sae" type="text" name="mobile" required/>
                    <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Mobile No</span> </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input input--sae">
                    <input class="input__field input__field--sae" type="password" name="password" required/>
                    <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Password</span> </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input input--sae">
                    <input class="input__field input__field--sae" type="password" id="input-17" name="conpassword" required/>
                    <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Confirm Password</span> </label>
                  </div>
                </div>
                <div class="form-group text-left">
                  <label class="text-left">
                    <input name="" type="checkbox" value="" required>
                    I agree to pretmode.com </label>
                  <a href="" class="termstext">Terms & Condition</a>
                </div>
                <div class="form-group">
                  <input name="" type="submit" value="Register Now" class="btn pinkbtn ">
                </div>
                <?php echo form_close(); ?>
                <div class="newcustomertext ">ALREADY REGISTERED? <a class="signinsectionbtn" href="#"   >SIGN IN</a></div>
                <div class="otpwrap">
                  <h3>Enter One Time Password</h3>
                  <p>One Time Password (OTP) has been sent to your mobile *******818, please enter the same here to login</p>
                  <div class="form-group">
                    <div class="input input--sae">
                      <input class="input__field input__field--sae" type="text" id="input-17" />
                      <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">OTP</span> </label>
                    </div>
                  </div>
                  <div class="resendotp">Resend OTP</div>
                  <div class="form-group">
                    <input name="" type="button" value="Confirm" class="btn pinkbtn ">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <span class="signup-seperator">OR</span>
          <div class="col-sm-6   col-xs-12 signup-other">
            <div class="hybridauth-widget-wrapper">
              <ul class="hybridauth-widget">
                <li><a href="#" title="Facebook" class="hybridauth-widget-provider hybridauth-onclick-current hybridauth-onclick-processed hybridauth-provider-processed" > <small></small> <span class="hybridauth-icon facebook hybridauth-icon-zocial hybridauth-facebook hybridauth-facebook-zocial zocial icon" title="Facebook">Sign in with facebook</span></a> </li>
                <li><a href="#" title="Google" class="hybridauth-widget-provider hybridauth-onclick-current hybridauth-onclick-processed hybridauth-provider-processed" > <small></small> <span class="hybridauth-icon google hybridauth-icon-zocial hybridauth-google hybridauth-google-zocial zocial icon" title="Google">Sign in with Google</span></a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--signinpopup end-->

<div class="loader">
  <div class="spinner">
    <div class="double-bounce1"></div>
    <div class="double-bounce2"></div>
  </div>
</div>

  <a href="#" class="scrollup" style=""></a> 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script> 
  <!--<script src="js/bootstrap-hover-dropdown.min"></script>--> 
  <script src="<?php echo site_url('assets/js/owl.carousel.min.js'); ?>"></script> 
  <!--Product details -->
  <script src="<?php echo site_url('assets/js/jquery.ez-plus.js'); ?>"></script>    
  <!--input field-->
  <script src="<?php echo site_url('assets/js/classie.js'); ?>"></script>
  <!--filter scroll--> 
  <script src="<?php echo site_url('assets/js/jquery.slimscroll.min.js'); ?>"></script>

  <script src="<?php echo site_url('assets/js/jquery.fancybox.pack.js'); ?>"></script>

  <script src="<?php echo site_url('assets/js/main-front.js'); ?>"></script>

  <script src="<?php echo site_url('assets/js/theia-sticky-sidebar.js'); ?>"></script>
	</body>
</html>