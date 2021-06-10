<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "restoran";

$pesanan = new mysqli ($host, $user, $pass, $db);

if($pesanan){
    //echo "Berhasil terkoneksi ke server Anda !";
}else{
    echo "Gagal terkoneksi ke server Anda !";
    exit();
}
