<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Definisi fungsi prosedur</title>
</head>
<body>
<?php
//contoh prosedur
function do_print(){
	//mencetak informasi timestamp
	echo time();
}

//memanggil prosedur
do_print();

echo "<br/>";

//contoh fungsi penjumlahan
function jumlah($a, $b){
	return ($a + $b);
}

echo jumlah(2, 3);
//output: 5
?>
</body>
</html>