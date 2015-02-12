
<?php
include"koneksi.php";
$hasil=mysql_query("select * from beli_cash");
if(!$hasil)
	die("Gagal karena:".mysql_error());
echo"<table class='table'>
<tr>
<th class='th'>Kode Cash</th><th class='th'>KTP</th><th class='th'>Kode Mobil</th><th class='th'> Cash Tanggal</th><th class='th'>Cash Bayar</th></tr>";
while($row=mysql_fetch_array($hasil)){
	echo"<tr>";
	echo"<td class='td'>".$row['kode_cash']."</td>";
	echo"<td class='td'>".$row['ktp']."</td>";
	echo"<td class='td'>".$row['kode_mobil']."</td>";
	echo"<td class='td'>".$row['cash_tgl']."</td>";
	echo"<td class='td'>".$row['cash_bayar']."</td>";

	echo"</tr>";
}
echo"</table>";
?>