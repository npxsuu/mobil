<?php
$hasil=mysql_query("select * from bayar_cicilan");
if(!$hasil)
	die("Gagal karena:".mysql_error());
echo"<table class='table'>
<tr>
<th class='th'>Kode Cicilan</th><th class='th'>Kode Kredit</th><th class='th'>Tanggal Cicilan</th><th class='th'>Jumlah Cicilan</th>
<th class='th'>Cicilan Ke</th><th class='th'>Cicilan Sisa ke</th><th class='th'>Cicilan Sisa Harga</th></tr>";
while($row=mysql_fetch_array($hasil)){
	echo"<tr>";
	echo"<td class='td'>".$row['kode_cicilan']."</td>";
	echo"<td class='td'>".$row['kode_kredit']."</td>";
	echo"<td class='td'>".$row['tgl_cicilan']."</td>";
	echo"<td class='td'>".$row['jumlah_cicilan']."</td>";
	echo"<td class='td'>".$row['cicilan_ke']."</td>";
	echo"<td class='td'>".$row['cicilan_sisa_ke']."</td>";
	echo"<td class='td'>".$row['cicilan_sisa_harga']."</td>";

	echo"</tr>";
}
echo"</table>";
?>