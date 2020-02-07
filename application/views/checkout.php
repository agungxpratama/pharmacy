<!DOCTYPE html>
<html lang="en">
<head>
<title>Checkout</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/bootstrap4/bootstrap.min.css') ?>">
<link href="<?php echo base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/checkout.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/checkout_responsive.css') ?>">
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
										<a href="<?php echo base_url('index.php/proses2/user') ?>">Beranda</a>
									</li>
									<li class="hassubs">
										<a href=>Diagnosa</a>
										<ul>
											<li><a href="<?php echo base_url('index.php/tampilan/beli') ?>">Demam</a></li>
											<li><a href="categories.html">Flu dan Batuk</a></li>
											<li><a href="categories.html">Diare</a></li>
											<li><a href="categories.html">Cacar</a></li>
											<li><a href="categories.html">Sakit Gigi</a></li>
										</ul>
									</li>
									
									
									<li><a href="<?php echo base_url('index.php/proses2/contact')?>">Kontak</a></li>
								</ul>
							</nav>
							<div class="header_extra ml-auto">								
								
								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
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
	<!-- Checkout -->
	<form method="post" action="<?php echo base_url('insert_regis/insert_trans') ?> ">	
	<div class="checkout">
		<div class="container">
			<div class="row">

				<!-- Billing Info -->
				<div class="col-lg-6">
					<div class="billing checkout_section">
						<div class="section_title">Alamat Pengiriman</div>
						<div class="section_subtitle" style="font-size: 20px">Masukkan alamat anda</div>
						<div class="checkout_form_container" style="color: black">
							<form action="<?php 	echo base_url('insert_regis/trans') ?> " id="checkout_form" class="checkout_form">
								<div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<label for="checkout_name"><b>Nama Lengkap</b></label>
										<input type="text" id="checkout_name" name="nama_lengkap" class="checkout_input" required="required" style="width: 555px;">
									</div>									
								</div>								
								<div>
									<!-- Address -->
									<label for="checkout_address"><b>Alamat</b></label>
									<input type="text" id="checkout_address" name="alamat" class="checkout_input" required="required">
									
								</div>
								<div>
									<!-- Company -->
									<label for="checkout_company"><b>Kecamatan</b></label>
									<input type="text" id="checkout_company" name="kecamatan" class="checkout_input">
								</div>
								
								<div>
									<!-- Zipcode -->
									<label for="checkout_zipcode"><b>Kode Pos</b></label>
									<input type="text" id="checkout_zipcode" name="kode_pos" class="checkout_input" required="required">
								</div>
							<div>
									<!-- Zipcode -->
									<label for="checkout_zipcode"><b>Kota</b></label>
									<input type="text" id="checkout_zipcode" name="kota" class="checkout_input" required="required">
								</div>
								<div>
									<!-- Zipcode -->
									<label for="checkout_zipcode"><b>Provinsi</b></label>
									<input type="text" id="checkout_zipcode" name="provinsi" class="checkout_input" required="required">
								</div>
								<div>
									<!-- Phone no -->
									<label for="checkout_phone"><b>No Telepon</b></label>
									<input type="phone" id="checkout_phone" name="telepon" class="checkout_input" required="required">
								</div>								
								<div class="checkout_extra">
								<input type="hidden" name="nama_obat" value="<?php echo $lihat->nama_obat ?>">
								<input type="hidden" name="id_obat" value="<?php echo $lihat->id_obat ?>">
								<input type="hidden" name="harga_obat" value="<?php echo $lihat->harga_obat ?>">
								<input type="hidden" name="quantity" value="<?php echo $lihat->quantity ?>">
								<input type="hidden" name="pengiriman" value="<?php echo $lihat->pengiriman ?>">
								<input type="hidden" name="total_harga" value="<?php echo $lihat->total_harga ?>">
									
									
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Order Info -->

				<div class="col-lg-6">
					<div class="order checkout_section">
						<div class="section_title">Pesanan Anda</div>
						<div class="section_subtitle">Detail Pesanan</div>

						<!-- Order details -->
						<div class="order_list_container">
							<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
								<div class="order_list_title">Produk</div>
								<div class="order_list_value ml-auto">Total</div>
							</div>
							<ul class="order_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title"><?php echo $lihat->nama_obat ?></div>
									<div class="order_list_value ml-auto">Rp.<?php echo $lihat->harga_obat ?></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Harga Obat</div>
									<div class="order_list_value ml-auto">Rp.<?php echo $lihat->harga_obat ?> X
									<?php echo $lihat->quantity ?> Pcs</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Pengiriman</div>								<div class="order_list_value ml-auto">Rp.<?php echo $lihat->pengiriman ?></div>	
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Total Harga</div>
									<div class="order_list_value ml-auto">Rp.<?php echo $lihat->total_harga ?></div>
								</li>
							</ul>
						</div>
											
						<!-- Order Text -->
						
						<button type="submit" name="submit" style="width: 300px; height: 50px; margin-top: 20px; " >Pesan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
		</form>
	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	
						
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/checkout.js"></script>
</body>
</html>