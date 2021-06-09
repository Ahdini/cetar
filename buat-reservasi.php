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
                <li><a class="nav-link scrollto active" href="after.html">Beranda</a></li>
                  <li class="dropdown"><a href="#"><span>Reservasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a href="buat-reservasi.html">Buat Reservasi</a></li>
                      <li><a href="reservasi-saya.html">Reservasi Saya</a></li>
                      <li><a href="riwayat-reservasi.html">Riwayat Reservasi</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Ariana Grande</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a href="profil.html">Profil Saya</a></li>
                      <li><a href="beranda.html">Keluar</a></li>
                    </ul>
                  </li>
            </ul>
        </div>
    </div>
    <div class="header">
        <h2>Buat Reservasi</h2>
    </div>
    <form action="reservasi-saya.html" method="post" class="box">
      <div class="login-area">
          <input type="date" class="tanggal" placeholder="Tanggal">
          <input type="time" class="waktu" placeholder="Waktu">
          <input type="number" class="jmeja" placeholder="Jumlah Meja">
          <input type="number" class="nmeja" placeholder="Nomor Meja">
          <input type="submit" value="Pesan Sekarang" class="submit">
      </div>
    </form> 


</body>
</html>