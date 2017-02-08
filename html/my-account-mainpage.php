<?php
include 'header.php';
?>
<!--bredcrumbs-->
<ol class="breadcrumb container">
  	<li><a href="#">Home</a></li>
  	<li><a href="#">My Account </a></li>
  	<li class="active">My Order</li>
</ol>
<div class="container accountDetailssec usersec">
  	<div class="p20 innerpage"> 
    	<!--My Account details-->
        
    	<div class="row">
      		<div class="col-md-3 col-sm-3 order-part"> <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active"><a href="#profile" data-toggle="tab" class="accounticn"><span class="icn"></span> My Profile</a></li>
                    <li><a href="#orders" data-toggle="tab" class="ordersicn"><span class="icn"></span> My Orders</a></li>
                    <li><a href="#sellinglist" data-toggle="tab" class="myproductsicn"><span class="icn"></span> MY SELLING HISTORY</a></li>
                    <li><a href="#wallet" data-toggle="tab" class="walleticn"><span class="icn"></span> Wallet</a></li>
                    <li><a href="#" class="logouticn" ><span class="icn"></span> Logout</a></li>
    
                </ul>
            </div>
            <div class="col-md-9 col-sm-9 my_acc">
                <!-- Tab panes -->
                <div class="tab-content tabs-right  myaccountright" id="buyerSec">
                    <div class="tab-pane active" id="profile">
                        <?php include 'myaccount/acc_my_profile.php'; ?>
                    </div>
                    <div class="tab-pane" id="orders">
                    	<?php include 'myaccount/acc_my_orders.php'; ?>
                    </div>
                    <div class="tab-pane" id="sellinglist">
                    	<?php include 'myaccount/myselling.php'; ?>
                    </div>
                    <div class="tab-pane" id="wallet">
                    	<?php include 'myaccount/wallet.php'; ?>
                    </div>
                    <div class="tab-pane" id="sellinghistory">
                    	<?php include 'myaccount/sellinghistory.php'; ?>
                    </div>
                    <div class="tab-pane" id="returnReplace">
                   	  <?php include 'myaccount/return-or-replace.php'; ?>
                    </div>
                     <div class="tab-pane" id="trackorders">
                   	  <?php include 'myaccount/track-orders.php'; ?>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
    	</div>
  	</div>  
</div>
<!--end-->
 <div id="bankForm" class="modal fade" role="dialog">
        <div class="modal-dialog"> 
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h4 class="modal-title text-center" ><b>Add Bank Details</b></h4>
            </div>
            <div class="modal-body">
              <div id="custom_error_seller" class="error_place_holder"> </div>
              <div class="bankdetailbox uniqform">
                <div class="form-group">
                  <div class="input input--sae">
                    <input class="input__field input__field--sae" type="text"   />
                    <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Bank name *</span> </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input input--sae">
                    <input class="input__field input__field--sae" type="text"   />
                    <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Account Number *</span> </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input input--sae">
                    <input class="input__field input__field--sae" type="text"   />
                    <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">IFSC code *</span> </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input input--sae">
                    <input class="input__field input__field--sae" type="text"   />
                    <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Branch Name *</span> </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input input--sae">
                    <input class="input__field input__field--sae" type="text"   />
                    <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Account Holders Name *</span> </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input input--sae">
                    <input class="input__field input__field--sae" type="text"   />
                    <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Account Holders Name *</span> </label>
                  </div>
                </div>
                <div class="formlabel">Pancard Xerox</div>
                <div class="form-group">
                  <input class="form-control form-file" type="file" id="edit-file" name="files[]" size="60">
                  <small>JPG's, GIF's, and PNG's only, 10MB Max Size</small> </div>
                <div class="form-group">
                  <input name="" type="button" value="SUBMIT" class="btn black-btn borderround ">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
include 'footer.php';
?>
