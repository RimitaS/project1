<?php
define('DB_SERVER','localhost');
define('DB_USER','rimita');
define('DB_PASS' ,'Redhat@2025');
define('DB_NAME', 'rimita');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>