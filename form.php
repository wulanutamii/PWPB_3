<!DOCTYPE html>
<html>

<head>
	<title>pengolahan form</title>
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
							<h2>DATA IDENTITAS PESERTA DIDIK BARU </h2>
							<h2>
								SMK ADISANGGORO</font>
							</h2>
							<h2>TAHUN AJARAN (2019/2020)</h2>
						</center>
			</div>
		</div>
		<br>

		<form action="selesai.php" method="POST" name="myform">
			<table>
				<tr>
					<td>1. Nama Lengkap</td>
					<td> : </td>
					<td><input type="text" name="NL" size="40"></td>
				</tr>
				<th>
					<tr>
						<td>2. Nama Panggilan</td>
						<td> : </td>
						<td><input type="text" name="NP" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>3. Jenis Kelamin </td>
						<td> : </td>
						<td>
							<input type="radio" name="JK" value="Laki-Laki">Laki-Laki
							<input type="radio" name="JK" value="Perempuan">Perempuan
						</td>
					</tr>

				<th>
					<tr>
						<td>4. NISN </td>
						<td> : </td>
						<td><input type="text" name=NIS size="40"></td>
					</tr>
				<th>
					<tr>
						<td>5. NIK</td>
						<td> : </td>
						<td><input type="text" name="NIK" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>6. Tempat, Tanggal Lahir</td>
						<td> : </td>
						<td><input type="date" name="TTL" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>7. Asal Sekolah</td>
						<td> : </td>
						<td><input type="text" name="A-S" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>8. Nomor SKHU</td>
						<td> :</td>
						<td><input type="text" name="NO-S" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>9. Tanggal di terima di sekolah ini</td>
						<td> : </td>
						<td><input type="date" name="TGL_S" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>10. Jika pindahan berikan alasan kenapa pindah ke sekolah ini</td>
						<td> : </td>
						<td><textarea name="T_S" cols="30" rows="10" placeholder="Tuliskan Alasannya...."></textarea></td>
					</tr>
					<tr>
						<td>11. Agama </td>
						<td>:</td>
						<td>
							<input type="radio" name="AGM" value="Islam">Islam
							<input type="radio" name="AGM" value="Kristen">Kristen
							<input type="radio" name="AGM" value="Hindu">Hindu
							<input type="radio" name="AGM" value="Budha">Budha
							<input type="radio" name="AGM" value="Konghucu">Konghucu
						</td>
					</tr>
				<th>
					<tr>
						<td>12. Alamat</td>
						<td> : </td>
						<td><input type="text" name="ALMT" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>13. Tinggal Bersama </td>
						<td>:</td>
						<td><input type="text" name="TB" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>14. Transportasi ke Sekolah</td>
						<td>:</td>
						<td>
							<input type="radio" name="Transportasi" value="Laki-Laki">Motor
							<input type="radio" name="Transportasi" value="Mobil">Mobil
							<input type="radio" name="Transportasi" value="Angkutan Umum">Angkutan Umum
							<input type="radio" name="Transportasi" value="Sepeda">Sepeda
							<input type="radio" name="Transportasi" value="Jalan Kaki">Jalan Kaki
						</td>
					</tr>
				<th>
					<tr>
						<td>15. Nomor Telephone </td>
						<td>:</td>
						<td><input type="text" name="N-T" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>16. Nomor Handphone </td>
						<td>:</td>
						<td><input type="text" name="N-H" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>17. Nomor KPS</td>
						<td> : </td>
						<td><input type="text" name="N-K" size="40" placeholder="        Bagi Yang Memiliki"></td>
					</tr>
				<th>
					<h5><b>18. Data Ayah Kandung : </b></h5><br>
					<tr>
						<td>Nama</td>
						<td> :</td>
						<td><input type="text" name="NM-A" size="40"></td>
					</tr>
				<th>
					<tr>
						<td> Tempat Tanggal Lahir</td>
						<td> : </td>
						<td><input type="date" name="TL-A" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>Pendidikan Terakhir</td>
						<td> : </td>
						<td><input type="text" name="PT-A" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>Pekerjaan </td>
						<td> : </td>
						<td><input type="text" name="P-A" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>Penghasilan Perbulan</td>
						<td> : </td>
						<td><input type="text" name="PP-A" size="40"></td>
					</tr>
				<th>
					<h5><b>19. Data Ibu Kandung : </b></h5><br>
					<tr>
						<td>Nama</td>
						<td> :</td>
						<td><input type="text" name="DT-I" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>Tempat Tanggal Lahir</td>
						<td> : </td>
						<td><input type="date" name="TL-I" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>Pendidikan Terakhir</td>
						<td> : </td>
						<td><input type="text" name="PT-I" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>Pekerjaan </td>
						<td> : </td>
						<td><input type="text" name="P-I" size="40"></td>
					</tr>
				<th>
					<tr>
						<td>Penghasilan Perbulan</td>
						<td> : </td>
						<td><input type="text" name="PP-I" size="40"></td>
					</tr>
			</table>


			<br><br><input type="submit" value="reset" name="p">
			<input type="submit" value="simpan" name="q">


		</form>


		
		
		<br><hr>
		<footer style="margin-bottom: 20px;">
			&copy;2019 kelompok 8

		</footer>
</body>

</html>