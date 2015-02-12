<?php
include"koneksi.php";
$id_angsuran=$_POST['id_angsuran'];
$id_kategori=$_POST['id_kategori'];
$id_anggota=$_POST['id_anggota'];
$tgl_pembayaran=$_POST['tgl_pembayaran'];
$angsuran_ke=$_POST['angsuran_ke'];
$besar_angsuran=$_POST['besar_angsuran'];
$ket=$_POST['ket'];

mysql_query("INSERT INTO  `koperasi`.`angsuran` (
`id_angsuran` ,
`id_kategori` ,
`id_anggota` ,
`tgl_pembayaran` ,
`angsuran_ke` ,
`besar_angsuran` ,
`ket`
)
VALUES (
'$id_angsuran',  '$id_kategori',  '$id_anggota',  '$tgl_pembayaran',  '$angsuran_ke',  '$besar_angsuran',  '$ket'
);
")or die(mysql_error());
echo"<script language='javascript'>alert('Sudah tersimpan');document.location='tampil_angsuran.php';</script>";

?>