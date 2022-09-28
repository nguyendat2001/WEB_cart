<?php
    $connect = mysqli_connect("localhost","root","","projectweb");
    mysqli_set_charset($connect,"utf8");

    if ($connect->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

?>