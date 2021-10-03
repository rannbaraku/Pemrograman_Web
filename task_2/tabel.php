
<!--membuat variabel yang menangkap nilai get-->
<?php
$nama = $_GET["nama"];
$email = $_GET["email"];
$passW = $_GET["passW"];
$birth = $_GET["bulan"]."-".$_GET["tanggal"]."-".$_GET["tahun"];
$gender = $_GET["gender"]
?> 


<!DOCTYPE html>
<html lang="en">
    <style>
    </style>

    <head>
        <meta charset="uft-8">
        <meta name="viewpoint" content="width-device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
        <title>
            Tugas Minggu ke 5 Randi Baraku
        </title>
        <!--link untuk menaukan css file-->
        <link rel="stylesheet" type="text/css" href="style_detail.css">
        <!--link untuk font yang saya gunakan-->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 

    </head>


    <body>
        <!--konteiner untuk background-->
        <div class="kontener"><br>
        <h2 class="judul">Detail Informasi</h2>

        <!--bagian tabel-->
        <div class="tebel">

        <!--tabel yang digunakan-->
        <table>

          <!--baris header-->
          <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Sandi</th>
            <th>Tanggal lahir</th>
            <th>Gender</th>
          </tr>

          <!--baris palsu agar terlihat sebagai data yang sudah ada-->
          <tr>
            <td>Ahmad subarjo</td>
            <td>Ahmad@gmail.com</td>
            <td>Ahmad123</td>
            <td>September-21-2001</td>
            <td>Laki-laki</td>
          </tr>

          <!--baris palsu agar terlihat sebagai data yang sudah ada-->
          <tr>
            <td>Kupalinka kats</td>
            <td>Kupalinka@gmail.com</td>
            <td>KatsAA123</td>
            <td>Januari-10-2001</td>
            <td>Laki-laki</td>
          </tr>

          <!--baris palsu agar terlihat sebagai data yang sudah ada-->
          <tr>
            <td>Melinda Sr</td>
            <td>Mell@gmail.com</td>
            <td>Glupglup221</td>
            <td>Juli-22-2001</td>
            <td>Perempuan</td>
          </tr>

          <!--baris akan menampilkan isi variabel yang telah mengkap data dari variabl get-->
          <tr>
            <td><?= $nama?></td>
            <td><?=$email;?></td>
            <td><?=$passW;?></td>
            <td><?=$birth?></td>
            <td><?=$gender;?></td>
          </tr>
          
        </table>
        </div>
        </div>
     
        
    </body>
    
    </html>