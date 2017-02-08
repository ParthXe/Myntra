<?php
include 'header.php';
?>
<div class="container">
  <div class="row">
    <div class="col-sm-7 p0 loginLeftPanel text-center"> 
      <!-- Nav tabs -->
<!--      <ul class="nav nav-tabs " role="tablist">
        <li role="" class="active "><a href="#loginbar" aria-controls="loginbar" role="tab" data-toggle="tab">Sign In</a></li>
        <li role="" class=""><a href="#signupbar" aria-controls="signupbar" role="tab" data-toggle="tab">Register</a></li>
      </ul>-->
      
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="loginbar">
          <div class="loginhld loginf">
          <h3> Login</h3>
            <div class="form-group errormsgwrap">
            <div class="errormsg"><span class="glyphicon glyphicon-alert"></span></div>
              <div class="input input--sae">
                <input class="input__field input__field--sae" type="text" id="input-17" />
                <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Email address</span> </label>
              </div>
              
            </div>
            <div class="form-group errormsgwrap">
             <div class="errormsg"><span class="glyphicon glyphicon-alert"></span></div>
              <div class="input input--sae">
                <input class="input__field input__field--sae" type="password" id="input-17" />
                <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Password</span> </label>
              </div>
               
            </div>
            
            <div class="form-group">
              <input name="" type="button" value="Log In" class="btn orangebtn ">
            </div>
            <a href="javascript:void(0);" class="forgot-password fpassword-link" >Forgot password ?</a>
            <div class="newcustomertext">New to Medibridge?
            <a class="" href="#signupbar" data-toggle="tab">Register Now</a> </div></div>
          <div class="loginhld retrieve-password">
            <h4 class="text-uppercase">Forgot Password?</h4>
            <p>Enter your email address or mobile number and we will send you a link to reset your password.</p>
            <div class="form-group">
              <div class="input input--sae">
                <input class="input__field input__field--sae" type="text" id="input-17" />
                <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Email address or Mobile number</span> </label>
              </div>
            </div>
            <div class="form-group">
              <input name="" type="button" value="SEND" class="btn orangebtn ">
            </div>
            <div class="newcustomertext">New Customer?
            <a class="" href="#signupbar" data-toggle="tab">Register FREE</a> </div></div>
        </div>
        <div role="tabpanel" class="tab-pane" id="signupbar">
          <div class="loginhld">
          <div class="registerwrap">
          <h3> Register</h3>
            <div class="form-group">
              <div class="input input--sae">
                <input class="input__field input__field--sae" type="text" id="input-17" />
                <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Name</span> </label>
              </div>
               
            </div>
           
            <div class="form-group">
              <div class="input input--sae">
                <input class="input__field input__field--sae" type="text" id="input-17" />
                <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Email Id</span> </label>
              </div>
            </div>
            <div class="form-group">
              <div class="input input--sae">
                <input class="input__field input__field--sae" type="text" id="input-17" />
                <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Mobile No</span> </label>
              </div>
            </div>
            <div class="form-group">
              <div class="input input--sae">
                <input class="input__field input__field--sae" type="password" id="input-17" />
                <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Password</span> </label>
              </div>
            </div>
            <div class="form-group">
              <div class="input input--sae">
                <input class="input__field input__field--sae" type="password" id="input-17" />
                <label class="input__label input__label--sae" for="input-17"> <span class="input__label-content input__label-content--sae">Confirm Password</span> </label>
              </div>
            </div>
            <div class="form-group">
              <input name="" type="button" value="Register Now" class="btn orangebtn ">
            </div>
            <div class="form-group text-left">
              <label class="text-left">
                <input name="" type="checkbox" value="">
                I agree to Medibridge.com </label>
              <a href="" class="termstext">Terms & Condition</a> </div>
            <div class="newcustomertext ">Already Registered?
            <a class="" href="#loginbar" data-toggle="tab">Log In</a></div> 
            </div>
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
              <input name="" type="button" value="Confirm" class="btn orangebtn ">
            </div>
            </div>
            </div>
        </div>
      </div>
    </div>
    <div class="col-sm-5 loginRightPanel">
      <h3>	Our amazing features</h3>
       
          <h4>General User</h4>
          <ul class="grayticklist">
            <li>View and compare all product details.</li>
            <li>Dedicated relationship manager. </li>
            <li>Reorder with one click.</li>
            <li>Get Bank Credit</li>
          </ul>
        
          <h4 class="featurelogin">Featured User</h4>
          <ul class="grayticklist">
            <li>Get access to our curated shopping list.</li>
            <li>Create your own customized shopping lists </li>
            <li>Huge discounts on Shopping lists  </li>
            <li>Provide multiple addresses for single order. </li>
          </ul>
          <a href="" class="applynow">Apply Now</a>
        
    </div>
  </div>
</div>
<?php
include 'footer-top.php';
?>
<?php
include 'footer.php';
?>