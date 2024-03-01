<?php
define('DB_SERVER','sql5.freemysqlhosting.net');
define('DB_USER','sql5687820');
define('DB_PASS' ,'8Uyrec1Dyg');
define('DB_NAME', 'sql5687820');
$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$mysqli = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
