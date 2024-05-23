<?php
include_once('Header.php');
include('toast.php');
?>
<!-- Navbar(Menu) -->
<?php
include_once('Menu.php');
?>
<!-- slider_top -->
<section id="slider_top">
    <div class="slider_container">
        <ul class="slider">
            <li><i class="fa fa-refresh"></i><span>Đổi trả <br>trong vòng 7 ngày</span></li>
            <li><i class="fa fa-truck"></i><span>Miễn phí <br>vận chyển 10km</span></li>
            <li><i class="fa fa-money"></i><span>Thanh toán <br>khi giao hàng</span></li>
            <li><i class="fa fa-thumbs-up"></i><span>Sản phẩm <br>chính hãng</span></li>
            <li><i class="fa fa-wrench"></i><span>Chính sách <br>bảo hàng</span></li>
        </ul>
    </div>
</section>
<!-- banner -->
<?php
include_once('Banner.php');
?>
<!-- Tìm kiếm -->

<!-- Main conten -->
<section id="main_conten ">
    <div class="container_main">
        <!-- catgory -->
        <div class="left_menu wow fadeInLeft">
            <?php
            include_once('Category.php');
            ?>
            <div class="img_left">
                <img src="./Image/Product/thum1.jpg" alt="">
            </div>
        </div>
        <!-- Sản phẩm mới nhất -->

        <?php
        require_once 'Ketnoi.php';
        $sql = "SELECT * FROM products ORDER BY Creatdate DESC LIMIT 8";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            echo '<div class="product wow fadeInDown">';
            echo '<img src="./Image/Banner/ma-giam-gia-adayroi-do-gia-dung.jpg" width="100%" alt="">';
            echo '<div class="product_highly">';
            echo '<div class="product_title">';
            echo '<h3>Sản phẩm mới nhất</h3>';
            echo '</div>';
            echo '<div class="product_cart wow fadeInDown">';
            while ($row = mysqli_fetch_assoc($result)) {
                $tensanpham = $row["Name"];
                $image = $row['Image'];
                $gia = $row['price'];
                echo '<div class="cart_item">';
                echo '<img src="./Image/Product/' . $image . '" alt="' . $tensanpham . '">';
                echo '<a href="product_deltail.php?ProductID=' . $row["ProductID"] . '">' . $tensanpham . '</a><br>';
                echo '<span>' . number_format($gia,0,'.','.') . 'đ</span>';
                echo '<a class="add" href="cart.php?ProductID=' . $row["ProductID"] . '"><i class="fa fa-shopping-cart"></i>Mua ngay</a>';
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';
        } else {
            echo "Không tìm thấy sản phẩm nào.";
        }
        ?>

    </div>
    <!-- ảnh main containr -->
    <div class="Banner_main wow fadeInDown">
        <a href="shop.php"><img src="./Image/Banner/slide-may-xay-gertech.png" alt=""></a>
    </div>
    <!-- sản phẩm bán chạy -->
    <?php include('sanphambanchay.php') ?>
    <?php include('banner_banchay.php') ?>
    <?php include('sanphamnoi.php') ?>
    <?php include('youtobe.php') ?>
    <?php include('mayxay.php') ?>
    <?php include('card_suppot.php') ?>
    <?php include('tintuc_tragchu.php') ?>
    
   
</section>

<!-- Dang ki  -->
<?php
include_once('dangki.php');
?>
<!-- Footer -->
<?php
include_once('Footer.php');
?>