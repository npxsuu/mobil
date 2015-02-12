<?php
include"koneksi.php";
$id_kategori_pinjaman=$_POST['id_kategori_pinjaman'];
$nama_pinjaman=$_POST['nama_pinjaman'];


mysql_query("INSERT INTO  `koperasi`.`kategori_pinjaman` (
`id_kategori_pinjaman` ,
`nama_pinjaman`

)
VALUES (
'$id_kategori_pinjaman',  '$nama_pinjaman'
);
")or die(mysql_error());
echo"<script language='javascript'>alert('Sudah tersimpan');document.location='tampil_kategori_pinjaman.php';</script>";

?>