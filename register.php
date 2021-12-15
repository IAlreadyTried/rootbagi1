<?php 
require "functions.php";

    if(isset($_POST['submit'])) {
        if(tambah($_POST) > 0) {
               echo "<script>
                        alert('Akun baru berhasil ditambahkan');
                        document.location = 'login/login.php';
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
    <title>Halaman Registrasi</title>
</head>
<body>
    <h1>Hello, world!</h1>
    <form action="" method="post">
        <ul type="none">
            <li><label for="nama">Nama : </label><input id="nama" type="text" name="nama"></li>
            <li><label for="username">Username : </label><input id="username" type="text" name="username"></li>
            <li><label for="telepon">Nomor Telepon : </label><input id="telepon" type="text" name="telepon"></li>
            <li><label for="email">Email : </label><input id="email" type="text" name="email"></li>
            <li><label for="password">Password : </label><input id="password" type="password" name="password"></li>
            <button name="submit" type="submit">Register</button>
        </ul>
    </form>
</body>
</html>