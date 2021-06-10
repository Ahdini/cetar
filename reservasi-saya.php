<?php
    include("connect_pesan.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="reservasi-saya.css">

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

    <nav>
		<a href="buat-reservasi.php">[+] Tambah Reservasi</a>
	</nav>
    <br />
	<table border="1">
	<thead>
		<tr>
			<th>No. Pemesanan</th>
			<th>Tanggal</th>
			<th>Tanggal Acara</th>
			<th>Jumlah Meja</th>
			<th>Nomor Meja</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$query = mysqli_query("SELECT * FROM reservasi");
		// $query = mysqli_query($db, $sql);


		while($pesan = pg_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$pesan['No_Pemesanan']."</td>";
			echo "<td>".$pesan['tanggal']."</td>";
			echo "<td>".$pesan['Tgl_Acara']."</td>";
			echo "<td>".$pesan['Jam_Acara']."</td>";
			echo "<td>".$pesan['jmlh_meja']."</td>";
			echo "<td>".$pesan['no_meja']."</td>";

			echo "<td>";
            echo "<a href='pembatalan.php".$pesan['id']."'>Batalkan</a>";
            echo "</td>";

            echo "</tr>";

			}


		?>

	</tbody>
	</table>

    <div id="copyright">
        &copy; 2021. <b>Rasa</b> All Right Reserved
    </div>

</body>
</html>