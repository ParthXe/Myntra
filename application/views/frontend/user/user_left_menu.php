<!--bredcrumbs-->
<ol class="breadcrumb container">
  	<li><a href="#">Home</a></li>
  	<li><a href="#">My Account </a></li>
  	<li class="active"><?php echo $page_title; ?></li>
</ol>
<div class="container accountDetailssec usersec">
  	<div class="p20 innerpage"> 
    	<!--My Account details-->
        
    	<div class="row">
      		<div class="col-md-3 col-sm-3 order-part"> <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="<?php echo ($active_tab == 'profile') ? 'active' : ''; ?>"><a href="<?php echo site_url('user'); ?>" class="accounticn"><span class="icn"></span> My Profile</a></li>
                    <li class="<?php echo ($active_tab == 'order') ? 'active' : ''; ?>"><a href="<?php echo site_url('user/orders'); ?>" class="ordersicn"><span class="icn"></span> My Orders</a></li>
                    <li class="<?php echo ($active_tab == 'selling') ? 'active' : ''; ?>"><a href="<?php echo site_url('user/seller'); ?>" class="myproductsicn"><span class="icn"></span> MY SELLING HISTORY</a></li>
                    <li class="<?php echo ($active_tab == 'wallet') ? 'active' : ''; ?>"><a href="<?php echo site_url('user/wallet'); ?>" class="walleticn"><span class="icn"></span> Wallet</a></li>
                    <li><a href="<?php echo site_url('admin/login/logout'); ?>" class="logouticn" ><span class="icn"></span> Logout</a></li>
                </ul>
            </div>