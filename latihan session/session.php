<?php
session_start();  // Starts the session
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;  // Initialize the session variable
}
$_SESSION['count']++;  // Increment the session variable
$count = $_SESSION['count'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Demo session 1</title>
</head>
<body>
<h1>Demo session 1</h1>
<?php
// Correct the echo statement with proper quotes and ensure it ends properly
echo "Anda telah mengakses halaman ini sebanyak: $count kali";
?>
</body>
</html>
