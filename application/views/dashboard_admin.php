<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Pharmacy Kids.</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url("assets/styles/bootstrap4/bootstrap.min.css"); ?> ">
<link href=" <?php echo base_url("assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css"); ?> ">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url("assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css"); ?> ">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url("assets/plugins/OwlCarousel2-2.2.1/animate.css");?> ">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url("assets/styles/main_styles.css");?> ">
<link rel="stylesheet" type="text/css" href=" <?php echo base_url("assets/styles/responsive.css");?> ">
<link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
									<li >
										<a href="<?php echo base_url('index.php/proses2/addobat') ?>">Tambah Obat</a>
									</li>
									<li><a href="<?php echo base_url('index.php/log/logout'); ?>">Log Out</a></li>
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

	<div class="card shadow mb-4" style="margin-top: 150px;">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Obat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>

                    <tr style="color:black; font-size: 20px;">
                      <th>Nama Obat</th>
                      <th>Jenis Obat</th>
                      <th>Stock</th>
                      <th>Harga</th>

                    </tr>
                    <?php foreach ($lihat as $r) { ?>
                    <tr style="color: #0c3663;">
                      <th><?php echo $r->nama_obat; ?></th>
                      <th><?php echo $r->jenis_obat; ?></th>
                      <th><?php echo $r->harga_obat; ?></th>

                      <th>
                      	<a href="<?php echo base_url('tampilan/edit/'.$r->id_obat); ?>"><button>Edit</button></a>
                      </th>
                      <th>
                      	<a href="<?php echo base_url('tampilan/detail_beli_admin/'.$r->id_obat); ?>"><button>Lihat</button></a>
                      </th>
                      <th>
                      	<a href="<?php echo base_url('hapus/hapus_obat/'.$r->id_obat); ?>"><button>Hapus</button></a>
                      </th>


                    </tr>
                  </thead>
              <?php } ?>
                  </table>
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
						<div class="footer_logo"><a href="#">Pharmacy Kids.</a></div>
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
