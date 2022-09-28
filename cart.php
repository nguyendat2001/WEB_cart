<?php 
session_start();
require 'config.php';
    $sql = "SELECT * FROM carts ";
    $query = mysqli_query($connect,$sql);
    // truy van CSDL
?>

<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JEWLLERY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="/isocms/skin/css/bootstrap.min.css" />
    <script src="js/jquery.validate.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/jquery.header.js"></script>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php" style="max-width: 120px;"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Trang Chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">Thông tin</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="product_list.php">Sản Phẩm</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">Bài Đăng</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if( !isset($_SESSION['user']) || $_SESSION['user'] != "admin@gmail.com"){ echo "invisible";}?>" href="view_acc.php">xem tài khoản</a>
                                </li>
                            </ul>
                        </div>
                        <div class=" d-flex align-items-left">
                            <a href="
                            <?php if( !isset($_SESSION['user'])){ echo "login.php";
                            }else{
                                echo "logout.php";
                            }?>" class="btn btn-light "> <?php if( isset($_SESSION['user'])){ echo "Đăng xuất";
                            }else{
                                echo "Đăng nhập";
                            }?></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
<div class="body_posi">
    <div class="row p-5">
        <center><h2 class="m-5"style="text-decoration: underline;">Giỏ hàng</h2></center>
    </div>
  <section class="cart_area section_padding">
    <form action="submit_pay.php" method="post" class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Sản phẩm</th>
                <th scope="col">Giá tiền</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tổng cộng</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                <?php
                $totals = 0;
                while ($row = mysqli_fetch_assoc($query)){
                    $totals += $row['cart_quantity'] * $row['price'] ;
                    ?>

                <tr>
                    <td>
                        <img src="<?php echo $row['image'];?>" width="200px;">
                    </td>
                    <td>
                        <div class="media">
                            <div class="d-flex">
                            </div>
                            <div class="media-body">
                            <p><?php echo $row['product_name'];?></p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <h5>$<?php echo $row['price'];?></h5>
                    </td>
                    <td>
                        <?php echo $row['cart_quantity'];?>
                    </td>
                    <td>
                        <h5>$<?php echo $row['cart_quantity'] * $row['price'] ;?></h5>
                    </td>
                    <td>
                        <a class="btn_3" type="button" name="submit" href="submit_delete_cart.php?id=<?php echo $row['cart_id'];?>" >Xóa</a>
                    </td>
                </tr>
                <?php }?>
              
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Tổng số tiền</h5>
                </td>
                <td>
                  <h5>$<?php echo $totals;?> <input class="invisible" name="price_bill" value="<?php echo $totals;?>"></h5>
                </td>
              </tr>
              
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right ">
              <input  type="text" placeholder="nhập địa chỉ khách hàng" name="location" required><br><br>
            <a class="btn_1" href="./product_list.php">Tiếp tục mua hàng</a>
            <button class="btn_1 checkout_btn_1" name="submit" type="submit">Mua hàng</button>
          </div>
        </div>
      </div>

      <?php if( isset($_SESSION['thongbao'])){
          echo $_SESSION['thongbao'];
          unset( $_SESSION['thongbao']);
      }?>
    </FROM>

  <footer class="footer_part">
        <div class="footer_iner">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_logo">
                                <a href="index.php"><img src="img/logo.png" alt="#"></a>
                            </div>
                            <div class="footer_menu_item">
                                <a href="index.php">trang chủ</a>
                                <a href="about.php">Thông tin</a>
                                <a href="product_list.php">Sản phẩm</a>
                                <a href="blog.php">Bài đăng</a>
    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="social_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  <div class="copyright_part">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <P>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            </P>
                            <div class="copyright_link">
                                <a href="#">Turms & Conditions</a>
                                <a href="#">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>

</html>