<?php
session_start();
ob_start();
require_once 'cart_f.php';
$cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quản lý đồ gia dụng </title>
    <!-- Custom css -->
    <link rel="stylesheet" href="./Css/style.css">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Jequery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- sweet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.9.0/sweetalert2.min.css">
    <!-- slider -->
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.green.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/animate.css">
</head>

<body >
    
    <!-- thanh cuộn -->

    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- Header -->
    <header id="header">
        <!-- Header_top -->
        <div class="header_top">
            <div class="contacinfo">
                <ul class="nav">
                    <li><a href="tel:0999999999"><i class="fa fa-phone"></i> +84 999999999</a></li>
                    <li><a><i class="fa fa-envelope"></i> dogiadungf4.com</a></li>
                </ul>
            </div>
            <div class="media">
                <ul class="nav_media">
                    <li><a href="https://www.facebook.com/NhatIT2307"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.facebook.com/NhatIT2307"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/NhatIT2307"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.facebook.com/NhatIT2307"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- header-middle -->
        <div class="header-middle">
            <div class="container_header">
                <!-- Logo -->
                <div class="header_logo">
                    <a href="index.php">
                        <img width="130px" src="./Image/Logo-gia-dụng-Hipmart.png" alt="Logo">
                    </a>
                </div>

                <!-- Tìm kiếm -->
                <div class="header_search">
                    <form action="timkiem.php" method="get">
                        <div class="search">
                            <input type="text" name="search" id="search" placeholder="Vùi lòng nhập từ khóa ">
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
                <!-- Login .cart -->
                <div class="header_mid">
                    <ul class="header_mids">
                        <li><i class="fa-solid fa-basket-shopping"></i><span class="aa-cart-notify"><?php echo totalItems($cart) ?></span><a href="viewcart.php">Giỏ Hàng</a></li>
                        <?php
                        if (isset($_SESSION['client']['user'])) {
                            echo "<li> <i class='fa-solid fa-user-tie'></i>Xin chào, {$_SESSION['client']['user']}</li>
                            <li><i class='fa-solid fa-right-from-bracket'></i><a href='Logout.php'>Đăng xuất</a></li>";
                        } else {
                            echo "<li><i class='fa-regular fa-circle-user'></i><a href='Login.php'>Đăng Nhập</a></li>";
                        }

                        ?>
                    </ul>
                </div>
            </div>
        </div>

    </header>
    <div class="fixed-media">
        <a href="https://zalo.me/g/jnddwk747"><img src="https://web.nvnstatic.net/tp/T0298/img/zalo.svg?v=3" alt=""></a>
    </div>
    <div class="fixed-media_call">
        <a href="tel:0372583407"><img src="https://web.nvnstatic.net/tp/T0298/img/hotline.svg?v=3" alt=""></a>
    </div>
    <div class="fixed-media_mess">
        <a href="https://www.facebook.com/messages/t/516522759"><img src="https://janhome.vn/images/icon/messenger.svg" alt=""></a>
    </div>