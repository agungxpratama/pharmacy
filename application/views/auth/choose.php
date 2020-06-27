<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url('assets_auth/')?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets_auth/')?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets_auth/')?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets_auth/')?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets_auth/')?>vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets_auth/')?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets_auth/')?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets_auth/')?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets_auth/')?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets_auth/')?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets_auth/')?>css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						<!-- <b>Pharmacy Kids.</b> -->
						<b><a href="<?= base_url('index.php/') ?> ">
							<h1>
								Pharmacy Kids
							</h1>
						</a></b>
					</span>
					<span class="login100-form-title p-b-43">
						Login Sebagai
					</span>
                    <div class="container-login100-form-btn">
					    <a href="<?= base_url('index.php/Auth/loginAdmin') ?>">
							<h4>Admin</h4>
				        </a>
                    </div>
                    <hr color="white">
                    <div class="container-login100-form-btn">
                        <a href="<?= base_url('index.php/Auth/login') ?>">
                            <h4 >User</h4>
                        </a>
                    </div>
				</form>
				<div class="login100-more" style="background-image: url(<?php echo base_url('assets/images/bg-01.jpg') ?>);">
				</div>
			</div>
		</div>
	</div>

    <!--===============================================================================================-->
	<script src="<?= base_url('assets_auth/')?>vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
	<script src="<?= base_url('assets_auth/')?>vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
	<script src="<?= base_url('assets_auth/')?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('assets_auth/')?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
	<script src="<?= base_url('assets_auth/')?>vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
	<script src="<?= base_url('assets_auth/')?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('assets_auth/')?>vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
	<script src="<?= base_url('assets_auth/')?>vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
	<script src="<?= base_url('assets_auth/')?>js/main.js"></script>

</body>
</html>
