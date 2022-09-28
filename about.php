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
                            <?php if( !isset($_SESSION['user'])){ echo " login.php ";
                            }else{
                                echo "logout.php ";
                            }?>" class="btn btn-light ">
                                <?php if( isset($_SESSION['user'])){ echo "Đăng xuất";
                            }else{
                                echo "Đăng nhập";
                            }?>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
<div class="body_posi">
    <section class="breadcrumb_part" style="background-image:url('img/backgroud/ring.png'); width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2 style="text-shadow: black 0.1em 0.1em 0.2em">Thông tin hính của website</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="about_us_content">
                        <h5>một vài thông tin chính của wedsite</h5>
                        <h3>trang wed được thành lập vào ngày 10-4-2022. Wedsite được xây dựng trên nền code HTML, CSS, Javascript, PHP, Jquery. Wedsite gồm có các trang như là: Trang chủ, Trang thông tin, Trang sản phẩm, Trang Bài Đăng, Trang Đăng ký, Đăng
                            nhập
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->

    <section class="about_us ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 border border-dark">
                    <div class="about_us_content">
                        <img src="img/trangsuc/Backgound1.jpg" class="img-thumbnail">
                        <h5 style="text-align: center" class="text-dark">Wedsite kinh doanh các dòng sản phẩm liên quan về mặt hàng dây chuyền.</h5>
                    </div>
                </div>
                <div class="col-lg-4 border border-dark">
                    <div class="about_us_content ">
                        <img src="img/trangsuc/background2.jpg">
                        <h5 style="text-align: center" class="text-dark">Wedsite kinh doanh các dòng sản phẩm liên quan về mặt hàng về nhẫn.</h5>
                    </div>
                </div>
                <div class="col-lg-4 border border-dark">
                    <div class="about_us_content">
                        <img src="img/trangsuc/background3.jpg">
                        <h5 style="text-align: center" class="text-dark">Wedsite kinh doanh các dòng sản phẩm liên quan về mặt hàng về khuyên tai.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


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