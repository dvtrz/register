<?php
session_start();
$nama = $_POST["nama"];
$umur = $_POST["umur"];
$email = $_POST["email"];
$_SESSION["nama"] = $nama;
$_SESSION["umur"] = $umur;
$_SESSION["email"] = $email;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
echo "<H1>Hallo ".$_SESSION["nama"]. "</H1>";
?>
<?php
echo "Umur anda saat ini adalah ".$_SESSION["umur"]."tahun <br>";
echo "Alamat email anda adalah ".$_SESSION["email"]."<br>";
?>
<br>
<a href="next.php">Klik di sini</a> untuk menuju ke halaman berikut.
</body>
</html>