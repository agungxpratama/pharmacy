<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(<?= base_url('assets_home')?>/images/contact.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Artikel<span>.</span></div>
								<!-- <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="<?= base_url('assets_admin/img/artikel/').$artikel->foto?>" alt=""><div class="product_extra product_new"><a href="categories.html">New</a></div></div>
						<div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
							<!-- <div class="details_image_thumbnail active" data-image="images/details_1.jpg"><img src="images/details_1.jpg" alt=""></div>
							<div class="details_image_thumbnail" data-image="images/details_2.jpg"><img src="images/details_2.jpg" alt=""></div>
							<div class="details_image_thumbnail" data-image="images/details_3.jpg"><img src="images/details_3.jpg" alt=""></div>
							<div class="details_image_thumbnail" data-image="images/details_4.jpg"><img src="images/details_4.jpg" alt=""></div> -->
						</div>
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name"><?= $artikel->judul ?></div>
						<!-- <div class="details_discount">$890</div>
						<div class="details_price">$670</div> -->

						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Tanggal:</div>
							<span><?= $artikel->tgl_buat ?></span>
						</div>
						<div class="details_text">
							<p><?= $artikel->isi ?></p>
						</div>

						<!-- Product Quantity -->

						<!-- Share -->
						
					</div>
				</div>
			</div>

			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<!-- <div class="description_title">Description</div> -->
						<!-- <div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div> -->
					</div>
					<!-- <div class="description_text"> -->
					<!-- </div> -->
				</div>
			</div>
		</div>
	</div>
