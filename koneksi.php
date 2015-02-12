<?php
if(!isset($_SESSION)){
	session_start();
}
mysql_connect("localhost","root","");
mysql_select_db("pembelian_mobil")or die(mysql_error());
?>