<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Koneksi database MySQL</title>
</head>
<body>
<h2>Koneksi database MySQL</h2>
<?php 
	$conn=mysql_connect("localhost","root","");
	$pilih=mysql_select_db("kampus1",$conn);
	if ($pilih){
		echo "OK connected";
	} else {
		echo "Server not connected";
	}
?>
</body>
</html>