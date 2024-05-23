<?php
require('Header.php');
?>
<!-- Navbar(Menu) -->
<?php
require('Menu.php');
require('toast.php');
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
                    <h3>Cửa hàng đồ gia dụng</h3>
                </div>
                <div class="sort">
                    <p> Sắp xếp theo</p>
                    <form action="shop.php" method="get">
                        <select class="sort_product" name="product_loc" id="product_loc">
                            <option class="sort_proption" value="macdinh">Mặc định</option>
                            <option class="sort_proption" value="new">Hàng mới nhất</option>
                            <option class="sort_proption" value="banchay">Hàng phẩm bán chạy</option>
                            <option class="sort_proption" value="giamdan">Giá giảm dần</option>
                            <option class="sort_proption" value="tangdan">Giá tăng dần</option>
                            <option class="sort_proption" value="tangdanten">Tên tăng dần</option>
                        </select>
  
                        <input class="sort_product_btn" type="submit" value="Lọc ngay">
                    </form>
                </div>
                <div class="product_cart">
                    <?php
                    require('Ketnoi.php');
                    // Số sản phẩm trên mỗi trang
                    $itemsPerPage = 16;
                    // Lấy trang hiện tại từ tham số GET
                    $page = 1;
                    if (isset($_GET["page"])) {
                        $page = (int)$_GET["page"];
                    }
                    // Xác định vị trí bắt đầu lấy dữ liệu
                    $offset = ($page - 1) * $itemsPerPage;
                    // Lấy tổng số sản phẩm
                    $sql = "SELECT COUNT(*) as totalItems FROM `products`";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $totalItems = $row["totalItems"];
                    // Tính tổng số trang 
                    $totalPages = ceil($totalItems / $itemsPerPage);
                    $sortOrder = "";
                    $select = "";
                    if (isset($_GET['product_loc'])) {
                        $select = $_GET['product_loc'];
                        if ($select === 'macdinh') {
                            $sortOrder = "";
                        }
                        if ($select === 'new') {
                            $sortOrder = "ORDER BY Creatdate DESC";
                        }
                        if ($select === 'banchay') {
                            $sortOrder = "ORDER BY Totalbuy DESC";
                        }
                        if ($select === 'giamdan') {
                            $sortOrder = "ORDER BY price DESC";
                        }
                        if ($select === 'tangdan') {
                            $sortOrder = "ORDER BY price ASC";
                        }
                    }
                    $sql = "SELECT * FROM products  $sortOrder LIMIT " . $offset . ", " . $itemsPerPage;
                    $query = mysqli_query($conn, $sql);
                    if ($query && mysqli_num_rows($query) > 0) {

                        while ($row = mysqli_fetch_assoc($query)) {
                            $tensanpham = $row["Name"];
                            $image = $row['Image'];
                            $gia = $row['price'];
                    ?>
                            <div class="cart_item wow fadeInDown">
                                <img src="./Image/Product/<?php echo $image; ?>" alt="<?php echo $tensanpham; ?>">
                                <a href="product_deltail.php?ProductID=<?php echo $row['ProductID'] ?>"><?php echo $tensanpham; ?></a> <br>
                                <span><?php echo number_format($gia); ?> đ</span>
                                <a class="add" href="cart.php?ProductID=<?php echo $row['ProductID']; ?> "><i class="fa fa-shopping-cart"></i>Mua ngay</a>
                            </div>
                    <?php
                        }
                    } else {
                        echo ('Không có sản phẩm nào');
                    }
                    ?>

                </div>

            </div>

        </div>
    </div>
    <!-- Phân trang-->
    <ul class="pagination">
        <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
            <?php if ($i == $page) { ?>
                <li class="active"><a href="shop.php?page=<?php echo $i; ?>&product_loc=<?php echo $select; ?>"><?php echo $i; ?></a></li>
            <?php } else { ?>
                <li><a href="shop.php?page=<?php echo $i; ?>&product_loc=<?php echo $select; ?>"><?php echo $i; ?></a></li>
            <?php } ?>
        <?php } ?>
        <!-- Next Page Link -->
        <?php if ($page < $totalPages) { ?>
            <li><a href="shop.php?page=<?php echo ($page + 1); ?>&product_loc=<?php echo $select; ?>">&raquo;</a></li>
        <?php } ?>
    </ul>
</section>

<!-- Dang ki  -->
<?php
require('dangki.php');
?>
<!-- Footer -->
<?php
require('Footer.php');
?>