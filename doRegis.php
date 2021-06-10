<?php
include("connect.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

	// ambil data dari formulir
	$email = $_POST['email'];
	$nawal = $_POST['nama_awal'];
	$nakhir = $_POST['nama_akhir'];
	$ks = $_POST['kata_sandi'];
    $kks = $_POST['konfirmasi_kata_sandi'];

	// buat query
	$connect = new mysqli ("localhost", "root", "", "restoran");
  	$query = mysqli_query($connect, "INSERT INTO pengguna (email, nama_awal, nama_akhir, kata_sandi, konfirmasi_kata_sandi) VALUEs ('$email', '$nawal', '$nakhir', '$ks', '$kks')");

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
