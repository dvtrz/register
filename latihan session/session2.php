<?php
session_start();  // Start the session
$idsession = session_id();  // Get the session ID
session_destroy();  // Destroy the session (all session variables will be removed)
$count = 0;  // Reset count to 0 because session is destroyed
?>
<html>
<head>
<title>Demo session – destroy</title>
</head>
<body>
<h1>Demo Session – reset nilai</h1>
<?php
// Use straight quotes and proper PHP tags
echo "<br> ID Session: " . $idsession;
echo "<br> Anda mengakses server ini sebanyak: " . $count;
?>
</body>
</html>
