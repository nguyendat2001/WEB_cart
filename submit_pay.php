<?php 
session_start();
include 'config.php';
    if(isset($_post['submit']) ||  $_SESSION['user']){
        $sql = $connect->prepare("SELECT id_account FROM account WHERE username = ?");
        $sql->execute([$_SESSION['user']]);
        $row = $sql->get_result()->fetch_assoc();

        $delete = $connect->prepare("DELETE FROM carts ");
        $delete->execute([]);

        $price_bill = $_POST['price_bill'];
        $price_bill = FILTER_VAR( $price_bill,FILTER_SANITIZE_STRING);
        $location = $_POST['location'];
        $location = FILTER_VAR( $location,FILTER_SANITIZE_STRING);
        $id_account= $row['id_account'];
        $id_account = FILTER_VAR( $id_account ,FILTER_SANITIZE_STRING);

        $insert = $connect->prepare("INSERT INTO bills (id_account,location,price_bill) VALUE (?,?,?)");
        $insert->execute([ $id_account,$location,$price_bill]);

        // $_SESSION["thongbao"]='<script language="javascript"> alert(mua hàng thành công) </script>';
        header("location: index.php");

    }

?>