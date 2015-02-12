<?php
include"koneksi.php";
$id_pinjaman=$_POST['id_pinjaman'];
$nama_pinjaman=$_POST['nama_pinjaman'];
$id_anggota=$_POST['id_anggota'];
$besar_pinjaman=$_POST['besar_pinjaman'];
$tgl_pengajuan_pinjaman=$_POST['tgl_pengajuan_pinjaman'];
$tgl_acc_peminjam=$_POST['tgl_acc_peminjam'];
$tgl_pinjaman=$_POST['tgl_pinjaman'];
$tgl_pelunasan=$_POST['tgl_pelunasan'];
$id_angsuran=$_POST['id_angsuran'];
$ket=$_POST['ket'];


mysql_query("INSERT INTO  `koperasi`.`pinjaman` (
`id_pinjaman` ,
`nama_pinjaman` ,
`id_anggota` ,
`besar_pinjaman` ,
`tgl_pengajuan_pinjaman` ,
`tgl_acc_peminjam` ,
`tgl_pinjaman` ,
`tgl_pelunasan` ,
`id_angsuran` ,
`ket`
)
VALUES (
'$id_pinjaman',  '$nama_pinjaman',  '$id_anggota',  '$besar_pinjaman',  '$tgl_pengajuan_pinjaman',  '$tgl_acc_peminjam',  '$tgl_pinjaman',  '$tgl_pelunasan',  '$id_angsuran',  '$ket'
);


")or die(mysql_error());
echo"<script language='javascript'>alert('Sudah tersimpan');document.location='tampil_pinjaman.php';</script>";

?>