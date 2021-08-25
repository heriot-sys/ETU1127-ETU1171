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
    <title>KARIMARKET</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo images_url("favicon.png") ?>">
		
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo css_url("bootstrap.css") ?>">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo css_url("magnific-popup.min.css") ?>">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo css_url("font-awesome.css") ?>">
	<!-- Fancybox -->
	<link rel="stylesheet" href="<?php echo css_url("jquery.fancybox.min.css") ?>">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="<?php echo css_url("themify-icons.css") ?>">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?php echo css_url("niceselect.css") ?>">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo css_url("animate.css") ?>">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="<?php echo css_url("flex-slider.min.css") ?>">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo css_url("owl-carousel.css") ?>">
	<!-- Slicknav -->
    <link rel="stylesheet" href="<?php echo css_url("slicknav.min.css") ?>">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="<?php echo css_url("reset.css") ?>">
	<link rel="stylesheet" href="<?php echo style_url("style.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url("responsive.css") ?>">

	
	
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
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +264 (800) 801-582</li>
								<li><i class="ti-email"></i> KARIMARKET@shophub.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-7 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-power-off"></i><a href="login.html#">Login</a></li>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
    <!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="#">Home</a></li>
													<li><a href="#">Ajout Achat </a></li>									
													<li><a href="contact.html">Validation Achat</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src="images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select>
									<option selected="selected">Categories</option>
									<option>watch</option>
									<option>mobile</option>
									<option>kid’s item</option>
								</select>
								<form>
									<input name="search" placeholder="Search Products Here....." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--/ End Header -->
	
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
                  <?php include($vue); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->
	
	
	
	
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.html"><img src="images/logo2.png" alt="#"></a>
							</div>
							<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>NO. 342 - London Oxford Street.</li>
									<li>012 United Kingdom.</li>
									<li>info@eshop.com</li>
									<li>+032 3456 7890</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="<?php echo js_url("jquery.min.js") ?>"></script>
    <script src="<?php echo js_url("jquery-migrate-3.0.0.js") ?>"></script>
	<script src="<?php echo js_url("jquery-ui.min.js") ?>"></script>
	<!-- Popper JS -->
	<script src="<?php echo js_url("popper.min.js") ?>"></script>
	<!-- Bootstrap JS -->
	<script src="<?php echo js_url("bootstrap.min.js") ?>"></script>
	<!-- Color JS -->
	<script src="<?php echo js_url("colors.js") ?>"></script>
	<!-- Slicknav JS -->
	<script src="<?php echo js_url("slicknav.min.js") ?>"></script>
	<!-- Owl Carousel JS -->
	<script src="<?php echo js_url("owl-carousel.js") ?>"></script>
	<!-- Magnific Popup JS -->
	<script src="<?php echo js_url("magnific-popup.js") ?>"></script>
	<!-- Waypoints JS -->
	<script src="<?php echo js_url("waypoints.min.js") ?>"></script>
	<!-- Countdown JS -->
	<script src="<?php echo js_url("finalcountdown.min.js") ?>"></script>
	<!-- Nice Select JS -->
	<script src="<?php echo js_url("nicesellect.js") ?>"></script>
	<!-- Flex Slider JS -->
	<script src="<?php echo js_url("flex-slider.js") ?>"></script>
	<!-- ScrollUp JS -->
	<script src="<?php echo js_url("scrollup.js") ?>"></script>
	<!-- Onepage Nav JS -->
	<script src="<?php echo js_url("onepage-nav.min.js") ?>"></script>
	<!-- Easing JS -->
	<script src="<?php echo js_url("easing.js") ?>"></script>
	<!-- Active JS -->
	<script src="<?php echo js_url("active.js") ?>"></script>

  <script src="<?php echo vendor_url("jquery/jquery.min.js") ?>"></script>
  <script src="<?php echo vendor_url("bootstrap/js/bootstrap.bundle.min.js")?> "></script>
</body>
</html>