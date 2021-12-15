<?php
session_start(); 
require "../functions.php";
if(isset($_POST['submit'])) {
$username = $_SESSION['username'];
$komen = $_POST['komennya'];
$date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$waktu = $date->format('H:i:s') . "<br>" . $date->format('d-m-Y');
mysqli_query($conn, "INSERT INTO komentar VALUES ('','', '$username', '$komen', '$waktu')");
echo $username;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tunggu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <style>
        html,body {
            height: 100%;
        }
        
        .container-fluid {
            height: 100% !important;
        }

        hr {
            transform:rotate(90deg);
            animation-name: lebar;
            animation-duration: 0.3s;
            animation-delay: 0.1s;
            animation-fill-mode: forwards;
        }
        @keyframes lebar {
            from{width: 0px;}
            to{width: 200px;}
        }

        @media (min-width : 425px) and (max-width : 768px) {
            h1 {
                font-size: 30px;
                margin-left: -30px !important;
            }
            img {
                width: 400px !important;
            }
            hr {
                width: 200px !important;
                border-top-width: 7px !important;
                top: 300px !important;
                right: -70px !important;
            }
            .tombol_komen {
                bottom: 40px !important;
            }
        }
        @media (min-width : 375px) and (max-width : 425px) {
            h1 {
                text-align: center !important;
                font-size: 30px;
                margin-left: 0px !important;
            }
            img {
                margin-top: -100px;
                margin-left: 25px !important;
            }
            hr {
                transform: rotate(0deg) !important;
                width: 200px !important;
                border-top-width: 7px !important;
                top: 280px !important;
                right: 80px !important;
                margin-top: -30px;
            }
            .tombol_komen {
                bottom: 40px !important;
            }
        }

        @media (min-width : 1px) and (max-width : 375px) {
            h1 {
                text-align: center !important;
                font-size: 30px;
                margin-left: 0px !important;
            }
            img {
                margin-left: 25px !important;
            }
            hr {
                transform: rotate(0deg) !important;
                width: 200px !important;
                border-top-width: 7px !important;
                top: 280px !important;
                right: 55px !important;
            }
            .tombol_komen {
                bottom: 40px !important;
            }
        }
    </style>
</head>
<body>
    <div style="position: relative;" class="row container-fluid">
        <div style="position: relative;" class="col-lg-6 col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
            <h1 style="text-align: right;margin-left: 180px;">Silahkan tunggu <br> pesanan anda, dan <br> selamat menikmati! :)</h1>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Komentar</h5>

      </div>
      <form action="" method="post">
      <div class="modal-body">
        <h4 style="font-size: 17px;">Berikan komentar anda :</h4>
            <textarea style="width: 100%;" name="komennya" id="" cols="60" rows="5"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
            <hr style="border-top: 10px solid rgb(23, 0, 78);opacity: .7;width: 273px;border-radius: 10px;position: absolute;top: 370px;right: -100px;">
            
        </div>
        <div style="position: relative;" class="col-lg-6 col-md-6 col-sm-6 d-flex align-items-center justify-content-center" >
            <img style="width: 100%;" src="img/orang.png" alt="Gambar Ruang tunggu">
            <button style="position: fixed;bottom:20px;right:20px;z-index:100;" type="button" class="btn btn-primary tombol_komen" data-toggle="modal" data-target="#exampleModal">
                Berikan Komentar
            </button>
        </div>
    </div>
    <footer class="d-flex justify-content-center" style="position: fixed;bottom:0px;width:100%;">
        <p>Hubungi kami : <a href="https://wa.me/6281234567890">+6281957457270</a></p>
    </footer>
   

<script src="bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script></script>
</body>
</html>