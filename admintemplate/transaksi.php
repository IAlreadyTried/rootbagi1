<?php 
session_start();
require "../functions.php";
$idnya = $_GET['id'];
echo date("d-m-Y");
$pelanggan = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE id = '$idnya'"));

// Setting waktu dan tanggal
$date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
// echo $date->format('d-m-Y H:i:s');

// $waktu = $date->format('d-m-Y H:i:s');
$waktu = $date->format('d-m-Y') . "<br>" . $date->format('H:i:s');
$username = $pelanggan['username'];
if($pelanggan['pesanan'] == "") {
    $menu = NULL;
} else {
    $menu = $pelanggan['pesanan'];
}
$total = $pelanggan['total'];
$_SESSION['transaksi'] = [
    'username' => $username,
    'waktu' => $waktu,
    'menu' => $menu,
    'total' => $total
];
// function prompt($prompt_msg){
//     echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

//     $answer = "<script type='text/javascript'> document.write(answer); </script>";
//     return($answer);
// }
// $uang = prompt("Jumlah uang");
mysqli_query($conn, "INSERT INTO transaksi VALUES ('', '$waktu', '$username', '$menu', '$total')");
echo "<br><br>";
echo mysqli_affected_rows($conn);
mysqli_query($conn, "UPDATE user SET pesanan = 'Belum Memesan', total = 0 WHERE id = '$idnya'");
echo "<br><br>";
echo mysqli_affected_rows($conn);
header("Location: ../halamanuser/cetak_transaksi.php");
?>