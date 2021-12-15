<?php 
session_start();
require "../functions.php";
$pesanan = "<table id=pesanan style=width:100%;>";
$keranjang = $_SESSION['keranjang'];
$total = 0;
foreach($keranjang as $menunya) {
    $pesanan .= "<tr>" . "<td>" . $menunya['nama2_produk'] . "</td><td>" . "@" . $menunya['jumlah_produk'] . "</td><td>";
    $harga = explode('.', $menunya['harga_produk']);
    var_dump($harga);
    $harga_produk = $harga[0] . $harga[1];
    echo $harga_produk;
    $harga_produk *= $menunya['jumlah_produk'];
    echo $harga_produk;
    $pesanan .= "Rp. " . $harga_produk . "</td></tr>";
    var_dump($pesanan);
    $total += $harga_produk;
    $idnya = $menunya['id_produk'];
    $stok = ambil("SELECT stok FROM menu WHERE id = '$idnya'");
    $stok = $stok[0]['stok'];
    $jumlah_baru = $stok - $menunya['jumlah_produk'];
    mysqli_query($conn, "UPDATE menu SET stok = '$jumlah_baru' WHERE id = '$idnya'");
}
$username = $_SESSION['username'];
$pesanan .= "</table>";
echo "<br><br>";
echo $total;
// echo $username;
mysqli_query($conn, "UPDATE user SET pesanan = '$pesanan', total = '$total' WHERE username = '$username'");
echo mysqli_affected_rows($conn);
header("Location: halamantunggu.php");

?>