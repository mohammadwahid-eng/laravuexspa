<x-app-layout>
	<!-- Start Product Grid -->
	<section class="product-area shop-sidebar shop section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-12">
					<div class="shop-sidebar">
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title">Categories</h3>
								<ul class="categor-list">
									<li><a href="#">T-shirts</a></li>
									<li><a href="#">jacket</a></li>
									<li><a href="#">jeans</a></li>
									<li><a href="#">sweatshirts</a></li>
									<li><a href="#">trousers</a></li>
									<li><a href="#">kitwears</a></li>
									<li><a href="#">accessories</a></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
							<!-- Shop By Price -->
								<div class="single-widget range">
									<h3 class="title">Shop by Price</h3>
									<div class="price-filter">
										<div class="price-filter-inner">
											<div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="width: 26%; left: 24%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 24%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 50%;"></span></div>
												<div class="price_slider_amount">
												<div class="label-input">
													<span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price">
												</div>
											</div>
										</div>
									</div>
									<ul class="check-box-list">
										<li>
											<label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20 - $50<span class="count">(3)</span></label>
										</li>
										<li>
											<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 - $100<span class="count">(5)</span></label>
										</li>
										<li>
											<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">$100 - $250<span class="count">(8)</span></label>
										</li>
									</ul>
								</div>
								<!--/ End Shop By Price -->
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title">Recent post</h3>
								<!-- Single Post -->
								<div class="single-post first">
									<div class="image">
										<img src="{{ asset('themes/default/images/single-shop-img1.png') }}" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">Girls Dress</a></h5>
										<p class="price">$99.50</p>
										<ul class="reviews">
											<li class="yellow"><i class="ti-star"></i></li>
											<li class="yellow"><i class="ti-star"></i></li>
											<li class="yellow"><i class="ti-star"></i></li>
											<li><i class="ti-star"></i></li>
											<li><i class="ti-star"></i></li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
								<!-- Single Post -->
								<div class="single-post first">
									<div class="image">
										<img src="{{ asset('themes/default/images/single-shop-img2.png') }}" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">Women Clothings</a></h5>
										<p class="price">$99.50</p>
										<ul class="reviews">
											<li class="yellow"><i class="ti-star"></i></li>
											<li class="yellow"><i class="ti-star"></i></li>
											<li class="yellow"><i class="ti-star"></i></li>
											<li class="yellow"><i class="ti-star"></i></li>
											<li><i class="ti-star"></i></li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
								<!-- Single Post -->
								<div class="single-post first">
									<div class="image">
										<img src="{{ asset('themes/default/images/single-shop-img3.png') }}" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">Man Tshirt</a></h5>
										<p class="price">$99.50</p>
										<ul class="reviews">
											<li class="yellow"><i class="ti-star"></i></li>
											<li class="yellow"><i class="ti-star"></i></li>
											<li class="yellow"><i class="ti-star"></i></li>
											<li class="yellow"><i class="ti-star"></i></li>
											<li class="yellow"><i class="ti-star"></i></li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title">Manufacturers</h3>
								<ul class="categor-list">
									<li><a href="#">Forever</a></li>
									<li><a href="#">giordano</a></li>
									<li><a href="#">abercrombie</a></li>
									<li><a href="#">ecko united</a></li>
									<li><a href="#">zara</a></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
					</div>
				</div>
				<div class="col-lg-9 col-md-8 col-12">
					<div class="row">
						<div class="col-12">
							<!-- Shop Top -->
							<div class="shop-top">
								<div class="shop-shorter">
									<div class="single-shorter">
										<label>Show :</label>
										<select style="display: none;">
											<option selected="selected">09</option>
											<option>15</option>
											<option>25</option>
											<option>30</option>
										</select><div class="nice-select" tabindex="0"><span class="current">09</span><ul class="list"><li data-value="09" class="option selected">09</li><li data-value="15" class="option">15</li><li data-value="25" class="option">25</li><li data-value="30" class="option">30</li></ul></div>
									</div>
									<div class="single-shorter">
										<label>Sort By :</label>
										<select style="display: none;">
											<option selected="selected">Name</option>
											<option>Price</option>
											<option>Size</option>
										</select><div class="nice-select" tabindex="0"><span class="current">Name</span><ul class="list"><li data-value="Name" class="option selected">Name</li><li data-value="Price" class="option">Price</li><li data-value="Size" class="option">Size</li></ul></div>
									</div>
								</div>
								<ul class="view-mode">
									<li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
									<li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
								</ul>
							</div>
							<!--/ End Shop Top -->
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="{{ asset('themes/default/images/products/p1.jpg') }}" alt="#">
										<img class="hover-img" src="{{ asset('themes/default/images/products/p2.jpg') }}" alt="#">
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Women Hot Collection</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="{{ asset('themes/default/images/products/p3.jpg') }}" alt="#">
										<img class="hover-img" src="{{ asset('themes/default/images/products/p4.jpg') }}" alt="#">
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Awesome Pink Show</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="{{ asset('themes/default/images/products/p5.jpg') }}" alt="#">
										<img class="hover-img" src="{{ asset('themes/default/images/products/p6.jpg') }}" alt="#">
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="{{ asset('themes/default/images/products/p7.jpg') }}" alt="#">
										<img class="hover-img" src="{{ asset('themes/default/images/products/p8.jpg') }}" alt="#">
										<span class="new">New</span>
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Women Pant Collectons</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="{{ asset('themes/default/images/products/p9.jpg') }}" alt="#">
										<img class="hover-img" src="{{ asset('themes/default/images/products/p10.jpg') }}" alt="#">
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="{{ asset('themes/default/images/products/p11.jpg') }}" alt="#">
										<img class="hover-img" src="{{ asset('themes/default/images/products/p12.jpg') }}" alt="#">
										<span class="price-dec">30% Off</span>
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="{{ asset('themes/default/images/products/p13.jpg') }}" alt="#">
										<img class="hover-img" src="{{ asset('themes/default/images/products/p14.jpg') }}" alt="#">
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Polo Dress For Women</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="{{ asset('themes/default/images/products/p15.jpg') }}" alt="#">
										<img class="hover-img" src="{{ asset('themes/default/images/products/p16.jpg') }}" alt="#">
										<span class="out-of-stock">Hot</span>
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
									<div class="product-price">
										<span class="old">$60.00</span>
										<span>$50.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="{{ asset('themes/default/images/products/p7.jpg') }}" alt="#">
										<img class="hover-img" src="{{ asset('themes/default/images/products/p8.jpg') }}" alt="#">
										<span class="new">New</span>
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Women Pant Collectons</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<!-- Pagination -->
							<div class="pagination">
								<ul class="pagination-list">
									<li><a href="#"><i class="ti-arrow-left"></i></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="ti-arrow-right"></i></a></li>
								</ul>
							</div>
							<!--/ End Pagination -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /End Product Style -->

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
				</div>
				<div class="modal-body">
					<div class="row no-gutters">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<!-- Product Slider -->
								<div class="product-gallery">
									<div class="quickview-slider-active owl-carousel owl-theme owl-loaded">
									<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2200px, 0px, 0px); transition: all 0.4s ease 0s; width: 4400px;"><div class="owl-item cloned"><div class="single-slider">
											<img src="{{ asset('themes/default/images/modal3.png') }}" alt="#">
										</div></div><div class="owl-item cloned"><div class="single-slider">
											<img src="{{ asset('themes/default/images/modal4.png') }}" alt="#">
										</div></div><div class="owl-item"><div class="single-slider">
											<img src="{{ asset('themes/default/images/modal1.png') }}" alt="#">
										</div></div><div class="owl-item"><div class="single-slider">
											<img src="{{ asset('themes/default/images/modal2.png') }}" alt="#">
										</div></div><div class="owl-item active"><div class="single-slider">
											<img src="{{ asset('themes/default/images/modal3.png') }}" alt="#">
										</div></div><div class="owl-item"><div class="single-slider">
											<img src="{{ asset('themes/default/images/modal4.png') }}" alt="#">
										</div></div><div class="owl-item cloned"><div class="single-slider">
											<img src="{{ asset('themes/default/images/modal1.png') }}" alt="#">
										</div></div><div class="owl-item cloned"><div class="single-slider">
											<img src="{{ asset('themes/default/images/modal2.png') }}" alt="#">
										</div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class=" ti-arrow-left"></i></div><div class="owl-next" style=""><i class=" ti-arrow-right"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
								</div>
							<!-- End Product slider -->
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="quickview-content">
								<h2>Flared Shift Dress</h2>
								<div class="quickview-ratting-review">
									<div class="quickview-ratting-wrap">
										<div class="quickview-ratting">
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<a href="#"> (1 customer review)</a>
									</div>
									<div class="quickview-stock">
										<span><i class="fa fa-check-circle-o"></i> in stock</span>
									</div>
								</div>
								<h3>$29.00</h3>
								<div class="quickview-peragraph">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
								</div>
								<div class="size">
									<div class="row">
										<div class="col-lg-6 col-12">
											<h5 class="title">Size</h5>
											<select style="display: none;">
												<option selected="selected">s</option>
												<option>m</option>
												<option>l</option>
												<option>xl</option>
											</select><div class="nice-select" tabindex="0"><span class="current">s</span><ul class="list"><li data-value="s" class="option selected focus">s</li><li data-value="m" class="option">m</li><li data-value="l" class="option">l</li><li data-value="xl" class="option">xl</li></ul></div>
										</div>
										<div class="col-lg-6 col-12">
											<h5 class="title">Color</h5>
											<select style="display: none;">
												<option selected="selected">orange</option>
												<option>purple</option>
												<option>black</option>
												<option>pink</option>
											</select><div class="nice-select" tabindex="0"><span class="current">orange</span><ul class="list"><li data-value="orange" class="option selected focus">orange</li><li data-value="purple" class="option">purple</li><li data-value="black" class="option">black</li><li data-value="pink" class="option">pink</li></ul></div>
										</div>
									</div>
								</div>
								<div class="quantity">
									<!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</div>
								<div class="add-to-cart">
									<a href="#" class="btn">Add to cart</a>
									<a href="#" class="btn min"><i class="ti-heart"></i></a>
									<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
								</div>
								<div class="default-social">
									<h4 class="share-now">Share:</h4>
									<ul>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
										<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal end -->
</x-app-layout>
