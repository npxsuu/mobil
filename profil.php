<?php
$sql=mysql_query("SELECT * FROM user where username = '".$_SESSION['username']."'");
$data=mysql_fetch_array($sql);
echo"<table style='margin:10px auto;'><tr><td colspan='3' align='center'><img src='img/avatar.png'width='150px;'/></td></tr>
			<tr><td style='padding:6px;font-size:18px;border-bottom:1px dashed #dddddd'>Nama</td><td>:</td><td style='padding:6px;font-size:18px;border-bottom:1px dashed #dddddd'>$data[nama]</td></tr>
			<tr><td style='padding:6px;font-size:18px;border-bottom:1px dashed #dddddd'>Alamat</td><td>:</td><td style='padding:6px;font-size:18px;border-bottom:1px dashed #dddddd'>$data[alamat]</td></tr>
			<tr><td style='padding:6px;font-size:18px;font-size:18px;border-bottom:1px dashed #dddddd'>Tanggal Lahir</td><td>:</td><td style='padding:6px;font-size:18px;border-bottom:1px dashed #dddddd'>$data[tgllhr]</td></tr>
			<tr><td style='padding:6px;font-size:18px;border-bottom:1px dashed #dddddd'>Tempat Lahir</td><td>:</td><td style='padding:6px;font-size:18px;border-bottom:1px dashed #dddddd'>$data[tmplhr]</td></tr>
			<tr><td style='padding:6px;font-size:18px;border-bottom:1px dashed #dddddd'>Username</td><td>:</td><td style='padding:6px;font-size:18px;border-bottom:1px dashed #dddddd'>$data[username]</td></tr></table>";
?>