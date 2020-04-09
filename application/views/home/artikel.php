<!-- Home -->

<div class="home">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title">Artikel</div>
                        <div class="newsletter_text"><p>artikel kesehatan</p></div>
                    </div>
                </div>
                <?php foreach ($artikel as $a): ?>
                    <div class="col">
                        <div class="avds_xl_container clearfix">
                            <div class="avds_xl_background" style="background-image:url(<?= base_url('assets_admin/img/artikel/').$a->foto?>)"></div>
                            <div class="avds_xl_content">
                                <div class="avds_title"><?= $a->judul ?></div>
                                <div class="avds_text"><?= $a->tgl_buat ?></div>
                                <div class="avds_link avds_xl_link"><a href="<?= base_url('index.php/home/detailartikel/').$a->id_artikel ?>">See More</a></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Home Slider Dots -->

    </div>
</div>

<!-- Ads -->

<!-- <div class="avds">
    <div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
        <div class="avds_small">
            <div class="avds_background" style="background-image:url(<?= base_url('assets_home/')?>images/avds_small.jpg)"></div>
            <div class="avds_small_inner">
                <div class="avds_discount_container">
                    <img src="<?= base_url('assets_home/')?>images/discount.png" alt="">
                    <div>
                        <div class="avds_discount">
                            <div>20<span>%</span></div>
                            <div>Discount</div>
                        </div>
                    </div>
                </div>
                <div class="avds_small_content">
                    <div class="avds_title">Obat</div>
                    <div class="avds_link"><a href="categories.html">See More</a></div>
                </div>
            </div>
        </div>
        <div class="avds_large">
            <div class="avds_background" style="background-image:url(<?= base_url('assets_home/')?>images/avds_large.jpg)"></div>
            <div class="avds_large_container">
                <div class="avds_large_content">
                    <div class="avds_title">Professional Cameras</div>
                    <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div>
                    <div class="avds_link avds_link_large"><a href="categories.html">See More</a></div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Products -->

<!-- <div class="products">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="product_grid"> -->

                    <!-- Product -->
                    <!-- <div class="product">
                        <div class="product_image"><img src="<?= base_url('assets_home/')?>images/product_1.jpg" alt=""></div>
                        <div class="product_extra product_new"><a href="categories.html">New</a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Smart Phone</a></div>
                            <div class="product_price">$670</div>
                        </div>
                    </div> -->

                    <!-- Product -->
                    <!-- <div class="product">
                        <div class="product_image"><img src="<?= base_url('assets_home/')?>images/product_2.jpg" alt=""></div>
                        <div class="product_extra product_sale"><a href="categories.html">Sale</a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Smart Phone</a></div>
                            <div class="product_price">$670</div>
                        </div>
                    </div> -->

                    <!-- Product -->
                    <!-- <div class="product">
                        <div class="product_image"><img src="<?= base_url('assets_home/')?>images/product_3.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Smart Phone</a></div>
                            <div class="product_price">$670</div>
                        </div>
                    </div> -->


                <!-- </div>

            </div>
        </div>
    </div>
</div> -->

<!-- Ad -->

<!-- Icon Boxes -->

<!-- Newsletter -->

<!-- <div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_border"></div>
            </div>
        </div>
        <div class="row">
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
        </div>
    </div>
</div> -->
