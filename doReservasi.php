<?php
    session_start();
    if(isset($_POST["inputTanggal"])){
        $tgl_pesan = date("D-m-y");
        $tanggal = $_POST["inputTanggal"];
        $waktu = $_POST["inputWaktu"];
        $jumlah = $_POST["inputJmlhMeja"];
        $nomor = $_POST["inputNoMeja"];
        if($tanggal==""){
                $_SESSION["message"] = "Tanggal harus diisi";
                header("location:buat-reservasi.php");
                exit();
            }else if($waktu==""){
                $_SESSION["message"] = "Waktu harus diisi";
                header("location:buat-reservasi.php");
                exit();
            }else if($jumlah==""){
                $_SESSION["message"] = "Jumlah meja harus diisi";
                header("location:buat-reservasi.php");
                exit();
            }else if($nomor==""){
                $_SESSION["message"] = "Nomor harus diisi";
                header("location:buat-reservasi.php");
                exit();
        }else{
            include("connect_pesan.php");
            $pesanan = mysqli_query($connect_pesan, "INSERT INTO reservasi VALUES (null, $tanggal, $waktu, $jumlah, $nomor)");
            if($pesanan){
                header("location:reservasi-saya.php");
                exit();
            }else{
                echo'Gagal menyimpan Data';
            }
        }
    }else{
        header("location:after.php");
        exit();
    }
?>