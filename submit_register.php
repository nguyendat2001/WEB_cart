<?php 
session_start();
include 'config.php';
// include file config.php into file  
    if( isset( $_POST['submit']) && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['repassword'] != '')
    // use to check for have user lick submit and all info form different null
    {
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $password = $_POST["password"];
        $password = filter_var($password, FILTER_SANITIZE_STRING);
        $repassword = $_POST["repassword"];
        $repassword = filter_var($repassword, FILTER_SANITIZE_STRING);
        $level = 0;
       
        $sql = $connect->prepare("SELECT * FROM account WHERE username=?");
        $sql->execute([$email]);

        $password = md5($password);

        $row=$sql->get_result()->fetch_assoc();
        // encode(ma hoa) password 
        if ($row > 0){
            $_SESSION["thongbao"] = "email đã tồn tại";
            header("location:register.php");
            die();
        }
        $insert = $connect->prepare("INSERT INTO account (username,password,level) VALUES (?,?,?)");
        $insert->execute([$email,$password,$level]);

        $_SESSION["thongbao"] = "đăng ký thành công";
        header("location:login.php");
    }else {
        header("location:register.php");
    }

?>