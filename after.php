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
    <link rel="stylesheet" href="beranda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

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
 <h4>Menu</h4>
 <div class="owl-carousel owl-theme">
     <div class="item"><img src="https://image.freepik.com/free-photo/thai-northern-style-curried-noodle-soup-with-chicken-khao-soi-kai_1150-41812.jpg">Mie Ayam</div>
     <div class="item"><img src="https://image.freepik.com/free-photo/sate-ayam-organic-food-bali_1385-1667.jpg">Sate Ayam</div>
     <div class="item"><img src="https://image.freepik.com/free-photo/bubur-ayam-indonesian-chicken-porridge_16751-121.jpg">Bubur Ayam</div>
     <div class="item"><img src="https://image.freepik.com/free-photo/sayur-sop-vegetable-soup_8595-9395.jpg">Sayur Sop</div>
     <div class="item"><img src="https://image.freepik.com/free-photo/seafood-fried-rice_1205-5217.jpg">Nasi Goreng</div>
     <div class="item"><img src="https://image.freepik.com/free-photo/top-view-composition-delicious-indonesian-bakso_23-2148933306.jpg">Bakso</div>
     <div class="item"><img src="https://image.freepik.com/free-photo/chicken-with-soysauce-chilli_8595-9403.jpg">Rendang</div>
 </div>
 <div class="owl-carousel owl-theme">
     <div class="item"><img src="https://image.freepik.com/free-photo/colorful-fruit-smoothies-composition-wooden-background_23-2148227532.jpg">Jus</div>
     <div class="item"><img src="https://img.freepik.com/free-photo/taiwan-milk-tea-with-bubble_1339-84368.jpg?size=338&ext=jpg">Boba</div>
     <div class="item"><img src="https://image.freepik.com/free-photo/cola-soda-glass-white-table_51137-1798.jpg">Cola</div>
     <div class="item"><img src="https://image.freepik.com/free-photo/half-cut-coconut-wooden-board-glass-water-with-ice_114579-62055.jpg">Air Kelapa</div>
     <div class="item"><img src="https://img.freepik.com/free-photo/two-glasses-cold-coffee_79782-1146.jpg?size=338&ext=jpg">Kopi</div>
     <div class="item"><img src="https://image.freepik.com/free-photo/water-pouring-transparent-glass-with-bubbles-air_158518-2127.jpg">Air Mineral</div>
 </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
   <script type="text/javascript">
   $('.owl-carousel').owlCarousel({
     loop:true,
     margin:10,
     nav:true,
     responsive:{
         0:{
             items:1
         },
         600:{
             items:3
         },
         1000:{
             items:5
         }
     }
 })
   </script>


    <!-- ======= Footer ======= -->
    <div class="footer">
        <div class="footer-section">
            <h4>Tentang Kami</h4>
            <p>“RASA” adalah sebuah website yang dirancang untuk memudahkan pelanggan melakukan reservasi restoran x. Dengan “RASA” kita dapat melakukan reservasi restoran dengan cepat dan mudah tanpa uang muka di awal. Hanya dengan memasukan data pribadi pelanggan dan mengatur jam serta tanggal pada website tanpa harus ribet datang ke restoran.</p>
        </div>
        <div class="footer-section">
            <h5>Kontak Kami</h5>
            <i class="fab fa-google"></i> : rasa.reservasi@gmail.com
            <i class="fab fa-twitter"></i> : @rasa.reservasi
            <i class="fab fa-instagram"></i> : @rasa.reservasi
            <i class="fas fa-phone"></i> : 081122334455
        </div>
        <div class="footer-section">
            <h6>Maps</h6>
            <div class="map">
                <iframe style="border:0; width: 100%; height: 200px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7422699577!2d106.72118811431346!3d-6.554186465893896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4b294aba49d%3A0x533530000f77bc38!2sInstitut%20Pertanian%20Bogor!5e0!3m2!1sid!2sid!4v1623053027145!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>



    <div id="copyright">
        &copy; 2021. <b>Rasa</b> All Right Reserved
    </div>

</body>
</html>