<?php
    session_start();
    if (isset($_POST['inputEmail'])) {
        $email = $_POST["inputEmail"];
        $sandi = $_POST["inputPassword"];

        if($email=="" and $sandi==""){
            $_SESSION["message"] = "Belum diisi";
            header("location:login.php");
            exit();
        }else if($email==""){
            $_SESSION["message"] = "Email harus diisi";
            header("location:login.php");
            exit();
        }else if($sandi==""){
            $_SESSION["message"] = "Kata Sandi harus diisi";
            header("location:login.php");
            exit();
        }else{

            include("connect.php");
            $result = $connect->query("SELECT * FROM pengguna WHERE email LIKE '".$email."' AND kata_sandi LIKE '".$sandi."'");

            if($result->num_rows==1){
                setcookie("userID",$result->fetch_assoc(["userID"]));
                header("location:after.php");
                exit();
            }else{
                $_SESSION["message"] = "Akun tidak ditemukan!";
                header("location:login.php");
                exit();
            }
        }

    }else{
        header("location:/");
        exit();
    }
?>