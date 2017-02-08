<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pretmode</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>">
  <!-- Carousel -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/owl.carousel.css'); ?>">  
  <!-- Jquery Fancybox -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/jquery.fancybox.css'); ?>">  
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/style-front.css'); ?>">  
  <!-- Menu Stylesheet -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/menu.css'); ?>">
  <!-- Responsive Stylesheet -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/style-res.css'); ?>">
  <!-- EZ Stylesheet -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/style-res.css'); ?>">

  <link rel="stylesheet" type="text/css" href="http://fancyapps.com/fancybox/source/jquery.fancybox.css" media="screen" />

  <!--<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">-->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  <script type="text/javascript">
    var base_url = "<?php echo site_url(); ?>";
    var usr_id = <?php echo (isset($session['usr_id'])) ? $session['usr_id'] : 0; ?>;
  </script>

</head>
<body>
  <!--mobile menu start -->
  <div class="menu-container">
    <div class="menumbl"> 
      
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#mobilemenuc" aria-controls="mobilemenuc" role="tab" data-toggle="tab">SHOP</a></li>
        <li role="presentation"><a href="#usermobile" aria-controls="usermobile" role="tab" data-toggle="tab">YOUR PROFILE</a></li>
      </ul>
      
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="mobilemenuc">
          <div class="scrollmbl">
            <div class="catDiv"> <span>shop by categories</span> </div>
            <ul class="">
              <li class="catlnk"> <a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=1"><img src="https://www.pretmode.com/sites/default/files/icons-filter/top-wear.svg">Top Wear</a></li>
              <li class="catlnk"> <a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=7"><img src="https://www.pretmode.com/sites/default/files/icons-filter/bottom-wear.svg">Bottom Wear</a></li>
              <li class="catlnk"> <a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=14"><img src="https://www.pretmode.com/sites/default/files/icons-filter/dresses.svg">Dresses</a></li>
              <li class="catlnk"> <a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=15"><img src="https://www.pretmode.com/sites/default/files/icons-filter/designer-wear.svg">Designer Wear</a></li>
              <li class="catlnk"> <a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=178"><img src="https://www.pretmode.com/sites/default/files/icons-filter/jumpsuits.svg">Jumpsuits</a></li>
              <li class="catlnk"> <a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=16"><img src="https://www.pretmode.com/sites/default/files/icons-filter/ethnic.svg">Ethnic</a></li>
              <li class="catlnk"> <a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=17"><img src="https://www.pretmode.com/sites/default/files/icons-filter/handbags.svg">Handbags</a></li>
              <li class="catlnk"> <a href="https://www.pretmode.com/store/products/view?term_node_tid_depth=22"><img src="https://www.pretmode.com/sites/default/files/icons-filter/footwear.svg">Footwear</a></li>
            </ul>
            <div class="catDiv"> <span>Quick links</span> </div>
            <ul>
              <li class="no-sub"> <a href="sell.php">SELL YOUR CLOSET</a> </li>
              <li class="no-sub"> <a href="about-us.php">ABOUT US</a> </li>
              <li class="no-sub"> <a href="contact-us.php">CONTACT US</a> </li>
              <!-- <li class="no-sub"> <a href="">CAREER</a> </li> -->
              <li class="no-sub"> <a href="faq.php">FAQS</a> </li>
              <li class="no-sub"> <a href="return-policy.php">RETURN PRODUCT</a> </li>
              <li class="no-sub"> <a href="terms-conditions.php">TERMS &amp; CONDITIONS</a> </li>
              <li class="no-sub"> <a href="privacy-policy.php">PRIVACY POLICY</a> </li>
            </ul>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="usermobile">
          <ul>
            <li class="usernameal no-sub"> Hi, Seema</li>
            <li class="no-sub"> <a href="#">Download app</a> </li>
            <li class="no-sub"> <a href="#">Track Order</a> </li>
            <li class="no-sub"> <a href="#">Sign In</a> </li>
            <li class="no-sub"> <a href="#">Signup</a> </li>
            <li class="no-sub"><a href=""> My Account</a></li>
            <li class="no-sub"><a href=""> My Orders</a></li>
            <li class="no-sub"><a href=""> My Profile</a></li>
            <li class="no-sub"><a href=""> Sign Out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--mobile menu end--> 

  <!--Desktop top menu with logo start-->
  <div class="header-container"> 
    <!--Top menu-->
    <div class=" toplinks hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 col-xs-6 col-md-6">
            <div class="pull-left ">
              <ul class="userMenu">
                <li>Customer Care  : 8080-638738 </li>
                <li>|</li>
                <li><a href="#"><img src="<?php echo site_url('assets/images/svg/smartphone-call.svg'); ?>">Download App</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-5 col-xs-6 col-md-6">
            <div class="pull-right">
              <ul class="userMenu">
                <li><a href="my-account-mainpage.php">Track Order</a></li>
                <li><a href="sell.php">Seller</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <header id="topNavmain">
      <div class="container">
        <div class="row"> 
          <!-- Logo -->
          <div class="col-sm-5 col-md-4 col-xs-9  ">
            <div class="hamburger-menu">
              <div class="hamburger"><span></span> <span></span> <span></span> <span></span></div>
            </div>
            <!--<div id="menu-toggle">
              <div id="hamburger"> <span></span> <span></span> <span></span> </div>
              <div id="cross"> <span></span> <span></span> </div>
            </div>-->
            <div class="logo"> <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url('assets/images/svg/logo.svg'); ?>" class="img-responsive"> </a> </div>
          </div>
          <!-- End Logo --> 
          <!-- Search Form -->
          <div class="col-sm-7 col-md-8 col-xs-3 ">
            <div class="input-prepend topsearchbar hidden-xs"> </div>
            <!-- End Search Form --> 
            <!-- Shopping Cart List -->
            <ul class="top-nav-links">
              <li class="signinbar wishlistbar dropdown hidden-xs"> <a href="#"  ><!--<span style="display: block;" class="whishlistc" id="">0</span>--><i class=""><img src="<?php echo site_url('assets/images/svg/wishlist.svg'); ?>"></i>
                <h5>Wishlist</h5>
                </a></li>
                <?php if(isset($session['logged_in']) && $session['logged_in'] == 1) : ?>
                  <li class="signinbar afterSignin dropdown hidden-xs">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class=""><img src="<?php echo site_url('assets/images/svg/user.svg'); ?>"></i>
                    <h5>Hi <?php echo $session['usr_fname']; ?>!</h5>
                    </a>
                    <ul class="dropdown-menu listdropdown ">
                      <li><a href="<?php echo site_url('user'); ?>">My Account</a></li>
                      <li><a href="<?php echo site_url('user/orders'); ?>">My Orders</a></li>
                      <li><a href="<?php echo site_url('admin/login/logout'); ?>">Sign Out</a></li>
                    </ul>
                  </li>
                <?php else: ?>
                  <li class="signinbar  dropdown hidden-xs"> <a href="#signin" role="button" class="" data-toggle="modal" data-target="#signin"><i class=""><img src="<?php echo site_url('assets/images/svg/sign-in.svg'); ?>"></i>
                    <h5>Sign In</h5>
                    </a>
                  </li>
                <?php endif; ?>
              <li class="cartcounter dropdown cartmbl">
              <!--<a href="checkout-shoppingcart.php" class="dropdown-toggle" ><i class="sprite"></i><span class="cartcounttop">100</span></a>-->

              <div class="cartmenu reset_count"> <a href="<?php echo site_url('cart'); ?>" class="countercarttop uc-ajax-cart-alt-processed"> <span class="" id="cartItemCount"><?php echo (isset($cart['products'])) ? sizeof($cart['products']) : 0; ?></span></a>
                <ul class="dropdown-menu hidden-xs cart_block">
                  <li>
                  <div class="cart_block_list">
                    <p class="recent_items " >There are <span class="ajax_cart_quantity"><?php echo (isset($cart['products'])) ? sizeof($cart['products']) : 0; ?></span> <span>item(s)</span> in your cart</p>
                    <?php $total = []; ?>
                    <div id="popCart">
                      <?php if(isset($cart['products'])) : ?>
                        <?php foreach ($cart['products'] as $product) : ?>
                          <?php $total[] =  $product['sell_price']; ?> 
                          <div class="cartpopuphgt" id="cart_pop_row_<?php echo isset($product['pvar_id']) ? $product['pvar_id'] : NULL ;?>">
                            <div class="products">
                              <dt class="first_item last_item">
                              <a class="cart-images" href="<?php echo site_url('product/details/'.$product['product_slug']); ?>" title=" "> <img src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $product['images']; ?>" alt=" " class="mCS_img_loaded"></a>
                              <div class="cart-info">
                                <ul class="orderw">
                                  <li class="">
                                    <div class="heading mb10">
                                      <div class="item-head-main">
                                        <a href="<?php echo site_url('product/details/'.$product['product_slug']); ?>" class="item-heading"><?php echo isset($product['brand']) ? $product['brand'] : "NA"; ?></a><br>
                                        <a href="<?php echo site_url('product/details/'.$product['product_slug']); ?>" class="item-brief text-capitalize"><?php echo isset($product['title']) ? $product['title'] : "NA"; ?></a>
                                      </div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="pricehld">
                                      <div class="perPiece"><span class="rupee"></span><?php echo isset($product['sell_price']) ? $product['sell_price'] : "NA"; ?></div>
                                      <span class="oldPrice"><span class="rupee"></span><?php echo isset($product['list_price']) ? $product['list_price'] : "NA"; ?> </span> <span class="discountPrice"><?php echo isset($product['discount']) ? $product['discount'] : "NA"; ?>% Off</span> </div>
                                  </li>
                                  <li>
                                  <dd>
                                  Colour  &  size :
                                  </dd>
                                  <dt>
                                    <ul class="product_color">
                                    <?php foreach ($product['color'] as $key => $color) : ?> 
                                      <li style="background-color:<?php echo $color['hex']; ?>; "></li>
                                   <?php endforeach; ?>
                                    </ul>
                                    <span class="sizescart"><?php echo isset($product['size']) ? $product['size'] : "NA"; ?></span> </dt>
                                  </li>
                                </ul>
                              </div>
                              <span class="remove_link removeitem" data-pvar-id="<?php echo isset($product['pvar_id']) ? $product['pvar_id'] : NULL ;?>" > <img src="<?php echo site_url('assets/images/svg/remove.svg'); ?>"> </span>
                              </dt>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </div>
                    <?php if(!empty($cart)) : ?>
                <div class="price-total mb5"> <span class="price_text">Total : </span> <span class="price cart_block_total ajax_block_cart_total"><b><span class="rupee"></span><?php echo array_sum($total); ?></span> </b></div>
                  <div class="buttons"> <a href="<?php echo site_url('cart'); ?>" class="btn black-btn col-xs-6" href="#" title="View my shopping cart" rel="nofollow"> VIEW CART </a> <a class="btn pinkbtn button button-small col-xs-6" href="#" title="View my shopping cart" rel="nofollow"> CHECKOUT </a> </div>
                </div>
                    <?php endif; ?>
                  </div>
                  </li>
                </ul>
              
            </div>
              </li>
            </ul>
          </div>
          <!-- End Shopping Cart List --> 
        </div>
      </div>
    </header>
  </div>
  <!--Desktop top menu with logo end--> 

  <!--Mobile menu start-->
  <nav class="mainnavbar">
    <div class="container header_v3">
      <div class="spmegamenu">
        <nav class="navbar hidden-sm hidden-xs ">
          <div class="navbar-button">
            <button type="button" id="show-megamenu" data-toggle="collapse" data-target="#sp-megamenu" class="navbar-toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div id="sp-megamenu" class="mega sp-megamenu clearfix">
            <div class="sp-megamenu-container ">
              <ul class="nav navbar-nav  menu sp_lesp level-1">
                <li class="item-1 mega_type1 parent"><a href="#" >BUY</a>
                  <div class="dropdown-menu" >
                    <ul class="level-2">
                      <li class="item-2 group parent col-sm-6" ><a href="#" class="dropdown-header">SHOP BY PRODUCT</a>
                        <div class="dropdown-menu">
                          <ul class="col-sm-6 p0">
                            <li><a href="<?php echo site_url('store/category/topwear'); ?>">TOP WEAR</a></li>
                            <li><a href="<?php echo site_url('store/category/bottomwear'); ?>">BOTTOM WEAR</a></li>
                            <li><a href="<?php echo site_url('store/category/dresses'); ?>">DRESSES</a></li>
                            <li><a href="<?php echo site_url('store/category/designer-wear'); ?>">DESIGNER WEAR</a></li>
                            <li class="category-thumbnail">
                              <div></div>
                            </li>
                          </ul>
                          <ul class="col-sm-6 p0">
                            <li><a href="<?php echo site_url('store/category/jumpsuits'); ?>">JUMPSUIT</a></li>
                            <li><a href="<?php echo site_url('store/category/ethinic'); ?>">ETHNIC</a></li>
                            <li><a href="<?php echo site_url('store/category/handbags'); ?>">HANDBAGS</a></li>
                            <li><a href="<?php echo site_url('store/category/footwear'); ?>">FOOTWEAR</a></li>
                            <li class="category-thumbnail">
                              <div></div>
                            </li>
                          </ul>
                        </div>
                        <span class="grower close"> </span></li>
                      <li class="item-2 group parent col-sm-3"><a href="#" class="dropdown-header">SHOP BY EDIT</a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="<?php echo site_url('store/category/topwear?from_price=100&to_price=499') ?>">THE 499 STORE</a></li>
                            <li><a href="<?php echo site_url('store/category/topwear?from_price=100&to_price=999') ?>">THE 999 STORE</a></li>
                            <li><a href="<?php echo site_url('store/category/topwear?brand=zara') ?>">ZARA STORE</a></li>
                            <li><a href="<?php echo site_url('store/category/topwear?brand=forever21') ?>">FOREVER 21 STORE</a></li>
                            <li class="category-thumbnail">
                              <div></div>
                            </li>
                          </ul>
                        </div>
                        <span class="grower close"> </span></li>
                      <li class="item-2 group parent col-sm-3"><a href="#" class="dropdown-header">SHOP BY BRAND</a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="<?php echo site_url('store/category/topwear?brand=mango') ?>">MANGO</a></li>
                            <li><a href="<?php echo site_url('store/category/topwear?brand=ms') ?>">MARKS &amp; SPENCER</a></li>
                            <li><a href="<?php echo site_url('store/category/topwear?brand=gas') ?>">GAS</a></li>
                            <li class="category-thumbnail">
                              <div></div>
                            </li>
                          </ul>
                        </div>
                        <span class="grower close"> </span></li>
                    </ul>
                  </div>
                </li>
                <li class="item-1 "><a href="sell.php" > Sell your closet</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </nav>
  <!--Mobile menu end--> 

  <!--Mobile filter start-->
  <div id="dialog" style="" align="center">
    <div class="filterform">
      <div class="filterformmin">
        <div class="actionfilter"> <a class="backbtn pull-left" id="btnbackfilter"><img src="<?php echo site_url('assets/images/back-black.svg'); ?>"> BACK </a>
          <input type="submit" id="" value="APPLY" class="btn pinkbtn  pull-right ">
          <input type="reset" id="btnclrfilter" value="Clear" class="pull-right">
        </div>
        <!-- tabs left -->
        <div class="tabbable tabs-left bootstrap-tabs-processed">
          <ul class="nav nav-tabs">
            <li class="active"> <a href="#a" data-toggle="tab">Type</a></li>
            <li> <a href="#b" data-toggle="tab">Size</a></li>
            <li> <a href="#c" data-toggle="tab">Price</a></li>
            <li> <a href="#d" data-toggle="tab">Color</a></li>
            <li> <a href="#e" data-toggle="tab">Brand</a></li>
            <li> <a href="#f" data-toggle="tab">Condition</a></li>
          </ul>
          <div class="tab-content text-left" > 
            
            <!-- //////////////////////// Type Field /////////////////////////// -->
            <div class="tab-pane active" id="a">
              <ul>
                <li class="checkbox">
                  <label>
                    <input name="" type="checkbox" value=""  >
                    TOPS </label>
                    
                </li>
                <li class="checkbox">
                  <label>
                    <input name="" type="checkbox" value=""  >
                    TOPS </label>
                    
                </li>
              </ul>
            </div>
            <!-- //////////////////////// Size Field /////////////////////////// -->
            <div class="tab-pane" id="b">
              <ul>
                <li class="checkbox">
                  <label>
                    <input name="" type="checkbox" value=""  >
                    TOPS </label>
                </li>
              </ul>
            </div>
            <!-- //////////////////////// Price Field /////////////////////////// -->
            <div class="tab-pane" id="c">
              <ul>
                <li class="checkbox">
                  <label>
                    <input name="" type="checkbox" value=""  >
                    TOPS </label>
                </li>
              </ul>
            </div>
            <!-- //////////////////////// Color Field /////////////////////////// -->
            <div class="tab-pane" id="d">
              <ul>
                <li class="radio">
                  <label>
                    <input name="1" type="radio" value="1"  >
                    TOPS </label>
                </li>
                <li class="radio">
                  <label>
                    <input name="1" type="radio" value="2"  >
                    TOPS </label>
                </li>
              </ul>
            </div>
            <!-- //////////////////////// Brand Field /////////////////////////// -->
            <div class="tab-pane" id="e">
              <ul>
                <li class="checkbox">
                  <label>
                    <input name="" type="checkbox" value=""  >
                    TOPS </label>
                </li>
              </ul>
            </div>
            <!-- //////////////////////// Condition Field /////////////////////////// -->
            <div class="tab-pane" id="f">
              <ul>
                <li class="checkbox">
                  <label>
                    <input name="" type="checkbox" value=""  >
                    TOPS </label>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /tabs --> 
      </div>
    </div>
    <!-- /container --> 
  </div>
  <!--Mobile filter end-->

