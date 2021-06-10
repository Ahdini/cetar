<?php
  session_start();
  if(isset($_COOKIE["userID"])){
    header("location:after.php");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="after.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
    <!-- ======= Header ======= -->
    <div class="banner">
        <div class="navbar order-last order-lg-0">
            <h1>RASA</h1>
            <ul>
                <li><a class="nav-link scrollto active" href="after.html">Beranda</a></li>
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
        <div class="content">
            <h2>Reservasi   <span>Restoran</span></h2>
            <h3>Makan di tempat tanpa khawatir!</h3>
        </div>
    </div>


    <!-- ======= Menu ======= -->
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ab quod, rem voluptatem cum voluptatibus repellendus perspiciatis odio quo, qui sit quas accusamus ea saepe temporibus error nostrum quae enim!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ab quod, rem voluptatem cum voluptatibus repellendus perspiciatis odio quo, qui sit quas accusamus ea saepe temporibus error nostrum quae enim!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ab quod, rem voluptatem cum voluptatibus repellendus perspiciatis odio quo, qui sit quas accusamus ea saepe temporibus error nostrum quae enim!</p>


    <!-- ======= Footer ======= -->
    <div class="footer">
        <div class="footer-section">
            <h4>Tentang Kami</h4>
            <p>“RASA” adalah sebuah website yang dirancang untuk memudahkan pelanggan melakukan reservasi restoran x. Dengan “RASA” kita dapat melakukan reservasi restoran dengan cepat dan mudah tanpa uang muka di awal. Hanya dengan memasukan data pribadi pelanggan dan mengatur jam serta tanggal pada website tanpa harus ribet datang ke restoran.</p>
        </div>
        <div class="footer-section">
            <h5>Kontak Kami</h5>
            <p>Telp. 123456789</p>
        </div>
        <div class="footer-section">
            <h6>Maps</h6>
            <div class="map">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7422699577!2d106.72118811431346!3d-6.554186465893896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4b294aba49d%3A0x533530000f77bc38!2sInstitut%20Pertanian%20Bogor!5e0!3m2!1sid!2sid!4v1623053027145!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>



    <div id="copyright">
        &copy; 2021. <b>Rasa</b> All Right Reserved
    </div>

</body>
</html>