<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Pendaftaran</title>

    <!-- Icons font CSS-->
     <link href="<?php echo base_url('assets/vendor1/mdi-font/css/material-design-iconic-font.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor1/font-awesome-4.7/css/font-awesome.min.css') ?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/vendor1/select2/select2.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor1/datepicker/daterangepicker.css') ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/css1/main.css') ?>" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-07 p-t-180 p-b-100 font-poppins">
        <h1 class="newww" align="center">Pharmacy Kids.</h1>
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Edit Data Obat</h2>
                    
                    <form method="post" action="<?php echo base_url('index.php/edit/pros_ed'); ?> ">                       
                    <?php foreach ($lihat as $r) { ?>
                        <input type="hidden" name="id_obat" value="<?php echo $r->id_obat; ?>">        
                        <div style="color: white; font-size:17px;" class="input-group">
                            <span>Nama Obat</span>
                            <input class="input--style-3" type="text"  name="nama_obat" value="<?php echo $r->nama_obat; ?>">
                        </div>
                        <div style="color: white; font-size:17px;" class="input-group">
                            <span>Jenis obat</span>
                            <input class="input--style-3" type="text"  name="jenis_obat" value="<?php echo $r->jenis_obat; ?>">
                        </div>                        
                        
                        <div style="color: white; font-size:17px;" class="input-group">
                            <span>Harga Obat</span>
                            <input class="input--style-3" type="text"  name="harga_obat" value="<?php echo $r->harga_obat; ?>">
                        </div>
                        <div style="color: white; font-size:17px;" class="input-group">
                            <span>Indikasi Umum</span>
                            <input class="input--style-3" type="text"  name="indikasi_umum" value="<?php echo $r->indikasi_umum; ?>">
                        </div>                        
                        <div style="color: white; font-size:17px;" class="input-group">
                            <span>Deskripsi</span>
                            <input class="input--style-3" type="text" name="deskripsi" value="<?php echo $r->deskripsi; ?>">
                        </div>
                        <div style="color: white; font-size:17px;" class="input-group">
                            <span>Komposisi</span>
                            <input class="input--style-3" type="text" name="komposisi" value="<?php echo $r->komposisi; ?>">
                        </div>
    
                        <div style="color: white; font-size:17px;" class="input-group">
                            <span>Aturan Pakai</span>
                            <input class="input--style-3" type="text"  name="aturan_pakai" value="<?php echo $r->aturan_pakai; ?>">
                        </div>
                        <div style="color: white; font-size:17px;" class="input-group">
                            <span>Kemasan</span>
                            <input class="input--style-3" type="text" name="kemasan" value="<?php echo $r->kemasan; ?>">
                        </div>
                        <div style="color: white; font-size:17px;" class="input-group">
                            <span>Efek Samping</span>
                            <input class="input--style-3" type="text"  name="efek_samping" value="<?php echo $r->efek_samping; ?>">
                        </div>
                    
                        <div style="color: white; font-size:17px;" class="input-group">
                            <span>Manufaktur</span>
                            <input class="input--style-3" type="text" name="manufaktur" value="<?php echo $r->manufaktur; ?>">
                        </div>                                                        
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green"  type="submit" name="submit">Edit</button>
                        </div>
                    <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/vendor1/jquery/jquery.min.js') ?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url('assets/vendor1/select2/select2.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor1/datepicker/moment.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor1/datepicker/daterangepicker.js') ?>"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url('assets/js1/global.js') ?>"></script>

</body>

</html>
<!-- end document-->