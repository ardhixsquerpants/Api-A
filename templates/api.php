<?php 

error_reporting(0);
session_start();
if(isset($_POST['login'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if ($user == 'ardi' AND $pass == '3006') {
		// membuat session
		session_start();
		$_SESSION['berhasil'] = true;


		header("Location: iyeardi.php");
	} else {
		$salah = "<p style='color:red; text-align: center;'> Hayoh Mau Ngapain Lu Cuk</p>";
	}

}



 ?>





<!DOCTYPE html>
<html>
<head>
	<title>Ardhi Xsquerpant'S</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#696969;">
	<div class="container">
		<div class="formlogin">
			<div class="foto"><img src="img/ikon.png"> <h1>Ardhi Xsquerpant'S</h1></div>
			<?php echo $salah; ?>
			<form action="" method="post">
				<input type="text" placeholder="username" name="username"><br>
				<input type="text" placeholder="password" name="password"><br>
				<button type="submit" name="login">MASUK</button>
			</form>
				<p align="center">© 2020<a href="https://www.instagram.com/ardhixsquerpants">Ardhi Xsquerpant'S</a></p>
			</div>
		</div>
	</div>
</body>
</html>
