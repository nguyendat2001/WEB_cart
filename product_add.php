<?php 
session_start();
    include './config.php';
    $sql_brand = "SELECT * FROM brands";
    $query_brand = mysqli_query($connect,$sql_brand);

        if( isset($_POST["submit"])){
            $product_name = $_POST["product_name"];
            $product_name = filter_var($product_name, FILTER_SANITIZE_STRING);
            $price = $_POST["price"];
            $price = filter_var($price, FILTER_SANITIZE_STRING);
            $image = $_FILES["image"]["name"];
            $image = filter_var($image, FILTER_SANITIZE_STRING);
            $image_tmp = $_FILES["image"]["tmp_name"];
            $description = $_POST["description"];
            $description = filter_var($description, FILTER_SANITIZE_STRING);
            $quantity = $_POST["quantity"];
            $quantity = filter_var($quantity, FILTER_SANITIZE_STRING);
            $brand_id = $_POST["brand_id"];
            $brand_id = filter_var($brand_id, FILTER_SANITIZE_STRING);

            $sql_product = $connect->prepare("SELECT * FROM products");

            $sql_product->execute();

            $old = $sql_product->get_result()->fetch_assoc();

            $sql = $connect->prepare("INSERT INTO products (product_name,image,price,quantity,description,brand_id) 
            VALUE (?,?,?,?,?,?)");
            $sql->execute([$product_name,$image,$price,$quantity,$description,$brand_id]);

            move_uploaded_file($image_tmp,'img/'.$image);
            header('location: product_list.php');


        }

?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JEWLLERY</title>
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
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
    <!-- Header part end-->
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part" style="background-image:url('img/backgroud/ring.png'); width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2 style="text-shadow: black 0.1em 0.1em 0.2em">Thêm sản phẩm</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->
    
    
    <!-- feature part here -->
    <section class="feature_part section_padding" style="background:rgba(244, 202, 231, 0.2);">
        <div class="container">
            <form class="form row justify-content-center" enctype="multipart/form-data" method="POST">
                <div class="col-lg-4"><img class="img-thumbnail" alt="Cinque Terre" width="304" height="236" src="./img/backgroud/background_add-product2.jpg"></div>
                    <div class="col-lg-8 row justify-content-center">
                    <label class="col-lg-4  mt-2">Tên Sản phẩm: </label>
                    <input type="text" class="col-lg-8  mt-2" name="product_name" >
                    <label class="col-lg-4  mt-2">Anh san pham: </label>
                    <input type="file" class="col-lg-8  mt-2" name="image">
                    <label class="col-lg-4  mt-2">Gia san pham: </label>
                    <input type="text" class="col-lg-8  mt-2" name="price">
                    <label class="col-lg-4  mt-2">So luong san pham: </label>
                    <input type="text" class="col-lg-8  mt-2" name="quantity" >
                    <label class="col-lg-4  mt-2">Mo ta: </label>
                    <input type="text" class="col-lg-8  mt-2" name="description">
                    <label class="col-lg-4 mt-2">loai hang:</label>
                    
                    <select class="form-group col-lg-8  mt-3 border" name="brand_id">
                        <?php while($row_brand = mysqli_fetch_assoc($query_brand)){ ?>
                        <option value="<?php echo $row_brand['brand_id'];?>"> <?php echo $row_brand['brand_name'];?> </option>
                        <?php } ?>
                    </select>
                    
                    <button type="submit" name="submit" class="btn btn-light">submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
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
                        <h2>Get promotions & updates!</h2>
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Enter your mail">
                            <a href="#" class="btn_1">Subscribe</a>
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
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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