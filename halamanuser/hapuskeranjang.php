<?php 
session_start();

$nomor = $_GET['nomor'];
echo $nomor;
$_SESSION['keranjang'] = array_values($_SESSION['keranjang']);
unset($_SESSION['keranjang'][$nomor]);
$_SESSION['keranjang'] = array_values($_SESSION['keranjang']);
header("Location: halamanuser.php");


?>