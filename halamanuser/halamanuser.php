<?php 
    session_start();
    // error_reporting(0);
    require "../functions.php";

    // Buat user online di database
    if(isset($_SESSION['login'])) {
        $username = $_SESSION['username'];
        mysqli_query($conn, "UPDATE user SET status = 'online' WHERE username = '$username'");
    }

    // Semua Menunya
    $menus = ambil("SELECT * FROM menu");

    // $menu_keranjang = [];
    $keranjang_berisi = false;
    if(isset($_POST['tambah'])) {
        $idproduk = $_POST['id_produk'];
        $stok = ambil("SELECT stok FROM menu WHERE id = '$idproduk'");
        $stok = $stok[0]['stok'];
        if($_POST['jumlah_produk'] <= $stok) {
            if(isset($_SESSION['keranjang'])){
                $id_array_produk = array_column($_SESSION['keranjang'],"id_produk");
                if(in_array($_POST['id_produk'], $id_array_produk)) {
                    echo "<script>alert('Barang sudah masuk ke dalam keranjang');
                        window.location = 'halamanuser.php';</script>
                    ";
                } else {
                    $banyakproduk = count($_SESSION['keranjang']);
                        $array_produk = [
                        'id_produk' => $_POST['id_produk'], 
                        'nama1_produk' => $_POST['nama1_produk'],
                        'nama2_produk' => $_POST['nama2_produk'],
                        'gambar_produk' => $_POST['gambar_produk'],
                        'harga_produk' => $_POST['harga_produk'],
                        'jumlah_produk' => $_POST['jumlah_produk']

                        ];
                    
                        $_SESSION['keranjang'][$banyakproduk] = $array_produk;
                        // print_r($_SESSION['keranjang']);
                }
            } else {
                $array_produk = [
                    'id_produk' => $_POST['id_produk'], 
                    'nama1_produk' => $_POST['nama1_produk'],
                    'nama2_produk' => $_POST['nama2_produk'],
                    'gambar_produk' => $_POST['gambar_produk'],
                    'harga_produk' => $_POST['harga_produk'],
                    'jumlah_produk' => $_POST['jumlah_produk']
                ];
                $_SESSION['keranjang'][0] = $array_produk;
            }
        } else {
            echo "<script>
                    alert('Stok barang tidak cukup');
                  </script>";
        }
    }
    
    $menu_keranjang = $_SESSION['keranjang'];
    // Nanti hidupkan lagi
    // if(!isset($_SESSION['login'])) {
    //     header("Location: ../index.html");
    // }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="styleuser.css">
    <link rel="stylesheet" href="stylekeranjang.css">
    <title>Halaman user</title>
    <style>
        .bintang1 {
            margin-top: -336.5px;
        }
    </style>

</head>
<body>
    <div class="mynav">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #582102;">
            <div class="container-fluid">
                <img src="./img/logo1.png" width="50px" alt="logo">
                <a class="navbar-brand">SATU RASA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#utama">UTAMA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menunya">MENU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAVORIT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">KONTAK</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Ini Keranjang -->
    <div id="wow1">
        <div class="collapsible">
            <img class="keranjang" src="img/keranjang.png" alt="Keranjang">
            <h4 class="daftar">Daftar Pesanan</h4>
            <img id="panah" src="img/panah.png" alt="Panah">
        </div>
        <div class="content">
            <form action="">
            <ol>
                <?php $k = 0; ?>
                <?php foreach($menu_keranjang as $keranjang) : ?>
                <li style="height: 70px;">
                    <span>
                        <img class="makanan" src="<?php echo $keranjang['gambar_produk']; ?>" alt="burger">
                        <div style="width: 150px;box-sizing: border-box;" class="nama-makanan row banyak d-flex align-items-center">
                            <input readonly style="margin-left:40px;width: 50px;padding-right: 0px;height: 20px;margin-top: 5px;text-align:center;" type="text" placeholder="<?php echo $keranjang['jumlah_produk']; ?>">
                            <button style="width: 20px;height:25px;padding:0px;margin-left:20px;margin-top:4px;background-color:salmon;color:whitesmoke;font-weight:bold;"><a style="text-decoration: none;color:inherit;" href="hapuskeranjang.php?nomor=<?php echo $k; ?>">X</a></button>
                        </div>
                        <h5 class="nama-makanan nama-makanannya"><?php echo $keranjang['nama1_produk']; ?></h5>
                        <p class="nama-makanannya2"><?php echo $keranjang['nama2_produk']; ?></p>
                    </span>
                </li>
                <?php $k++; ?>
                <?php endforeach; ?>
                <!-- <li>
                    <span>
                        <img class="makanan" src="img/Dimsum.png" alt="burger">
                        <div style="width: 150px;box-sizing: border-box;" class="nama-makanan row banyak d-flex align-items-center">
                        <input min="1" max="20" style="margin-left:40px;width: 50px;padding-right: 0px;height: 20px;margin-top: 5px;text-align:center;" type="number" placeholder="0" value="1">
                        </div>
                        <h5 class="nama-makanan nama-makanannya">Dimsum</h5>
                        <p class="nama-makanannya2">Dimsum Spesial</p>
                    </span>
                </li> -->
            </ol>
            </form>
            <form action="pesan.php" method="post">
                <input type="hidden" nama="username" value="<?php echo $_SESSION['username']; ?>">
                <button onclick="return confirm('Apakah pesanan anda sudah benar?')" style="width:100%;margin-top: -10px;margin-left:0px;background-color:#9AB27D;box-shadow: 2px 2px 0px #9ab27d;border: 2px solid white;" type="submit" name="pesan">Pesan</button>
            </form>
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus eveniet ex placeat ab tempore distinctio, neque culpa fugit sint obcaecati sed, perspiciatis atque ad nulla dolorum facere assumenda praesentium incidunt! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta, in odit. Magnam mollitia voluptas eos iste fugit. Pariatur facere quam dolores, molestias ipsum omnis ex temporibus sint, voluptate, earum Lorem ipsum dolor sit amet consectetur adipisicing elit. Est sapiente unde nisi in, quam cumque magnam, nemo, voluptatibus necessitatibus architecto aut libero veniam voluptatem molestiae ad tenetur nostrum quas distinctio.</p> -->
        </div>
    </div>
    <div class="bungkus-berita container-fluid">

        <div class="tulisan">
            <h1 id="utama" class="tulisanku">Promo Spesial</h1>
            <h1 class="tulisanku">Akhir Tahun!</h1>
            <p class="tulisan2">1-30 DESEMBER '21</p>
        </div>  

        <div class="gambar-gambar">
            <img class="ramen" src="img/ramen.png">
            <img class="burger" src="img/burger.png">
            <img class="coklat" src="img/coklat.png">
        </div>
        <img class="date" src="img/date.png" alt="">

    </div>
    <br>
    <!-- <h1 style="text-align:center;margin-bottom:-130px;">Menu Makanan</h1> -->
    <!--Bagian Menu Makanan-->
    <div class="container-fluid d-flex align-items-center justify-content-center">
        <!--Daftar Menu-->
        <?php $i = 1; ?>
        <div id="menunya" class="background-menu row ">
            <?php foreach($menus as $menu) : ?>
                <?php $hilanggak = "inline-block"; $nggakhilang = "none";$maks = 20;?>
                <?php if($menu['stok'] <= 0) {
                    $hilanggak = "none";
                    $nggakhilang = "inline-block";
                    $maks = $menu['stok'];
                } ?>
            <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex align-items-center justify-content-center relativkan">
                <div class="kotak bayangan" style="background-color: #6D625C;position: absolute;"></div>
                <div style="background-color: <?php cekwarna($i); ?>;" class="kotak kotak1">
                        <form action="halamanuser.php" method="post">
                        <div>
                        <img class="ayam" src="../images/<?php echo $menu['gambar'];?>">
                        </div>
                        
                        <div>
                            <h2 class="text1"><?php echo $menu['nama1'];?></h2>
                            <p class="text2"><?php echo $menu['nama2'];?></p>
                            <p class="text3">Rp <?php echo $menu['harga'];?></p>
                            <input max="<?php echo $maks;?>" min="1" style="display:<?php echo $hilanggak;?>;padding:0px;padding-left:5px;width: 40px;margin-left: 70px;" type="number" name="jumlah_produk" placeholder="1" value="1">
                            <h4 style="display:<?php echo $nggakhilang;?>;transform:rotate(-8deg);margin-left:20px;margin-top:-10px;">Stok Habis</h4>
                        </div>

                        <input type="hidden" name="id_produk" value="<?php echo $menu['id']; ?>">
                        <input type="hidden" name="nama1_produk" value="<?php echo $menu['nama1']; ?>">
                        <input type="hidden" name="nama2_produk" value="<?php echo $menu['nama2']; ?>">
                        <input type="hidden" name="gambar_produk" value="../images/<?php echo $menu['gambar'];?>">
                        <input type="hidden" name="harga_produk" value="<?php echo $menu['harga']; ?>">

                        <button type="submit" name="tambah" style="display:<?php echo $hilanggak;?>;border-radius: 10px; margin: 5px; background-color: rgb(226, 200, 200);"> 
                            Pesan
                        </button>
                            
                        <div>
                            <img class="bintang1" src="img/bintang1.png">
                        </div>   
                        </form>  
                 </div>
            </div>
            <?php $i++; ?>
            <?php endforeach; ?>
            <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex align-items-center justify-content-center relativkan">
                <div class="kotak bayangan" style="background-color: #6D625C;position: absolute;"></div>
                <div class="kotak kotak2">
                    <form action="halamanuser.php" method="post">
                        <div>
                        <img class="ayam" src="img/Pizza.png">
                        </div>
                        <div>
                            <h3 class="text1">Pizza</h3>
                            <p class="text2">Vegetarian Pizza</p>
                            <p class="text3">Rp 50.000 </p>
                        </div>

                        <button style="border-radius: 10px; margin: 5px; background-color: rgb(226, 200, 200);"> 
                            <a href="#" style="text-decoration: none; color: black;"> Pesan</a>
                        </button>

                        <div>
                            <img class="bintang1" src="img/bintang1.png">
                        </div>
                    </form>
                </div>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex align-items-center justify-content-center relativkan">
                <div class="kotak bayangan" style="background-color: #6D625C;position: absolute;"></div>
                <div class="kotak kotak3">
                    <form action="halamanuser.php" method="post">
                        <div>
                        <img class="ayam" src="img/Mie Spesial.png">
                        </div>
                        <div>
                            <h3 class="text1">Mie Spesial</h3>
                            <p class="text2">Mie Goreng Binjai</p>
                            <p class="text3">Rp 50.000 </p>
                        </div>

                        <button style="border-radius: 10px; margin: 5px; background-color: rgb(226, 200, 200);"> 
                            <a href="#" style="text-decoration: none; color: black;"> Pesan</a>
                        </button>

                        <div>
                            <img class="bintang1" src="img/bintang1.png">
                        </div>
                    </form>
                </div>
            </div>
            <div style="display: none;" class="masak">
                <img src="img/masak.png" alt="">
            </div>
            <div>
                <a onclick="return confirm('Anda yakin ingin keluar?')" href="../logout.php"><button>Log Out</button></a>
            </div>
        </div>
        <br>
        <br>
      <!-- <div class="row">
          <div class="col" style="margin-top: 1100px;">
            <button style="border-radius: 10px; margin: 5px; background-color: rgb(226, 200, 200);"> 
                <a href="#" style="text-decoration: none; color: black;"> Pesan</a>
            </button>
          </div>
      </div> -->
    </div>
    
    
<script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
<script src="bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i; 
        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
            this.classList.toggle("activeYa");
            var wow = document.getElementById("wow1");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
                document.getElementById("panah").style.transform = "rotate(0deg)";
            } else {
                content.style.display = "block";
                document.getElementById("panah").style.transform = "rotate(180deg)";
            }
        });
    }
</script>
</body>
</html>


