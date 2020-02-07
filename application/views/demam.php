<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Categories</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/styles/bootstrap4/bootstrap.min.css') ?>">
<link href="<?php echo base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css') ?> " rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') ?>">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') ?>">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/animate.css') ?>">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/styles/categories.css') ?>">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/styles/categories_responsive.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css5/bootstrap.min.css') ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css5/font-awesome.min.css') ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css5/owl.carousel.css') ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css5/style.css') ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css5/animate.css') ?>"/>
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
										<a href="">Diagnosa</a>
										<ul>
											<li><a href="<?php echo base_url('index.php/tampilan/beli') ?>">Demam</a></li>
											<li><a href="categories.html">flu dan Batuk</a></li>
											<li><a href="categories.html">Diare</a></li>
											<li><a href="categories.html">Cacar</a></li>
											<li><a href="categories.html">Sakit Gigi</a></li>
										</ul>
									</li>
									
									<li><a href="<?php echo base_url('index.php/proses2/contact')?>">kontak</a></li>
									<li style="margin-left: 300px"><a href="<?php echo base_url('index.php/proses2/login'); ?>" >Log Out</a></li>
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
	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(<?php echo base_url('assets/images/categories.png') ?>)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Demam<span>.</span></div>
								<div class="home_text"><p style="font-size: 17px;">Demam adalah kondisi ketika suhu tubuh berada di atas angka 38 derajat celsius. Demam merupakan bagian dari proses kekebalan tubuh yang sedang melawan infeksi akibat virus, bakteri, atau parasit. Selain itu, demam juga bisa terjadi pada kondisi hipertiroidisme, artritis, atau karena penggunaan beberapa jenis obat-obatan, termasuk antibiotik. Kenaikan suhu tubuh akibat konsumsi obat ini disebut dengan demam obat atau “drug fever”.</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					
				</div>
			</div>
			<div class="row" style="top: 50px;">
				<div class="col">
					
					<div class="product_grid">
						
						<!-- Product --><?php foreach ($lihat as $r) { ?>
						<div class="product">
							<div class="product_image"><img src="<?php echo base_url('assets/images/Panadol Kid 0-1_408X300.jpg') ?>" alt="">
							</div>																	
					<form method="post" action="<?php echo base_url('tampilan/detail_beli'); ?> ">
							<div class="product_content" style="left: 60px;">								
								<div class="product_price" style="left: 20px; bottom: 20px;">Rp. <?php echo $r->harga_obat; ?></div>
								<div class="offset-lg-2 col-lg-6" style="top: 10px; right: 50px;">									
										<button class="site-btn btn-full" href="checkout.html"> <?php echo $r->nama_obat; ?></button>									
								</div>
						</div>
						</div>
                        <input type="hidden" name="id_obat" value="<?php echo $r->id_obat; ?>">
                        <div class="input-group">
                            <input class="input--style-3" type="hidden" value="<?php echo $r->nama_obat; ?>" placeholder="Nama Obat" name="nama_obat">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="hidden" value="<?php echo $r->jenis_obat; ?>" placeholder="Jenis Obat" name="jenis_obat">
                        </div>                        
                        
                        <div class="input-group">
                            <input class="input--style-3" type="hidden" value="<?php echo $r->harga_obat; ?>" placeholder="Harga Obat" name="harga_obat">
                        </div>                       
                        <!-- <button type="submit">Batalkan Pemesanan</button> -->

                    </form>	
                    <?php } ?>									
					</div>											
				</div>
			</div>
		</div>
	</div>

                    
	<!-- Icon Boxes -->

	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" style="background-image:url(<?php echo base_url('assets/images/footer.jpg') ?>)"></div>
		<div class="container">
			<div class="row">
				

				</div>
			</div>
		</div>
	</footer>
</div>

<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/styles/bootstrap4/popper.js') ?>"></script>
<script src="<?php echo base_url('assets/styles/bootstrap4/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/TweenMax.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/TimelineMax.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/scrollmagic/ScrollMagic.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/animation.gsap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/ScrollToPlugin.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/Isotope/isotope.pkgd.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/easing/easing.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/parallax-js-master/parallax.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/categories.js') ?>"></script>
</body>
</html>