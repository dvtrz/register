<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengolahan form</title>
</head>
<body>
<form action="" method="get" name="myform">
	Nama : <input type="text" name="nama" size="25">
	<input type="submit" value="simpan" name="simpan">
</form>

<?php
if (isset($_GET['simpan']))
{
	$nama=$_GET['nama'];
	echo "Nama Anda : <b>$nama</b>";} 
?>

</body>
</html>