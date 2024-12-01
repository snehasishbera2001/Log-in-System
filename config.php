<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'Babai@2001#');
define('DB_NAME', 'snehasish');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

