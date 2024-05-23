<?php
require('Header.php');
include('toast.php');
?>
<!-- Navbar(Menu) -->
<?php
require('Menu.php');
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

<!-- Main conten -->
<section id="main_conten">
    <div class="container_main">
        <!-- catgory -->
        <div class="left_menu">
            <?php
            require('Category.php');
            ?>
            <div class="img_left">
                <img src="./Image/Product/thum1.jpg" alt="">
            </div>
        </div>

        <!-- Sản phẩm -->
        <div class="product">
            <div class="product_highly">
                <div class="product_title">
                    <h3>Tìm kiếm</h3>
                </div>
                <div class="result">
                    <?php
                    require('Ketnoi.php');
                    $search = $_GET["search"];
                    $sql = "SELECT COUNT(*) as kq FROM products WHERE `Name` LIKE '%$search%'";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $kq = $row["kq"];
                        echo "<p>Có $kq kết quả phù hợp</p>";
                    } else {
                        echo "Lỗi truy vấn cơ sở dữ liệu.";
                    }
                    ?>
                </div>
                <div class="product_cart">
                    <?php
                    require('Ketnoi.php');
                    $search = $_GET["search"];
                    $sql = "SELECT * FROM products WHERE `Name` LIKE '%$search%'";
                    $results = mysqli_query($conn, $sql);
                    if ($results && mysqli_num_rows($results) > 0) {
                        while ($row = mysqli_fetch_assoc($results)) {
                            $tensanpham = $row["Name"];
                            $image = $row["Image"];
                            $gia = $row["price"];
                            echo '<div class="cart_item">';
                            echo '<img src="./Image/Product/' . $image . '" alt="' . $tensanpham . '">';
                            echo '<a href="product_deltail.php?ProductID=' . $row['ProductID'] . '">' . $tensanpham . '</a> <br>';
                            echo '<span>' . number_format($gia) . ' đ</span>';
                            echo '<a class="add" href="cart.php?ProductID=' . $row['ProductID'] . '"><i class="fa fa-shopping-cart"></i>Mua ngay</a>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- Dang ki  -->
<?php
require('dangki.php');
?>
<!-- Footer -->
<?php
require('Footer.php');
?>