<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Transaksi</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-pen fa-sm text-white-50"></i> Edit</a> -->
    </div>

    <!-- Content Row -->

    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
    <div class="card shadow mb-4 ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ID Transaksi : <?= $transaksi->id_transaksi ?></h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h5>Nama Pemesan</h5>
                    <p class="text-lg font-weight-bold text-primary"><?= $transaksi->nama_lengkap; ?></p>
                    <div class="row border-bottom">
                        <div class="col-4 border-left">
                            <h5 class="font-weight-bold">Nomor Telepon</h5>
                            <p class="text"><?= $transaksi->telepon; ?></p>
                        </div>
                        <div class="col-4 border-left">
                            <h5 class="font-weight-bold">Alamat</h5>
                            <p class="text"><?= $transaksi->alamat; ?></p>
                        </div>
                        <div class="col-4 border-left">
                            <h5 class="font-weight-bold">Email</h5>
                            <p class="text"><?= $transaksi->email; ?></p>
                        </div>
                    </div>
                    <hr>
                    <h5 class="font-weight-bold">Total Harga</h5>
                    <p class="text"><?= $transaksi->total_harga; ?></p>
                    <h5 class="font-weight-bold">Status</h5>
                    <?php $cek = $transaksi->status; ?>
                    <?php if ($cek == 0): ?>
                        <button class="btn btn-warning" type="button" name="button">Belum Dibayar</button>
                    <?php elseif ($cek == 1): ?>
                        <button class="btn btn-primary" type="button" name="button" data-toggle="modal" data-target="#modalResi">Belum Dikirim</button>
                        <div class="modal fade" tabindex="-1" role="dialog" id="modalResi">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Input Pengiriman</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="<?= base_url()?>index.php/admin/updateResi" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                  <p>ID Transaksi : <?= $transaksi->id_transaksi ?></p>
                                  <p>Bukti Bayar : <img src="<?= base_url('assets_admin/img/bukti_bayar/').$transaksi->bukti ?>" alt="<?= $transaksi->bukti ?>" width="100%"> </p>
                                  <input type="hidden" name="id_transaksi" value="<?= $transaksi->id_transaksi ?>">
                                  <p>Pesanan pada Tanggal : <?= $transaksi->tanggal ?></p>
                                  <div class="form-group">
                                      <label for="exampleFormControlInput1">Masukan Resi Pengiriman</label>
                                      <input type="text" class="form-control bg-light border-1 small" placeholder="Masukan Nomor Resi Pengiriman" name="resi" aria-label="noREsi" aria-describedby="basic-addon2">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                              </form>
                              </div>
                            </div>
                        </div>
                    <?php elseif ($cek == 2): ?>
                        <button class="btn btn-primary" type="button" name="button">Sudah Dikirim</button>  No Resi = <?= $transaksi->resi?>
                    <?php elseif ($cek == 3): ?>
                        <button class="btn btn-success" type="button" name="button">Sudah Diterima</button>
                    <?php endif; ?>
                    <hr>
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
                                foreach ($pesanan as $i): ?>
                                <tr>
                                    <th><?= $no++;?></th>
                                    <th><?= $i->nama_obat;?></th>
                                    <th><?= $i->harga_obat;?></th>
                                    <th><?= $i->quantity;?></th>
                                    <th><?= $i->harga_obat*$i->quantity;?></th>
                                    <td>
                                        <a href="<?= base_url('index.php/admin/viewObat/');?><?= $i->id_obat;?>" class="btn btn-warning"><i class="fas fa-fw fa-search"></i> Cek</a>
                                        <!-- <a href="<?= base_url('index.php/admin/hapusObat/');?><?= $i->db_keranjang;?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i> Hapus</a> -->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
