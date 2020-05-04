<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemalogin";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_errno) {
    echo "Connection failed: " .mysqli_connect_error();
}
?>

