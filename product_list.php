<?php 
session_start();
require 'config.php';
    $sql = "SELECT * FROM products inner join brands on products.brand_id=brands.brand_id";
    $query = mysqli_query($connect,$sql);
    // truy van CSDL
    $sql_brand = "SELECT * FROM brands";
    $query_brand = mysqli_query($connect,$sql_brand);
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
    <img src="img/backgroud/bg_new.webp" class="d-block" style="width:100%;">
  
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 style="height:100px;text-decoration: underline;">Danh sách sản phẩm</h2>
                </div>
                <div class="col-md-3">
                    <div class="product_sidebar">
                        <div class="single_sedebar m-2">
                            <form action="search_product.php" method="POST">
                                <input type="text" name="search_text" class="text text-dark" placeholder="từ khóa tìm kiếm">
                                 <button type="submit" name="search_submit" ><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        
                        <div class="single_sedebar p-3" style="background:#F4EDF2;border-radius:30px; text-align:center">
                            <a href="cart.php" class="text text-dark" >Giỏ hàng</a>
                        </div>

                        <div class="dropdown select_option">
                            <button type="button" class="select_option_list btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                Loại sản phẩm
                            </button>
                            <ul class="select_option_dropdown dropdown-menu">
                                <?php while($row_brand = mysqli_fetch_assoc($query_brand)){?>
                                <li><a class="dropdown-item" href="type_brand_list.php?brand_id=<?php echo  $row_brand['brand_id'];?>" style="background:#F4EDF2;"><?php echo $row_brand['brand_name'];?></a></li>
                                <?php } ?>
                                <li><a class="dropdown-item" href="product_list.php" style="background:#F4EDF2;">Tất cả</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="product_list">
                        <div class="row">
                            <?php while($row = mysqli_fetch_assoc($query)){?>
                            <div class="col-lg-3 col-sm-3 p-2 m-2 shadow" style="border-radius:20px;">
                                <div class="single_product_item">
                                    
                                    <a href="single-product.php?id=<?php echo $row['product_id'];?>"><img src="img/<?php echo $row['image'];?>" alt="#" class="img-fluid"></a>
                                    <h3> <a href="single-product.php?id=<?php echo $row['product_id'];?>"><?php echo $row['product_name'];?></a> </h3>
                                    <p>$<?php echo $row['price'];?></p>
                                </div>
                            </div>
                            <?php }?>
                            

                            <div class="col-lg-2 col-sm-2 p-2 m-2 <?php if( !isset($_SESSION['user']) || $_SESSION['user'] != "admin@gmail.com"){ echo "invisible";}?>" style="">
                                <a href="product_add.php">
                                    <div class="single_product_item" style="padding-top:150px;">
                                        <center><img src="img/icon/add_icon.png" style="width:50px;height: 50px;" alt="#" class="img-fluid">
                                            <h3> <a href="product_add.php">Thêm sản phẩm</a> </h3>
                                            <p></p>
                                        </center>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="load_more_btn text-center <?php if( !isset($_SESSION['user']) || $_SESSION['user'] != "admin@gmail.com"){ echo "invisible";}?>">
                            <a href="product_add.php" class="btn_3">Thêm sản phẩm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature_part section_padding">
        <div class="container">
        <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="feature_part_tittle">
                        <h3>Cửa hàng kim hoàng lớn hàng đầu thế giới.</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_content">
                        <p>Luôn đặt chất lượng sản phẩm lên hàng đầu. Dịch vụ tư vấn tậng tình.  Chất lượng phục vụ chu đáo chuẩn 5 sao.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_1.svg" alt="#">
                        <h4>Credit Card Support</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_2.svg" alt="#">
                        <h4>Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_3.svg" alt="#">
                        <h4>Free Delivery</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_4.svg" alt="#">
                        <h4>Product with Gift</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature part end -->

    <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Nhận ưu đãi & cập nhật</h2>
                        <p>Nhập vào email để trở thành một trong những người nhận thông tin và ưu đãi sớm nhất.</p>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Nhập email">
                            <a href="#" class="btn_1">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe part end -->

    <!--::footer_part start::-->
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