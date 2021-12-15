<?php 
require "../functions.php";

    if(isset($_POST['submit'])) {
        if(tambah($_POST) > 0) {
               echo "<script>
                        alert('Akun baru berhasil ditambahkan');
                        document.location = '../login/login.php';
                    </script>";
           }else {
               echo "<script>
                        alert('Akun baru gagal ditambahkan');
                        document.location = '../index.html';
                     </script>";
           }
     }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandbox</title>
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="styleku.css">
</head>
<body>
    <div class="untuk-laptop container-fluid row">
        <div class="col-6 left">
            <h2 class="selamat">SELAMAT DATANG DI</h2>
            <h1 class="satu">SATU</h1>
            <h1 class="satu">RASA.</h1>
            <h2 class="sedap">Sedap Dipandang Lezat Dimakan</h2>
        </div>
        <div class="col-6 right d-flex justify-content-center align-items-center">
            <div class="d-flex justify-content-center align-items-center">
            <form action="" method="post">
                <h3 class="membuat">MEMBUAT AKUN</h3>
                <h4 class="buat"> Buat akun Anda, ada promo menarik<br>untuk pengguna baru!</h4>
                <div class="input-field">
                    <i class="bi bi-person"></i>
                <input type="text" placeholder="Nama Anda" name="nama">
                </div>
                <div class="input-field">
                    <i class="bi bi-person"></i>
                <input type="text" placeholder="Username" name="username">
                </div>
                <div class="input-field">
                    <i class="bi bi-telephone"></i>
                <input type="text" placeholder="Nomor Telepon" name="telepon">
                </div>
                <div class="input-field">
                    <i class="bi bi-envelope"></i>
                <input type="text" placeholder="Email" name="email">
                </div>
                <div class="input-field">
                    <i class="bi bi-file-lock2"></i>
                <input type="password" placeholder="Password" name="password">
                </div>
                <input type="submit" class="tombol" value="DAFTAR" name="submit">
                <h4 class="buat buat-akun">Sudah memiliki akun? <a href="../login/login.php" style="font-family: 'Suez One', serif; text-decoration: none; color: black;">LOGIN</a></h4>
            </form>
        </div>
        </div>
    </div>
    <div class="untuk-hape container-untuk-hape container-fluid d-flex justify-content-center align-items-center">
        <div class="container-dalam-hape"><div class="d-flex justify-content-center align-items-center">
            <form action="" method="post">
                <h3 class="membuat">MEMBUAT AKUN</h3>
                <h4 class="buat"> Buat akun Anda, ada promo menarik<br>untuk pengguna baru!</h4>
                <div class="input-field">
                    <i class="bi bi-person"></i>
                <input type="text" placeholder="Nama Anda" name="nama">
                </div>
                <div class="input-field">
                    <i class="bi bi-person"></i>
                <input type="text" placeholder="Username" name="username">
                </div>
                <div class="input-field">
                    <i class="bi bi-telephone"></i>
                <input type="text" placeholder="Nomor Telepon" name="telepon">
                </div>
                <div class="input-field">
                    <i class="bi bi-envelope"></i>
                <input type="text" placeholder="Email" name="email">
                </div>
                <div class="input-field">
                    <i class="bi bi-file-lock2"></i>
                <input type="password" placeholder="Password" name="password">
                </div>
                <input type="submit" class="tombol" value="DAFTAR" name="submit">
                <h4 class="buat buat-akun">Sudah memiliki akun? <a href="../login/login.php" style="font-family: 'Suez One', serif; text-decoration: none; color: black;">LOGIN</a></h4>
            </form>
        </div></div>
    </div>
</body>
</html>
