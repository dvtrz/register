<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Simpan file yang diupload</h1>
<br>
<?php
if (isset($_FILES['file1'])){
	$namafile = $_FILES['file1']['name'];
	$file1 = $_FILES['file1']['tmp_name']

	echo "<p>Nama file :" . htmlspecialchars($namafile) . "</p><br>";

	if (!empty($file1)) {
		if (move_uploaded_file($file1, "files/$namafile")){
			echo "File berhasil disimpan";
		} else {
			die("Gagal meyimpan file");
		}
	} else {
		die("tidak ada file yang diupload");
	}
}
?>

</body>
</html>