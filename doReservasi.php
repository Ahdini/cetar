<?php
    if(isset($_POST["inputTanggal"])){
        $tanggal = $_POST["inputTanggal"];
        $waktu = $_POST["inputWaktu"];
        $jumlah = $_POST["inputJmlhMeja"];
        $nomor = $_POST["inputNoMeja"];
        if(){
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
            $pesanan->query("INSERT INTO reservasi VALUES(null, $tanggal, $waktu,
            $jumlah,$nomor)");
            header("location:reservasi-saya.html");
            exit();
        }
    }else{
        header("location:after.php");
        exit();
    }
?>