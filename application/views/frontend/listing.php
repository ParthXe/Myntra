
<?php
	
?>
<div class="contentwrap"></div>

<!--top icon-->
<div class="container">
	<ul class="categoryfilterssec hidden-xs hidden-sm ">

		<li>	
			<?php if($slug == 'topwear') : ?>
			<a href="<?php echo site_url('store/category/topwear'); ?>" class="checked">
			<?php else : ?>
			<a href="<?php echo site_url('store/category/topwear'); ?>">
			<?php endif; ?>		
				<img src="<?php echo site_url('assets/images/icons-filter/top-wear.svg'); ?>">
			<h2>Top Wear</h2>
			</a>
		</li>
		
		<li>
			<?php if($slug == 'bottomwear') : ?>
			<a href="<?php echo site_url('store/category/bottomwear'); ?>" class="checked">
			<?php else : ?>
			<a href="<?php echo site_url('store/category/bottomwear'); ?>">
			<?php endif; ?>
				<img src="<?php echo site_url('assets/images/icons-filter/bottom-wear.svg'); ?>">
				<h2>Bottom Wear</h2>
			</a>
		</li>

		<li>
			<?php if($slug == 'dresses') : ?>
			<a href="<?php echo site_url('store/category/dresses'); ?>" class="checked">
			<?php else : ?>
			<a href="<?php echo site_url('store/category/dresses'); ?>">
			<?php endif; ?>
				<img src="<?php echo site_url('assets/images/icons-filter/dresses.svg'); ?>">
				<h2>Dresses</h2>
			</a>
		</li>

		<li>
			<?php if($slug == 'designer-wear') : ?>
			<a href="<?php echo site_url('store/category/designer-wear'); ?>" class="checked">
			<?php else : ?>
			<a href="<?php echo site_url('store/category/designer-wear'); ?>">
			<?php endif; ?>
				<img src="<?php echo site_url('assets/images/icons-filter/designer-wear.svg'); ?>">
				<h2>Designer Wear</h2>
			</a>
		</li>

		<li>
			<?php if($slug == 'jumpsuits') : ?>
			<a href="<?php echo site_url('store/category/jumpsuits'); ?>" class="checked">
			<?php else : ?>
			<a href="<?php echo site_url('store/category/jumpsuits'); ?>">
			<?php endif; ?>
				<img src="<?php echo site_url('assets/images/icons-filter/jumpsuits.svg'); ?>">
				<h2>Jumpsuits</h2>
			</a>
		</li>

		<li>
			<?php if($slug == 'ethinic') : ?>
			<a href="<?php echo site_url('store/category/ethinic'); ?>" class="checked">
			<?php else : ?>
			<a href="<?php echo site_url('store/category/ethinic'); ?>">
			<?php endif; ?>
				<img src="<?php echo site_url('assets/images/icons-filter/ethnic.svg'); ?>">
				<h2>Ethnic</h2>
			</a>
		</li>

		<li>
			<?php if($slug == 'handbags') : ?>
			<a href="<?php echo site_url('store/category/handbags'); ?>" class="checked">
			<?php else : ?>
			<a href="<?php echo site_url('store/category/handbags'); ?>">
			<?php endif; ?>
				<img src="<?php echo site_url('assets/images/icons-filter/handbags.svg'); ?>">
				<h2>Handbags</h2>
			</a>
		</li>

		<li>
			<?php if($slug == 'footwear') : ?>
			<a href="<?php echo site_url('store/category/footwear'); ?>" class="checked">
			<?php else : ?>
			<a href="<?php echo site_url('store/category/footwear'); ?>">
			<?php endif; ?>
				<img src="<?php echo site_url('assets/images/icons-filter/footwear.svg'); ?>">
				<h2>Footwear</h2>
			</a>
		</li>
	</ul>
</div>
<!--end-->

<!--bredcrumbs-->
<ol class="breadcrumb container">
	<li><a href="#">Home</a></li>
	<!-- <li><a href="#"> BUY </a></li> -->
	<li class="active"><?php echo strtoupper($slug); ?></li>
</ol>

<!-- Main Product Container -->
<div class="container">
	<div class="filtersection row">
		<div class=" col-sm-3 hidden-sm hidden-xs filterwrap">
			<form id="form" method="get" action="">
				<div class="theiaStickySidebar">
					<div class="filter-sidebar"> 
						<div class="filter-options">
							<h4 class="tname">TYPE<span class="sprite"></span></h4>
							<div class="filteroption">
								<ul class="vscroll">
									<?php foreach ($child_cat as $child) : ?>
									<li class="checkbox">
										<label><input name="child_cat" class="checkbox filter child_cat" type="checkbox" value="<?php echo $child->cat_slug; ?>" <?php echo (isset($active_filters) && in_array($child->cat_slug, $active_filters)) ? "checked='checked'" : ""; ?> ><?php echo $child->cat_name; ?></label>
									</li>
									<?php endforeach;?>
									
								</ul>
							</div>
						</div>
						<div class="filter-options">
							<h4 class="tname">PRICE<span class="sprite"></span></h4>
							<div class="filteroption">
							<ul class="vscroll">
								<li class="checkbox">
									<label><input name="sell_price_temp" type="checkbox" class="checkbox filter sell_price_temp" value="100 - 2000" data-min-val="100" data-max-val="2000" <?php echo (isset($active_filters) && in_array(100, $active_filters)) ? "checked='checked'" : ""; ?>>100 - 2000 </label>
								</li>
								<li class="checkbox">
									<label><input name="sell_price_temp" type="checkbox" class="checkbox filter sell_price_temp" value="2001 - 4000" data-min-val="2001" data-max-val="4000" <?php echo (isset($active_filters) && in_array(2001, $active_filters)) ? "checked='checked'" : ""; ?>>2001 - 4000 </label>
								</li>
								<li class="checkbox">
									<label><input name="sell_price_temp" type="checkbox" class="checkbox filter sell_price_temp" value="4001 - 6000" data-min-val="4001" data-max-val="6000" <?php echo (isset($active_filters) && in_array(4001, $active_filters)) ? "checked='checked'" : ""; ?>>4001 - 6000 </label>
								</li>
								<li class="checkbox">
									<label><input name="sell_price_temp" type="checkbox" class="checkbox filter sell_price_temp" value="6001 - 8000" data-min-val="6001" data-max-val="8000" <?php echo (isset($active_filters) && in_array(6001, $active_filters)) ? "checked='checked'" : ""; ?>>6001 - 8000 </label>
								</li>
								<li class="checkbox">
									<label><input name="sell_price_temp" type="checkbox" class="checkbox filter sell_price_temp" value="8001 - 10000" data-min-val="8001" data-max-val="10000" <?php echo (isset($active_filters) && in_array(8001, $active_filters)) ? "checked='checked'" : ""; ?>>8001 - 10000 </label>
								</li>
								<li class="checkbox">
									<label><input name="sell_price_temp" type="checkbox" class="checkbox filter sell_price_temp" value="10001 & above" data-min-val="10001" data-max-val="99999" <?php echo (isset($active_filters) && in_array(10001, $active_filters)) ? "checked='checked'" : ""; ?>>10001 & above </label>
								</li>
							</ul>
							</div>
						</div>						
						<div class="filter-options">
							<h4 class="tname">SIZE<span class="sprite"></span></h4>
							<div class="filteroption">
								<ul class="vscroll">
									<?php foreach ($sizes as $size) : ?>
									<li class="checkbox">
										<label><input name="size" class="checkbox filter size" type="checkbox" value="<?php echo $size->ftv_slug; ?>" <?php echo (isset($active_filters) && in_array($size->ftv_slug, $active_filters)) ? "checked='checked'" : ""; ?> ><?php echo $size->ftv_name; ?></label>
									</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>						
						<div class="filter-options">
							<h4 class="tname">BRAND<span class="sprite"></span></h4>
                            <input name="" type="text" class="brandsearch" placeholder="Search Brand...">
							<div class="filteroption">
								<ul class="vscroll">
									<?php foreach ($brands as $brand) : ?>
									<li class="checkbox">
										<label><input name="brand" class="checkbox filter brand" type="checkbox" value="<?php echo $brand->brand_slug; ?>" <?php echo (isset($active_filters) && in_array($brand->brand_slug, $active_filters)) ? "checked='checked'" : ""; ?> ><?php echo $brand->brand_name; ?></label>
									</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
						<div class="filter-options">
							<h4 class="tname">Colors<span class="sprite"></span></h4>
							<div class="filteroption">
								<ul class="vscroll">
									<?php foreach ($colors as $color) : ?>
									<li class="checkbox">
										<label><input name="color" class="checkbox filter color" type="checkbox" value="<?php echo $color->color_slug; ?>" <?php echo (isset($active_filters) && in_array($color->color_slug, $active_filters)) ? "checked='checked'" : ""; ?> ><?php echo $color->color_name; ?></label>
									</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
						<div class="filter-options">
							<h4 class="tname">Conditions<span class="sprite"></span></h4>
							<div class="filteroption">
								<ul class="vscroll">
									<?php foreach ($conditions as $condition) : ?>
									<li class="checkbox">
										<label><input name="condition" class="checkbox filter condition" type="checkbox" value="<?php echo $condition->cond_slug; ?>" <?php echo (isset($active_filters) && in_array($condition->cond_slug, $active_filters)) ? "checked='checked'" : ""; ?> ><?php echo $condition->cond_name; ?></label>
									</li>
									<?php endforeach; ?>
								</ul>
							</div>
							<input type="hidden" id="minSellPrice" name="from_price" value="">
							<input type="hidden" id="maxSellPrice" name="to_price" value="">
						</div>
					</div>
				</div>    <!--filter-sidebar end--> 
			</form>
		</div>
		<div class="col-sm-12 col-md-9 filter-rgt">
			<div class="">
				<div class="">
					<?php if(!empty($active_tokens)) : ?>
						<div class="filter-selected hidden-sm hidden-xs"> 
							<!--<span class="selClose sprite"></span>-->
							<ul class="">
								<li>
									<div class="filtertextsel">
										<?php foreach ($active_tokens as $value) : ?>
											<span class="filselected"><?php echo strtoupper($value['value']); ?><i data-filter-key="<?php echo $value['name']; ?>" data-filter-value="<?php echo $value['value']; ?>" class="glyphicon glyphicon-remove filter-remove"></i></span>
										<?php endforeach; ?>
											<a href="http://localhost/pretmode_ci/store/category/<?php echo $slug; ?>" class="clearAll" href="">Clear All</a>
									</div>
								</li>
							</ul>
						</div>
					<?php endif; ?>
					<div class="filterview  ">
						<h4 class="productResultCount"><span><?php echo $products['count']; ?> </span>Products Found</h4>
						<div class="selector " >
							<form id="sorting" method="get" action="">
							<select id="selectProductSort" name="sort" class="selectProductSort form-control">
								<option  selected="">Sort by</option>
								<option value="desc" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'desc') ? "selected='selected'" : ""; ?>>Price: High to Low</option>
								<option value="asc" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'asc') ? "selected='selected'" : ""; ?>>Price: Low to High</option>
								<option value="discount_desc" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'discount_desc') ? "selected='selected'" : ""; ?>>Discount: High to Low</option>
								<option value="discount_asc" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'discount_asc') ? "selected='selected'" : ""; ?>>Discount: Low to High</option>
							</select>
						</form>
						</div>
						<button type="button" id="btnShow" class="btn visible-sm  visible-xs pinkbtn filter-ipad-btn">FILTER</button>
					</div>
	  			</div>

				<div id="products" class="row list-group productwrap">
					<?php foreach ($products['products'] as $product) : ?>
					<?php if($product['stock']<=0) : ?>
				  	<div class="item col-xs-6 col-xss-12 col-sm-4 col-md-4 col-lg-4 out_of_stock">
				  		<?php else : ?>
				  		<div class="item col-xs-6 col-xss-12 col-sm-4 col-md-4 col-lg-4">
				  		<?php endif ; ?>
				  		<div class="productwrapper">
				  			<div class="wishlist" ><span  class="wishlist-icon glyphicon glyphicon-heart-empty tooltiptop" data-toggle="tooltip" data-placement="top" title="Save for later"></span></div>
				  			<div class="tag-label"> <?php echo $product['condition'] ?></div>
				  			<a href="<?php echo site_url('product/details/'.$product['product_slug']); ?>" class="product-img">
			  					<img src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $product['images'];  ?>" class="img-responsive defaultImage " >
                                <img src="https://s3.ap-south-1.amazonaws.com/pretmode/product_main/<?php echo $product['images'];  ?>" class="img-responsive hoverImage" >
			  				</a>
                            
				  			<div class="product-wrap">
				  				<div class="product-code"><?php echo $product['brand'];  ?></div>
				  				<div class="">
				  					<div class="col-sm-8 col-xs-12 p0 ">
				  						<h4 class="product-name"><a href="<?php echo site_url('product/details/'.$product['product_slug']); ?>"><?php echo $product['prod_title'];  ?></a> </h4>
				  					</div>
				  					<div class="col-sm-4 col-xs-12 p0 ">
				  						<ul class="sizeswrap">
				  							<li> Size: <span><?php echo $product['size'];  ?></span> </li>
				  						</ul>
				  					</div>
				  				</div>
				  			</div>
				  			<div class="pricehld">
				  				<div class="perPiece"><span class="rupee"></span><?php echo $product['sell_price'];  ?></div>
				  				<span class="oldPrice"><span class="rupee"></span><?php echo $product['list_price'];  ?> </span> <span class="discountPrice"><?php echo $product['discount'];  ?>% Off</span>
				  			</div>
							
							<?php if($product['stock']<=0) : ?>
                             <!--<div class="product__label--sold-out"><span>Out of stock</span></div> -->
							 <div class="uc_out_of_stock_html"><span>Out of stock</span></div>
							 <?php endif ; ?>
						</div>
					
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
