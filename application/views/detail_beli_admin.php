<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/bootstrap4/bootstrap.min.css') ?>">
<link  rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/cart.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/cart_responsive.css') ?>">
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
									<li 	>
										<a href="<?php echo base_url('index.php/proses2/addobat') ?>">Tambah Obat</a>
									</li>									
									<li><a href="<?php echo base_url('index.php/log/logout'); ?>">Log Out</a></li>
								</ul>
							</nav>
								
								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
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

	<!-- Cart Info -->

	<div class="cart_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product">Produk</div>
						<div class="cart_info_col cart_info_col_price">Harga</div>
						<div class="cart_info_col cart_info_col_quantity">Jumlah</div>
						<div class="cart_info_col cart_info_col_total">Total Harga</div>
					</div>
				</div>
			</div>
			<div class="row cart_items_row">
				<div class="col">

					<!-- Cart Item -->
					<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<!-- Name -->
						<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
							<div class="cart_item_image">
								<div><img src="<?php echo base_url('assets/images/Panadol Kid 0-1_408X300.jpg') ?>" alt="">
								</div>
							</div>
							<div class="cart_item_name_container" style="left: 150px;">
								<div class="cart_item_name"><a href="#"><?php echo $lihat->nama_obat ?></a></div>
							</div>
						</div>								
					</div>
						<div class="checkout" style="left: 300px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="order checkout_section" style="bottom: 50px; left: -131px;">						
						<!-- Order details -->
						<div class="order_list_container" >							
							<div class="order_list_title"></div>						
							<form action="<?php echo base_url('insert_regis/keranjang'); ?>" method="post">	
								<input type="hidden" name="id_obat" value="<?php echo $lihat->id_obat; ?>">					
								<input class="input--style-3" type="hidden" name="nama_obat" value="<?php echo $lihat->nama_obat; ?>" >
								<input class="input--style-3" type="hidden" name="jenis_obat" value="<?php echo $lihat->jenis_obat; ?>" >
								
								<input class="input--style-3" type="hidden" name="harga_obat" value="<?php echo $lihat->harga_obat; ?>" >
							<ul class="order_list" style="margin-left: 150px;">								
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title"><b>Harga Obat <br></b></div>				
								</li>
								<li>	
									<div class="order_list_title">Rp. <?php echo $lihat->harga_obat ?></div>
								</li><br>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title"><b>Jenis Obat <br></b></div>				
								</li>
								<li>	
									<div class="order_list_title"><?php echo $lihat->jenis_obat ?></div>
								</li><br>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title"><b>Indikasi Umum<br></b></div>				
								</li>
								<li>	
									<div class="order_list_title"><?php echo $lihat->indikasi_umum ?></div>
								</li><br>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title"><b>Deskripsi Obat <br></b></div>				
								</li>
								<li>	
									<div class="order_list_title"><?php echo $lihat->deskripsi ?></div>
								</li><br>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title"><b>Komposisi Obat <br></b></div>				
								</li>
								<li>	
									<div class="order_list_title"><?php echo $lihat->komposisi ?></div>
								</li><br>
								
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title"><b>Aturan Pakai Obat <br></b></div>				
								</li>
								<li>	
									<div class="order_list_title"><?php echo $lihat->aturan_pakai ?></div>
								</li><br>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title"><b>Kemasan Obat <br></b></div>				
								</li>
								<li>	
									<div class="order_list_title"><?php echo $lihat->kemasan ?></div>
								</li><br>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title"><b>Efek Samping Obat <br></b></div>				
								</li>
								<li>	
									<div class="order_list_title"><?php echo $lihat->efek_samping ?></div>
								</li><br>
								
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title"><b>Manufaktur Obat <br></b></div>				
								</li>
								<li>	
									<div class="order_list_title"><?php echo $lihat->manufaktur ?></div>
								</li><br>
								<a href="<?php echo base_url('tampilan/obat_saya') ?>" style="font-size: 20px;">Kembali</a>								
					</form>
							</ul>
						</div>																			
					</div>
				</div>

				
			</div>
		</div>
	</div>
				</div>
			</div>			
			<div class="row row_cart_buttons">
				<div class="col">
					<div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="cart_buttons_right ml-lg-auto">
							
							
						</div>
					</div>
				</div>
			</div>		
		</div>		
	</div>

	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="<?php echo base_url('js/jquery-3.2.1.min.js') ?>"></script>
<script src="<?php echo base_url('styles/bootstrap4/popper.js') ?>"></script>
<script src="<?php echo base_url('styles/bootstrap4/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/greensock/TweenMax.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/greensock/TimelineMax.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/scrollmagic/ScrollMagic.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/greensock/animation.gsap.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/greensock/ScrollToPlugin.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/easing/easing.js') ?>"></script>
<script src="<?php echo base_url('plugins/parallax-js-master/parallax.min.js') ?>"></script>
<script src="<?php echo base_url('js/cart.js') ?>"></script>
</body>
</html>