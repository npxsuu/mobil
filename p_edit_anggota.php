<?php
include"koneksi.php";
$id=$_GET['id_anggota'];
$sql=mysql_query("select * from anggota where id_anggota='$id'")or die(mysql_error());
$data=mysql_fetch_array($sql);
?>
<form method="post" action="simpan_edit_anggota.php">
	<table border>
		<tr><td>ID Anggota</td><td>:</td><td><input type="text" name='id_anggota' value="<?php echo $id;?>" ></td></tr>
		<tr><td>Nama</td><td>:</td><td><input type="text" name='nama' value="<?php echo $data['nama'];?>" ></td></tr>
		<tr><td>Alamat</td><td>:</td><td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>" ></td></tr>
		<tr><td>Tanggal Lahir</td><td>:</td><td><input type="date" name="tgl_lhr"value="<?php echo $data['thl_lhr'];?>" ></td></tr>
		<tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="tmp_lhr" value="<?php echo $data['tmp_lhr'];?>" ></td></tr>
		<tr><td>Jenis Kelamain</td><td>:</td><td><input type="radio" value="L" name='jk' checked>Laki-Laki<br>
		<input type="radio" value="P" name='jk'>Perempuan</td></tr>
		<tr><td>Status</td><td>:</td><td><input type="text" name="status" value="<?php echo $data['status'];?>" ></td></tr>
		<tr><td>No Telepon</td><td>:</td><td><input type="text" name="no_tlp" value="<?php echo $data['no_tlp'];?>" ></td></tr>
		<tr><td>Keterangan</td><td>:</td><td><input type="text" name="ket" value="<?php echo $data['ket'];?>" ></td></tr>
			<tr><td> </td><td><input type="submit" value="Kirim"></td><td><input type="reset" value="Reset"></td></tr>
		</table>


