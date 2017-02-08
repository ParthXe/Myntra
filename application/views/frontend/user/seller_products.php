            <div class="col-md-9 col-sm-9 my_acc">
                <!-- Tab panes -->
                <div class="tab-content tabs-right  myaccountright" id="buyerSec">
        <h1 class="page-header"><a  class="backtab" href="<?php echo site_url('user/seller'); ?>"  title="BACK TO MY SALES" ><img src="<?php echo site_url('assets/images/back-black.svg'); ?>" /></a>My Product</h1>

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#processed" aria-controls="processed" role="tab" data-toggle="tab">PAYEMENT PROCESSED</a></li>
    <li role="presentation"><a href="#uprocessed" aria-controls="uprocessed" role="tab" data-toggle="tab">PAYMENT UNDER PROCESSED</a></li>
    <li role="presentation"><a href="#pending" aria-controls="pending" role="tab" data-toggle="tab">PENDING PAYMENTS</a></li>
    <li role="presentation"><a href="#unsold" aria-controls="unsold" role="tab" data-toggle="tab">UNSOLD</a></li>
    <li role="presentation"><a href="#pending_product" aria-controls="pending_product" role="tab" data-toggle="tab">PENDING</a></li>
  
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="processed">
         <div class="orderdtlbox orderdetails">
                <article class="">
                <?php foreach ($processed as $processe) : ?>
       
                  <section class="media cart-content">
                    <div class="media-left cart-img-container">
                      <a href="<?php echo site_url('product/details/'.$processe['product_slug']); ?>"><img class="media-object" src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $processe['images'];  ?>" alt="..."></a>
                    </div>
                    <div class="media-body item-desc">
                      <div class="row cart-inner-main">
                        <div class="col-sm-12   col-xxs-12 item-desc">
                          <ul class="orderw">
                            <li class="row">
                              <div class="col-sm-9   col-xs-10 col-xxs-12">
                                <div class="heading">
                                  <div class="item-head-main">
                                    <a href="<?php echo site_url('product/details/'.$processe['product_slug']); ?>" class="item-heading"><?php  echo isset($processe['brand']) ? $processe['brand'] : "NA"; ?></a>
                                    <a href="<?php echo site_url('product/details/'.$processe['product_slug']); ?>" class="item-brief text-capitalize"><?php echo isset($processe['prod_title']) ? $processe['prod_title'] : "NA"; ?></a>
                                  </div>
                                </div>
                              </div>
                              <div class=" col-sm-3 col-xs-12 col-xxs-12 item-price off-edit-hide">
                                <span class="price"><span class="rupee"></span><?php echo isset($processe['sell_price']) ? $processe['sell_price'] : "NA"; ?></span>
                              </div>
                            </li>
                            <li>
                              <dd>Colour & size :</dd>
                              <dt> <b>
                                <ul class="product_color">
                                  <?php foreach ($processe['color'] as $color) : ?>
                                    <li style="background-color: <?php echo $color['hex']; ?>; "></li>
                                <?php endforeach; ?>
                                </ul>
                                <span class="sizescart"><?php echo isset($processe['size']) ? $processe['size'] : "NA"; ?></span> </b></dt>
                            </li>
                            <li>
                              <dd>Product code : </dd>
                              <dt><b><?php echo isset($processe['sku']) ? $processe['sku'] : "NA"; ?></b></dt>
                            </li>
                            <li>
                              <dd>Status : </dd>
                              <dt><b> <span class="delivered text-capitalize"><?php echo isset($processe['pvar_status']) ? $processe['pvar_status'] : "NA"; ?></span> on 31-March-2016</b></dt>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </section>
                <?php endforeach; ?>
                </article>
              </div>
            </div>
    <div role="tabpanel" class="tab-pane" id="uprocessed">
      <div class="orderdtlbox orderdetails">
                <article class="">
                <?php foreach ($uprocessed as $uprocesse) : ?>
                  <section class="media cart-content">
                    <div class="media-left cart-img-container">
                      <a href="<?php echo site_url('product/details/'.$processe['product_slug']); ?>"><img class="media-object" src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $uprocesse['images'];  ?>" alt="..."></a>
                    </div>
                    <div class="media-body item-desc">
                      <div class="row cart-inner-main">
                        <div class="col-sm-12   col-xxs-12 item-desc">
                          <ul class="orderw">
                            <li class="row">
                              <div class="col-sm-9   col-xs-10 col-xxs-12">
                                <div class="heading">
                                  <div class="item-head-main">
                                    <a href="<?php echo site_url('product/details/'.$uprocesse['product_slug']); ?>" class="item-heading"><?php  echo isset($uprocesse['brand']) ? $uprocesse['brand'] : "NA"; ?></a>
                                    <a href="<?php echo site_url('product/details/'.$uprocesse['product_slug']); ?>" class="item-brief text-capitalize"><?php echo isset($uprocesse['prod_title']) ? $uprocesse['prod_title'] : "NA"; ?></a>
                                  </div>
                                </div>
                              </div>
                              <div class=" col-sm-3 col-xs-12 col-xxs-12 item-price off-edit-hide">
                                <span class="price"><span class="rupee"></span><?php echo isset($uprocesse['sell_price']) ? $uprocesse['sell_price'] : "NA"; ?></span>
                              </div>
                            </li>
                            <li>
                              <dd>Colour & size :</dd>
                              <dt> <b>
                                <ul class="product_color">
                                  <?php foreach ($uprocesse['color'] as $color) : ?>
                                    <li style="background-color: <?php echo $color['hex']; ?>; "></li>
                                <?php endforeach; ?>
                                </ul>
                                <span class="sizescart"><?php echo isset($uprocesse['size']) ? $uprocesse['size'] : "NA"; ?></span> </b></dt>
                            </li>
                            <li>
                              <dd>Product code : </dd>
                              <dt><b><?php echo isset($uprocesse['sku']) ? $uprocesse['sku'] : "NA"; ?></b></dt>
                            </li>
                            <li>
                              <dd>Status : </dd>
                              <dt><b> <span class="delivered text-capitalize"><?php echo isset($uprocesse['pvar_status']) ? $uprocesse['pvar_status'] : "NA"; ?></span> on 31-March-2016</b></dt>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </section>
     <?php endforeach; ?>
        </article>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="pending">
     <div class="orderdtlbox orderdetails">
      <article class="">
      <?php foreach ($pending_payment as $pending) : ?>
                <section class="media cart-content">
                    <div class="media-left cart-img-container">
                      <a href="<?php echo site_url('product/details/'.$pending['product_slug']); ?>"><img class="media-object" src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $pending['images'];  ?>" alt="..."></a>
                    </div>
                    <div class="media-body item-desc">
                      <div class="row cart-inner-main">
                        <div class="col-sm-12   col-xxs-12 item-desc">
                          <ul class="orderw">
                            <li class="row">
                              <div class="col-sm-9   col-xs-10 col-xxs-12">
                                <div class="heading">
                                  <div class="item-head-main">
                                    <a href="<?php echo site_url('product/details/'.$pending['product_slug']); ?>" class="item-heading"><?php  echo isset($pending['brand']) ? $pending['brand'] : "NA"; ?></a>
                                    <a href="<?php echo site_url('product/details/'.$pending['product_slug']); ?>" class="item-brief text-capitalize"><?php echo isset($pending['prod_title']) ? $pending['prod_title'] : "NA"; ?></a>
                                  </div>
                                </div>
                              </div>
                              <div class=" col-sm-3 col-xs-12 col-xxs-12 item-price off-edit-hide">
                                <span class="price"><span class="rupee"></span><?php echo isset($pending['sell_price']) ? $pending['sell_price'] : "NA"; ?></span>
                              </div>
                            </li>
                            <li>
                              <dd>Colour & size :</dd>
                              <dt> <b>
                                <ul class="product_color">
                                  <?php foreach ($pending['color'] as $color) : ?>
                                    <li style="background-color: <?php echo $color['hex']; ?>; "></li>
                                <?php endforeach; ?>
                                </ul>
                                <span class="sizescart"><?php echo isset($pending['size']) ? $pending['size'] : "NA"; ?></span> </b></dt>
                            </li>
                            <li>
                              <dd>Product code : </dd>
                              <dt><b><?php echo isset($pending['sku']) ? $pending['sku'] : "NA"; ?></b></dt>
                            </li>
                            <li>
                              <dd>Status : </dd>
                              <dt><b> <span class="delivered text-capitalize"><?php echo isset($pending['pvar_status']) ? $pending['pvar_status'] : "NA"; ?></span> on 31-March-2016</b></dt>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </section>
     <?php endforeach; ?>
       </article>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="unsold">
       <div class="orderdtlbox orderdetails">
      <article class="">
      <?php foreach ($unsold as $active) : ?>
                <section class="media cart-content">
                    <div class="media-left cart-img-container">
                      <a href="<?php echo site_url('product/details/'.$active['product_slug']); ?>"><img class="media-object" src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $active['images'];  ?>" alt="..."></a>
                    </div>
                    <div class="media-body item-desc">
                      <div class="row cart-inner-main">
                        <div class="col-sm-12   col-xxs-12 item-desc">
                          <ul class="orderw">
                            <li class="row">
                              <div class="col-sm-9   col-xs-10 col-xxs-12">
                                <div class="heading">
                                  <div class="item-head-main">
                                    <a href="<?php echo site_url('product/details/'.$active['product_slug']); ?>" class="item-heading"><?php  echo isset($active['brand']) ? $active['brand'] : "NA"; ?></a>
                                    <a href="<?php echo site_url('product/details/'.$active['product_slug']); ?>" class="item-brief text-capitalize"><?php echo isset($active['prod_title']) ? $active['prod_title'] : "NA"; ?></a>
                                  </div>
                                </div>
                              </div>
                              <div class=" col-sm-3 col-xs-12 col-xxs-12 item-price off-edit-hide">
                                <span class="price"><span class="rupee"></span><?php echo isset($active['sell_price']) ? $active['sell_price'] : "NA"; ?></span>
                              </div>
                            </li>
                            <li>
                              <dd>Colour & size :</dd>
                              <dt> <b>
                                <ul class="product_color">
                                  <?php foreach ($active['color'] as $color) : ?>
                                    <li style="background-color: <?php echo $color['hex']; ?>; "></li>
                                <?php endforeach; ?>
                                </ul>
                                <span class="sizescart"><?php echo isset($active['size']) ? $active['size'] : "NA"; ?></span> </b></dt>
                            </li>
                            <li>
                              <dd>Product code : </dd>
                              <dt><b><?php echo isset($active['sku']) ? $active['sku'] : "NA"; ?></b></dt>
                            </li>
                            <li>
                              <dd>Status : </dd>
                              <dt><b> <span class="delivered text-capitalize"><?php echo isset($active['pvar_status']) ? $active['pvar_status'] : "NA"; ?></span> on 31-March-2016</b></dt>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </section>
     <?php endforeach; ?>
       </article>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="pending_product">
       <div class="orderdtlbox orderdetails">
      <article class="">
     <?php foreach ($pending_product as $notactive) : ?>
                <section class="media cart-content">
                    <div class="media-left cart-img-container">
                      <a href="<?php echo site_url('product/details/'.$notactive['product_slug']); ?>"><img class="media-object" src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $notactive['images'];  ?>" alt="..."></a>
                    </div>
                    <div class="media-body item-desc">
                      <div class="row cart-inner-main">
                        <div class="col-sm-12   col-xxs-12 item-desc">
                          <ul class="orderw">
                            <li class="row">
                              <div class="col-sm-9   col-xs-10 col-xxs-12">
                                <div class="heading">
                                  <div class="item-head-main">
                                    <a href="<?php echo site_url('product/details/'.$notactive['product_slug']); ?>" class="item-heading"><?php  echo isset($notactive['brand']) ? $notactive['brand'] : "NA"; ?></a>
                                    <a href="<?php echo site_url('product/details/'.$notactive['product_slug']); ?>" class="item-brief text-capitalize"><?php echo isset($notactive['prod_title']) ? $notactive['prod_title'] : "NA"; ?></a>
                                  </div>
                                </div>
                              </div>
                              <div class=" col-sm-3 col-xs-12 col-xxs-12 item-price off-edit-hide">
                                <span class="price"><span class="rupee"></span><?php echo isset($notactive['sell_price']) ? $notactive['sell_price'] : "NA"; ?></span>
                              </div>
                            </li>
                            <li>
                              <dd>Colour & size :</dd>
                              <dt> <b>
                                <ul class="product_color">
                                  <?php foreach ($notactive['color'] as $color) : ?>
                                    <li style="background-color: <?php echo $color['hex']; ?>; "></li>
                                <?php endforeach; ?>
                                </ul>
                                <span class="sizescart"><?php echo isset($notactive['size']) ? $notactive['size'] : "NA"; ?></span> </b></dt>
                            </li>
                            <li>
                              <dd>Product code : </dd>
                              <dt><b><?php echo isset($notactive['sku']) ? $notactive['sku'] : "NA"; ?></b></dt>
                            </li>
                            <li>
                              <dd>Status : </dd>
                              <dt><b> <span class="delivered text-capitalize"><?php echo isset($notactive['pvar_status']) ? $notactive['pvar_status'] : "NA"; ?></span> on 31-March-2016</b></dt>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </section>
     <?php endforeach; ?>
      </article>
      </div>
    </div>
    
  </div>

</div>
 

 

                </div>
            </div>
            <div class="clearfix"></div>

<!--end-->