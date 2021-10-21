<?php
include 'koneksi.php';
$tgl=date('Y-m-d');
?>
<!doctype html>
<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body >
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top mr-5">
				PERPUSTAKAAN UMUM
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>
	
	<div class="rounded-lg shadow-lg mt-5 p-5">
		<h1>PERPUSRTAKAAN UMUM</h1>
		<h5>Jl. Lembah Abang No 11, Telp: (021)55555555</h5>
	</div>

	<div class="rounded-lg shadow-lg mt-5 p-5">
		<div class="row">
			<div class="col-3">
				<h4>MENU</h4>
				<div class="d-grid gap-3 mt-5">
					<a class="btn btn-outline-dark" href="index.php?p=beranda" type="button">beranda</a>
					<a class="btn btn-outline-dark" href="index.php?p=anggota" type="button">data anggota</a>
					<a class="btn btn-outline-dark" href="index.php?p=buku" type="button">data Buku</a>
					<a class="btn btn-outline-dark" href="index.php?p=transaksi-peminjaman" type="button">Transaksi Peminjaman</a>
				</div>
			</div>
			<div class="col-9">
				<?php
				$pages_dir = 'pages';
				if (!empty($_GET['p'])) {
					$pages = scandir($pages_dir, 0);
					unset($pages[0], $pages[1]);
					$p = $_GET['p'];
					if (in_array($p . '.php', $pages)) {
						include($pages_dir . '/' . $p . '.php');
					} else {
						echo 'Halaman Tidak Ditemukan';
					}
				} else {
					include($pages_dir . '/beranda.php');
				}
				?>
			</div>
		</div>
	</div>
	<div class="p-5 bg-white rounded-3">
		<div class="container-fluid">
			<p class="text-center"> Sistem Informasi Perpustakaan (sipus) | Praktikum </p>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>