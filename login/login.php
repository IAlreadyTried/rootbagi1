<?php 
    session_start();
    require "../functions.php";
    if(isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        // Cek username
        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if($row['jabatan'] == "admin") {
                if($password == $row['password']) {
                    $_SESSION['login'] = true;
                    header("Location: ../admintemplate/index.php");
                    exit;
                }
            }

            // Cek Password
            if(password_verify($password,$row['password'])){
                $_SESSION['login'] = true;
                $_SESSION['username'] = $_POST['username'];
                header("Location: ../halamanuser/halamanuser.php");
                exit;
            }
        }
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="styleku.css">
    <link rel="stylesheet" href="mediaadaptation.css">
    <link rel="stylesheet" href="gambar2.css">
</head>
<body>
    <!-- <h1>Hello, World! Hehe</h1> -->

    <!-- <div class="container-fluid d-flex align-items-center">Ini Divnya</div> -->
    <div class="container-fluid d-flex align-items-center">
        <div class="kotak-awal container untuk-laptop">
            <div class="bungkus-kotak row">
                <div style="position: relative;padding: 0px;" class="col-7 row">
                    <div class="bungkus-gambar d-flex align-items-center justify-content-center">
                        <div class="overlay"></div>
                        <img class="gambar" src="img/makanan1.png" alt="makanan">
                        <img class="logo" src="img/logo.png" alt="Logo 'Satu Rasa'">
                        <h1 class="satu">SATU</h1>
                        <h1 class="rasa">RASA</h1>
                        <img class="garis" src="img/garis.png">
                        <img class="gelombang" src="img/gelombang1.png">
                        <img class="barcode" src="img/barcode.png">
                        <img class="bintang" src="img/bintang.png">
                        <div class="bayangan"></div>
                    </div>
                    <div class="kotak1 col"></div>
                    <div class="kotak2 col"></div>
                </div>
                <div class="kotak3 col">
                    <div class="bungkus-gambar-kolom3 d-flex align-items-center justify-content-center">
                        <img class="pesawat" src="img/pesawat.png" alt="">
                        <h1 class="silahkan">SILAHKAN <a href="#">LOGIN</a>,<br>DAN KAMI AKAN MEMBAWA <br>ANDA KE TUJUAN</h1>
                        <div class="garis2"><hr></div>
                    </div>
                    <div class="bungkus-form">
                        <form action="" method="post">
                            <label for="nama">Username||Email</label><br><input name="username" placeholder="Masukkan Username anda..." id="nama" type="text">
                            <label for="password">Password</label><?php if(isset($error)) {echo "<div style='float: right;margin-right: 50px;padding-left:2px;padding-right:2px;background-color:#ff6060;border-radius:2px;color:white;'>Username / Password salah</div>";} ?><br><input name="password" placeholder="Masukkan Password..." id="password" type="password">
                            <br>
                        <a href="#">Lupa Password</a>
                    </div>
                    <div class="tombol">
                            <button name="submit" type="submit">LOGIN</button>
                        </form>  
                    </div>
                    <div class="tidak-punya-akun">
                        Belum punya akun? <a href="../registrasi/registrasi.php">Daftar sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kotak-awal container untuk-hp">
            <div class="bungkus-kotak row">
                <div class="kotak3 col">
                    <div class="bungkus-gambar-kolom3 d-flex align-items-center justify-content-center">
                        <img class="pesawat" src="img/pesawat.png" alt="">
                        <h1 class="silahkan">SILAHKAN <a href="#">LOGIN</a>,<br>DAN KAMI AKAN MEMBAWA <br>ANDA KE TUJUAN</h1>
                        <div class="garis2"><hr></div>
                    </div>
                    <div class="bungkus-form">
                        <form action="" method="post">
                            <label for="nama">Username||Email</label><br><input name="username" placeholder="Masukkan nama anda..." id="nama" type="text">
                            <label for="password">Password</label><?php if(isset($error)) {echo "<div style='font-size:12.5px;float: right;margin-top:4px;margin-right: 58px;padding-left:2px;padding-right:2px;background-color:#ff6060;border-radius:2px;color:white;'>Username / Password salah</div>";} ?><br><input name="password" placeholder="Masukkan Password..." id="password" type="password">
                            <br>
                        <a href="#">Lupa Password</a>
                    </div>
                    <div class="tombol">
                            <button name="submit" type="submit">LOGIN</button>
                        </form>  
                    </div>
                    <div class="tidak-punya-akun">
                        Belum punya akun? <a href="../registrasi/registrasi.php">Daftar sekarang</a>
                    </div>
                </div>
            </div>
        </div>
      </div>

<script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>
</html>