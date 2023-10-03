<?php
$servername = "localhost:3306";
$username = "root";
$password = "Eko.115221"; 
$database = "contacts"; 

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>