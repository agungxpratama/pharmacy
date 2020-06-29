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
          <h1 class="h3 mb-0 text-gray-800">Data Report</h1>
          <!-- <a href="<?= base_url('index.php/admin/BelumDiproses') ?>" class="d-none d-sm-inline btn btn-sm btn-warning shadow-sm"><i class="fas fa-file fa-sm text-white-50"></i> Belum Diproses</a>
          <a href="<?= base_url('index.php/admin/TelahDiproses') ?>" class="d-none d-sm-inline btn btn-sm btn-info shadow-sm"><i class="fas fa-file fa-sm text-white-50"></i> Telah Diproses</a> -->
        </div>
        <!-- Content Row -->

          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">Data Obat</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Data Report</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Lengkap</th>
                        <th>Pesan</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($report as $r): ?>
                        <tr>
                            <th><?= $no++;?></th>
                            <th><?= $r->nama_lengkap ?></th>
                            <th><?= $r->pesan ?></th>
                            <th>
                                <img src="<?= base_url('assets_admin/img/report/'.$r->foto); ?>" width="100" height="100">
                                <!-- <?= $r->foto ?></th> -->
                            <td>
                                <!-- <a href="<?= base_url('index.php/admin/CekPemesanan/');?><?= $r->id_report;?>" class="btn btn-warning"><i class="fas fa-fw fa-search"></i> Cek</a> -->
                                <a href="<?= base_url('index.php/admin/hapusReport/');?><?= $r->id_report;?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i> Hapus</a>
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
