<?php
include"koneksi.php";
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tgllhr=$_POST['tgllhr'];
$tmplhr=$_POST['tmplhr'];
$username=$_POST['username'];
$password=$_POST['password'];

mysql_query("INSERT INTO  `koperasi`.`user` (
`username` ,
`password` ,
`level` ,
`nama` ,
`alamat` ,
`tgllhr` ,
`tmplhr`
)
VALUES (
'$username',  '$password',  '2',  '$nama',  '$alamat',  '$tgllhr',  '$tmplhr'
);
")or die(mysql_error());

?><html>
<title>Pengumuman Koperasi Yogyakarta</title>
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
				<h4><li>Pengumuman Koperasi Yogyakarta 2015</li></h4>
			</div>

			
			<div class="kotak">
			
				<p>Selamat Anda Sudah Terdaftar. Silahkan Login Menggunakan Username dan Password
				</p>
			</div>








		</div>
		<?php include"footer.php";?>
	</div>
</body>
</html>