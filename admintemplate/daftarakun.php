
<?php
    require "../functions.php";
    // Ubah jadi ambil yang aktif saja
    $akun = ambil("SELECT * FROM user WHERE jabatan = 'pengguna' AND status = 'online' AND pesanan != 'Belum Memesan'");
    $akun_online = ambil("SELECT * FROM user ORDER BY STATUS DESC");
    $transaksinya = ambil("SELECT * FROM transaksi WHERE total != 0 ORDER BY id DESC");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/styleku.css">

    <style>
        #pesanan td {
            width: 15%px;
            text-align: center;
        }
    </style>

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo1.png" alt="Logo" srcset="">
                                <h3 style="float: right;margin-top: 17px;margin-left: 5px;font-size: 22px;">SATU RASA</h3>
                            </a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  active">
                            <a href="daftarakun.html" class='sidebar-link'>
                                <i class="bi bi-file-person-fill"></i>
                                <span>Data Pengunjung</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="daftarpenjualan.html" class='sidebar-link'>
                                <i class="bi bi-receipt-cutoff"></i>
                                <span>Daftar Penjualan</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="stokbarang.php" class='sidebar-link'>
                                <i class="bi bi-archive-fill"></i>
                                <span>Stok Barang</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="laporankeuangan.html" class='sidebar-link'>
                                <i class="bi bi-calculator"></i>
                                <span>Laporan Keuangan</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Statistik Pengunjung</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="width: 137%;">
                                    <div class="card-header card-header-tabel">
                                        <h4>Pesanan Masuk</h4>
                                    </div>
                                    <div class="card-body kartu-tabel">
                                        <table width="100%" cellspacing="0" cellpadding="5" class="tabelku">
                                            <tr class="tr">
                                                <th class="td">ID</th>
                                                <th class="td">Nama Pelanggan</th>
                                                <th class="td">Menu Pesanan</th>
                                                <th class="td">Total (Rp.)</th>
                                                <th class="td">Aksi</th>
                                            </tr>
                                            <?php foreach($akun as $satuan) : ?>
                                            <tr class="tr">
                                                <td class="td"><?php echo $satuan['id']; ?></td>
                                                <td class="td"><?php echo $satuan['username']; ?></td>
                                                <td class="td" style="text-align: center;"><?php echo $satuan['pesanan']; ?></td>
                                                <td class="td">Rp. <?php echo $satuan['total']; ?></td>
                                                <td class="td"><span class="tomboltabel"><a onclick="return confirm('Lakukan Transaksi?')" href="transaksi.php?id=<?php echo $satuan['id'];?>">Selesai</a></span> || <span class="tomboltabel"><a onclick="return confirm('Yakin ingin menghapus akun?')" href="hapusakun.php?id=<?php echo $satuan['id']; ?>">Hapus</a></span></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card" style="width: 137%;">
                                    <div class="card-header card-header-tabel">
                                        <h4>Transaksi Terdahulu</h4>
                                    </div>
                                    <div class="card-body kartu-tabel">
                                        <table width="100%" cellspacing="0" cellpadding="5" class="tabelku">
                                            <tr class="tr">
                                                <th class="td">ID</th>
                                                <th>Tanggal / waktu</th>
                                                <th class="td">Nama Pelanggan</th>
                                                <th class="td">Menu Pesanan</th>
                                                <th class="td">Total (Rp.)</th>
                                            </tr>
                                            <?php foreach($transaksinya as $satutransaksi) : ?>
                                            <tr class="tr">
                                                <td class="td"><?php echo $satutransaksi['id'];?></td>
                                                <td><?php echo $satutransaksi['waktu'];?></td>
                                                <td class="td"><?php echo $satutransaksi['username'];?></td>
                                                <td class="td"><?php echo $satutransaksi['menu'];?></td>
                                                <td class="td">Rp. <?php echo $satutransaksi['total'];?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card" style="width: 137%;">
                                    <div class="card-header card-header-tabel">
                                        <h4>Daftar Pengguna</h4>
                                    </div>
                                    <div class="card-body kartu-tabel">
                                        <table width="100%" cellspacing="0" cellpadding="5" class="tabelku">
                                            <tr class="tr">
                                                <th class="td">ID</th>
                                                <th class="td">Nama Pelanggan</th>
                                                <th class="td">Email</th>
                                                <th class="td">Telepon</th>
                                                <th class="td">Status</th>
                                                <th class="td">Aksi</th>
                                            </tr>
                                            <?php foreach($akun_online as $satuan_online) : ?>
                                            <tr class="tr">
                                                <td class="td"><?php echo $satuan_online['id']; ?></td>
                                                <td class="td"><?php echo $satuan_online['username']; ?></td>
                                                <td class="td" style="text-align: center;"><?php echo $satuan_online['email']; ?></td>
                                                <td class="td"><?php echo $satuan_online['telepon']; ?></td>
                                                <td class="td">
                                                    <?php 
                                                        if($satuan_online['status'] == 'online') {
                                                            echo "<p style=color:#23c923;>" . $satuan_online['status'] . "</p>";
                                                        } else {
                                                            echo "<p style=color:#f33c3c;>" . $satuan_online['status'] . "</p>";
                                                        }
                                                    ?>
                                                </td>
                                                <td class="td"><span style="background-color: #f33c3c;" class="tomboltabel"><a onclick="return confirm('Yakin ingin menghapus akun?')" href="hapusakun.php?id=<?php echo $satuan_online['id']; ?>">Hapus</a></span></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>