<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Argumen fungsi/prosedur</title>
</head>
<body>
<?php 
/**
* Mencetak string
* $teks nilai string
* $bold adalah argumen opsional
*/
function print_teks($teks, $bold = true) {
echo $bold ? '<b>' .$teks. '</b>' : $teks;
}

print_teks('Indonesiaku');
// Mencetak dengan huruf tebal

echo "<br>";

print_teks('Indonesiaku', false);
// Mencetak dengan huruf reguler

?>
</body>
</html>