<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>The Plaza - eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/bootstrap4/bootstrap.min.css') ?>">
<link href="<?php echo base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/checkout.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/checkout_responsive.css') ?>">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css5/bootstrap.min.css') ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css5/font-awesome.min.css') ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css5/owl.carousel.css') ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css5/style.css') ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css5/animate.css') ?>"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
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
										<a href=<a href="<?php echo base_url('index.php/proses2/user') ?>">Beranda</a>
									</li>
									<li class="hassubs">
										<a href="categories.html">Diagnosa</a>
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
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->

	<!-- Header section end -->



	<!-- Page Info end -->


	<!-- Page -->
	<div class="page-area cart-page spad" style="margin-top: 50px;">
		<form method="post" action="<?php 	echo base_url('insert_regis/lanjut') ?>">
		<div class="container" >
			<div class="cart-table" >
				<table>
					<thead>
						<tr>
							<th class="product-th">Product</th>
							<th>Harga</th>
							<th>Jumlah </th>						
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="product-col">
								<img src="<?php echo base_url('assets/images/Panadol Kid 0-1_408X300.jpg') ?>" alt="">
								<div class="pc-title">
									<h4><?php echo $lihat->nama_obat ?></h4>
								</div>
							</td>
							<td class="price-col"><?php echo $lihat->harga_obat ?></td>
							<td class="quy-col">
								<input type="hidden" name="id_obat" value="<?php echo $lihat->id_obat ?>">
						<input class="input--style-3" type="hidden" value="<?php echo $lihat->nama_obat ?>" placeholder="Nama Obat" name="nama_obat">						
						<input class="input--style-3" type="hidden" value="<?php echo $lihat->harga_obat ?>" placeholder="Quantity" name="harga_obat">	
								<div class="quy-input">
									<span>Qty</span>
									<input type="number" value="01" name="quantity">
								</div>
							</td>						
						</tr>
					</tbody>
				</table>
			</div>
		
		</div>
		<div class="card-warp">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="shipping-info"   style="left: 400px;">
							<h4>Metode pengiriman</h4>
							<p style="color: black">Pilih salah satu </p>
							<div class="shipping-chooes">
								<div class="sc-item">
									<input type="radio" name="pengiriman" value="25000" id="one">
									<label for="one">Pengiriman Besok<span>Rp. 25.000</span></label>
								</div>
								<div class="sc-item">
									<input type="radio" name="pengiriman" value="20000" id="two">
									<label for="two">Pengiriman normal (2 - 3 hari) <span>Rp. 20.000</span></label>
								</div>
								<div class="sc-item">
									<input type="radio" name="pengiriman" value="30000" id="three">
									<label for="three">Pengiriman sekarang<span>Rp.30.000</span></label>
								</div>
							</div>
							
						</div>
					</div>
					<div class="offset-lg-2 col-lg-6" style="bottom: -260px; left: -280px;">
						<div class="cart-total-details">
							<button class="site-btn btn-full" href="checkout.html"> Pesan</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	</div>
	<!-- Page end -->



	<!-- Footer top section end -->	


	<!-- Footer section -->

	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="<?php echo base_url('assets/js5/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js5/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js5/owl.carousel.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js5/mixitup.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js5/sly.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js5/jquery.nicescroll.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js5/main.js') ?>"></script>
    </body>
</html>