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
<body background="">

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
	
	<div class="checkout" style="left: 300px;">
		<div class="container" >
			<div class="row">
				<div class="col-lg-6">
					<div class="order checkout_section" style="background-color: #bfb38e; ">
						<div class="section_title">Transaksi Anda</div>
						<div class="section_subtitle">Detail Pesanan</div>

						<!-- Order details -->
						<div class="order_list_container">
							<div class="order_list_title">Nama Pemesan</div>
							<div class="order_list_title"><b><?php echo $lihat->nama_lengkap ?></b><hr></div>							
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
							</ul><hr><br>
						</div>
									<form method="post" action="<?php echo base_url('insert_regis/bukti_pem') ?> ">
								<input type="hidden" name="id_transaksi" value="<?php echo $lihat->id_transaksi ?>">
								<input type="hidden" name="id_obat" value="<?php echo $lihat->id_obat ?>">
								
								<input type="hidden" name="nama_obat" value="<?php echo $lihat->nama_obat ?>">
								<input type="hidden" name="nama_lengkap" value="<?php echo $lihat->nama_lengkap ?>">
								<input type="hidden" name="harga_obat" value="<?php echo $lihat->harga_obat ?>">
								<input type="hidden" name="quantity" value="<?php echo $lihat->quantity ?>">
								<input type="hidden" name="pengiriman" value="<?php echo $lihat->pengiriman ?>">
								<input type="hidden" name="total_harga" value="<?php echo $lihat->total_harga ?>">				
						
						<div class="order_list_title" style="left: 10px;"><b>Silahkan transfer ke salah satu rekening Bank dibawah ini</b></div><br>	
						<div class="order_list_title"><img style="height: 30px; " src="<?php echo base_url('assets/images/mandiri.png') ?>">345678957</div>				
						<div class="order_list_value ml-auto">a.n Ibu Wanda Afifah</div><br>					
						<div class="order_list_title"><img style="height: 20px; margin-bottom: 0px; margin-right: 33px;" src="<?php echo base_url('assets/images/bca.png') ?>">097812783</div>				
						<div class="order_list_value ml-auto">a.n Ibu Wanda Afifah</div><br>	
						<div class="order_list_title"><img style="height: 40px; margin-bottom: 0px; margin-right: 45px;" src="<?php echo base_url('assets/images/bri.png') ?>">753825832</div>				
						<div class="order_list_value ml-auto">a.n Ibu Wanda Afifah</div><br>	
						<div class="order_list_value ml-auto">
							<input type="radio" name="" value="" style="margin-right: 10px;">Bayar ditempat
						</div>
						<button type="submit" name="submit" style="margin-left: 60px; width: 300px; height: 50px; margin-top: 20px; " >Selesai</button>	<br>
					</form>
					</div>
				</div>

				
			</div>
		</div>
	</div>

	<!-- Footer -->
		

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