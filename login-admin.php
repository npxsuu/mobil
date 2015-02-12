<html>
<head>
	<link rel="icon" href="img/iconjudul.gif" type="image/gif">
<style>
html{
background: url(img/ax.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
#wrapper{
	width: 400px;
	height: 300px;
	background: #fff;
	margin: 40 auto;
}
.judul{
	width: 100%;
	line-height: 55px;
	background: green;
	box-shadow: 0px 0px 3px 0px #888;
	color: #fff;
	font-size: 22px;
	font-family: verdana;

}
.judul h2{
	color: #fff;
	font-size: 21px;
	font-family: verdana;
	margin-left: 14px;

}
.login{
	margin-left: 3px;
	margin-top: 9px;
	border: 1px solid #dcdcdc;
	height: 45px;
	width: 260px;
	padding: 6px;
	font-size: 20px;
	color: #333;
}
.tombollogin{
	font-size: 14px;
	height: 45px;
	width: 260px;
	background:#17910a;
	color: #fff;
	margin: 3px;
	padding: 3px;
	border: none;}
.tombollogin:hover{
	border-radius: 3px;

	background: #139a05;
	color: #fff;
	padding: 3px;
	box-shadow: 0px 0px 6px 0px #888;

	border: none;}
	.table{
		margin: 28px auto;
	}
	.judulh{
	width: 55;
	height: 55px;
	background: url(img/admin.png)transparent no-repeat;
	overflow: hidden;
	position: absolute;
	margin-left: 320px;
	margin-top: 27px;
}
</style>
</head>
<body>
<div id="wrapper"><div class="judulh"></div>
<div class="judul"><h2>Login Admin</h2>
</div>
<form method="post" action="proses_login_admin.php">
<table class="table">
<tr>
<td><input type="text" name="username" class="login" placeholder="Username" required></td></tr>
<tr>
<td><input type="password" name="password" class="login" placeholder="Password" required></td></tr>
<tr><td><input type="submit" value="Login" name="login" class="tombollogin"></td></tr>
</table>
</form>
</div>
</body>
</html>