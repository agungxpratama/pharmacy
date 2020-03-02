<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	redirect('index.php/home');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Pharmacy Kids.</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/styles/bootstrap4/bootstrap.min.css'); ?> ">
<link href=" <?php echo base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css"); ?> ">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url("assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css"); ?> ">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url("assets/plugins/OwlCarousel2-2.2.1/animate.css");?> ">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url("assets/styles/main_styles.css");?> ">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url("assets/styles/responsive.css");?> ">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="#">Pharmacy Kids.</a></div>
							<nav class="main_nav">
								<ul>
									<li class="hassub">
										<a href="">Home</a>
									</li>
									<li class="hassubs">
										<a href="">Diagnosa</a>
										<ul>
											<li><a href="<?php echo base_url('index.php/tampilan/beli') ?>">Demam</a></li>
											<li><a href="<?php echo base_url('index.php/proses2/flu') ?>">Flu dan Batuk</a></li>
											<li><a href="<?php echo base_url('index.php/tampilan/beli') ?>">Diare</a></li>
											<li><a href="<?php echo base_url('index.php/tampilan/beli') ?>">Cacar</a></li>
											<li><a href="<?php echo base_url('index.php/tampilan/beli') ?>">Sakit Gigi</a></li>
										</ul>
									</li>
									<li><a href="<?php echo base_url('index.php/proses2/contact')?>">Contact</a></li>
									<li><a href="<?php echo base_url('index.php/proses2/login'); ?>">Login</a></li>
								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Search Panel -->
		<div class="search_panel trans_300">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
							<form action="#">
								<input type="text" class="search_input" placeholder="Search" required="required">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Social -->
		<div class="header_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu menu_mm trans_300">
		<div class="menu_container menu_mm">
			<div class="page_menu_content">

				<div class="page_menu_search menu_mm">
					<form action="#">
						<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
					</form>
				</div>
				<ul class="page_menu_nav menu_mm">
					<li class="page_menu_item has-children menu_mm">
						<a href="index.html">Home<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.html">Categories<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="product.html">Product<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="cart.html">Cart<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="checkout.html">Checkout<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="categories.html">Categories<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item menu_mm"><a href="index.html">Accessories<i class="fa fa-angle-down"></i></a></li>
					<li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
					<li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">

			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(assets/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Pharmacy Kids.</div>
										<div class="home_slider_subtitle">Solusi terbaik untuk anda menangani si kecil yang sedang sakit.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(assets/images/home_slider_2.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Pharmacy Kids.</div>
										<div class="home_slider_subtitle">Tidak perlu khawatir jika si kecil sakit di waktu yang tidak tepat.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(assets/images/home_slider_3.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Pharmacy Kids.</div>
										<div class="home_slider_subtitle">Kami hadir untuk memudahkan anda menemukan obat yang sesuai kebutuhan si kecil.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.</li>
									<li class="home_slider_custom_dot">02.</li>
									<li class="home_slider_custom_dot">03.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Ads -->



	<!-- Products -->



	<!-- Ad -->



	<!-- Icon Boxes -->



	<!-- Newsletter -->


	<!-- Footer -->

	<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" style="background-image:url(assets/images/footer.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						<div class="footer_logo"><a href="#">Sublime.</a></div>
						<div class="copyright ml-auto mr-auto"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="footer_social ml-lg-auto">
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/styles/bootstrap4/popper.js"); ?>"></script>
<script src="<?php echo base_url("assets/styles/bootstrap4/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/greensock/TweenMax.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/greensock/TimelineMax.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/scrollmagic/ScrollMagic.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/greensock/animation.gsap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/greensock/ScrollToPlugin.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/Isotope/isotope.pkgd.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/easing/easing.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/parallax-js-master/parallax.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/custom.js"); ?>"></script>
</body>
</html>
