<?php 
require './config.php';
    $id = $_GET['id'];
    $id = filter_var($id,FILTER_SANITIZE_STRING);
    $sql = $connect->prepare("DELETE FROM account WHERE id_account =  ?");
    $sql->execute([$id]);
    header("location: view_acc.php");
?>