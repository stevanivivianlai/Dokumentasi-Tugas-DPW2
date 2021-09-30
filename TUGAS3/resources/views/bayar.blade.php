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
    <title>Vivi Shop</title>
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
		<!--/ End Header -->
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="blog-single.html">Checkout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Checkout -->
		<section class="shop checkout section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-8 col-12">
						<div class="checkout-form">
							<h2>Lakukan Pembayaran Anda Di Sini</h2>
							<p>Please register in order to checkout more quickly</p>
							<!-- Form -->
							<form class="form" method="post" action="#">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Nama<span>*</span></label>
											<input type="text" name="name" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Nama AKHIR<span>*</span></label>
											<input type="text" name="name" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Email Address<span>*</span></label>
											<input type="email" name="email" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Nomor HP<span>*</span></label>
											<input type="number" name="number" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Provinsi<span>*</span></label>
											<select name="country_name" id="country">
												<option value="AC">Aceh</option>
												<option value="Ba">Denpasar Bali</option>
												<option value="BT">Banten</option>
												<option value="BE">Bengkulu</option>
												<option value="YO">DIY Yogyakarta</option>
												<option value="JK">DKI Jakarta</option>
												<option value="GO">Gorontalo</option>
												<option value="JB">Jambi</option>
												<option value="JK">Jawa Barat</option>
												<option value="JT">Jawa Tengah</option>
												<option value="JL">Jawa Timur</option>
												<option value="KB">Kalimantan Barat</option>
												<option value="KS">Kalimantan Selatan</option>
												<option value="KT">Kalimantan Tengah</option>
												<option value="KI">Kalimantan Timur</option>
												<option value="BB">Kepulauan Bangka Belitung</option>
												<option value="KR">Kepulauan Riau</option>
												<option value="LA">Lampung</option>
												<option value="MU">Maluku</option>
												<option value="NB">Nusa Tenggara Barat</option>
												<option value="NT">Nusa Tenggara Timur</option>
												<option value="PA">Papua</option>
												<option value="PB">Papua Barat</option>
												<option value="RI">Riau</option>
												<option value="SR">Sulawesi Barat</option>
												<option value="SN">Sulawesi Selatan</option>
												<option value="ST">Sulawesi Tengah</option>
												<option value="SG">Sulawesi Tenggara</option>
												<option value="SA">Sulawesi Utara</option>
												<option value="SB">Sumatera Barat</option>
												<option value="SS">Sumatera Selatan</option>
												<option value="SU">Sumatera Utara</option>
									
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Kota<span>*</span></label>
											<select name="state-province" id="state-province">
												<option value="divition" selected="selected">Ketapang</option>
												<option>Pontianak</option>
												<option>Sambas</option>
												<option>Sintang</option>
												<option>Sanggau</option>
												<option>Kubu Raya</option>
												<option>Kayong Utara</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Address Line 1<span>*</span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Address Line 2<span>*</span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Kode Pos<span>*</span></label>
											<input type="text" name="post" placeholder="" required="required">
										</div>
									</div>
								
									<div class="col-12">
										<div class="form-group create-account">
											<input id="cbox" type="checkbox">
											<label>Create an account?</label>
										</div>
									</div>
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="order-details">
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Total Belanja</h2>
								<div class="content">
									<ul>
										<li>Sub Total<span>RP. 330.000</span></li>
										<li>(+) Ongkos Kirim<span>RP. 10.000</span></li>
										<li class="last">Total<span>RP. 340.000</span></li>
									</ul>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Pembayaran</h2>
								<div class="content">
									<div class="checkbox">
										<label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Dana</label>
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Cash On Delivery</label>
										<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox"> Bank</label>
									</div>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Payment Method Widget -->
							<div class="single-widget payement">
								<div class="content">
									<img src="style/images/payment-method.png" alt="#">
								</div>
							</div>
							<!--/ End Payment Method Widget -->
							<!-- Button Widget -->
							<div class="single-widget get-button">
								<div class="content">
									<div class="button">
										<a href="#" class="btn">proceed to checkout</a>
									</div>
								</div>
							</div>
							<!--/ End Button Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Checkout -->
		
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