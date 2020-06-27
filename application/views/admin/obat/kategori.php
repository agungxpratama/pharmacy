<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Kategori Obat</h1>
      <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a> -->
    </div>

    <?php foreach ($categories as $c): ?>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?= $c->kategori ?></h6>
            </div>
            <div class="card-body">
                <?php
                $where = array('kategori' => $c->kategori , );
                // $data = $this->M_All->view_where('obat', $where);
                $data = $this->M_All->view_where('obat', $where)->result();
                ?>
                <div class="card-columns">
                    <?php foreach ($data as $d): ?>

                        <div class="card">
                            <img class="card-img" src="<?= base_url('assets_admin/img/foto/'.$d->foto); ?>" alt="">
                            <div class="card-img-overlay">
                                <!-- obat -->
                                <h3 class="card-tittle bg-white p-3 rounded"><?= $d->nama_obat ?>
                                    <a class="btn btn-primary float-right" href="<?= base_url('index.php/admin/viewObat/');?><?= $d->id_obat;?>"><i class="fas fa-search fa-sm"></i> Info</a>
                                </h3>
                                <!-- <?php print_r($data); ?> -->
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Jenis obat : <?= $d->jenis_obat ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>

    <?php endforeach; ?>
</div>
