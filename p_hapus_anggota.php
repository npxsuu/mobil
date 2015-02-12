<?php
include"koneksi.php";
$id=$_GET['id_anggota'];
$sql=mysql_query("select * from anggota where id_anggota='$id'")or die(mysql_error());
$data=mysql_fetch_array($sql);
	echo"<table border>";
		echo"<tr><td>ID Anggota</td><td>:</td><td> $data[id_anggota]</td></tr>";
		echo"<tr><td>Nama</td><td>:</td><td> $data[nama]</td></tr>";
		echo"<tr><td>Alamat</td><td>:</td><td> $data[alamat]</td></tr>";
		echo"<tr><td>Tanggal Lahir</td><td>:</td><td> $data[thl_lhr]</td></tr>";
		echo"<tr><td>Tempat Lahir</td><td>:</td><td> $data[tmp_lhr]</td></tr>";
		echo"<tr><td>Jenis Kelamain</td><td>:</td><td> $data[jk]</td></tr>";
		echo"<tr><td>Status</td><td>:</td><td> $data[status]</td></tr>";
		echo"<tr><td>No Telepon</td><td>:</td><td> $data[no_tlp]</td></tr>";
		echo"<tr><td>Keterangan</td><td>:</td><td> $data[ket]</td></tr>";

		echo"<tr><td> </td><td><a href='proses_hapus_anggota.php?id_anggota=$data[id_anggota]'>Hapus</a></td><td><a href='tampil_anggota.php'>Batal</a></td></tr>";
		echo "</table>";
		?>
