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
          <h1 class="h3 mb-0 text-gray-800">Data Tracking</h1>
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a> -->
        </div>
        <!-- Content Row -->
          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">Data Obat</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Data Tracking</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pemesan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // print_r($transaksi);
                    $no = 1;
                    foreach ($transaksi as $t): ?>
                        <tr>
                            <td><?= $no++;?></td>
                            <!-- <td><?= $t->id_transaksi;?></td> -->
                            <td><?= $t->nama_lengkap;?></td>
                            <td><?= $t->tanggal;?></td>
                            <td>
                                <?php if ($t->status == 0): ?>
                                    <div class="badge badge-primary">
                                        Belum dibayar
                                    </div>
                                    -
                                    <div class="badge badge-secondary">
                                        Telah Dibayar
                                    </div>
                                    -
                                    <div class="badge badge-secondary">
                                        Belum Dikirim
                                    </div>
                                    <div class="badge badge-secondary">
                                        Telah Dikirm
                                    </div>
                                    -
                                    <div class="badge badge-secondary">
                                        Selesai
                                    </div>
                                <?php elseif ($t->status == 1): ?>
                                    <div class="badge badge-secondary">
                                        Belum dibayar
                                    </div>
                                    -
                                    <div class="badge badge-primary">
                                        Telah Dibayar
                                    </div>
                                    -
                                    <div class="badge badge-secondary">
                                        Belum Dikirim
                                    </div>
                                    <div class="badge badge-secondary">
                                        Telah Dikirm
                                    </div>
                                    -
                                    <div class="badge badge-secondary">
                                        Selesai
                                    </div>
                                <?php elseif ($t->status == 2): ?>
                                    <div class="badge badge-secondary">
                                        Belum dibayar
                                    </div>
                                    -
                                    <div class="badge badge-secondary">
                                        Telah Dibayar
                                    </div>
                                    -
                                    <div class="badge badge-warning">
                                        Belum Dikirim
                                    </div>
                                    <div class="badge badge-primary">
                                        Telah Dikirm
                                    </div>
                                    -
                                    <div class="badge badge-secondary">
                                        Selesai
                                    </div>
                                <?php elseif ($t->status == 3): ?>
                                    <div class="badge badge-secondary">
                                        Belum dibayar
                                    </div>
                                    -
                                    <div class="badge badge-secondary">
                                        Telah Dibayar
                                    </div>
                                    -
                                    <div class="badge badge-secondary">
                                        Belum Dikirim
                                    </div>
                                    <div class="badge badge-secondary">
                                        Telah Dikirm
                                    </div>
                                    -
                                    <div class="badge badge-success">
                                        Selesai
                                    </div>
                                <?php endif; ?>
                                <!-- <?= $t->status;?> -->
                            </td>
                            <td>
                                <a href="<?= base_url('index.php/admin/detailTransaksi/');?><?= $t->id_transaksi;?>" class="btn btn-warning"><i class="fas fa-fw fa-search"></i> Cek</a>
                                <!-- <a href="<?= base_url('index.php/admin/hapusObat/');?><?= $t->id_transaksi;?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i> Hapus</a> -->
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
