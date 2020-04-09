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
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a> -->
        </div>
        <!-- Content Row -->
        
          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">Data Obat</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pemesanan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Lengkap</th>
                        <th>Nomor Telepon</th>
                        <th>Alamat</th>
                        <th>Tanggal</th>
                        <th>Kota</th>
                        <th>Kode Pos</th>
                        <th>Metode Pembayaran</th>
                        <th>Total Harga</th>
                        <th>Jumlah Item</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($pemesanan as $p): ?>
                        <tr>
                            <th><?= $no++;?></th>
                            <th><?= $p->nama_lengkap;?></th>
                            <th><?= $p->telepon;?></th>
                            <th><?= $p->alamat;?></th>
                            <th><?= $p->tanggal;?></th>
                            <th><?= $p->kota;?></th>
                            <th><?= $p->kode_pos;?></th>
                            <th><?= $p->metode_pembayaran;?></th>
                            <th><?= $p->total_harga;?></th>
                            <th><?= $p->quantity;?></th>
                            <td>
                                <?php if ($p->proses == 0): ?>
                                    <a href="<?= base_url('index.php/admin/ProsesPemesanan/');?><?= $p->id_pemesanan;?>" class="btn btn-primary"><i class="fas fa-fw fa-file"></i> Proses</a>
                                <?php else: ?>
                                    <a href="" class="btn btn-primary disabled"><i class="fas fa-fw fa-file"></i> Telah diproses</a>
                                <?php endif; ?>
                                <a href="<?= base_url('index.php/admin/CekPemesanan/');?><?= $p->id_pemesanan;?>" class="btn btn-warning"><i class="fas fa-fw fa-search"></i> Cek</a>
                                <a href="<?= base_url('index.php/admin/hapusObat/');?><?= $p->id_pemesanan;?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i> Hapus</a>
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
