<?php
include"koneksi.php";
$id_angsuran=$_POST['id_angsuran'];
$tgl_jatuh_tempo=$_POST['tgl_jatuh_tempo'];
$besar_angsuran=$_POST['besar_angsuran'];
$ket=$_POST['ket'];

mysql_query("INSERT INTO  `koperasi`.`detail_angsuran` (
`id_angsuran` ,
`tgl_jatuh_tempo` ,
`besar_angsuran` ,
`ket`
)
VALUES (
'$id_angsuran',  '$tgl_jatuh_tempo',  '$besar_angsuran',  '$ket'
);

")or die(mysql_error());
echo"<script language='javascript'>alert('Sudah tersimpan');document.location='tampil_detail_angsuran.php';</script>";

?>