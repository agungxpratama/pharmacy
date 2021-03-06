<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
  <script>
    $('#notifications').slideDown('slow').delay(2000).slideUp('slow');
  </script>
<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(<?= base_url('assets_home/')?>images/contact.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Detail Barang<span>.</span></div>
								<!-- <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Product Details -->

	<div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
                        <!-- <div class="details_image_large"><img src="<?= base_url('assets_home/')?>images/details_1.jpg" alt=""> -->
						<div class="details_image_large"><img src="<?= base_url('assets_admin/img/foto/').$obat->foto?>" alt="">
                            <!-- <div class="product_extra product_new"><a href="categories.html">New</a></div> -->
                        </div>
						<!-- <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
							<div class="details_image_thumbnail active" data-image="<?= base_url('assets_home/')?>images/details_1.jpg"><img src="images/details_1.jpg" alt=""></div>
							<div class="details_image_thumbnail" data-image="<?= base_url('assets_home/')?>images/details_2.jpg"><img src="images/details_2.jpg" alt=""></div>
							<div class="details_image_thumbnail" data-image="<?= base_url('assets_home/')?>images/details_3.jpg"><img src="images/details_3.jpg" alt=""></div>
							<div class="details_image_thumbnail" data-image="<?= base_url('assets_home/')?>images/details_4.jpg"><img src="images/details_4.jpg" alt=""></div>
						</div> -->
						<div class="button cart_button">
							<form id="wishlist" class="" action="<?= base_url('index.php/transaksi/tambahWishlist') ?>" method="post">
								<input type="hidden" name="id_obat" value="<?= $obat->id_obat ?>">
								<input type="hidden" name="harga_obat" value="<?= $obat->harga_obat; ?>">
								<input type="hidden" name="nama_obat" value="<?= $obat->nama_obat; ?>">
							</form>
							<!-- <a href="#" onclick="document.getElementById('form_cart').submit();">Add to cart</a> -->
							<a href="#" onclick="document.getElementById('wishlist').submit();">
								<i class="fa fa-plus"></i> ke Favorite <i class="fa fa-heart text-danger"></i>
							</a>
						</div>
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name"><?= $obat->nama_obat ?>
							<br>
						</div>
						<!-- <div class="details_discount">$890</div> -->
						<div class="details_price">Rp. <?= $obat->harga_obat ?></div>

						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability :</div>
                            <?php if ($obat->stock == 0): ?>
                                <span class="text-danger">Habis/Kosong</span>
                            <?php elseif ($obat->stock > 0): ?>
                                <span>Stok Tersedia : <?= $obat->stock ?></span>
                            <?php endif; ?>
						</div>

						<div class="in_stock_container">
							<div class="availability">Rating :</div>
							<?php error_reporting(1);
							$jumlah = 0;
							$hasil = 0;
							?>
							<?php foreach ($rating as $r): ?>
								<?php if ($r->id_obat == $obat->id_obat): ?>
									<?php
										$total = $r->rating;
									 ?>
									<!-- <?= $r->rating ?> -->
								<?php endif; ?>
								<?php
									$hasil += $total;
									$jumlah++;
								?>
							<?php endforeach; ?>
							<?php
							$rata = $hasil/$jumlah;
							?>
							<!-- <?= $hasil ?> -->
							<!-- <br> -->
							<!-- <?= $jumlah ?> -->
							<!-- <br> -->
							<?= $rata ?>
							<?php if (floor($rata) == 5): ?>
								<i class="fa fa-star text-warning"></i>
								<i class="fa fa-star text-warning"></i>
								<i class="fa fa-star text-warning"></i>
								<i class="fa fa-star text-warning"></i>
								<i class="fa fa-star text-warning"></i>
							<?php elseif (floor($rata) == 4): ?>
								<i class="fa fa-star text-warning"></i>
								<i class="fa fa-star text-warning"></i>
								<i class="fa fa-star text-warning"></i>
								<i class="fa fa-star text-warning"></i>
								<i class="fa fa-star"></i>
							<?php elseif (floor($rata) == 3): ?>
								<i class="fa fa-star text-warning"></i>
								<i class="fa fa-star text-warning"></i>
								<i class="fa fa-star text-warning"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							<?php elseif (floor($rata) == 2): ?>
								<i class="fa fa-star text-warning"></i>
								<i class="fa fa-star text-warning"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							<?php elseif (floor($rata) == 1): ?>
								<i class="fa fa-star text-warning"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							<?php elseif (floor($rata) == 0): ?>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							<?php endif; ?>
						</div>
						<div class="details_text">
                            <h5 class="font-weight-bold">Kategori</h5>
                            <p class="text"><?= $obat->kategori; ?></p>
                            <h5 class="font-weight-bold">Indikasi Umum</h5>
                            <p class="text"><?= $obat->indikasi_umum; ?></p>
                            <h5 class="font-weight-bold">Deskripsi</h5>
                            <p class="text"><?= $obat->deskripsi; ?></p>
                            <h5 class="font-weight-bold">Jenis Obat</h5>
                            <p class="text"><?= $obat->jenis_obat; ?></p>
                            <h5 class="font-weight-bold">Komposisi</h5>
                            <p class="text"><?= $obat->komposisi; ?></p>
                            <h5 class="font-weight-bold">Dosis</h5>
                            <p class="text"><?= $obat->merek; ?></p>
                            <h5 class="font-weight-bold">Aturan Pakai</h5>
                            <p class="text"><?= $obat->aturan_pakai; ?></p>
                            <h5 class="font-weight-bold">Kemasan</h5>
                            <p class="text"><?= $obat->kemasan; ?></p>
                            <h5 class="font-weight-bold">Segmentasi</h5>
                            <p class="text"><?= $obat->segmentasi; ?></p>
                            <h5 class="font-weight-bold">Manufaktur</h5>
                            <p class="text"><?= $obat->manufaktur; ?></p>
                            <h5 class="font-weight-bold">Efek Samping</h5>
                            <p class="text"><?= $obat->efek_samping; ?></p>
							<!-- <p> -->
                                <!-- <?= print_r($obat) ?><br> -->
                                <!-- Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p> -->
						</div>

						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
                                <form id="form_cart" action="<?= base_url('index.php/transaksi/simpanTransaksi') ?>" method="post">
    								<span>Jml.</span>
                                    <input type="hidden" name="id_obat" value="<?= $obat->id_obat; ?>">
                                    <input type="hidden" name="harga_obat" value="<?= $obat->harga_obat; ?>">
                                    <input type="hidden" name="nama_obat" value="<?= $obat->nama_obat; ?>">
    								<input id="quantity_input" type="text" pattern="[0-9]*" value="1" max="<?= $obat->stock ?>" name="jumlah">
    								<div class="quantity_buttons">
    									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
    									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
    								</div>
                                </form>
							</div>
							<div class="button cart_button">
                                <!-- <a href="#" onclick="document.getElementById('form_cart').submit();">Add to cart</a> -->
                                <?php if ($obat->stock == 0): ?>
                                    <a type="button" href="#" onclick="alert("Maaf stok Habis");">Stock Kosong</a>
                                <?php elseif ($obat->stock > 0): ?>
                                    <a href="#" onclick="document.getElementById('form_cart').submit();">Beli</a>
                                <?php endif; ?>
                            </div>
						</div>

						<!-- Share -->
						<!-- <div class="details_share">
							<span>Share:</span>
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>

			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<!-- <div class="description_title">Description</div> -->
						<div class="description_title">Ulasan</div>
						<!-- <div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div> -->
					</div>
					<div class="description_text">
						<?php foreach ($rating as $r): ?>
							<div class="row">
								<div class="col-md-1">
									<p>
										<i class="fa fa-star text-warning"></i> <?= $r->rating ?>
									</p>
								</div>
								<div class="col">
									<p><?= $r->comment ?></p>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_border"></div>
				</div>
			</div>

			<!-- <div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title">Subscribe to our newsletter</div>
						<div class="newsletter_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros</p></div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required">
								<button class="newsletter_button trans_200"><span>Subscribe</span></button>
							</form>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<style type="text/css">
  #notifications {
    cursor: pointer;
    position: fixed;
    right: 0px;
    z-index: 9999;
    bottom: 0px;
    margin-bottom: 22px;
    margin-right: 15px;
    min-width: 300px;
    max-width: 800px;
}
</style>
