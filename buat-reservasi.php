<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="buat-reservasi.css">
</head>
<body>
    <!-- ======= Header ======= -->
    <div class="banner">
        <div class="navbar order-last order-lg-0">
            <h1 class="logo">RASA</h1>
            <ul>
                <li><a class="nav-link scrollto active" href="after.php">Beranda</a></li>
                  <li class="dropdown"><a href="#"><span>Reservasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a href="buat-reservasi.php">Buat Reservasi</a></li>
                      <li><a href="reservasi-saya.php">Reservasi Saya</a></li>
                      <li><a href="riwayat-reservasi.php">Riwayat Reservasi</a></li>
                    </ul>
                  </li>
                  <?php
                    if(isset($_COOKIE["userID"])){
                        include("connect.php");
                        $getUserLoggedIn = $connect->query("SELECT * FROM pengguna WHERE userID = '".$_COOKIE["userID"]."'")->fetch_assoc();
                    }
                  ?>                  
                  <li class="dropdown"><a href="#"><span>Ariana Grande</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                      <li><a href="profil.html">Profil Saya</a></li>
                      <li><a href="beranda.html">Keluar</a></li>
                    </ul>
                  </li>
            </ul>
        </div>
    </div>

<!-- ======= Form reservasi ======= -->
    <div class="header">
        <h2>Buat Reservasi</h2>
    </div>
    <form action="doReservasi.php" method="post" class="box">
      <div class="login-area">
          <input type="date" class="tanggal" name="Tgl_Acara" placeholder="Tanggal">
          <input type="time" class="waktu" name="Jam_Acara" placeholder="Waktu">
          <input type="number" class="jmeja" name="jumlah_meja" placeholder="Jumlah Meja">
          <input type="number" class="nmeja" name="no_meja" placeholder="Nomor Meja">
          <input type="submit" value="Pesan Sekarang" class="submit" name="submit">
      </div>

    </form> 


</body>
</html>
