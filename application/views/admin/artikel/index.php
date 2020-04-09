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
          <h1 class="h3 mb-0 text-gray-800">Data Artikel</h1>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
        </div>
        <!-- Content Row -->
        <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Tambah Artikel</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="<?= base_url()?>index.php/admin/tambahArtikel" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                  <p>Modal body text goes here.</p>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Judul Artikel</label>
                          <input type="text" class="form-control bg-light border-1 small" placeholder="Judul Artikel..." name="judul" aria-label="namaObat" aria-describedby="basic-addon2">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Foto</label>
                          <input type="file" class="form-control bg-light border-1 small" placeholder="Keterangan" name="foto" aria-label="Foto" aria-describedby="basic-addon2">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Isi</label>
                          <textarea name="isi" class="form-control bg-light border-1 small" rows="8" cols="80" aria-label="efekSamping" aria-describedby="basic-addon2"></textarea>
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
          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">Data Obat</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Data Obat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Tanggal Upload</th>
                    </tr>
                  </thead>
                  <!-- <tfoot>
                    <tr>
                        <th>Nama Obat</th>
                        <th>Foto</th>
                        <th>Kategori</th>
                        <th>Merek</th>
                        <th>Jenis Obat</th>
                        <th>Kemasan</th>
                        <th>Harga Obat</th>
                        <th>Action</th>
                    </tr>
                  </tfoot> -->
                  <tbody>
                    <?php foreach ($artikel as $a): ?>
                        <tr>
                            <th><img src="<?= base_url('assets_admin/img/artikel/'.$a->foto); ?>" width="100" height="100"></th>
                            <th><?= $a->judul;?></th>
                            <th><?= $a->isi;?></th>
                            <th><?= $a->tgl_buat;?></th>
                            <td>
                                <a href="<?= base_url('index.php/admin/viewArtikel/');?><?= $a->id_artikel;?>" class="btn btn-warning"><i class="fas fa-fw fa-search"></i> Cek</a>
                                <a href="<?= base_url('index.php/admin/hapusArtikel/');?><?= $a->id_artikel;?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i> Hapus</a>
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
