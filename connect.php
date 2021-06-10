<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "restoran";

$connect = new mysqli ($host, $user, $pass, $db);

if($connect){
    //echo "Berhasil terkoneksi ke server Anda !";
}else{
    echo "Gagal terkoneksi ke server Anda !";
    exit();
}
