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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
