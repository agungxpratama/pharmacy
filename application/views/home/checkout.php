<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(<?= base_url('assets_home/')?>images/cart.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="cart.html">Shopping Cart</a></li>
										<li>Checkout</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Checkout -->

	<div class="checkout">
		<div class="container">
			<div class="row">
                <!-- <form class="" action="" method="post"> -->
    				<!-- Billing Info -->
    				<div class="col-lg-6">
    					<div class="billing checkout_section">
    						<div class="section_title">Billing Address</div>
    						<div class="section_subtitle">Enter your address info</div>
    						<div class="checkout_form_container">
    							<form action="#" id="checkout_form" class="checkout_form">
    								<div class="row">
    									<div class="col-xl-6">
    										<!-- Name -->
    										<label for="checkout_name">First Name*</label>
    										<input type="text" id="checkout_name" class="checkout_input" required="required" placeholder="Nama Depan" name="nama_depan" value="<?= $user->nama_lengkap ?>">
    									</div>
    									<div class="col-xl-6 last_name_col">
    										<!-- Last Name -->
    										<label for="checkout_last_name">Last Name*</label>
    										<input type="text" id="checkout_last_name" class="checkout_input" required="required" placeholder="Nama Belakang" name="nama_belakang">
    									</div>
    								</div>
    								<div>
    									<!-- Company -->
    									<label for="checkout_company">Company</label>
    									<input type="text" id="checkout_company" class="checkout_input"  placeholder="Instasi" name="kantor">
    								</div>
    								<div>
    									<!-- Country -->
    									<label for="checkout_country">Country*</label>
    									<select name="checkout_country" id="checkout_country" class="dropdown_item_select checkout_input" require="required" name="negara">
    										<option>Pilih Negara</option>
    										<option>Lithuania</option>
    										<option>Sweden</option>
    										<option>UK</option>
    										<option>Italy</option>
    									</select>
    								</div>
    								<div>
    									<!-- Address -->
    									<label for="checkout_address">Address*</label>
    									<input type="text" id="checkout_address" class="checkout_input" required="required" placeholder="Kamar No." name="kamar_no">
    									<input type="text" id="checkout_address_2" class="checkout_input checkout_address_2" required="required" placeholder="Alamat Lengkap" name="alamat_lengkap"  value="<?= $user->alamat ?>">
    								</div>
    								<div>
    									<!-- Zipcode -->
    									<label for="checkout_zipcode">Zipcode*</label>
    									<input type="text" id="checkout_zipcode" class="checkout_input" required="required" placeholder="Kode Pos" name="kode_pos">
    								</div>
    								<div>
    									<!-- City / Town -->
    									<label for="checkout_city">City/Town*</label>
    									<select name="checkout_city" id="checkout_city" class="dropdown_item_select checkout_input" require="required" name="kota">
    										<option>Pilih Kota</option>
    										<option>City</option>
    										<option>City</option>
    										<option>City</option>
    										<option>City</option>
    									</select>
    								</div>
    								<div>
    									<!-- Province -->
    									<label for="checkout_province">Province*</label>
    									<select name="checkout_province" id="checkout_province" class="dropdown_item_select checkout_input" require="required" name="provinsi">
    										<option>Pilih Provinsi</option>
    										<option>Province</option>
    										<option>Province</option>
    										<option>Province</option>
    										<option>Province</option>
    									</select>
    								</div>
    								<div>
    									<!-- Phone no -->
    									<label for="checkout_phone">Phone no*</label>
    									<input type="phone" id="checkout_phone" class="checkout_input bg-light" required="required" placeholder="No. Telepon" name="telepon"  value="<?= $user->telepon ?>">
    								</div>
    								<div>
    									<!-- Email -->
    									<label for="checkout_email">Email Address*</label>
    									<input type="phone" id="checkout_email" class="checkout_input" required="required" placeholder="Alamat Email" name="email" value="<?= $user->email ?>">
    								</div>
    								<div class="checkout_extra">
    									<div>
    										<input type="checkbox" id="checkbox_terms" name="regular_checkbox" class="regular_checkbox" checked="checked">
    										<label for="checkbox_terms"><img src="<?= base_url('assets_home/'); ?>images/check.png" alt=""></label>
    										<span class="checkbox_title">Terms and conditions</span>
    									</div>
    									<!-- <div>
    										<input type="checkbox" id="checkbox_account" name="regular_checkbox" class="regular_checkbox">
    										<label for="checkbox_account"><img src="<?= base_url('assets_home/'); ?>images/check.png" alt=""></label>
    										<span class="checkbox_title">Create an account</span>
    									</div>
    									<div>
    										<input type="checkbox" id="checkbox_newsletter" name="regular_checkbox" class="regular_checkbox">
    										<label for="checkbox_newsletter"><img src="<?= base_url('assets_home/'); ?>images/check.png" alt=""></label>
    										<span class="checkbox_title">Subscribe to our newsletter</span>
    									</div> -->
    								</div>
    							</form>
    						</div>
    					</div>
    				</div>

    				<!-- Order Info -->

    				<div class="col-lg-6">
    					<div class="order checkout_section">
    						<div class="section_title">Your order</div>
    						<div class="section_subtitle">Order details</div>

    						<!-- Order details -->
    						<div class="order_list_container">
    							<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
    								<div class="order_list_title">Product</div>
    								<div class="order_list_value ml-auto">Total</div>
    							</div>
    							<ul class="order_list">
                                    <?php
                                    $shipping = 0;
                                    $total = 0;
                                    foreach ($checkout as $c): ?>

    								<li class="d-flex flex-row align-items-center justify-content-start">
    									<div class="order_list_title"><?= $c->nama_obat.' X '.$c->quantity ?></div>
    									<div class="order_list_value ml-auto">Rp. <?= $c->harga_obat*$c->quantity ?>.00</div>
    								</li>
                                    <?php
                                    $total += $c->harga_obat;
                                    endforeach; ?>
    								<li class="d-flex flex-row align-items-center justify-content-start">
    									<div class="order_list_title">Subtotal</div>
    									<div class="order_list_value ml-auto">Rp. <?= $total; ?>.00</div>
    								</li>
    								<li class="d-flex flex-row align-items-center justify-content-start">
    									<div class="order_list_title">Shipping</div>
    									<div class="order_list_value ml-auto">Free</div>
    								</li>
    								<li class="d-flex flex-row align-items-center justify-content-start">
    									<div class="order_list_title">Total</div>
    									<div class="order_list_value ml-auto">Rp. <?= $total+$shipping; ?>.00</div>
    								</li>
    							</ul>
    						</div>

    						<!-- Payment Options -->
    						<div class="payment">
    							<div class="payment_options">
    								<label class="payment_option clearfix">Paypal
    									<input type="radio" name="radio">
    									<span class="checkmark"></span>
    								</label>
    								<label class="payment_option clearfix">Cach on delivery
    									<input type="radio" name="radio">
    									<span class="checkmark"></span>
    								</label>
    								<label class="payment_option clearfix">Credit card
    									<input type="radio" name="radio">
    									<span class="checkmark"></span>
    								</label>
    								<label class="payment_option clearfix">Direct bank transfer
    									<input type="radio" checked="checked" name="radio">
    									<span class="checkmark"></span>
    								</label>
    							</div>
    						</div>

    						<!-- Order Text -->
    						<!-- <div class="order_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra temp or so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</div> -->
    						<div class="button order_button"><a href="#">Place Order</a></div>
    					</div>
    				</div>
                <!-- </form> -->
			</div>
		</div>
	</div>
