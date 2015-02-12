
<head><SCRIPT LANGUAGE="javascript">
function Del()
{
var r=confirm("Are you sure?")
if(r==true){return href;}else{return false;}
}
</SCRIPT>
</head>
<?php
include"koneksi.php";
$sql=mysql_query("select * from anggota") or die(mysql_error());
echo"<table border='1' class='table'><tr><th>ID Anggota</th><th>Nama</th><th>Alamat</th><th>Tanggal Lahir</th><th>Tempat Lahir</th><th>Jenis Kelamin</th>
<th>Status</th><th>No Telp</th><th>Keterangan</th><th colspan='2'>Pilihan</th></tr>";
while($data=mysql_fetch_array($sql)){
	echo"<tr>";
	echo"<td>".$data['id_anggota']."</td>";
	echo"<td>".$data['nama']."</td>";
	echo"<td>".$data['alamat']."</td>";
	echo"<td>".$data['tgl_lhr']."</td>";
	echo"<td>".$data['tmp_lhr']."</td>";
	echo"<td>".$data['jk']."</td>";
	echo"<td>".$data['status']."</td>";
	echo"<td>".$data['no_tlp']."</td>";
	echo"<td>".$data['ket']."</td>";
	echo"<td><a href='p_edit_anggota.php?id_anggota=$data[id_anggota]'>Edit</a></td>";
	echo"<td> <a href='p_hapus_anggota.php?id_anggota=$data[id_anggota]'>Delete</a></td>";
	echo"</tr>";
}
echo"</table>";
?>