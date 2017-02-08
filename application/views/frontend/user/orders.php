            <div class="col-md-9 col-sm-9 my_acc">
                <!-- Tab panes -->
                <div class="tab-content tabs-right  myaccountright" id="buyerSec">
                    <div class="tab-pane active" id="profile">
						<h1 class="page-header">My order history</h1>
						<?php foreach ($orders as $order) : ?>
							<div class="orderdtlbox orderdetails">
							  <div class="heading-wrapper   ">
							    <div class="col-md-12 col-sm-12 col-xs-12 col-xxs-12 text-center orderdtl ">
							      <div class="number-id"><span class="order-no">Order ID:</span><span class="order-id"><?php echo $order->order_id; ?></span></div>
							      <div class="placed-on">Order Placed on: <b>13-07-2016</b> |  Total Items: <b><?php echo $order->product_count; ?></b> | Total Amount <b><span class="rupee"></span> <?php echo round($order->order_total); ?> </b></div>
							    </div>
							  </div>
							  <article class="">
							  	<?php foreach ($order->products as $product) : ?>
									<section class="media cart-content">
									  <div class="media-left cart-img-container">
									  	<a href="<?php echo site_url('product/details/'.$product['prod_slug']); ?>"><img class="media-object" src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $product['prd_img_uri'];  ?>" alt="..."></a>
									  </div>
									  <div class="media-body item-desc">
									    <div class="row cart-inner-main">
									      <div class="col-sm-12   col-xxs-12 item-desc">
									        <ul class="orderw">
									          <li class="row">
									            <div class="col-sm-9   col-xs-10 col-xxs-12">
									              <div class="heading">
									                <div class="item-head-main">
									                	<a href="<?php echo site_url('product/details/'.$product['prod_slug']); ?>" class="item-heading"><?php echo $product['brand_name']; ?></a>
									                	<a href="<?php echo site_url('product/details/'.$product['prod_slug']); ?>" class="item-brief text-capitalize"><?php echo $product['pvar_title']; ?></a>
									                </div>
									              </div>
									            </div>
									            <div class=" col-sm-3 col-xs-12 col-xxs-12 item-price off-edit-hide">
									              <span class="price"><span class="rupee"></span><?php echo round($product['pvar_sell_price']); ?></span>
									            </div>
									          </li>
									          <li>
									            <dd>Colour & size :</dd>
									            <dt> <b>
									              <ul class="product_color">
									              	<?php foreach ($product['colors'] as $color) : ?>
									              		<li style="background-color: <?php echo $color['hex']; ?>; "></li>
									            	<?php endforeach; ?>
									              </ul>
									              <span class="sizescart"><?php echo $product['ftv_name']; ?></span> </b></dt>
									          </li>
									          <li>
									            <dd>Product code : </dd>
									            <dt><b>397 - 6</b></dt>
									          </li>
									          <li>
									            <dd>Status : </dd>
									            <dt><b> <span class="delivered text-capitalize"><?php echo $order->order_status; ?></span> on 31-March-2016</b></dt>
									          </li>
									        </ul>
									      </div>
									    </div>
									  </div>
									</section>
								<?php endforeach; ?>
							  </article>
							</div>
							<div class="trackbtn">
							  <a class="btn darkgraybtn borderround mr10" href="#trackorders" data-toggle="tab" aria-expanded="true">TRACK ORDER</a>
							  <a class="btn borderround darkgraybtn" href="#returnReplace" data-toggle="tab" aria-expanded="true">RETURN  ITEM</a>
							</div>							
						<?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
    	</div>
  	</div>  
</div>
<!--end-->