<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTER</title>
</head>
<body>
<?php 
$nama=$_POST['nama'];
$email=$_POST['email'];
$password=$_POST['password'];
?>
<h1>register</h1>
<hr>
Nama anda		: <?php echo $nama?>
<br>
Email address	: <?php echo $email?>
<br>
Password 		: <?php echo $password?>
</body>
</html>