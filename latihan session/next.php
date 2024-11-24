<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h2>Anda memasuki halaman kedua</h2>
<?php
echo "Nama anda ".$_SESSION["nama"]." tahun<br>";
echo "Umur anda saat ini adalah ".$_SESSION["umur"]." tahun<br>";
echo "Alamat email anda adalah ".$_SESSION["email"]."<br>";
?>
<a href="data.php">Klik disini</a> untuk menuju ke halaman awal.
<?php
//untuk menghapus variabel session di server
session_destroy();
?>
</body>
</html>