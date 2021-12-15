<?php 
session_start();
require "functions.php";

// Offlinekan user di database
$username = $_SESSION['username'];
mysqli_query($conn, "UPDATE user SET status = 'offline' WHERE username = '$username'");

$_SESSION['login'] = "";
$_SESSION['username'] = "";
session_destroy();
header("Location: index.html");


?>