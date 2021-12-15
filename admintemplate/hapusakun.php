<?php 
    require "../functions.php";
    $idnya = $_GET['id'];
    mysqli_query($conn, "DELETE FROM user WHERE id = $idnya");
    header("Location: daftarakun.php");
?>