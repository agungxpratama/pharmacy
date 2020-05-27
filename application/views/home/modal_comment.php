<?php foreach ($pesanan as $p): ?>
    <!-- Modal -->
    <div class="modal" id="example<?= $p->id_pemesanan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ulasan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="font-weight-bold">
                        <?= $p->nama_obat ?>
                    </div>
                    <br>
                    <form class="" action="<?= base_url('index.php/transaksi/beriRatting') ?>" method="post">
                        Rating :
                        <br>
                        <!-- <br>Beri Nilai -->
                        <fieldset class="rating">
                            <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                            <!-- <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label> -->
                            <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                            <!-- <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label> -->
                            <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                            <!-- <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label> -->
                            <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                            <!-- <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label> -->
                            <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                            <!-- <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label> -->
                        </fieldset>
                        <br>
                        <br>
                        Komentar :
                        <textarea name="comment" rows="8" cols="65"></textarea>
                        <input type="hidden" name="id_obat" value="<?= $p->id_obat ?>">
                        <input type="hidden" name="id_user" value="<?= $p->id_user ?>">
                        <input type="hidden" name="id_transaksi" value="<?= $this_id_transaksi ?>">

                        <!-- <input type="submit" name="beri_nilai" value="Beri Penilaian" class="btn btn-warning btn-sm"> -->
                        <!-- Button trigger modal -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
