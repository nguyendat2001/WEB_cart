<?php 
session_start();
include 'config.php';
// include file config.php into file  
    if( isset( $_POST['submit']))
    // use to check for have user lick submit and all info form different null
    {
        $product_name = $_POST['product_name'];
        $product_name = filter_var($product_name,FILTER_SANITIZE_STRING);
        $price = $_POST['price'];
        $price = filter_var($price,FILTER_SANITIZE_STRING);
        $image = $_POST['image'];
        $image = filter_var($image,FILTER_SANITIZE_STRING);
        $quantity_cart = $_POST['quantity_cart'];
        $quantity_cart = filter_var($quantity_cart,FILTER_SANITIZE_STRING);
        
        if( isset( $_SESSION['user'])){
        $sql = $connect->prepare("INSERT INTO carts (product_name,image,price,cart_quantity) VALUES (?,?,?,?)");
        $sql->execute([$product_name,$image,$price,$quantity_cart]);
        header("location:cart.php");
        } else{
            header("location:login.php");
        }

    }

?>