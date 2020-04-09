<!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(<?= base_url('assets_home/')?>images/contact.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="<?= base_url('index.php/home') ?>">Home</a></li>
                                        <!-- <li><a href="cart.html">Pesanan</a></li> -->
                                        <li>Pesanan</li>
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
            <!-- <?php print_r($transaksi) ?> -->
            <?php foreach ($transaksi as $t): ?>
                <div class="row">
                    <!-- Billing Info -->
                    <div class="col-lg-6">
                        <div class="billing checkout_section">
                            <div class="section_title">ID Transaksi : <?= $t->id_transaksi ?>
                                <?php if ($t->status == 1): ?>
                                    Telah Dibayar
                                <?php elseif ($t->status == 2): ?>
                                    Sedang Diperjalanan
                                <?php elseif ($t->status == 3): ?>
                                    Selesai
                                <?php endif; ?>
                            </div>
                            <div>
                                <!-- Company -->
                                <label for="checkout_company">Total Harga</label>
                                <p class="text">Rp. <?= $t->total_harga ?>.00</p>
                            </div>
                            <?php if ($t->status == 0): ?>
                                <div class="checkout_form_container">
                                    <div class="section_subtitle">Masukan Bukti Transaksi</div>
                                    <form action="<?= base_url('index.php/transaksi/simpanBukti') ?>" id="form_bukti" class="checkout_form" method="post" enctype="multipart/form-data">
                                        <div>
                                            <!-- Company -->
                                            <label for="checkout">Bukti Transaksi</label>
                                            <input type="file" id="checkout" class="checkout_input" name="foto_bayar">
                                            <input type="hidden" name="id_transaksi" value="<?= $t->id_transaksi ?>">
                                        </div>
                                    </form>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                    <!-- Order Info -->
                    <div class="col-lg-6">
                        <div class="order checkout_section">
                            <!-- <a href="£"> -->
                                <div class="section_title">Pesanan Anda</div>
                                <div class="button"><a href="<?= base_url('index.php/home/detailPesanan/'.$t->id_transaksi) ?>">Detail</a></div>
                                <div class="section_subtitle">Lihat Pesanan Anda</div>
                            <!-- </a> -->
                            <?php if ($t->status == 0): ?>
                                <div class="button order_button"><a href="#" onclick="document.getElementById('form_bukti').submit();">Simpan Bukti</a></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

		</div>
	</div>
