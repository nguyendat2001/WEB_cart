<?php session_start();?>

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
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/jquery.header.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    
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

                            </ul>
                        </div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>

<div class="body_posi">

    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Mời bạn đăng ký tài khoản</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="login_part section_padding " style="background-color:rgba(244, 202, 231, 0.2)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6" >
                    <div class="login_part_text text-center" style="background: url(img/backgroud/login_bg_1.jpg)">
                        <div class="login_part_text_iner">
                            <img src="img/backgroud/login_bg_1.jpg">
                            <h2>Đã có tài khoản</h2>
                            <p>Lick chọn nút bên dưới để đăng nhập.</p>
                            <a href="login.php" class="btn_3">Đăng nhập</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Chào mừng bạn đến với <strong>JEWLLERY</strong> <br>
                                Đăng ký thông tin ngay</h3>
                            <form class="row contact_form" id="signupForm" action="submit_register.php" method="POST" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star ">
                                    <input type="text" class="form-control m-3" for="email" id="email" name="email" value=""
                                        placeholder="Email">
                                </div>
                                <div class="col-md-12 form-group p_star ">
                                    <input type="password" class="form-control  m-3" for="password" id="password" name="password" value=""
                                        placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group p_star ">
                                    <input type="password" class="form-control  m-3" for="repassword" id="repassword" name="repassword" value=""
                                        placeholder="Nhập lại Password">
                                </div>
                                <div class="col-md-12 form-group ">
                                    
                                    <div class="creat_account d-flex align-items-center row  m-3">
                                        <input class="col-2" type="checkbox" id="f-option agree" id="agree"  name="agree" value="agree" >
                                        <label class="col-9" for="f-option" for="agree">Đồng ý các quy định của chúng tôi</label>
                                    </div>

                                    <div class="creat_account d-flex align-items-center ">
                                        <p class="text text-danger">
                                            <?php 
                                                if( isset($_SESSION["thongbao"]) ){
                                                    echo $_SESSION['thongbao'];
                                                    unset($_SESSION["thongbao"]);
                                                }
                                            ?>
                                        </p>
                                    </div>
                                    
                                    <button type="submit" name="submit" value="submit" class="btn_3">
                                        Đăng Ký
                                    </button>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer_part">
        <div class="footer_iner section_bg" style="background:#fff;">
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
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
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