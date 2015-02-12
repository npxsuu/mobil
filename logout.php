<?php
session_start();
session_destroy();
echo"<script language='javascript'>confirm('anda keluar');document.location='index.php';</script>";
?>