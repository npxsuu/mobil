	
<?php
$hasil=mysql_query("select * from kredit");
if(!$hasil)
	die("Gagal karena:".mysql_error());
echo"<table class='table'>
<tr>
<th class='th'>Kode Kredit</th><th class='th'>KTP</th><th class='th'>Kode Paket</th><th class='th'>Kode Mobil</th>
<th class='th'>Tanggal Kredit</th>
<th class='th'>Fotokopi KTP</th><th class='th'>Fotokopi KK</th><th class='th'>Fotokopi Slip Gaji</th></tr>";
while($row=mysql_fetch_array($hasil)){
	echo"<tr>";
	echo"<td class='td'>".$row['kode_kredit']."</td>";
	echo"<td class='td'>".$row['ktp']."</td>";
	echo"<td class='td'>".$row['kode_paket']."</td>";
	echo"<td class='td'>".$row['kode_mobil']."</td>";
	echo"<td class='td'>".$row['tgl_kredit']."</td>";
	echo"<td class='td'><img src='data:image/jpeg;base64,".base64_encode( $row['fotokopi_ktp'] )."' width='100'/></td>";
	echo"<td class='td'><img src='data:image/jpeg;base64,".base64_encode( $row['fotokopi_kk'] )."' width='100'/></td>";
	echo"<td class='td'><img src='data:image/jpeg;base64,".base64_encode( $row['fotokopi_slip_gaji'] )."' width='100'/></td>";
	echo"</tr>";
}
echo"</table>";
?>

