<?php
define('DB_SERVER','localhost');
define('DB_USER','rimita');
define('DB_PASS' ,'Redhat@2025');
define('DB_NAME', 'rimita');
$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$mysqli = new mysqli("localhost","rimita","Redhat@2025","rimita");
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
