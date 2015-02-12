<?php
include('koneksi.php');
 
$id_anggota = $_GET['id_anggota'];
 
$query = mysql_query("delete from anggota where id_anggota='$id_anggota'") or die(mysql_error());
 
if ($query) {
    header('location:edit_anggota.php?message=delete');
}
?>