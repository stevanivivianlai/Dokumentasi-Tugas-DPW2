<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Vivi Shop.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	 <!-- Bootstrap -->
     <link rel="stylesheet" href="{{asset('style/css/bootstrap.css')}}">
     <!-- Magnific Popup -->
     <link rel="stylesheet" href="{{asset('style/css/magnific-popup.min.css')}}">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="{{asset('style/css/font-awesome.css')}}">
     <!-- Fancybox -->
     <link rel="stylesheet" href="{{asset('style/css/jquery.fancybox.min.css')}}">
     <!-- Themify Icons -->
     <link rel="stylesheet" href="{{asset('style/css/themify-icons.css')}}">
     <!-- Jquery Ui -->
     <link rel="stylesheet" href="{{asset('style/css/jquery-ui.css')}}">
     <!-- Nice Select CSS -->
     <link rel="stylesheet" href="{{asset('style/css/niceselect.css')}}">
     <!-- Animate CSS -->
     <link rel="stylesheet" href="{{asset('style/css/animate.css')}}">
     <!-- Flex Slider CSS -->
     <link rel="stylesheet" href="{{asset('style/css/flex-slider.min.css')}}">
     <!-- Owl Carousel -->
     <link rel="stylesheet" href="{{asset('style/css/owl-carousel.css')}}">
     <!-- Slicknav -->
     <link rel="stylesheet" href="{{asset('style/css/slicknav.min.css')}}">

     <!-- Eshop StyleSheet -->
     <link rel="stylesheet" href="{{asset('style/css/reset.css')}}">
     <link rel="stylesheet" href="{{asset('style/style.css')}}">
     <link rel="stylesheet" href="{{asset('style/css/responsive.css')}}">

	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
		
	<!-- Header -->
	@include('section.header')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Cart</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
			
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="image" data-title="No"><img src="{{asset('style/images/dress1.png')}}" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#">Dress Wanita</a></p>
									<p class="product-des">Dress untuk pesta.</p>
								</td>
								<td class="price" data-title="Price"><span>RP. 110.000 </span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="1">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</td>
								<td class="total-amount" data-title="Total"><span>RP. 110.000</span></td>
								<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
							</tr>
						
									<!--/ End Input Order -->
								
							</tr>
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
										<form action="#" target="_blank">
											<input name="Coupon" placeholder="Enter Your Coupon">
											<button class="btn">Apply</button>
										</form>
									</div>
									<div class="checkbox">
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Cart Subtotal<span>RP. 110.000</span></li>
										<li>Free ongkir<span>Free</span></li>
										<li>You Save<span>RP. 20.000</span></li>
										<li class="last">Kamu Bayar<span>RP. 110.000</span></li>
									</ul>
									<div class="button5">
										<a href="#" class="btn">Checkout</a>
										<a href="#" class="btn">Lanjutkan Belanja</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
			
		<!-- Start Shop Services Area -->
        <section class="shop-services section home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-rocket"></i>
                            <h4>Free Ongkir</h4>
                            <p>Minimal Order RP. 30.000</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-reload"></i>
                            <h4>Garansi</h4>
                            <p>Minimal 30 hari pembelian</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-lock"></i>
                            <h4>Pembayaran Aman</h4>
                            <p>100% Aman</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-tag"></i>
                            <h4>Harga Terbaik</h4>
                            <p>Harga yang murah meriah</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Shop Services Area -->
        
        <!-- Start Shop Newsletter  -->
        <section class="shop-newsletter section">
            <div class="container">
                <div class="inner-top">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-12">
                            <!-- Start Newsletter Inner -->
                            <div class="inner">
                                <h4>Newsletter</h4>
                                <p> berlangganan dengan kami dan dapatkan <span>10%</span> diskon setiap pembayaran</p>
                                <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                    <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                    <button class="btn">Berlangganan</button>
                                </form>
                            </div>
                            <!-- End Newsletter Inner -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Shop Newsletter -->
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
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
                                            <div class="quickview-slider-active">
                                                <div class="single-slider">
                                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                                </div>
                                                <div class="single-slider">
                                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                                </div>
                                                <div class="single-slider">
                                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                                </div>
                                                <div class="single-slider">
                                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                                </div>
                                            </div>
                                        </div>
                                    <!-- End Product slider -->
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="quickview-content">
                                        <h2>Barang ViviShop</h2>
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
                                        <h3>RP. 100.000</h3>
                                        <div class="quickview-peragraph">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                        </div>
                                        <div class="size">
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <h5 class="title">Ukuran</h5>
                                                    <select>
                                                        <option selected="selected">s</option>
                                                        <option>m</option>
                                                        <option>l</option>
                                                        <option>xl</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <h5 class="title">Warna</h5>
                                                    <select>
                                                        <option selected="selected">orange</option>
                                                        <option>purple</option>
                                                        <option>black</option>
                                                        <option>pink</option>
                                                    </select>
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
                                                <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
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
        
        <!-- Start Footer Area -->
        
        @include('section.footer')

        <!-- /End Footer Area -->
     
        <!-- Jquery -->
        <script src="style/js/jquery.min.js"></script>
        <script src="style/js/jquery-migrate-3.0.0.js"></script>
        <script src="style/js/jquery-ui.min.js"></script>
        <!-- Popper JS -->
        <script src="style/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="style/js/bootstrap.min.js"></script>
        <!-- Color JS -->
        <script src="style/js/colors.js"></script>
        <!-- Slicknav JS -->
        <script src="style/js/slicknav.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="style/js/owl-carousel.js"></script>
        <!-- Magnific Popup JS -->
        <script src="style/js/magnific-popup.js"></script>
        <!-- Waypoints JS -->
        <script src="style/js/waypoints.min.js"></script>
        <!-- Countdown JS -->
        <script src="style/js/finalcountdown.min.js"></script>
        <!-- Nice Select JS -->
        <script src="style/js/nicesellect.js"></script>
        <!-- Flex Slider JS -->
        <script src="style/js/flex-slider.js"></script>
        <!-- ScrollUp JS -->
        <script src="style/js/scrollup.js"></script>
        <!-- Onepage Nav JS -->
        <script src="style/js/onepage-nav.min.js"></script>
        <!-- Easing JS -->
        <script src="style/js/easing.js"></script>
        <!-- Active JS -->
        <script src="style/js/active.js"></script>
    </body>
    </html>