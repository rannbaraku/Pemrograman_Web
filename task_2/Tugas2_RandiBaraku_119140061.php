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

         <!--link untuk css file-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--link untuk font yang saya gunakan-->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 

    </head>


    <body>
        <!--konteiner untuk background-->
        <div class="kontener">
        <!--box untuk kotak ditengah background-->
            <div class="box">
                 <!--kiri untuk foto di kiri box-->
                <div class="kiri">
                    <h1>Daily Note</h1>
                </div>
                <!--form untuk inputan, merujuk pada file detail yaitu tabel.php-->
                <form action="tabel.php" method="GET" class="kanan">
                    <h2>Join the Note Writer</h2>
                    
                    <!--meminta nama-->
                    <input type="text" class="isian" name="nama" placeholder="Siapa namamu">
                    
                    <!--meminta email-->
                    <input type="email" class="isian" name="email" placeholder="Masukan emailmu">
                    
                    <!--meminta password-->
                    <input type="password" class="isian" name="passW" placeholder="Sandi note">
                   
                    <!--bagian drop down untuk tanggal lahir-->
                    <div class="drop">
                    <h3>Date of birth</h3>
                    <br><br>

                    <!--seleksi untuk bulan kelahiran-->
                    <select name ="bulan" class="pilih">
                        <option  value ="bulan">Bulan</option>
                        <option  value ="januari">Januari</option>
                        <option  value ="Februari">Februari</option>
                        <option  value ="Maret">Maret</option>
                        <option  value ="April">April</option>
                        <option  value ="Mai">Mei</option>
                        <option  value ="Juni">June</option>
                        <option  value ="Juli">Juli</option>
                        <option  value ="Agustus">Agustus</option>
                        <option  value ="September">September</option>
                        <option  value ="Oktober">Oktober</option>
                        <option  value ="November">November</option>
                        <option  value ="Desember">Desember</option>
                    </select> 

                    <!--seleksi untuk tanggal kelahiran-->
                    <select name ="tanggal" value="tanggal" class="pilih">
                        <option  value ="Tanggal">tanggal</option>
                        <option  value ="1">1</option>
                        <option  value ="2">2</option>
                        <option  value ="3">3</option>
                        <option  value ="4">4</option>
                        <option  value ="5">5</option>
                        <option  value ="6">6</option>
                        <option  value ="7">7</option>
                        <option  value ="8">8</option>
                        <option  value ="9">9</option>
                        <option  value ="10">10</option>
                        <option  value ="11">11</option>
                        <option  value ="12">12</option>
                        <option  value ="13">13</option>
                        <option  value ="14">14 </option>
                        <option  value ="15">15</option>
                        <option  value ="16">16</option>
                        <option  value ="17">17</option>
                        <option  value ="18">18</option>
                        <option  value ="19">19</option>
                        <option  value ="20">20</option>
                        <option  value ="21">21</option>
                        <option  value ="22">22</option>
                        <option  value ="23">33</option>
                        <option value ="24">24</option>
                        <option  value ="25">25</option>
                        <option  value ="26">26</option>
                        <option  value ="27">27</option>
                        <option  value ="28">28</option>
                        <option  value ="29">29</option>
                        <option  value ="30">30</option>
                        <option  value ="31">31</option>
                    </select> 

                    <!--seleksi untuk tahun kelahiran-->
                    <select name ="tahun" class="pilih">
                        <option value ="tahun">Tahun</option>
                        <option value ="1999">1999</option>
                        <option value ="2000">2000</option>
                        <option value ="2001">2001</option>
                        <option value ="2002">2002</option>
                        <option value ="2003">2003</option>
                        <option value ="2004">2004</option>
                        <option value ="2005">2005</option>
                        <option value ="2006">2006</option>
                        <option value ="2007">2007</option>
                        <option value ="2008">2008</option>
                        <option value ="2009">2009</option>
                        <option value ="2010">2010</option>
                        <option value ="2011">2011</option>
                        <option value ="2012">2012</option>
                        <option value ="2013">2013</option>
                        <option value ="2014">2014</option>
                        <option value ="2015">2015</option>
                        <option value ="2016">2016</option>
          
                    </select> 
                    </div>

                    <!--bagian radio button untuk jenis kelamin-->
                    <h3>Gender</h3><br><br>
                    <div class="radio">

                        <!--radio untuk laki-laki-->
                        <div class='laki'>
                        <input type="radio" class="bitik"  value="Pria" name="gender">
                        <label id="jenisK">Male</label>
                        </div>

                        <!--radio untuk perempuan-->
                        <input type="radio" class="bintik" value="Wanita" name="gender">
                        <label id="jenisK">Female</label>

                    </div>
        
                    <!--tombol untuk mensubmit -->
                    <input type="submit" name="submitform" class="tombol" value="Daftar">
            
                </form>
                <br>
            </div>
        </div>

    </body>
    
    </html>