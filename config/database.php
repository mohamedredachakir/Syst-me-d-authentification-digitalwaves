<?php
$host = "localhost";
$user = "root";
$pass = "197170";
$db   = "digitalwaves";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
}

?>