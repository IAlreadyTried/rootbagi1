<?php 
    require "../functions.php";
    $idnya = $_GET['id'];
    mysqli_query($conn, "DELETE FROM menu WHERE id = $idnya");
    header("Location: stokbarang.php");
?>