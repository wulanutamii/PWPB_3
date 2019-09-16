<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<header class="blog-header py-3">
			<div class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-4 pt-1">
					<a class="text-muted"><b>
							<h1>kelompok 8</h1>
						</b></a>
				</div>

				<div class="col-4 d-flex justify-content-end align-items-center">
					<a class="text-muted" href="#">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false">
							<title>Search</title>
							<circle cx="10.5" cy="10.5" r="7.5" />
							<path d="M21 21l-5.2-5.2" />
						</svg>
					</a>
					<a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
				</div>
			</div>
		</header>

		<div class="navigasi">
			<nav class="nav d-flex justify-content-between">
				<ul>

					<a class="btn btn-sm btn-outline-secondary" href="pwpb1.php">Tugas Satu</a>
					<a class="btn btn-sm btn-outline-secondary" href="tugaskedua.php">Tugas Dua</a>
					<a class="btn btn-sm btn-outline-secondary" href="form.php">Tugas Tiga</a>
					<a class="btn btn-sm btn-outline-secondary" href="#">Tugas empat</a>
					<a class="btn btn-sm btn-outline-secondary" href="index.php">Home</a><br><br>
				</ul>

			</nav>

		</div>


		<div class="jumbotron p-4 p-md-3 text-white rounded bg-dark">
			<div class="col-md-10 px-0">
						<center>
							<h2> IDENTITAS PESERTA DIDIK BARU </h2>
						</center>
			</div>
		</div>
		<br>
	
	<h5>Nama Lengkap : <?php echo $_POST ['NL']; ?><br>
	Nama Panggilan : <?php echo $_POST ['NP']; ?><br>
	Jenis kelamin : <?php echo $_POST ['JK']; ?><br>
	NISN : <?php echo $_POST ['NIS']; ?><br>
	NIK : <?php echo $_POST ['NIK']; ?><br>
	Tempat Tanggal Lahir : <?php echo $_POST ['TTL']; ?><br>
	Asal Sekolah : <?php echo $_POST ['A-S']; ?><br>
	Nomor SKHUN : <?php echo $_POST ['NO-S']; ?><br>
	Tanggal di terima di sekolah ini : <?php echo $_POST ['TGL_S']; ?><br>
	Jika pindahan berikan alasan kenapa pindah ke sekolah ini : <?php echo $_POST ['T_S']; ?><br>
	Agama : <?php echo $_POST ['AGM']; ?><br>
	Alamat : <?php echo $_POST ['ALMT']; ?><br>
	Tinggal Bersama : <?php echo $_POST ['TB']; ?><br>
	Transportasi Ke Sekolah : <?php echo $_POST ['Transportasi']; ?><br>
	Nomor Telephone : <?php echo $_POST ['N-T']; ?><br>
	Nomor Handphone : <?php echo $_POST ['N-H']; ?><br>
	Nomor KPS : <?php echo $_POST ['N-K']; ?><br>
	<b>Data Ayah Kandung :</b><br> 
	Nama : <?php echo $_POST ['NM-A']; ?> <br>
	Tempat Tanggal Lahir : <?php echo $_POST ['TL-A']; ?><br>
	Pendidikan Terakhir : <?php echo $_POST ['PT-A']; ?><br>
	Pekerjaan : <?php echo $_POST ['P-A']; ?><br>
	Penghasilan : <?php echo $_POST ['PP-A']; ?><br>
	<b>Data Ibu Kandung :</b><br>
	Nama : <?php echo $_POST ['NM-I']; ?> <br>
	Tempat Tanggal Lahir : <?php echo $_POST ['TL-I']; ?><br>
	Pendidikan Terakhir : <?php echo $_POST ['PT-I']; ?><br>
	Pekerjaan : <?php echo $_POST ['P-I']; ?><br>
	Penghasilan : <?php echo $_POST ['PP-I']; ?><br></h5>
</body>

	<br><hr>
		<footer style="margin-bottom: 20px;">
			&copy;2019 kelompok 8

		</footer>
</html>