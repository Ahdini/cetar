<?php
    session_start();
    if(isset($_POST["inputTanggal"])){
        $tgl_pesan = date("Y-m-d");
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
            $pesanan->query("INSERT INTO `reservasi` (`No_Pemesanan`, `tanggal`, `Tgl_Acara`, `Jam_Acara`, `jumlah_meja`, `no_meja`) 
            VALUES ('', '$tgl_pesan', '$tanggal', '$waktu', '$jumlah', '$nomor')");
            header("location:reservasi-saya.php");
            exit();
            
        }
    }else{
        header("location:after.php");
        exit();
    }
?>