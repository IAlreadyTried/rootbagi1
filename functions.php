<?php  
$conn = mysqli_connect('localhost', 'root', '', 'kasironline');

function cari($username) {
    global $conn;
    mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'" );

    return mysqli_affected_rows($conn);
}

function ambil($querynya) {
    global $conn;
    $result = mysqli_query($conn, $querynya);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($datanya) {
    global $conn;
    $jabatan = "pengguna";
    $status = "offline";
    $pesanan = "Belum Memesan";
    $total = 0;
    $nama = stripslashes(htmlspecialchars($datanya['nama']));
    $username = strtolower(stripslashes(htmlspecialchars($datanya['username'])));
    $telepon = stripslashes(htmlspecialchars($datanya['telepon']));
    $email = stripslashes(htmlspecialchars($datanya['email']));
    $password = mysqli_real_escape_string($conn, $datanya['password']);

    // Enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // Cek Username yang sama
    if(cari($username) > 0) {
        echo "<script>
                alert('Akun baru gagal ditambahkan');
                document.location = 'index.html';
              </script>";
    } else {

    // Masukkan data ke dalam database
    $querynya = "INSERT INTO user VALUES ('', '$jabatan', '$nama', '$username', '$telepon', '$email', '$password', '$status', '$pesanan', '')";
    mysqli_query($conn, $querynya);
    }
    
    return mysqli_affected_rows($conn);

}

function tambahmenu($datanya) {
    global $conn;
    $nama1 = $datanya['nama1'];
    $nama2 = $datanya['nama2'];
    $harga = $datanya['harga'];
    $stok = $datanya['stok'];
    $gambar = uploadkan($_FILES);
    if($gambar == false) {
        return false;
    }

    $querynya = ("INSERT INTO menu VALUES('','$nama1','$nama2',$harga, '$gambar', '', '$stok')");
    mysqli_query($conn, $querynya);
    return mysqli_affected_rows($conn);
}
function uploadkan($datanya) {
    $nama = $datanya['gambar']['name'];
    $tmp = $datanya['gambar']['tmp_name'];
    $error = $datanya['gambar']['error'];
    $size = $datanya['gambar']['size'];

    $tipe_valid = ["jpg", "jpeg", "png"];
    $reference = explode(".",$nama);
    $tipe_filenya = strtolower(end($reference));

    if($error == 4) {
        echo "<script>alert('Anda belum mengupload file');</script>";
        return false;
    } else if(!in_array($tipe_filenya, $tipe_valid)) {
        echo "<script>alert('Hanya upload file gambar!');</script>";
        return false;
    } 

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $tipe_filenya;

    move_uploaded_file($tmp, "../images/".$namaFileBaru);
    return $namaFileBaru;
}

function komentar($komennya) {

}




















function cekwarna($i) {
     if($i % 3 == 1) {
        $warna = "#FF7845";
    } else if($i % 3 == 2) {
        $warna = "#9AB27D";
    } else {
        $warna = "#FEB452";
    }
    echo $warna;
}
?>