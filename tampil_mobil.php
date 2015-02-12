
<?php
$hasil=mysql_query("select * from mobil");
if(!$hasil)
	die("Gagal karena:".mysql_error());
echo"<table class='table'>
<tr>
<th class='th'>Kode Mobil</th><th class='th'>Merk</th><th class='th'>Type</th><th class='th'>Warna</th>
<th class='th'>Harga Mobil</th><th class='th'>Gambar</th></tr>";
while($row=mysql_fetch_array($hasil)){
	echo"<tr>";
	echo"<td class='td'>".$row['kode_mobil']."</td>";
	echo"<td class='td'>".$row['merk']."</td>";
	echo"<td class='td'>".$row['type']."</td>";
	echo"<td class='td'>".$row['warna']."</td>";
	echo"<td class='td'>".$row['harga_mobil']."</td>";
	echo"<td class='td'><img src='data:image/jpeg;base64,".base64_encode( $row['gambar'] )."' width='100'/></td>";

}
echo"</table>";
?>