
<?php
$hasil=mysql_query("select * from pembelian");
if(!$hasil)
	die("Gagal karena:".mysql_error());
echo"<table class='table'>
<tr>
<th class='th'>KTP</th><th class='th'>Nama Pembeli</th><th class='th'>Alamat Pembeli</th><th class='th'>Telp Pembeli</th></tr>";
while($row=mysql_fetch_array($hasil)){
	echo"<tr>";
	echo"<td class='td'>".$row['ktp']."</td>";
	echo"<td class='td'>".$row['nama_pembeli']."</td>";
	echo"<td class='td'>".$row['alamat_pembeli']."</td>";
	echo"<td class='td'>".$row['telp_pembeli']."</td>";
}
echo"</table>";
?>