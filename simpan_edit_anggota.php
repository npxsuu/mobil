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
$sql=mysql_query("UPDATE  `koperasi`.`anggota` SET 
`nama` =  '$nama',
`alamat` =  '$alamat',
`tgl_lhr` =  '$tgl_lhr',
`tmp_lhr` =  '$$tmp_lhr',
`jk` =  '$jk',
`status` =  '$status',
`no_tlp` =  '$no_tlp',
`ket` =  '$ket'
 WHERE  `anggota`.`id_anggota`  =  '$id_anggota' ")or die(mysql_error());
?>

<script language="javascript">alert("Data Telah di Simpan");document.location="tampil_anggota.php";</script>
