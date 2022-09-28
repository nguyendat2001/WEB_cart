<?php 
session_start();


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
    <div class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/backgroud/bg_blog5.jpg" class="d-block" >
            <div class="carousel-caption">
                <h2 class="shadow text-white">Cùng xem những sự kiện tuyệt vời của chúng tôi.</h2>
            </div>
            </div>
        </div>
    </div>

    <section class="blog_area section_padding" style="top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-12" style="height:100px; text-decoration: underline;">
                    <h2 class="text">Các bài đăng</h2>
                </div>
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <form class="blog_item" >
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_1.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Tháng 2</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="">
                                    <h2>Các sản phẩm của Jewllery đã lên top tìm kiếm của Google</h2>
                                </a>
                                <p>Với hơn 300.000 lượt tìm kiếm các sản phẩm của Jewllery đã trở thành xu hướng và đạt được top sản phẩm trang sức được tìm kiếm nhiều nhất tuần của Google.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 9.843 bình luận</a></li>
                                </ul>
                            </div>
                        </form>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_2.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Tháng 2</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="#">
                                    <h2>Màng comback kết hợp với samsung của Jewllery</h2>
                                </a>
                                <p>Sự trở lại đầy ngoạn mục của Jewllery với màng comback kết hợp với samsung</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> đời sống</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 10.242 bình luận</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_3.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>20</h3>
                                    <p>Tháng 3</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="#">
                                    <h2>Show trình diển thời trang các sản phẩm Jewllery</h2>
                                </a>
                                <p>Các sản phẩm Jewllery được các người mẫu nổi tiếng sự dụng khi đi catwalk trên sàn runway của sân khấu lớn.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Đời sống</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 11.989 bình luận</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_4.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>16</h3>
                                    <p>Tháng 5</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="#">
                                    <h2>Lễ kỹ niệm 1.000.000 đơn hàng. Tặng quà khi khách đến cửa hàng mua hàng.</h2>
                                </a>
                                <p>Khách hàng đến của hàng mua sản phẩm sẻ được tặng quà mang về cho mỗi sản phẩm.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> đời sống</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 9.256 bình luận</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_5.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>20</h3>
                                    <p>Tháng 9</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="#">
                                    <h2>Mừng sinh nhật 15 năm thành lập Jewllery</h2>
                                </a>
                                <p>Jewllery mở chương trình tặng khách hàng 2 phầm quà khi mua sản phẩm có giá từ $500 ở tất cả của hàng.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Đời sống</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 12.804 Bình luận</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Từ khóa tìm kiếm' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Từ khóa tìm kiếm'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Tìm kiếm</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Doanh mục</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Đời sống</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Tin tức <i class="fas fa-hotel    "></i></p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Phong cách</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Sản phẩm</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Bài đăng gần đây</h3>
                            <div class="media post_item">
                                <img src="img/post/post_1.png" alt="post">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>Comback với samsung...</h3>
                                    </a>
                                    <p>January 12, 2019</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/post/post_2.png" alt="post">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>Kỷ niệm sinh nhật...</h3>
                                    </a>
                                    <p>02 giờ trước</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/post/post_3.png" alt="post">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>Tri ân 1.000.000 ...</h3>
                                    </a>
                                    <p>03 giờ trước</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/post/post_4.png" alt="post">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>Tặng quà khi ...</h3>
                                    </a>
                                    <p>01 giờ trước</p>
                                </div>
                            </div>
                        </aside>
                        


                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram </h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_5.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_6.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_7.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_8.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_9.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_10.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Nhận thông tin bài đăng</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Nhập vào email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Đăng ký</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!--::footer_part start::-->
    <footer class="footer_part border border-top ">
        <div class="footer_iner section_bg bg-white">
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