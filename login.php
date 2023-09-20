<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Bootstrap 5 Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body style="background-color:#3fbbc0;">

	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="assets/img/logo4.png" alt="logo" width="150" height="100">
					</div>
					<div class="card shadow-lg" style="background-color: azure;">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form action="verifikasi.php" method="POST" class="needs-validation" novalidate="" autocomplete="off" >
								<?php
								if(isset($_GET['pesan'])){
									if($_GET['pesan'] == "gagal"){
										echo'<div class="alert alert-danger" role="alert">Login gagal!Username dan Pasword salah1</div>';
									} else if ($_GET['pesan'] == "logout"){
										echo'<div class="alert alert-success" role="alert">Anda telah berhasil logout</div>';
									} else if($_GET['pesan'] == "belum_login"){
										echo '<div class="alert alert-waerning" role="alert">Anda harus login untuk megakses halaman</div>';
									}
								}
								?>
							
								<div class="mb-3">
									<label class="mb-2 text-muted" for="nama">E-Mail Address</label>
									<input id="nama" type="nama" class="form-control" name="nama" value="" required autofocus>
									<div class="invalid-feedback">
										Username is invalid
									</div>
								</div>

								<div class="mb-3">
	
									<input id="kata_sandi" type="password" class="form-control" name="kata_sandi" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>
									<button type="submit" class="btn btn-primary ms-auto">
										Login
									</button>
								</div>
							</form>
						</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>
</body>
</html>