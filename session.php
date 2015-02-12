<?php session_start();
if(!isset($_SESSION['username'])){
	echo "<script language='javascript'>alert('anda dilarang masuk');document.location='index.php';</script>";
}
?>