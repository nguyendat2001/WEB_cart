<?php 
require './config.php';
    $id = $_GET['id'];
    $id = filter_var($id,FILTER_SANITIZE_STRING);
    $sql = $connect->prepare("DELETE FROM products WHERE product_id = ?");
    $sql->execute([$id]);
    header("location: product_list.php");

?>