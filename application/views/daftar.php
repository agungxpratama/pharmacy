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
                    <h2 class="title">Registrasi</h2>
                    <form method="POST" action="<?php echo base_url('index.php/insert_regis/insert') ?> ">
                        <div class="input-group">
                            <span style="color: white">Nama Lengkap</span>
                            <input class="input--style-3" type="text" name="nama_lengkap">
                        </div>                        
                        <div class="input-group">
                            <span style="color: white">Alamat</span>
                            <input class="input--style-3"  type="text"  name="alamat">
                        </div>
                         <div class="input-group">
                            <span style="color: white">Telepon</span>
                            <input class="input--style-3" type="text" name="telepon">
                        </div>
                        <div class="input-group">
                            <span style="color: white">Email</span>
                            <input class="input--style-3" type="email" name="email">
                        </div>
                        <div class="input-group">
                            <span style="color: white">Password</span>
                            <input class="input--style-3" type="password" name="password">
                        </div>
                       
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Daftar</button>
                        </div>
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