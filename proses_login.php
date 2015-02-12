<?php
include('koneksi.php');
if(isset($_POST['login'])){
	$user = mysql_real_escape_string(htmlentities($_POST['username']));
	$pass = mysql_real_escape_string(htmlentities($_POST['password']));

	$sql = mysql_query("SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysql_error());
	if(mysql_num_rows($sql) == 0){
		echo '<script language="javascript">alert("salah"); document.location="index.php";</script>';
	}else{
		$row = mysql_fetch_assoc($sql);
		if($row['level'] == 2){
			$_SESSION['username']=$user;
			echo '<script language="javascript">alert("Anda berhasil Login "); document.location="index-user.php";</script>';
		}else{
			$_SESSION['username']=$user;
			echo '<script language="javascript">alert("Anda Dilarang Masuk"); document.location="index.php";</script>';
		}
	}
}
?>