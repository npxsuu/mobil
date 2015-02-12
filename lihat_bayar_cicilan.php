<?php
		include'session.php';
		include"koneksi.php";

?><html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="img/iconjudul.gif" type="image/gif">

</head>
<body>
	<div id="wrapper">
		<div class="logo">
		</div>
	<?php

	include"menuheader.php";
	?>

		<div id="header">
	
		</div>

		<div id="kiri">
			<div class="judulh">

			</div>
								<div class="judulh">

			</div><div class="judul">
				<h4><li>Profil Anda</li></h4>
			</div>
<?php
include"profil.php";
?>
						</div>
		<div id="konten">
				<?php include"tampil_bayar_cicilan.php";?>










		</div>
		<?php include"footer.php";?>
	</div>
</body>
</html>