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
            <ol>
                <li>
                    <span>
                        <img class="makanan" src="img/Dimsum.png" alt="burger">
                        <div style="width: 120px;box-sizing: border-box;" class="nama-makanan row banyak d-flex align-items-center">
                            <button class="col-4 tombol">+</button>
                            <input style="width: 40px;padding-right: 0px;height: 20px;margin-top: 5px;" type="number" placeholder="0">
                            <button class="col-4 tombol">-</button>
                        </div>
                        <h5 class="nama-makanan nama-makanannya">Dimsum</h5>
                        <p class="nama-makanannya2">Dimsum Spesial</p>
                    </span>
                </li>
                <li>
                    <span>
                        <img class="makanan" src="img/Dimsum.png" alt="burger">
                        <div style="width: 120px;box-sizing: border-box;" class="nama-makanan row banyak d-flex align-items-center">
                            <button class="col-4 tombol">+</button>
                            <input style="width: 40px;padding-right: 0px;height: 20px;margin-top: 5px;" type="number" placeholder="0">
                            <button class="col-4 tombol">-</button>
                        </div>
                        <h5 class="nama-makanan nama-makanannya">Dimsum</h5>
                        <p class="nama-makanannya2">Dimsum Spesial</p>
                    </span>
                </li>
                <li>
                    <span>
                        <img class="makanan" src="img/Dimsum.png" alt="burger">
                        <div style="width: 120px;box-sizing: border-box;" class="nama-makanan row banyak d-flex align-items-center">
                            <button class="col-4 tombol">+</button>
                            <input style="width: 40px;padding-right: 0px;height: 20px;margin-top: 5px;" type="number" placeholder="0">
                            <button class="col-4 tombol">-</button>
                        </div>
                        <h5 class="nama-makanan nama-makanannya">Dimsum</h5>
                        <p class="nama-makanannya2">Dimsum Spesial</p>
                    </span>
                </li>
                <li>
                    <span>
                        <img class="makanan" src="img/Dimsum.png" alt="burger">
                        <div style="width: 120px;box-sizing: border-box;" class="nama-makanan row banyak d-flex align-items-center">
                            <button class="col-4 tombol">+</button>
                            <input style="width: 40px;padding-right: 0px;height: 20px;margin-top: 5px;" type="number" placeholder="0">
                            <button class="col-4 tombol">-</button>
                        </div>
                        <h5 class="nama-makanan nama-makanannya">Dimsum</h5>
                        <p class="nama-makanannya2">Dimsum Spesial</p>
                    </span>
                </li>
                <li>
                    <span>
                        <img class="makanan" src="img/Dimsum.png" alt="burger">
                        <div style="width: 120px;box-sizing: border-box;" class="nama-makanan row banyak d-flex align-items-center">
                            <button class="col-4 tombol">+</button>
                            <input style="width: 40px;padding-right: 0px;height: 20px;margin-top: 5px;" type="number" placeholder="0">
                            <button class="col-4 tombol">-</button>
                        </div>
                        <h5 class="nama-makanan nama-makanannya">Dimsum</h5>
                        <p class="nama-makanannya2">Dimsum Spesial</p>
                    </span>
                </li>
                <li>
                    <span>
                        <img class="makanan" src="img/Dimsum.png" alt="burger">
                        <div style="width: 120px;box-sizing: border-box;" class="nama-makanan row banyak d-flex align-items-center">
                            <button class="col-4 tombol">+</button>
                            <input style="width: 40px;padding-right: 0px;height: 20px;margin-top: 5px;" type="number" placeholder="0">
                            <button class="col-4 tombol">-</button>
                        </div>
                        <h5 class="nama-makanan nama-makanannya">Dimsum</h5>
                        <p class="nama-makanannya2">Dimsum Spesial</p>
                    </span>
                </li>
                <li>Halo</li>
                <li>Halo</li>
                <li>Halo</li>
            </ol>
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
    <!--Bagian Menu Makanan-->
    <div class="container-fluid d-flex align-items-center justify-content-center">
        <!--Daftar Menu-->

        <div id="menunya" class="background-menu row ">
            <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex align-items-center justify-content-center relativkan">
                <div class="kotak bayangan" style="background-color: #6D625C;position: absolute;"></div>
                <div class="kotak kotak1">
                     <div>
                     <img class="ayam" src="img/ayam-panggang.png">
                     </div>
                    
                     <div>
                         <h2 class="text1">Ayam</h2>
                          <p class="text2">Ayam Panggang</p>
                          <p class="text3">Rp 50.000 </p>
                     </div>

                    <button style="border-radius: 10px; margin: 5px; background-color: rgb(226, 200, 200);"> 
                           <a href="#" style="text-decoration: none; color: black;"> Pesan</a>
                     </button>
                        
                     <div>
                        <img class="bintang1" src="img/bintang1.png">
                     </div>     
                 </div>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex align-items-center justify-content-center relativkan">
                <div class="kotak bayangan" style="background-color: #6D625C;position: absolute;"></div>
                <div class="kotak kotak2">
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
                </div>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex align-items-center justify-content-center relativkan">
                <div class="kotak bayangan" style="background-color: #6D625C;position: absolute;"></div>
                <div class="kotak kotak3">
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
                </div>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex align-items-center justify-content-center relativkan">
                <div class="kotak bayangan" style="background-color: #6D625C;position: absolute;"></div>
                <div class="kotak kotak1">
                    <div>
                    <img class="ayam" src="img/Sop Tofu.png">
                    </div>
                
                    <div>
                        <h2 class="text1">Sup</h2>
                        <p class="text2">Sup Tofu</p>
                        <p class="text3">Rp 50.000 </p>
                    </div>

                    <button style="border-radius: 10px; margin: 5px; background-color: rgb(226, 200, 200);"> 
                        <a href="#" style="text-decoration: none; color: black;"> Pesan</a>
                    </button>
                    
                    <div>
                        <img class="bintang1" src="img/bintang1.png">
                    </div>

                    
                </div>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex align-items-center justify-content-center relativkan">
                <div class="kotak bayangan" style="background-color: #6D625C;position: absolute;"></div>
                <div class="kotak kotak2">
                    <div>
                    <img class="ayam" src="img/Mi Ramen.png">
                    </div>
                    <div>
                        <h3 class="text1">Mie Ramen</h3>
                        <p class="text2">Mie Ramen Spesial</p>
                        <p class="text3">Rp 50.000 </p>
                    </div>

                    <button style="border-radius: 10px; margin: 5px; background-color: rgb(226, 200, 200);"> 
                        <a href="#" style="text-decoration: none; color: black;"> Pesan</a>
                    </button>

                    <div>
                        <img class="bintang1" src="img/bintang1.png">
                    </div>
                </div>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex align-items-center justify-content-center relativkan">
                <div class="kotak bayangan" style="background-color: #6D625C;position: absolute;"></div>
                <div class="kotak kotak3">
                    <div>
                    <img class="ayam" src="img/Dimsum.png">
                    </div>
                    <div>
                        <h3 class="text1">Dimsum</h3>
                        <p class="text2">Dimsum Ayam Spesial</p>
                        <p class="text3">Rp 50.000 </p>
                    </div>

                    <button style="border-radius: 10px; margin: 5px; background-color: rgb(226, 200, 200);"> 
                        <a href="#" style="text-decoration: none; color: black;"> Pesan</a>
                    </button>

                    <div>
                        <img class="bintang1" src="img/bintang1.png">
                    </div>
                </div>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex align-items-center justify-content-center relativkan">
                <div class="kotak bayangan" style="background-color: #6D625C;position: absolute;"></div>
                <div class="kotak kotak1">
                    <div>
                    <img class="ayam" src="img/spaghetti.png">
                    </div>
                
                    <div>
                        <h2 class="text1">Spaghetti</h2>
                        <p class="text2">S. Bolognese</p>
                        <p class="text3">Rp 50.000 </p>
                    </div>

                    <button style="border-radius: 10px; margin: 5px; background-color: rgb(226, 200, 200);"> 
                        <a href="#" style="text-decoration: none; color: black;"> Pesan</a>
                    </button>
                    
                    <div>
                        <img class="bintang1" src="img/bintang1.png">
                    </div>     
                </div>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex align-items-center justify-content-center relativkan">
                <div class="kotak bayangan" style="background-color: #6D625C;position: absolute;"></div>
                <div class="kotak kotak2">
                    <div>
                    <img class="ayam" src="">
                    </div>
                    <div>
                        <h3 class="text1">Burger</h3>
                        <p class="text2">Crispy Chicken Burger</p>
                        <p class="text3">Rp 50.000 </p>
                    </div>

                    <button style="border-radius: 10px; margin: 5px; background-color: rgb(226, 200, 200);"> 
                        <a href="#" style="text-decoration: none; color: black;"> Pesan</a>
                    </button>

                    <div>
                        <img class="bintang1" src="img/bintang1.png">
                    </div>
                </div>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex align-items-center justify-content-center relativkan">
                <div class="kotak bayangan" style="background-color: #6D625C;position: absolute;"></div>
                <div class="kotak kotak3">
                    <div>
                    <img class="ayam" src="img/Hotdog.png">
                    </div>
                    <div>
                        <h3 class="text1">Hotdog</h3>
                        <p class="text2">Melted Cheese Hotdog</p>
                        <p class="text3">Rp 50.000 </p>
                    </div>

                    <button style="border-radius: 10px; margin: 5px; background-color: rgb(226, 200, 200);"> 
                        <a href="#" style="text-decoration: none; color: black;"> Pesan</a>
                    </button>

                    <div>
                        <img class="bintang1" src="img/bintang1.png">
                    </div>
                </div>
            </div>
            <div style="display: none;" class="masak">
                <img src="img/masak.png" alt="">
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

