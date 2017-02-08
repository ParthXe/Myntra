<div class="contentwrap"></div>
<div class="container ">
  <div class="productdtlsecwrap">
    <!--bredcrumbs-->
    <ol class="breadcrumb ">
      <li><a href="#">Home</a></li>
      <li><a href="#"> BUY </a></li>
      <li class=""><a href="#">TOP WEAR</a></li>
      <li class="active">Chanel</li>
    </ol>

    <!--product details start top-->
    <div class="view-people">Only <span>1 piece</span> left / <span>9</span> people viewing this item</div>
    <div class="row productdtlsec">
      <div class="col-sm-6    productviewer products_images"> 
        <div class="row">
          <!--Thumbnail image viewer-->
          <?php
            // echo "<pre>";
            //   print_r($product['images'][0]->prd_img_uri);
            // echo "</pre>";
            // exit();
          ?>
          <div id="smallGallery" class="col-sm-4">
            <?php foreach ($product['images'] as $image) : ?>
              <a href="#" data-image="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $image->prd_img_uri; ?>" data-zoom-image="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $image->prd_img_uri; ?>">
                <img id="img_01" src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $image->prd_img_uri; ?>"/>
              </a>
            <?php endforeach; ?>
          </div>
          <!--Main image viewer-->
          <div class="productzoomwrap col-sm-8">
            <img class="img-responsive" id="product-zoom" src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $product['images'][0]->prd_img_uri; ?>" data-zoom-image="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $product['images'][0]->prd_img_uri; ?>"/>
            <p class="txtinfocolor">*actual product colors may vary  from colors shown on your monitor.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 productviewerdisc">
        <div class="rental-proddetails">
          <h1 class="productname"><?php echo isset($product['brand']) ? $product['brand'] : "NA"; ?></h1>
          <div class="prodsummary"><?php echo isset($product['title']) ? $product['title'] : "NA"; ?></div>
          <div class="priceprod">
            <div class="pricehld">
              <div class="perPiece"><span class="rupee"></span><?php echo isset($product['sell_price']) ? $product['sell_price'] : "NA"; ?></div>
              <span class="oldPrice"><span class="rupee"></span><?php echo isset($product['list_price']) ? $product['list_price'] : "NA"; ?></span> <span class="discountPrice"><?php echo $product['discount']; ?>% OFF</span>
            </div>
          </div>
          <button class=" btn pinkbtn addtocartbtn" type="submit" data-pvar-id="<?php echo $product['pvar_id']; ?>" value="Add to cart">Add to cart</button>
        </div>

        <div class="callus">Need assistance in buying - Call us on 8080-638738</div>

        <div class="buyeronproddtl"><img src="<?php echo site_url('assets/images/buyer-logo.png'); ?>"  ></div>

        <!-- <div class="stockcount"><span>Stock</span> - Only 1 Avaiable</div> -->

        <div class="productwrapdtl row">
          <h4 class="col-xs-4">Brand:</h4>
          <div class="prodsummary col-xs-6"><?php echo isset($product['brand']) ? $product['brand'] : "NA"; ?></div>
        </div>

        <div class="productwrapdtl row">
          <h4 class="col-xs-4">Condition:</h4>
          <div class="prodsummary col-xs-6"><?php echo isset($product['condition']) ? $product['condition'] : "NA"; ?></div>
        </div>

        <div class="productwrapdtl row">
          <h4 class="col-xs-4">Colour &amp; size</h4>
          <div class="prodsummary col-xs-6">
            <ul class="product_color">
              <?php foreach ($product['color'] as $key => $color) : ?> 
                <li style="background:<?php echo $color['hex']; ?>"></li>
              <?php endforeach; ?>
            </ul>
            <?php echo isset($product['size']) ? $product['size'] : "NA"; ?>
          </div>
        </div>

        <div class="productwrapdtl row">
          <h4 class="col-xs-4">Measurements:</h4>
          <div class="prodsummary col-xs-6">
            <?php echo isset($product['measurements']) ? $product['measurements'] : "NA"; ?>
          </div>
        </div>

        <div class="productwrapdtl row">
          <h4 class="col-xs-4">Description</h4>
          <div class="prodsummary col-xs-6">
            <?php echo isset($product['discription']) ? $product['discription'] : "NA"; ?>         
          </div>
        </div>

        <div class="productwrapdtl row">
          <h4 class="col-xs-4"> Product code</h4>
          <div class="prodsummary col-xs-6"><?php echo isset($product['product_code']) ? $product['product_code'] : "NA"; ?></div>
        </div>

        <div class="productwrapdtl row">
          <h4 class="col-xs-4">Materials: </h4>
          <div class="prodsummary col-xs-6"> <?php echo isset($product['materials']) ? $product['materials'] : "NA"; ?> </div>
        </div>

        <div class="retuntpolicy" id="accordion" role="tablist" aria-multiselectable="true">
          <h3 role="tab" id="headingOne"> <a role="button" data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> FAQs <span></span> </a> </h3>
          <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne"> <b class="product_faq">Can I return the Items I have purchased?</b>
            <p class="product_faq">Yes, in case you want to return the items purchased you can intimate us within seven days of receiving your order. For further queries regarding the same refer to our returns policy.</p>
            <b class="product_faq">What is the condition of the products that you have?</b>
            <p class="product_faq">We sell pre-loved, gently used products of the following category:<br>
            New with tags – never been worn and have the original brand tags.<br>
            Never worn – no tags.<br>
            Gently used – they have been used by the previous person but are i  		in good condition.</p>
            <b class="product_faq">Are the products thoroughly cleaned before delivery?</b>
            <p class="product_faq">All the products go through a rigorous quality check. Our specialised drycleaners make sure the items meet the hygiene standards of our customers.</p>
          </div>
        </div>
      </div>
    </div>

    <!--ProductSlider start-->
    <div class="ProductSlider">
      <div class="pagetlt text-center">
        <h1>Related Products</h1>
      </div>
      <div class="owl-carousel">
        <?php foreach ($similar as $similar_products) : ?>
        <div class="item">
          <div class="productwrapper">
            <div class="wishlist" ><span  class="wishlist-icon glyphicon glyphicon-heart-empty tooltiptop" data-toggle="tooltip" data-placement="top" title="Save for later"></span></div>
            <div class="tag-label"> <?php echo isset($similar_products['condition']) ? $similar_products['condition'] : "NA"; ?> </div>

            <a href="" class="product-img"> <img src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $similar_products['images']; ?>" class="img-responsive" ></a>
            <div class="product-wrap">
              <div class="product-code"><?php echo isset($similar_products['brand']) ? $similar_products['brand'] : "NA"; ?></div>
              <div class="">
                <div class="col-sm-8 col-xs-12 p0 ">
                  <h4 class="product-name"><a href="<?php echo isset($similar_products['product_slug']) ? $similar_products['product_slug'] : "NA"; ?>"><?php echo isset($similar_products['prod_title']) ? $similar_products['prod_title'] : "NA"; ?></a> </h4>
                </div>
                <div class="col-sm-4 col-xs-12 p0 ">
                  <ul class="sizeswrap">
                    <li> Size: <span><?php echo isset($similar_products['size']) ? $similar_products['size'] : "NA"; ?></span> </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="pricehld">
              <div class="perPiece"><span class="rupee"></span><?php echo isset($similar_products['sell_price']) ? $similar_products['sell_price'] : "NA"; ?></div>
              <span class="oldPrice"><span class="rupee"></span><?php echo isset($similar_products['list_price']) ? $similar_products['list_price'] : "NA"; ?> </span> <span class="discountPrice"><?php echo isset($similar_products['discount']) ? $similar_products['discount'] : "NA"; ?>% Off</span>
            </div>
          </div>
        </div>
      <?php endforeach; ?> 
      </div>
    </div>
    <!--featureSlider end--> 
  </div>
  <!--featureSlider end--> 
  
 
</div>   

<?php if($product['stock']<=0) : ?>
  
    <!--out of stock-->
  <div class="productdtlsecwrap outofstocksection"> 
    
    <!--bredcrumbs-->
    <ol class="breadcrumb ">
      <li><a href="#">Home</a></li>
      <li><a href="#"> BUY </a></li>
      <li class=""><a href="#">TOP WEAR</a></li>
      <li class="active">Chanel</li>
    </ol>
    
    <!--product details start top-->
    <div class="row productdtlsec">
      <div class="col-sm-6 productviewer products_images">
        <div class="row"> 
          <!--Thumbnail image viewer-->
           
          <!--Main image viewer-->
          <div class="productzoomwrap col-sm-8">
          <div class="outofpatch"> Oops! This product is sold out</div>
           <img id="product-zoom" src="images/product/JQ0A7792.jpg" />
            <p class="txtinfocolor">*actual product colors may vary  from colors shown on your monitor.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 ">
        <div class=" text-center">
					  <h1 class="productname mb20">Checkout More Awesome Stuff</h1>
					</div>
      
       <div class="col-xs-6">
            <div class="productwrapper">
              <div class="wishlist" ><span  class="wishlist-icon glyphicon glyphicon-heart-empty tooltiptop" data-toggle="tooltip" data-placement="top" title="Save for later"></span></div>
              <div class="tag-label"> Gently Used </div>
              <a href="" class="product-img"><img src="https://www.pretmode.com/sites/default/files/styles/product_listing/public/040A2000%20copy.jpg?itok=rst7ajjA" class="img-responsive" ></a>
              <div class="product-wrap">
                <div class="product-code">Improvd</div>
                <div class=" ">
                  <div class="col-sm-8 col-xs-12 p0 ">
                    <h4 class="product-name"><a href="https://www.pretmode.com/product/call-me-chanel-dress">Mid Night Moon Top</a> </h4>
                  </div>
                  <div class="col-sm-4 col-xs-12 p0">
                    <ul class="sizeswrap">
                      <li> Size: <span>XXL</span> </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="pricehld">
                <div class="perPiece"><span class="rupee"></span>6,500</div>
                <span class="oldPrice"><span class="rupee"></span>8,500 </span> <span class="discountPrice">40% Off</span> </div>
            </div>
          </div>
        
        <div class="col-xs-6">
            <div class="productwrapper">
              <div class="wishlist" ><span  class="wishlist-icon glyphicon glyphicon-heart-empty tooltiptop" data-toggle="tooltip" data-placement="top" title="Save for later"></span></div>
              <div class="tag-label"> Gently Used </div>
              <a href="" class="product-img"><img src="https://www.pretmode.com/sites/default/files/styles/product_listing/public/040A2000%20copy.jpg?itok=rst7ajjA" class="img-responsive" ></a>
              <div class="product-wrap">
                <div class="product-code">Improvd</div>
                <div class=" ">
                  <div class="col-sm-8 col-xs-12 p0 ">
                    <h4 class="product-name"><a href="https://www.pretmode.com/product/call-me-chanel-dress">Mid Night Moon Top</a> </h4>
                  </div>
                  <div class="col-sm-4 col-xs-12 p0">
                    <ul class="sizeswrap">
                      <li> Size: <span>XXL</span> </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="pricehld">
                <div class="perPiece"><span class="rupee"></span>6,500</div>
                <span class="oldPrice"><span class="rupee"></span>8,500 </span> <span class="discountPrice">40% Off</span> </div>
            </div>
          </div>
        
          <div class="col-xs-6">
            <div class="productwrapper">
              <div class="wishlist" ><span  class="wishlist-icon glyphicon glyphicon-heart-empty tooltiptop" data-toggle="tooltip" data-placement="top" title="Save for later"></span></div>
              <div class="tag-label"> Gently Used </div>
              <a href="" class="product-img"><img src="https://www.pretmode.com/sites/default/files/styles/product_listing/public/040A2000%20copy.jpg?itok=rst7ajjA" class="img-responsive" ></a>
              <div class="product-wrap">
                <div class="product-code">Improvd</div>
                <div class=" ">
                  <div class="col-sm-8 col-xs-12 p0 ">
                    <h4 class="product-name"><a href="https://www.pretmode.com/product/call-me-chanel-dress">Mid Night Moon Top</a> </h4>
                  </div>
                  <div class="col-sm-4 col-xs-12 p0">
                    <ul class="sizeswrap">
                      <li> Size: <span>XXL</span> </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="pricehld">
                <div class="perPiece"><span class="rupee"></span>6,500</div>
                <span class="oldPrice"><span class="rupee"></span>8,500 </span> <span class="discountPrice">40% Off</span> </div>
            </div>
          </div>
        
        <div class="col-xs-6">
            <div class="productwrapper">
              <div class="wishlist" ><span  class="wishlist-icon glyphicon glyphicon-heart-empty tooltiptop" data-toggle="tooltip" data-placement="top" title="Save for later"></span></div>
              <div class="tag-label"> Gently Used </div>
              <a href="" class="product-img"><img src="https://www.pretmode.com/sites/default/files/styles/product_listing/public/040A2000%20copy.jpg?itok=rst7ajjA" class="img-responsive" ></a>
              <div class="product-wrap">
                <div class="product-code">Improvd</div>
                <div class=" ">
                  <div class="col-sm-8 col-xs-12 p0 ">
                    <h4 class="product-name"><a href="https://www.pretmode.com/product/call-me-chanel-dress">Mid Night Moon Top</a> </h4>
                  </div>
                  <div class="col-sm-4 col-xs-12 p0">
                    <ul class="sizeswrap">
                      <li> Size: <span>XXL</span> </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="pricehld">
                <div class="perPiece"><span class="rupee"></span>6,500</div>
                <span class="oldPrice"><span class="rupee"></span>8,500 </span> <span class="discountPrice">40% Off</span> </div>
            </div>
          </div>
        
      </div>
    </div>
    
    <!--product detail top end--> 
    
    
    
  </div>
  <!--out of stock end-->
<?php endif ; ?>

<!--end-->
</div>
 
