<div class="content">
<!-- Begin Page Content -->
    <div class="container-fluid">
        <?php if ($this->session->flashdata('success')): ?>
    		<div class="alert alert-success" role="alert">
    			<?php echo $this->session->flashdata('success'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
    		</div>
    	<?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
    		<div class="alert alert-danger" role="alert">
    			<?php echo $this->session->flashdata('error'); ?>
    		</div>
    	<?php endif; ?>

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Data Pemesanan</h1>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
        </div>
        <!-- Content Row -->
        <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Tambah Obat</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="<?= base_url()?>index.php/admin/tambahObat" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                  <p>Modal body text goes here.</p>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Nama Obat</label>
                          <input type="text" class="form-control bg-light border-1 small" placeholder="Nama Obat" name="nama_obat" aria-label="namaObat" aria-describedby="basic-addon2">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Foto</label>
                          <input type="file" class="form-control bg-light border-1 small" placeholder="Keterangan" name="foto" aria-label="Foto" aria-describedby="basic-addon2">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Kategori</label>
                          <input type="text" class="form-control bg-light border-1 small" placeholder="Kategori" name="kategori" aria-label="kategori" aria-describedby="basic-addon2">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Merek</label>
                          <input type="text" class="form-control bg-light border-1 small" placeholder="Merek" name="merek" aria-label="merek" aria-describedby="basic-addon2">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Jenis Obat</label>
                          <input type="text" class="form-control bg-light border-1 small" placeholder="Jenis Obat" name="jenis_obat" aria-label="jenisObat" aria-describedby="basic-addon2">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Aturan Pakai</label>
                          <textarea class="form-control bg-light border-1 small" placeholder="Aturan Pakai" name="aturan_pakai" rows="3" cols="80" aria-label="aturanPakai" aria-describedby="basic-addon2"></textarea>
                          <!-- <input type="text" class="form-control bg-light border-1 small" placeholder="Kemasan" name="kemasan" aria-label="kemasan" aria-describedby="basic-addon2"> -->
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Komposisi</label>
                          <textarea class="form-control bg-light border-1 small" placeholder="Komposisi" name="komposisi" rows="3" cols="80" aria-label="komposisi" aria-describedby="basic-addon2"></textarea>
                          <!-- <input type="text" class="form-control bg-light border-1 small" placeholder="Kemasan" name="kemasan" aria-label="kemasan" aria-describedby="basic-addon2"> -->
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Deskripsi</label>
                          <input type="text" class="form-control bg-light border-1 small" placeholder="Deskripsi" name="deskripsi" aria-label="deskripsi" aria-describedby="basic-addon2">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Kemasan</label>
                          <input type="text" class="form-control bg-light border-1 small" placeholder="Kemasan" name="kemasan" aria-label="kemasan" aria-describedby="basic-addon2">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Indikasi Umum</label>
                          <input type="text" class="form-control bg-light border-1 small" placeholder="Indikasi" name="indikasi_umum" aria-label="indikasiUmum" aria-describedby="basic-addon2">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Manufaktur</label>
                          <input type="text" class="form-control bg-light border-1 small" placeholder="Manufaktur" name="manufaktur" aria-label="manufaktur" aria-describedby="basic-addon2">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Segmentasi</label>
                          <input type="text" class="form-control bg-light border-1 small" placeholder="segmentasi" name="segmentasi" aria-label="segmentasi" aria-describedby="basic-addon2">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Harga Obat</label>
                          <input type="text" class="form-control bg-light border-1 small" placeholder="Harga" name="harga_obat" aria-label="hargaObat" aria-describedby="basic-addon2">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Efek Saming</label>
                          <input type="text" class="form-control bg-light border-1 small" placeholder="Efek Samping" name="efek_samping" aria-label="efekSamping" aria-describedby="basic-addon2">
                      </div>
                      <!-- <div class="form-group">
                          <label for="exampleFormControlInput1">Sumber</label>
                          <select class="form-control custom-select bg-light small" name="sumber">
                            <option selected>Pilih Sumber Barang</option>
                            <?php
                            foreach ($sumber as $s) {
                                // code...
                            ?>
                            <option value="<?= $s->id_sumber; ?>"><?= $s->nama_sumber ?></option>
                            <?php } ?>
                          </select>
                      </div> -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
              </div>
            </div>
        </div>
          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">Data Obat</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Detail Pemesanan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Obat</th>
                        <th>Harga Obat</th>
                        <th>Quantity</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($isi_pemesanan as $i): ?>
                        <tr>
                            <th><?= $no++;?></th>
                            <th><?= $i->nama_obat;?></th>
                            <th><?= $i->harga_obat;?></th>
                            <th><?= $i->quantity;?></th>
                            <th><?= $i->harga_obat*$i->quantity;?></th>
                            <td>
                                <a href="<?= base_url('index.php/admin/viewObat/');?><?= $i->db_keranjang;?>" class="btn btn-warning"><i class="fas fa-fw fa-search"></i> Cek</a>
                                <a href="<?= base_url('index.php/admin/hapusObat/');?><?= $i->db_keranjang;?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
