<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="ubahprofil.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
    <!-- ======= Header ======= -->
    <div class="banner">
        <div class="navbar order-last order-lg-0">
            <h1>RASA</h1>
            <ul>
                <li><a class="nav-link scrollto active" href="after.php">Beranda</a></li>
                  <li class="dropdown"><a href="#"><span>Reservasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a href="buat-reservasi.php">Buat Reservasi</a></li>
                      <li><a href="reservasi-saya.php">Reservasi Saya</a></li>
                      <li><a href="riwayat-reservasi.php">Riwayat Reservasi</a></li>
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

    <!-- ======= Profil ======= -->
    <div class="page-content page-container" id="page-content">
      <div class="padding">
          <div class="row container d-flex justify-content-center">
              <div class="col-xl-6 col-md-12">
                  <div class="card user-card-full">
                      <div class="row m-l-0 m-r-0">
                          <div class="col-sm-8">
                              <div class="card-block">
                                  <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Ubah Profil Saya</h6>
                                  <form action="profil.html" method="post" class="row">
                                        <input type="text" class="nama" name = "nama_lengkap" placeholder="Nama Lengkap">
                                        <input type="email" class="username" name="email" placeholder="Email">
                                        <input type="text" class="telp" name="telp" placeholder="Telepon">
                                        <input type="date" class="ttl" name="ttl" placeholder="Tanggal Lahir">
                                        <input type="text" class="jk" name="jk" placeholder="Jenis Kelamin">
                                        <input type="submit" value="Simpan Perubahan" class="submit">
                                  </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>


</body>
</html>