<?php 
session_start();
  $transaksi = $_SESSION['transaksi'];

$nampak = "inline-block";
$nggak_nampak = "none";
$total = $transaksi['total'];
if(isset($_POST['submit'])) {
  $uang = $_POST['uang'];
  $balek = $uang - $total;
  $nampak = "none";
  $nggak_nampak = "inline-block";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Cetak Pembayaran</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<style>
@page{
  size: auto;
}
body {
  background: rgb(204,204,204); 
}

page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.1cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 29.7cm;
  height: 21cm; 
}
page[size="A4"][layout="potrait"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 19.8cm;  
}
page[size="dipakai"][layout="landscape"] {
  width: 20cm;
  height: 20cm;  
}
@media print {
  body, page {
    margin: auto;
    box-shadow: 0;
  }
}
</style>
</head>
<body>
  <page size="dipakai" layout="landscape">
    <br>
    <div class="container">
      <span id="remove">
      </span>
    </div>
      <center>
        <h4>
          RESTORAN SATU RASA
        </h4>
        <span>
          Jalan Dr. T. Mansur No.9, Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera Utara 20222<br>
          Telp. +62852 3456 7890 || E-mail : saturasa@gmail.com
        </span>
      </center>
            <hr>
              <table style="width: 100%" class="">
                <tr>
                  <td>
                    Nama Pelanggan
                  </td>
                  <td></td>
                  <td>
                  : 
                  </td>
                  <td>
                  <?php echo $transaksi['username']; ?>
                  </td>
                </tr>
                <tr>
                  <td style="width: 15%">
                    Nama Kasir
              
                  </td>
                  <td></td>
                  <td style="width: 5%">
                  :
                  </td>

                  <td style="width: 80%">
                    
                  </td>
                </tr>
                <tr>
                  <td>
                    Waktu Transaksi
                  </td>
                  <td></td>
                  <td>
                  :
                  </td>
                  <td>
                  <?php echo $transaksi['waktu']; ?>
                  </td>
                </tr>
              </table>

              <hr>

              <table width="100%" class="table table-bordered" cellpadding="2px" cellspacing="0px" border="2px solid black">
                <thead>
                  <tr>
                    <th style="border: none;" class="head0"></th>
                    <th width="30%" class="head1">Menu</th>
                    <th width="8%"  class="head0 right">Jumlah </th>
                    <th colspan="2" class="head1 right"> Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="border: none;"></td>
                    <td colspan="4">
                    <center><strong>
                      <?php echo $transaksi['menu']; ?>
                    </center></strong>
                    </td>
                  </tr>

                  <tr>
                    <td><strong><center>Total</center></strong></td>
                    <td colspan="4"><center>Rp. <?php echo $transaksi['total']; ?></center></td>
                  </tr>
                  <tr>
                    <td><strong><center>Uang Bayar</center></strong></td>
                    <td colspan="4"><center>Rp. <p style="display: <?php echo $nggak_nampak; ?>;"><?php echo $uang; ?></p><form style="display: <?php echo $nampak; ?>;" action="" method="post"><input name="uang" type="text"><button style="float: right;" type="submit" name="submit">Kirim</button></form></center></td>
                  </tr>
                  <tr>
                    <td><strong><center>Uang Kembali</center></strong></td>
                    <td colspan="4"><center>Rp. <p style="display: <?php echo $nggak_nampak; ?>;"><?php echo $balek; ?></p></center></td>
                  </tr>
                </tbody>
              </table>

            <hr>
            <center>
              <h5>
                TERIMA KASIH ATAS KUNJUNGANNYA <i class="fas fa-baseball-ball"></i>
              </h5>
            </center>
            <hr>
            
  </page>
  <a href="../admintemplate/daftarakun.php">Kembali</a>
</body>
<script src="https://kit.fontawesome.com/58556dc7aa.js" crossorigin="anonymous"></script>
</html>
