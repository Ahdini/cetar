<?php
    session_start();  
    require_once("connect.php"));  
    if(isset($_POST['inputEmail'])){

        $email = filter_input(INPUT_POST, 'inputEmail', FILTER_VALIDATE_EMAIL);
        $nama_awal = filter_input(INPUT_POST, "inputNamaAwal", FILTER_SANITIZE_STRING);
        $nama_akhir = filter_input(INPUT_POST, "inputNamaAkhir", FILTER_SANITIZE_STRING);

        $sandi = password_hash($_POST["inputPassword1"], PASSWORD_DEFAULT);
        $reSandi = $_POST["inputPassword2"];

        if($email==""){
            $_SESSION["message"] = "Email harus diisi";
            header("location:regis.php");
            exit();
        }else if($nama_awal==""){
            $_SESSION["message"] = "Nama awal harus diisi";
            header("location:regis.php");
            exit();
        }else if($nama_akhir==""){
            $_SESSION["message"] = "Nama akhir harus diisi";
            header("location:regis.php");
            exit();
        }else if($sandi==""){
            $_SESSION["message"] = "Kata sandi harus diisi";
            header("location:regis.php");
            exit();
        }else if($sandi!=$reSandi){
            $_SESSION["message"] = "Kata sandi tidak sama";
            header("location:regis.php");
            exit();
        }else{

            //apakah email sudah digunakan?
            include("connect.php");
            $result = $connect->query("SELECT * FROM pengguna WHERE email LIKE '".$email."'");

            if($result->num_rows==0){
                $sql = "INSERT INTO pengguna (userID, email, nama_awal, nama_akhir, kata_sandi) 
                VALUES (null, :Email, :Nama Awal, :Nama Akhir, :Kata Sandi)";
                $stmt = $connect->prepare($sql);

                // bind parameter ke query
                $params = array(
                    ":Nama Awal" => $nama_awal,
                    ":Nama Akhir" => $nama_akhir,
                    ":Kata Sandi" => $sandi,
                    ":Email" => $email
                );

                // eksekusi query untuk menyimpan ke database
                $saved = $stmt->execute($params);

                setcookie("userID",$result->fetch_assoc(["userID"]));
                header("location:after.php");
                exit();
            }else{
                $_SESSION["message"] = "Email sudah digunakan";
                header("location:regis.php");
                exit();
            }

        }

    }else{
        header("location:beranda.html");
        exit();
    }
?>
