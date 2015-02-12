<?php
include"koneksi.php";
$id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tgl_lhr=$_POST['tgl_lhr'];
$tmp_lhr=$_POST['tmp_lhr'];
$jk=$_POST['jk'];
$status=$_POST['status'];
$no_tlp=$_POST['no_tlp'];
$ket=$_POST['ket'];

mysql_query("INSERT INTO  `koperasi`.`anggota` (
`id_anggota` ,
`nama` ,
`alamat` ,
`tgl_lhr` ,
`tmp_lhr` ,
`jk` ,
`status` ,
`no_tlp` ,
`ket`
)
VALUES (
'$id_anggota',  '$nama',  '$alamat',  '$tgl_lhr',  '$tmp_lhr',  '$jk',  '$status',  '$no_tlp',  '$ket'
);
")or die(mysql_error());
echo"<script language='javascript'>alert('Sudah tersimpan');document.location='tampil_anggota.php';</script>";

?>