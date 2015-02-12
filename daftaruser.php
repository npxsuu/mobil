<html>
<title>Daftar Anggota Koperasi Yogyakarta</title>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="img/iconjudul.gif" type="image/gif">
</head>
<body>
	<div id="wrapper">
		<div class="logo">
		</div>
	<?php
	include"menuheaderanon.php";
	?>

		<div id="header">
	
		</div>

		<div id="kiri">
			<div class="judulh">

			</div>
		<?php include"form_login_user.php" ?>
								<div class="judulh">

			</div><div class="judul">
				<h4><li>Berita Lain</li></h4>
			</div>

						</div>
		<div id="konten">
				<div class="judula">

			</div><div class="judul">
				<h4><li>Daftar Anggota Koperasi Yogyakarta 2015</li></h4>
			</div>

			
			<div class="kotakdaftar">
			<form method="post" action="selamat.php">
				<table>
					<tr>
						<td>Nama</td><td>:</td><td><input type="text" name="nama" required class="inputdaftar"></td></tr>
						<tr><td>Alamat</td><td>:</td><td><input type="text" name="alamat" required class="inputdaftar"></td></tr>
						<tr><td>Tanggal Lahir</td><td>:</td><td><input type="date" name="tgllhr" required class="inputdaftar"></td></tr>
						<tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="tmplhr" required class="inputdaftar"></td></tr>
						<tr><td>Username</td><td>:</td><td><input type="text" name="username" required class="inputdaftarx"></td></tr>
						<tr><td>Password</td><td>:</td><td><input type="password" name="password" required class="inputdaftarx"></td></tr>
						<tr><td colspan="3"><input type="submit" value="Daftar" class="tomboldaftar"><input type="reset" value="Reset" class="tombolreset"></td></tr>
					</table>
				</form>

				
			</div>

		





		</div>
		<?php include"footer.php";?>
	</div>
</body>
</html>