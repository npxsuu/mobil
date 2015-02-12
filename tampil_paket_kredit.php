
<?php
$hasil=mysql_query("select * from paket_kredit");
if(!$hasil)
	die("Gagal karena:".mysql_error());
echo"<table class='table'>
<tr>
<th class='th'>Kode Paket</th><th class='th'>Harga Paket</th><th class='th'>Uang Muka</th>
<th class='th'>Paket Jumlah Cicilan</th><th class='th'>Bunga</th>
<th class='th'>Nilai Cicilan</th></tr>";
while($row=mysql_fetch_array($hasil)){
	echo"<tr>";
	echo"<td class='td'>".$row['kode_paket']."</td>";
	echo"<td class='td'>".$row['harga_paket']."</td>";
	echo"<td class='td'>".$row['uang_muka']."</td>";
	echo"<td class='td'>".$row['paket_jumlah_cicilan']."</td>";
	echo"<td class='td'>".$row['bunga']."</td>";
	echo"<td class='td'>".$row['nilai_cicilan']."</td>";


}
echo"</table>";
?>