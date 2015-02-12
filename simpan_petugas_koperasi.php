<?php
include"koneksi.php";
$id_petugas=$_POST['id_petugas'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_tlp'];
$tmp_lhr=$_POST['tmp_lhr'];
$tgl_lhr=$_POST['tgl_lhr'];
$ket=$_POST['ket'];


mysql_query("INSERT INTO  `koperasi`.`petugas_koperasi` (
`id_petugas` ,
`nama` ,
`alamat` ,
`no_tlp` ,
`tmp_lhr` ,
`tgl_lhr` ,
`ket`
)
VALUES (
'$id_petugas',  '$nama',  '$alamat',  '$no_telp',  '$tmp_lhr',  '$tgl_lhr',  '$ket'
);

")or die(mysql_error());
echo"<script language='javascript'>alert('Sudah tersimpan');document.location='tampil_petugas_koperasi.php';</script>";

?>