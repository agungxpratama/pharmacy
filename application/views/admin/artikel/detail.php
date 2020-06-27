<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Artikel</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-pen fa-sm text-white-50"></i> Edit</a> -->
    </div>

    <!-- Content Row -->

    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
    <div class="card shadow mb-4 ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ID Atrikel : <?= $artikel->id_artikel ?></h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h5>Judul</h5>
                    <p class="text-lg font-weight-bold text-primary"><?= $artikel->judul; ?></p>
                    <div class="row border-bottom">
                        <div class="col-4 border-left">
                            <h5 class="font-weight-bold">Tanggal</h5>
                            <p class="text"><?= $artikel->tgl_buat; ?></p>
                        </div>
                        <div class="col-4 border-left">
                            <h5 class="font-weight-bold">Isi</h5>
                            <p class="text"><?= $artikel->isi; ?></p>
                        </div>
                    </div>
                    <hr>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>