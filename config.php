
<?php
$ip = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "e-commerce";
$con = mysqli_connect($ip, $dbuser, $dbpass, $dbname);
echo "tout va bien";
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
   }

?>
