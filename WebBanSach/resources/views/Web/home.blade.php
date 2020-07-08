@extends('Web/layout')


@section('main-content')
<!-- banner-area-start -->
<div class="banner-area banner-res-large ptb-35">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="single-banner">
					<div class="banner-img">
						<a href="#"><img src="{{ asset('assets/Web/img/banner/1.png') }}" alt="banner" /></a>
					</div>
					<div class="banner-text">
						<h4>Free shipping item</h4>
						<p>For all orders over $500</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="single-banner">
					<div class="banner-img">
						<a href="#"><img src="{{ asset('assets/Web/img/banner/2.png') }}" alt="banner" /></a>
					</div>
					<div class="banner-text">
						<h4>Money back guarantee</h4>
						<p>100% money back guarante</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
				<div class="single-banner">
					<div class="banner-img">
						<a href="#"><img src="{{ asset('assets/Web/img/banner/3.png') }}" alt="banner" /></a>
					</div>
					<div class="banner-text">
						<h4>Cash on delivery</h4>
						<p>Lorem ipsum dolor consecte</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="single-banner mrg-none-xs">
					<div class="banner-img">
						<a href="#"><img src="{{ asset('assets/Web/img/banner/4.png') }}" alt="banner" /></a>
					</div>
					<div class="banner-text">
						<h4>Help & Support</h4>
						<p>Call us : + 0123.4567.89</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- banner-area-end -->
<!-- slider-area-start -->
<div class="slider-area">
	<div class="slider-active owl-carousel">
		<div class="single-slider pt-125 pb-130 bg-img" style="background-image:url(assets/Web/img/slider/1.jpg);">
		    <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="slider-content slider-animated-1 text-center">
                            <h1>Huge Sale</h1>
                            <h2>koparion</h2>
                            <h3>Now starting at £99.00</h3>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
		    </div>
		</div>
		<div class="single-slider slider-h1-2 pt-215 pb-100 bg-img" style="background-image:url(assets/Web/img/slider/2.jpg);">
		    <div class="container">
		        <div class="slider-content slider-content-2 slider-animated-1">
                    <h1>We can help get your</h1>
                    <h2>Books in Order</h2>
                    <h3>and Accessories</h3>
                    <a href="#">Contact Us Today!</a>
                </div>
		    </div>
		</div>
	</div>
</div>
<!-- slider-area-end -->
<!-- product-area-start -->
<div class="product-area pt-95 xs-mb">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center mb-50">
					<h2>Top interesting</h2>
					<p>Browse the collection of our best selling and top interresting products. <br /> ll definitely find what you are looking for..</p>
				</div>
			</div>
			<div class="col-lg-12">
				<!-- tab-menu-start -->
				<div class="tab-menu mb-40 text-center">
					<ul>
						<li class="active"><a href="#Audiobooks" data-toggle="tab">New Arrival</a></li>
						<li><a href="#books"  data-toggle="tab">OnSale</a></li>
						<li><a href="#bussiness" data-toggle="tab">Featured Products</a></li>
					</ul>
				</div>
				<!-- tab-menu-end -->
			</div>
		</div>
		<!-- tab-area-start -->
		<div class="tab-content">
			<div class="tab-pane active" id="Audiobooks">
                <div class="tab-active owl-carousel">
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/1.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span></li>
                                    <li><span class="discount-percentage">-5%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Joust Duffle Bag</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$60.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/1.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span> <br></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$52.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/1.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span> <br></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Set of Sprite Yoga Straps</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$34.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/1.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span> <br></li>
                                    <li><span class="discount-percentage">-5%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Strive Shoulder Pack</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$30.00</li>
                                    <li class="old-price">$32.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/1.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="discount-percentage">-5%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Wayfarer Messenger Bag</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$35.00</li>
                                    <li class="old-price">40.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/1.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span> <br></li>
                                    <li><span class="discount-percentage">-5%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Impulse Duffle</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$74.00</li>
                                    <li class="old-price">78.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                </div>
			</div>

			<div class="tab-pane fade" id="books">
                <div class="tab-active owl-carousel">
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/5.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Strive Shoulder Pack</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$30.00</li>
                                    <li class="old-price">$32.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/5.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Strive Shoulder Pack</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$30.00</li>
                                    <li class="old-price">$32.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/5.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Joust Duffle Bag</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$60.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/5.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span> <br></li>
                                    <li><span class="discount-percentage">-5%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$52.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/5.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span> <br></li>
                                    <li><span class="discount-percentage">-5%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Wayfarer Messenger Bag</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$35.00</li>
                                    <li class="old-price">40.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/5.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="discount-percentage">-5%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Impulse Duffle</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$74.00</li>
                                    <li class="old-price">78.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                </div>
			</div>
            
			<div class="tab-pane fade" id="bussiness">
                <div class="tab-active owl-carousel">
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/9.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span> <br></li>
                                    <li><span class="discount-percentage">-5%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Wayfarer Messenger Bag</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$35.00</li>
                                    <li class="old-price">40.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/9.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Impulse Duffle</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$74.00</li>
                                    <li class="old-price">78.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/9.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span> <br></li>
                                    <li><span class="discount-percentage">-5%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Joust Duffle Bag</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$60.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/9.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$52.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/9.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">new</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Set of Sprite Yoga Straps</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$34.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('assets/Web/img/product/9.jpg') }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="discount-percentage">-5%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Strive Shoulder Pack</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>$30.00</li>
                                    <li class="old-price">$32.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                </div>
			</div>
		</div>
		<!-- tab-area-end -->
	</div>
</div>
<!-- product-area-end -->
<!-- banner-area-start -->
<div class="banner-area-5 mtb-95">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="banner-img-2">
					<a href="#"><img src="{{ asset('assets/Web/img/banner/5.jpg') }}" alt="banner" /></a>
					<div class="banner-text">
						<h3>G. Meyer Books & Spiritual Traveler Press</h3>
						<h2>Sale up to 30% off</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- banner-area-end -->
<!-- bestseller-area-start -->
<div class="bestseller-area pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="bestseller-content">
					<h1>Author best selling</h1>
					<h2>J. K. <br />Rowling</h2>
					<p class="categories">categories:<a href="#">Books</a> , <a href="#">Audiobooks</a></p>
					<p>Vestibulum porttitor iaculis gravida. Praesent vestibulum varius placerat. Cras tempor congue neque, id aliquam orci finibus sit amet. Fusce at facilisis arcu. Donec aliquet nulla id turpis semper, a bibendum metus vulputate. Suspendisse potenti. </p>
					<div class="social-author">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="banner-img-2">
					<a href="#"><img src="{{ asset('assets/Web/img/banner/6.jpg') }}" alt="banner" /></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="bestseller-active owl-carousel">
					<div class="bestseller-total">
						<div class="single-bestseller mb-25">
							<div class="bestseller-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/13.jpg') }}" alt="book" /></a>
								<div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                        <li><span class="discount-percentage">-5%</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="bestseller-text text-center">
								<h3> <a href="#">Rival Messenger</a></h3>
								<div class="price">
									<ul>
										<li><span class="new-price">$40.00</span></li>
										<li><span class="old-price">$45.00</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-bestseller">
							<div class="bestseller-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/14.jpg') }}" alt="book" /></a>
								<div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="bestseller-text text-center">
								<h3> <a href="#">Impulse Duffle</a></h3>
								<div class="price">
									<ul>
										<li><span class="new-price">$70.00</span></li>
										<li><span class="old-price">$74.00</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="bestseller-total">
						<div class="single-bestseller mb-25">
							<div class="bestseller-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/15.jpg') }}" alt="book" /></a>
								<div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="bestseller-text text-center">
								<h3> <a href="#">Voyage Yoga Bag</a></h3>
								<div class="price">
									<ul>
										<li><span class="new-price">$30.00</span></li>
										<li><span class="old-price">$32.00</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-bestseller">
							<div class="bestseller-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/16.jpg') }}" alt="book" /></a>
								<div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                        <li><span class="discount-percentage">-5%</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="bestseller-text text-center">
								<h3> <a href="#">Compete Track Tote</a></h3>
								<div class="price">
									<ul>
										<li><span class="new-price">$32.00</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="bestseller-total">
						<div class="single-bestseller mb-25">
							<div class="bestseller-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/17.jpg') }}" alt="book" /></a>
								<div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="bestseller-text text-center">
								<h3> <a href="#">Fusion Backpack</a></h3>
								<div class="price">
									<ul>
										<li><span class="new-price">$59.00</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-bestseller">
							<div class="bestseller-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/14.jpg') }}" alt="book" /></a>
								<div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="bestseller-text text-center">
								<h3> <a href="#">Impulse Duffle</a></h3>
								<div class="price">
									<ul>
										<li><span class="new-price">$70.00</span></li>
										<li><span class="old-price">$74.00</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bestseller-area-end -->
<!-- new-book-area-start -->
<div class="new-book-area pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title bt text-center pt-100 mb-30 section-title-res">
					<h2>Featured Books</h2>
				</div>
			</div>
		</div>
		<div class="tab-active owl-carousel">
            <div class="tab-total">
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{ asset('assets/Web/img/product/1.jpg') }}" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
                                <li><span class="discount-percentage">-5%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Joust Duffle Bag</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$60.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>	
                </div>
                <!-- single-product-end -->
                <!-- single-product-start -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{ asset('assets/Web/img/product/18.jpg') }}" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> <br></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Driven Backpack</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$34.00</li>
                                <li class="old-price">$36.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>	
                </div>
                <!-- single-product-end -->
            </div>
            <div class="tab-total">	
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{ asset('assets/Web/img/product/3.jpg') }}" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> <br></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$52.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>	
                </div>
                <!-- single-product-end -->
                <!-- single-product-start -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{ asset('assets/Web/img/product/10.jpg') }}" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
                                <li><span class="discount-percentage">-5%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Fusion Backpack</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$59.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>	
                </div>
                <!-- single-product-end -->
            </div>
            <div class="tab-total">	
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{ asset('assets/Web/img/product/5.jpg') }}" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
                                <li><span class="discount-percentage">-5%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Set of Sprite Yoga Straps</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$34.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>	
                </div>
                <!-- single-product-end -->	
                <!-- single-product-start -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{ asset('assets/Web/img/product/19.jpg') }}" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Compete Track Tote</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$32.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>	
                </div>
                <!-- single-product-end -->
            </div>
            <div class="tab-total">	
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{ asset('assets/Web/img/product/7.jpg') }}" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> <br></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Strive Shoulder Pack</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$30.00</li>
                                <li class="old-price">$32.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>	
                </div>
                <!-- single-product-end -->	
                <!-- single-product-start -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{ asset('assets/Web/img/product/4.jpg') }}" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
                                <li><span class="discount-percentage">-5%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$52.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>	
                </div>
                <!-- single-product-end -->
            </div>
            <div class="tab-total">	
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{ asset('assets/Web/img/product/9.jpg') }}" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="discount-percentage">-5%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Wayfarer Messenger Bag</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$35.00</li>
                                <li class="old-price">$40.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>	
                </div>
                <!-- single-product-end -->
                <!-- single-product-start -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{ asset('assets/Web/img/product/8.jpg') }}" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
                                <li><span class="discount-percentage">-5%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Rival  Messenger</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$35.00</li>
                                <li class="old-price">$40.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>	
                </div>
                <!-- single-product-end -->
            </div>
            <div class="tab-total">	
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{ asset('assets/Web/img/product/11.jpg') }}" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Impulse Duffle</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$74.00</li>
                                <li class="old-price">$78.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>	
                </div>
                <!-- single-product-end -->
                <!-- single-product-start -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{ asset('assets/Web/img/product/3.jpg') }}" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
                                <li><span class="discount-percentage">-5%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Crown Summit</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$36.00</li>
                                <li class="old-price">$38.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>	
                </div>
                <!-- single-product-end -->
            </div>
        </div>
	</div>
</div>
<!-- new-book-area-start -->
<!-- banner-static-area-start -->
<div class="banner-static-area bg ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="banner-shadow-hover xs-mb">
					<a href="#"><img src="{{ asset('assets/Web/img/banner/8.jpg') }}" alt="banner" /></a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="banner-shadow-hover">
					<a href="#"><img src="{{ asset('assets/Web/img/banner/9.jpg') }}" alt="banner" /></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- banner-static-area-end -->
<!-- most-product-area-start -->
<div class="most-product-area pt-90 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 xs-mb">
				<div class="section-title-2 mb-30">
					<h3>Book</h3>
				</div>
				<div class="product-active-2 owl-carousel">
					<div class="product-total-2">
						<div class="single-most-product bd mb-18">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/20.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Endeavor Daytrip</a></h4>
								<div class="product-price">
									<ul>
										<li>$30.00</li>
										<li class="old-price">$33.00</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-most-product bd mb-18">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/21.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Savvy Shoulder Tote</a></h4>
								<div class="product-price">
									<ul>
										<li>$30.00</li>
										<li class="old-price">$35.00</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-most-product">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/22.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Compete Track Tote</a></h4>
								<div class="product-price">
									<ul>
										<li>$35.00</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="product-total-2">
						<div class="single-most-product bd mb-18">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/23.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Voyage Yoga Bag</a></h4>
								<div class="product-price">
									<ul>
										<li>$30.00</li>
										<li class="old-price">$33.00</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-most-product bd mb-18">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/24.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Impulse Duffle</a></h4>
								<div class="product-price">
									<ul>
										<li>$70.00</li>
										<li class="old-price">$74.00</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-most-product">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/22.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Fusion Backpack</a></h4>
								<div class="product-price">
									<ul>
										<li>$59.00</li>
									</ul>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 xs-mb">
				<div class="section-title-2 mb-30">
					<h3>Audio books </h3>
				</div>
				<div class="product-active-2 owl-carousel">
					<div class="product-total-2">
						<div class="single-most-product bd mb-18">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/23.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Voyage Yoga Bag</a></h4>
								<div class="product-price">
									<ul>
										<li>$30.00</li>
										<li class="old-price">$33.00</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-most-product bd mb-18">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/24.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Impulse Duffle</a></h4>
								<div class="product-price">
									<ul>
										<li>$70.00</li>
										<li class="old-price">$74.00</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-most-product">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/26.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Driven Backpack1</a></h4>
								<div class="product-price">
									<ul>
										<li>$40.00</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="product-total-2">
						<div class="single-most-product bd mb-18">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/20.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Endeavor Daytrip</a></h4>
								<div class="product-price">
									<ul>
										<li>$30.00</li>
										<li class="old-price">$33.00</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-most-product bd mb-18">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/21.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Savvy Shoulder Tote</a></h4>
								<div class="product-price">
									<ul>
										<li>$30.00</li>
										<li class="old-price">$35.00</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-most-product">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/22.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Compete Track Tote</a></h4>
								<div class="product-price">
									<ul>
										<li>$35.00</li>
									</ul>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="section-title-2 mb-30">
					<h3>children’s books</h3>
				</div>
				<div class="product-active-2 owl-carousel">
					<div class="product-total-2">
						<div class="single-most-product bd mb-18">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/27.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Crown Summit</a></h4>
								<div class="product-price">
									<ul>
										<li>$36.00</li>
										<li class="old-price">$38.00</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-most-product bd mb-18">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/28.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Driven Backpack</a></h4>
								<div class="product-price">
									<ul>
										<li>$34.00</li>
										<li class="old-price">$36.00</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-most-product">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/29.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Endeavor Daytrip</a></h4>
								<div class="product-price">
									<ul>
										<li>$30.00</li>
										<li class="old-price">$33.00</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="product-total-2">
						<div class="single-most-product bd mb-18">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/23.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Voyage Yoga Bag</a></h4>
								<div class="product-price">
									<ul>
										<li>$30.00</li>
										<li class="old-price">$33.00</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-most-product bd mb-18">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/24.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Impulse Duffle</a></h4>
								<div class="product-price">
									<ul>
										<li>$70.00</li>
										<li class="old-price">$74.00</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-most-product">
							<div class="most-product-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/22.jpg') }}" alt="book" /></a>
							</div>
							<div class="most-product-content">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Fusion Backpack</a></h4>
								<div class="product-price">
									<ul>
										<li>$59.00</li>
									</ul>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="block-newsletter">
					<h2>Sign up for send newsletter</h2>
					<p>You can be always up to date with our company new!</p>
					<form action="#">
						<input type="text" placeholder="Enter your email address" />
					</form>
					<a href="#">Send Email</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- most-product-area-end -->
<!-- testimonial-area-start -->
<div class="testimonial-area ptb-100 bg">
	<div class="container">
		<div class="row">
			<div class="testimonial-active owl-carousel">
				<div class="col-lg-12">
					<div class="single-testimonial text-center">
						<div class="testimonial-img">
							<a href="#"><i class="fa fa-quote-right"></i></a>
						</div>
						<div class="testimonial-text">
							<p>I'm so happy with all of the themes, great support, could not wish for more. These people are <br /> geniuses ! Kudo's from the Netherlands !</p>
							<a href="#">Sandy Wilcke/user</a>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-testimonial text-center">
						<div class="testimonial-img">
							<a href="#"><i class="fa fa-quote-right"></i></a>
						</div>
						<div class="testimonial-text">
							<p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support ,<br /> advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</p>
							<a href="#">Sandy Wilcke/user</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- testimonial-area-end -->
<!-- recent-post-area-start -->
<div class="recent-post-area pt-95 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center mb-30 section-title-res">
					<h2>Latest from our blog</h2>
				</div>
			</div>
			<div class="post-active owl-carousel text-center">
				<div class="col-lg-12">
					<div class="single-post">
						<div class="post-img">
							<a href="#"><img src="{{ asset('assets/Web/img/post/1.jpg') }}" alt="post" /></a>
							<div class="blog-date-time">
							    <span class="day-time">06</span>
                                <span class="moth-time">Dec</span>
							</div>
						</div>
						<div class="post-content">
							<h3><a href="#">Nam tincidunt vulputate felis</a></h3>
							<span class="meta-author"> Demo Posthemes </span>
							<p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-post">
						<div class="post-img">
							<a href="blog-details.html"><img src="{{ asset('assets/Web/img/post/2.jpg') }}" alt="post" /></a>
							<div class="blog-date-time">
							    <span class="day-time">06</span>
                                <span class="moth-time">Dec</span>
							</div>
						</div>
						<div class="post-content">
							<h3><a href="blog-details.html">Interdum et malesuada</a></h3>
							<span class="meta-author"> Demo Posthemes </span>
							<p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-post">
						<div class="post-img">
							<a href="blog-details.html"><img src="{{ asset('assets/Web/img/post/3.jpg') }}" alt="post" /></a>
							<div class="blog-date-time">
							    <span class="day-time">07</span>
                                <span class="moth-time">Dec</span>
							</div>
						</div>
						<div class="post-content">
							<h3><a href="blog-details.html">What is Bootstrap?</a></h3>
							<span class="meta-author"> Demo Posthemes </span>
							<p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-post">
						<div class="post-img">
							<a href="blog-details.html"><img src="{{ asset('assets/Web/img/post/4.jpg') }}" alt="post" /></a>
							<div class="blog-date-time">
							    <span class="day-time">08</span>
                                <span class="moth-time">Dec</span>
							</div>
						</div>
						<div class="post-content">
							<h3><a href="blog-details.html">Etiam eros massa</a></h3>
							<span class="meta-author"> Demo Posthemes </span>
							<p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- recent-post-area-end -->
<!-- social-group-area-start -->
<div class="social-group-area ptb-60">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="section-title-3">
					<h3>Latest Tweets</h3>
				</div>
				<div class="twitter-content">
					<div class="twitter-icon">
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<div class="twitter-text">
						<p>
							Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum notare quam 
						</p>
						<a href="#">posthemes</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="section-title-3">
					<h3>Stay Connected</h3>
				</div>
				<div class="link-follow">
					<ul>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						<li><a href="#"><i class="fa fa-flickr"></i></a></li>
						<li class="hidden-sm"><a href="#"><i class="fa fa-vimeo"></i></a></li>
						<li class="hidden-sm"><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- social-group-area-end -->
@endsection
