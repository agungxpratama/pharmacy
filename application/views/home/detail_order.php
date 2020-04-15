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
                                        <li><a href="<?= base_url('index.php/home/pesanan') ?>">Pesanan</a></li>
                                        <li>Detail Pesanan</li>
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
            <div class="row">
                <!-- Billing Info -->
                <div class="col-lg-6">
                    <div class="billing checkout_section">
                        <div class="section_title">ID Transaksi : <?= $transaksi->id_transaksi ?>
                            <?php if ($transaksi->status == 0): ?>
                                Belum Dibayar
                            <?php elseif ($transaksi->status == 1): ?>
                                Telah Dibayar
                            <?php elseif ($transaksi->status == 2): ?>
                                Sedang Diperjalanan
                            <?php elseif ($transaksi->status == 3): ?>
                                Selesai
                            <?php endif; ?>
                        </div>
                        <!-- <div class="section_subtitle">Masukan Bukti Transaksi</div> -->
                        <div>
                            <!-- Company -->
                            <label for="checkout_company">Total Harga</label>
                            <p class="text">Rp. <?= $transaksi->total_harga ?>.00</p>
                        </div>
                        <div class="checkout_form_container">
                            <div>
                                <!-- Company -->
                                <label for="checkout_company">Kode Resi</label>
                                <?php if ($transaksi->resi == null): ?>
                                    <p class="text">Mohon tunggu resi dari admin</p>
                                <?php else: ?>
                                    <p class="text"><?= $transaksi->resi ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Order Info -->
                <div class="col-lg-6">
                    <div class="order checkout_section">
                        <div class="section_title">Pesanan Anda</div>
                        <div class="section_subtitle">Rincian Pesanan</div>

                        <!-- Order details -->
                        <div class="order_list_container">
                            <div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
                                <div class="order_list_title">Product</div>
                                <div class="order_list_value ml-auto">Total</div>
                            </div>
                            <ul class="order_list">
                                <?php
                                $total = 0;
                                $total_final = 0;
                                foreach ($pesanan as $p): ?>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="order_list_title"><?= $p->nama_obat.' X '.$p->quantity ?></div>
                                        <div class="order_list_value ml-auto">Rp. <?= $total_harga_obat = $p->harga_obat*$p->quantity ?>.00</div>
                                    </li>
                                <?php
                                $total += $total_harga_obat;
                                endforeach; ?>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="order_list_title">Subtotal</div>
                                    <div class="order_list_value ml-auto">Rp. <?= $total_harga_obat ?>.00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="order_list_title">Shipping</div>
                                    <div class="order_list_value ml-auto">Rp. <?= $transaksi->harga_pengiriman ?>.00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="order_list_title">Total</div>
                                    <div class="order_list_value ml-auto">Rp. <?= $total_harga_obat+$transaksi->harga_pengiriman ?>.00</div>
                                </li>
                            </ul>
                            <?php if ($transaksi->status == 2): ?>
                                <div class="button order_button"><a href="<?= base_url('index.php/transaksi/terimaPesanan/'.$transaksi->id_transaksi) ?>">Konfirmasi Pesanan</a></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

		</div>
	</div>
