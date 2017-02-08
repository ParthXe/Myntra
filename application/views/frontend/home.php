<div class="contentwrap"></div>
<div class="container"> 
  
  <!--Top categories and banner-->
  <div class="row">
    
     
    <div class="col-sm-12 homepageslider">
        <div class="owl-carousel">
          <div class="item"><img src="assets/images/banner/banner_4.jpg" class="imgresponsive" /> </div>
        </div>
    </div>
  </div>
  
  <!--Brand start-->
  <div class="brandadd">
  <div class="">
      <div class="brandaddimg col-xs-6"><a href="/store/products/below-499"><img class="img-responsive" src="https://www.pretmode.com/sites/all/themes/thrift/images/brands-add/img1.jpg"></a></div>
      <div class="brandaddimg col-xs-6"><a href="/store/products/below-999"><img class="img-responsive" src="https://www.pretmode.com/sites/all/themes/thrift/images/banner/999store.jpg"></a></div>
      <div class="brandaddimg col-xs-6"><a href="/store/products/view?term_node_tid_depth=15"><img class="img-responsive" src="https://www.pretmode.com/sites/all/themes/thrift/images/banner/designer-lounge.jpg"></a></div>
      <div class="brandaddimg col-xs-6"><a href="/store/products/view?term_node_tid_depth=1&amp;field_brand_tid%5B%5D=596&amp;field_brand_tid%5B%5D=549&amp;field_brand_tid%5B%5D=159&amp;field_brand_tid%5B%5D=190&amp;field_brand_tid%5B%5D=430&amp;field_brand_tid%5B%5D=609&amp;field_brand_tid%5B%5D=146&amp;field_brand_tid%5B%5D=398&amp;field_brand_tid%5B%5D=291&amp;field_brand_tid%5B%5D=213&amp;field_brand_tid%5B%5D=203&amp;field_brand_tid%5B%5D=211&amp;field_brand_tid%5B%5D=249&amp;field_brand_tid%5B%5D=370&amp;field_brand_tid%5B%5D=375&amp;field_brand_tid%5B%5D=193&amp;field_brand_tid%5B%5D=150&amp;sell_price%5Bmin%5D=&amp;sell_price%5Bmax%5D="><img class="img-responsive" src="https://www.pretmode.com/sites/default/files/High-Street-Fashion.jpg"></a></div>
    </div>
  </div>
  <!--Brand end-->
  
</div>

<div class="container"> 
  
  <!--ProductSlider start-->
  <div class="ProductSlider">
    <div class="pagetlt text-center">
      <h1>Featured Products</h1>
    </div>
    <div class="owl-carousel">
      <?php foreach ($featured as $feature) : ?>


  		  <div class="item">
            <div class="productwrapper">
             
            
            <div class="wishlist" ><span  class="wishlist-icon glyphicon glyphicon-heart-empty tooltiptop" data-toggle="tooltip" data-placement="top" title="Save for later"></span></div>
            <div class="tag-label"> <?php echo isset($feature['condition']) ? $feature['condition'] : "NA"; ?></div>
             
              <a href="" class="product-img"> <img src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $feature['images']; ?>" class="img-responsive" ></a>
              <div class="product-wrap">
                <div class="product-code"><?php echo isset($feature['brand']) ? $feature['brand'] : "NA"; ?></div>
                <div class="">
                  <div class="col-sm-8 col-xs-12 p0 ">
                    <h4 class="product-name"><a href="<?php echo site_url('product/details/'.$feature['product_slug']); ?>"><?php echo isset($feature['prod_title']) ? $feature['prod_title'] : "NA"; ?></a> </h4>
                  </div>
                  <div class="col-sm-4 col-xs-12 p0 ">
                    <ul class="sizeswrap">
                      <li> Size: <span><?php echo isset($feature['size']) ? $feature['size'] : "NA"; ?></span> </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="pricehld">
                <div class="perPiece"><span class="rupee"></span><?php echo isset($feature['sell_price']) ? $feature['sell_price'] : "NA"; ?></div>
                <span class="oldPrice"><span class="rupee"></span><?php echo isset($feature['list_price']) ? $feature['list_price'] : "NA"; ?></span> <span class="discountPrice"><?php echo isset($feature['discount']) ? $feature['discount'] : "NA"; ?>% Off</span> </div>
            </div>
          </div>
        <?php endforeach; ?>

    </div>
  </div>
  <!--featureSlider end--> 
</div>