<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Obat</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-pen fa-sm text-white-50"></i> Edit</a>
    </div>
    <?php foreach ($obat as $o): ?>

    <!-- Content Row -->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Data Obat</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?= base_url()?>index.php/admin/editObat/<?= $o->id_obat?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Nama Obat</label>
                      <input type="text" class="form-control bg-light border-1 small" placeholder="Nama Obat" name="nama_obat" aria-label="namaObat" aria-describedby="basic-addon2" value="<?= $o->nama_obat?>">
                  </div>
                  <!-- <div class="form-group">
                      <label for="exampleFormControlInput1">Foto</label>
                      <input type="file" class="form-control bg-light border-1 small" placeholder="Keterangan" name="foto" aria-label="Foto" aria-describedby="basic-addon2">
                  </div> -->
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Kategori</label>
                      <input type="text" class="form-control bg-light border-1 small" placeholder="Kategori" name="kategori" aria-label="kategori" aria-describedby="basic-addon2" value="<?= $o->kategori?>">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Dosis</label>
                      <input type="text" class="form-control bg-light border-1 small" placeholder="Dosis" name="merek" aria-label="merek" aria-describedby="basic-addon2" value="<?= $o->merek?>">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Jenis Obat</label>
                      <input type="text" class="form-control bg-light border-1 small" placeholder="Jenis Obat" name="jenis_obat" aria-label="jenisObat" aria-describedby="basic-addon2" value="<?= $o->jenis_obat?>">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Aturan Pakai</label>
                      <textarea class="form-control bg-light border-1 small" placeholder="Aturan Pakai" name="aturan_pakai" rows="3" cols="80" aria-label="aturanPakai" aria-describedby="basic-addon2"><?= $o->aturan_pakai?></textarea>
                      <!-- <input type="text" class="form-control bg-light border-1 small" placeholder="Kemasan" name="kemasan" aria-label="kemasan" aria-describedby="basic-addon2"> -->
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Komposisi</label>
                      <textarea class="form-control bg-light border-1 small" placeholder="Komposisi" name="komposisi" rows="3" cols="80" aria-label="komposisi" aria-describedby="basic-addon2"><?= $o->komposisi?></textarea>
                      <!-- <input type="text" class="form-control bg-light border-1 small" placeholder="Kemasan" name="kemasan" aria-label="kemasan" aria-describedby="basic-addon2"> -->
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Deskripsi</label>
                      <input type="text" class="form-control bg-light border-1 small" placeholder="Deskripsi" name="deskripsi" aria-label="deskripsi" aria-describedby="basic-addon2" value="<?= $o->deskripsi?>">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Kemasan</label>
                      <input type="text" class="form-control bg-light border-1 small" placeholder="Kemasan" name="kemasan" aria-label="kemasan" aria-describedby="basic-addon2" value="<?= $o->kemasan?>">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Indikasi Umum</label>
                      <input type="text" class="form-control bg-light border-1 small" placeholder="Indikasi" name="indikasi_umum" aria-label="indikasiUmum" aria-describedby="basic-addon2" value="<?= $o->indikasi_umum?>">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Manufaktur</label>
                      <input type="text" class="form-control bg-light border-1 small" placeholder="Manufaktur" name="manufaktur" aria-label="manufaktur" aria-describedby="basic-addon2" value="<?= $o->manufaktur?>">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Segmentasi</label>
                      <input type="text" class="form-control bg-light border-1 small" placeholder="segmentasi" name="segmentasi" aria-label="segmentasi" aria-describedby="basic-addon2" value="<?= $o->segmentasi?>">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Harga Obat</label>
                      <input type="text" class="form-control bg-light border-1 small" placeholder="Harga" name="harga_obat" aria-label="hargaObat" aria-describedby="basic-addon2" value="<?= $o->harga_obat?>">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Efek Saming</label>
                      <input type="text" class="form-control bg-light border-1 small" placeholder="Efek Samping" name="efek_samping" aria-label="efekSamping" aria-describedby="basic-addon2" value="<?= $o->efek_samping?>">
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
          </div>
        </div>
    </div>

    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
    <div class="card shadow mb-4 ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Obat : <?= $o->kategori;?></h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <img class="w-100" src="<?= base_url('assets_admin/img/foto/'.$o->foto); ?>" alt="img-fotoObat">
                    <button class="btn btn-info" type="button" name="button" data-toggle="modal" data-target="#stockModal">+ Stock (<?= $o->stock ?>)</button>
                    <div class="modal fade" tabindex="-1" role="dialog" id="stockModal">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <form action="<?= base_url()?>index.php/admin/updateStock/<?= $o->id_obat?>" method="post">
                                  <div class="modal-header">
                                      <h5 class="modal-title">Tambah Stok Obat</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="form-group">
                                          <label for="exampleFormControlInput1">Stock Obat</label>
                                          <input type="number" class="form-control bg-light border-1 small" name="stock" value="<?= $o->stock ?>" placeholder="Jumlah...">
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                  </div>
                              </form>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <h5>Nama Obat</h5>
                    <p class="text-lg font-weight-bold text-primary"><?= $o->nama_obat; ?></p>
                    <div class="row border-bottom">
                        <div class="col-4 border-left">
                            <h5 class="font-weight-bold">Kategori</h5>
                            <p class="text"><?= $o->kategori; ?></p>
                            <h5 class="font-weight-bold">Jenis Obat</h5>
                            <p class="text"><?= $o->jenis_obat; ?></p>
                            <h5 class="font-weight-bold">Harga Obat</h5>
                            <p class="text">Rp. <?= $o->harga_obat; ?></p>
                        </div>
                        <div class="col-4 border-left">
                            <h5 class="font-weight-bold">Kemasan</h5>
                            <p class="text"><?= $o->kemasan; ?></p>
                            <h5 class="font-weight-bold">Segmentasi</h5>
                            <p class="text"><?= $o->segmentasi; ?></p>
                            <h5 class="font-weight-bold">Efek Samping</h5>
                            <p class="text"><?= $o->efek_samping; ?></p>
                        </div>
                        <div class="col-4 border-left">
                            <h5 class="font-weight-bold">Dosis</h5>
                            <p class="text"><?= $o->merek; ?></p>
                            <h5 class="font-weight-bold">Manufaktur</h5>
                            <p class="text"><?= $o->manufaktur; ?></p>
                            <h5 class="font-weight-bold">Indikasi Umum</h5>
                            <p class="text"><?= $o->indikasi_umum; ?></p>
                        </div>
                    </div>
                    <hr>
                    <h5 class="font-weight-bold">Aturan Pakai</h5>
                    <p class="text"><?= $o->aturan_pakai; ?></p>
                    <h5 class="font-weight-bold">Komposisi</h5>
                    <p class="text"><?= $o->komposisi; ?></p>
                    <h5 class="font-weight-bold">Deskripsi</h5>
                    <p class="text"><?= $o->deskripsi; ?></p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

</div>
