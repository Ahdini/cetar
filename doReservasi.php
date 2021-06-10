<?php
include("connect.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

	// ambil data dari formulir
	$tgl = $_POST['Tgl_Acara'];
	$jam = $_POST['Jam_Acara'];
	$jmeja = $_POST['jumlah_meja'];
	$nmeja = $_POST['no_meja'];

	// buat query
	$connect = new mysqli ("localhost", "root", "", "restoran");
  	$query = mysqli_query($connect, "INSERT INTO reservasi (Tgl_Acara, Jam_Acara, jumlah_meja, no_meja) VALUEs ('$tgl', '$jam', '$jmeja', '$nmeja')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: after.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: after.php?status=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>
