<!-- Home -->

<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(<?= base_url('assets_home')?>/images/contact.jpg)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">Produk<span>.</span></div>
                            <!-- <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div> -->
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

                <!-- Product Sorting -->
                <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                    <!-- <div class="results">Showing <span>12</span> results</div> -->
                    <!-- <div class="sorting_container ml-md-auto">
                        <div class="sorting">
                            <ul class="item_sorting">
                                <li>
                                    <span class="sorting_text">Sort by</span>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    <ul>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="product_grid">

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
                            <div class="product_price">$520</div>
                        </div>
                    </div> -->

                    <!-- Product -->
                    <!-- <div class="product">
                        <div class="product_image"><img src="<?= base_url('assets_home/')?>images/product_6.jpg" alt=""></div>
                        <div class="product_extra product_hot"><a href="categories.html">Hot</a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Smart Phone</a></div>
                            <div class="product_price">$240</div>
                        </div>
                    </div> -->

                    <!-- Product -->
                    <!-- <div class="product">
                        <div class="product_image"><img src="<?= base_url('assets_home/')?>images/product_3.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Smart Phone</a></div>
                            <div class="product_price">$710</div>
                        </div>
                    </div> -->

                    <?php error_reporting(1); foreach ($obat as $o): ?>
                        <div class="product">
                            <div class="product_image"><img src="<?= base_url('assets_admin/img/foto/').$o->foto?>" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="<?= base_url('index.php/home/detailProduk/').$o->id_obat ?>"><?= $o->nama_obat ?></a></div>
                                <div class="product_title">
                                    <?php
                                    $jumlah = 0;
                                    $hasil = 0;
                                    ?>
                                    <?php foreach ($rating as $r): ?>
                                        <?php if ($r->id_obat == $o->id_obat): ?>
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
                                <div class="product_price">Rp. <?= $o->harga_obat ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>



                </div>
                <!-- <div class="product_pagination">
                    <ul>
                        <li class="active"><a href="#">01.</a></li>
                        <li><a href="#">02.</a></li>
                        <li><a href="#">03.</a></li>
                    </ul>
                </div> -->

            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
    <div class="container">
        <!-- <div class="row">
            <div class="col">
                <div class="newsletter_border"></div>
            </div>
        </div> -->
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