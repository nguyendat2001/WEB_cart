<?php 
    session_start();

?>

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JEWLLERY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">


    <link rel="stylesheet" type="text/css" href="/isocms/skin/css/bootstrap.min.css" />
    <script src="js/jquery.validate.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/jquery.header.js"></script>
</head>

<body >
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav  class="navbar navbar-expand-lg navbar-light ">
                        <a class="navbar-brand" href="index.php" style="max-width: 120px; left:500px;"> <img src="img/logo.png" alt="logo"> </a>
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
                            <a href="cart.html">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>

<div class="body_posi">
    <div id="carousel-example-generic" class="carousel slide" data-interval="5000" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-bs-target="#carousel-example-generic" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel-example-generic" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel-example-generic" data-bs-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img class="d-block w-100" alt="First slide" src="img/backgroud/ring.png" />
                <center>
                    <div class="carousel-caption d-none d-md-block ">
                        <h2 class="text-white" style="text-shadow: black 0.1em 0.1em 0.2em">Mẫu mã đẹp</h2>
                        <h4 class="text-white" style="text-shadow: black 0.1em 0.1em 0.2em">Trang wed cung cấp trang sức với nhiều mẫu mã khác nhau hợp với thời trang hiện nay.</h4>
                    </div>
                </center>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" alt="Second slide" src="img/backgroud/2960491.jpg" />
                <center>
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-white " style="text-shadow: black 0.1em 0.1em 0.2em">Sản phẩm chất lượng</h2>
                        <h4 class="text-white " style="text-shadow: black 0.1em 0.1em 0.2em">Chất lượng sản phẩm được đặt lên hàng đầu.</h4>
                    </div>
                </center>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" alt="Third slide" src="img/backgroud/2149631.jpg" />
                <enter>
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-white" style="text-shadow: black 0.1em 0.1em 0.2em">Uy tính số 1</h2>
                        <h4 class="text-white" style="text-shadow: black 0.1em 0.1em 0.2em">Trang wed có được một cộng đồng người dùng lớn tin cậy và sử dụng.</h4>
                    </div>
                </enter>
            </div>
        </div>
        <!-- Controls -->
        <a class="carousel-control-prev" data-bs-target="#carousel-example-generic" type="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carousel-example-generic" type="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>

    <!-- Header part end-->

    <!-- banner part start-->

    <section class="banner_part" style="background-color:rgba(244, 202, 231, 0.2);top:50px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Các loại trang sức đẹp
                            </h1>
                            <p>Cung cấp các sản phẩm đẹp nhất cho người dùng.</p>
                            <a href="product_list.php" class="btn_1">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_img">
            <img src="img/2960518.jpg" alt="#" style="max-width: 700px; border-radius:30px;" class="img-fluid">
            <img src="img/banner_pattern.png " alt="#" class="pattern_img img-fluid">
        </div>
    </section>
    <!-- banner part start-->

    <!-- product list start-->
    <section class="single_product_list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="img/ring3.jpg" style=" border-radius:30px;" class="img-fluid" alt="#">
                                    <img src="img/product_overlay.png" style=" border-radius:30px;" alt="#" class="product_overlay img-fluid">
                                </div>
                            </div>

                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>Sản phẩm mới</h5>
                                    <h2> <a href="single-product.php">Nhẫn Vàng 610 18K Unisex AvaJi AVJ</a> </h2>
                                    <a href="product_list.php" class="btn_3">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="img/ring1.jpg" style="height:470px; width:480px; border-radius:30px;" class="img-fluid" alt="#">
                                    <img src="img/product_overlay.png" style="height:470px; width:480px; border-radius:30px;" alt="#" class="product_overlay img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>Sản phẩm mới</h5>
                                    <h2> <a href="single-product.php">Nhẫn Hợp Kim Nam Nữ AvaJi Đính Đá AVJ</a> </h2>
                                    <a href="product_list.php" class="btn_3">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="img/ring2.jpg" style="height:400px; width:480px; border-radius:30px;" class="img-fluid" alt="#">
                                    <img src="img/product_overlay.png" style="height:470px; width:480px; border-radius:30px;" alt="#" class="product_overlay img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>Sản phẩm mới</h5>
                                    <h2> <a href="single-product.php">Nhẫn Vàng Trắng 10K Nam AvaJi AVJ</a> </h2>
                                    <a href="product_list.php" class="btn_3">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list end-->

    <!-- trending item start-->
    <section class="trending_items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Nổi bật</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <div class="single_product_item_thumb">
                            <img src="img/trangsuc/DC1.webp" alt="#" class="img-fluid">
                        </div>
                        <h3> <a href="single-product.php">Dây Chuyền Bạc Unisex Mạ Vàng 18K AvaJi</a> </h3>
                        <p>$599,9</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="img/trangsuc/11.webp" alt="#" class="img-fluid">
                        <h3> <a href="single-product.php">Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi</a> </h3>
                        <p>$599,9</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="img/trangsuc/5.webp" alt="#" class="img-fluid">
                        <h3> <a href="single-product.php">Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi</a> </h3>
                        <p>$599,9</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="img/trangsuc/E8.webp" alt="#" class="img-fluid">
                        <h3> <a href="single-product.php">Bông Tai Vàng Trắng 10K Nữ AvaJi</a> </h3>
                        <p>$599,9</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="img/trangsuc/DC3.webp" alt="#" class="img-fluid">
                        <h3> <a href="single-product.php">Dây Chuyền Vàng Trắng 10K Unisex AvaJi</a> </h3>
                        <p>$599,9</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="img/trangsuc/8.webp" alt="#" class="img-fluid">
                        <h3> <a href="single-product.php">Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi</a> </h3>
                        <p>$599,9</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending item end-->

    <!-- feature part here -->
    <section class="feature_part section_padding">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="feature_part_tittle">
                        <h3><strong>JEWLLERY</strong> luôn tự hào là thương hiệu trang sức đi đầu trong lĩnh vực Thương Mại Điện Tử</h3>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="feature_part_content">
                        <p>Với sự đa dạng về chủng loại, độc đáo về kiểu dáng, dẫn đầu về xu hướng và tạo được sự tin tưởng và yêu mến của khách hàng trong và ngoài nước. Nét tinh xảo lấp lánh của các sản phẩm được thiết kế và chế tác công phu bằng công
                            nghệ tiên tiến hiện đại và kiểu dáng thời trang quốc tế. Sản phẩm trang sức phụ kiện sẽ làm thăng hoa nét duyên dáng, vẻ quý phái cho quý khách hàng, dù ở bất cứ nơi đâu. Sản phẩm được thiết kế tinh tế, phong cách sang trọng,
                            chất lượng cao cấp với giá thành tốt nhất</p>
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