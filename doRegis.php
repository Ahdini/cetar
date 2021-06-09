<?php
/*    //memulai Session
    session_start();
    //memuat dan menginisialisasi class User
    include 'connect.php';
    $connect = new mysqli();
    if(isset($_POST['inputEmail'])){
    //memeriksa apakah rincian user kosong
        if(!empty($_POST['inputEmail']) && !empty($_POST['inputNamaAwal']) && 
        !empty($_POST['inputNamaAkhir']) && !empty($_POST['inputPassword']) && 
        !empty($_POST['inputPassword2'])){
    //membandingkan password and konfirmasi password
            if($_POST['Password'] !== $_POST['Password2']){
                $sesiData['status']['type'] = 'error';
                $sesiData['status']['msg'] = 'Kata sandi tidak sama'; 
            }else{
    //memeriksa apakah user sudah ada di dalam database
                $kondSblmnya['where'] = array('email'=>$_POST['inputEmail']);
                $kondSblmnya['return_type'] = 'count';
                $userSblmnya = $connect->getRows($kondSblmnya);
                if($userSblmnya > 0){
                    $sesiData['status']['type'] = 'error';
                    $sesiData['status']['msg'] = 'Email sudah ada, silakan gunakan email yang lain';
                }else{
        //memasukkan data user dalam database
                    $userData = array(
                        'email' => $_POST['inputEmail'],
                        'nama_awal' => $_POST['inputNamaAwal'],
                        'nama_akhir' => $_POST['inputNamaAkhir'],
                        'kata_sandi' => md5($_POST['password'])
                    );
                    $insert = $connect->insert($userData);
        //Status ditetapkan berdasarkan data yang dimasukkan
                    if($insert){
                        $sesiData['status']['type'] = 'sukses';
                        $sesiData['status']['msg'] = 'Anda telah berhasil didaftarkan.';
                        header('location:after.php');
                        exit();
                    }else{
                        $sesiData['status']['type'] = 'error';
                        $sesiData['status']['msg'] = 'Terjadi masalah, silahkan coba lagi.';
                        header('location:regis.php');
                        exit();
                    }
                }
            }
        }else{
            $sesiData['status']['type'] = 'error';
            $sesiData['status']['msg'] = 'Isi semua bidang.';
            header('location:regis.php');
            exit(); 
        }
    } */

    session_start();  
    if(isset($_POST['Daftar'])){

        $email = filter_input(INPUT_POST, 'inputEmail', FILTER_VALIDATE_EMAIL);
        $nama_awal = filter_input(INPUT_POST, "inputNamaAwal", FILTER_SANITIZE_STRING);
        $nama_akhir = filter_input(INPUT_POST, "inputNamaAkhir", FILTER_SANITIZE_STRING);

        $kata_sandi = $_POST["inputKataSandi"];
        $konfirmasi_kata_sandi = $_POST["inputKonfirmasiKataSandi"];

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
        }else if($kata_sandi==""){
            $_SESSION["message"] = "Kata sandi harus diisi";
            header("location:regis.php");
            exit();
        }else if($kata_sandi!=$konfirmasi_kata_sandi){
            $_SESSION["message"] = "Kata sandi tidak sama";
            header("location:regis.php");
            exit();
        }else{

            //apakah email sudah digunakan?
            include("connect.php");
            /*if(isset($_POST['Daftar'])){
                mysqli_query($connect,"insert into pengguna set
                email = '$_POST[inputEmail]',
                nama_awal = '$_POST[inputNamaAwal]',
                nama_akhir = '$_POST[inputNamaAkhir]',
                kata_sandi = '$_POST[inputKataSandi]'
                ");
                header("location:after.php");
                exit();*/
            $result = $connect->query("SELECT * FROM pengguna WHERE email LIKE '".$email."'");

            if($result->num_rows==0){

                $connect->query("INSERT INTO pengguna VALUES (null,'".$email."',
                '".$nama_awal."','".$nama_akhir."','".$kata_sandi."','pengguna')");
                header("location:after.php");
                exit();
                

                /*setcookie("userID",$result->fetch_assoc(["userID"]));
                header("location:after.php");
                exit();*/
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
