<?php
include 'config.php';
session_start();
    if(isset($_POST['submit']) && $_POST['email'] != '' && $_POST['password'] != ''){
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        $password = filter_var($password, FILTER_SANITIZE_STRING);
        $password = md5($password);

        $sql = $connect->prepare("SELECT * FROM account WHERE username = '$email' AND password =?");
        $sql->execute([$password]);
        
        if($sql->get_result()->fetch_assoc()>0){
            $_SESSION['user'] = $email;
            header("location: index.php");
        }else{
            $_SESSION["thongbao"] = "email hoặc password đã sai";
            header("location: login.php");
            die();
        }
    }else{
        $_SESSION['thongbao'] = "Nhập đầy đủ thông tin";
        header("Location:login.php");
    }
?>