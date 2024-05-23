<?php
include_once('Header.php');
?>
<!-- Navbar(Menu) -->
<?php
include_once('Menu.php');
include_once('toast.php');
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

<!-- Main conten -->
<section id="main_conten">
    <div class="container_main">
        <!-- catgory -->
        <div class="left_menu">
            <?php require('Category.php') ?>
            <div class="img_left">
                <img src="./Image/Product/thum1.jpg" alt="">
            </div>
        </div>
        <!-- tin tức -->
        <div class="blogs">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="http://localhost/Webdogiadung">Trang chủ</a></li>
                    <li class="active">Tin tức</li>
                </ol>
            </div>
            <div class="title">
                <h3>Tin tức </h3>
            </div>

            <div class="main_blogs">
                <?php
                // Số sản phẩm trên mỗi trang
                $itemsPerPage = 5;
                // Lấy trang hiện tại từ tham số GET
                $page = 1;
                if (isset($_GET["page"])) {
                    $page = (int)$_GET["page"];
                }
                // Xác định vị trí bắt đầu lấy dữ liệu
                $offset = ($page - 1) * $itemsPerPage;
                // Lấy tổng số sản phẩm
                $sql = "SELECT COUNT(*) as totalItems FROM `post`";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $totalItems = $row["totalItems"];
                // Tính tổng số trang 
                $totalPages = ceil($totalItems / $itemsPerPage);
                require('Ketnoi.php');
                $sql = "SELECT * FROM post LIMIT " . $offset . "," . $itemsPerPage;
                $result = mysqli_query($conn, $sql);
                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $tieude = $row["Titles"];
                        $image = $row['Image'];
                        $conten = $row['conten'];

                ?>
                        <div class="item">
                            <div class="image">
                                <img src="./Image/Post/<?php echo $image ?>" alt="">
                            </div>
                            <div class="item_s">
                                <a class="titles" href="post_details.php?ID=<?php echo $row['ID']; ?>">
                                    <h4><?php echo $tieude ?></h4>
                                </a>
                                <p>
                                    <?php
                                    $maxLength = 400;
                                    $hienthi = strlen($conten) > $maxLength ? substr($conten, 0, $maxLength) . '...' : $conten;
                                    echo $hienthi;
                                    ?>
                                </p>
                                <a href="post_details.php?ID=<?php echo $row['ID']; ?>"><input type="submit" value="Đọc Thêm"></a>
                            </div>
                        </div>
                <?php
                    }
                } else {
                }
                ?>
            </div>
            <ul class="pagination">
                <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                    <?php if ($i == $page) { ?>
                        <li class="active"><a href="tintuc.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php } else { ?>
                        <li><a href="tintuc.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php } ?>
                <?php } ?>
                <!-- Next Page Link -->
                <?php if ($page < $totalPages) { ?>
                    <li><a href="tintuc.php?page=<?php echo ($page + 1); ?>">&raquo;</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>


</section>

<!-- Dang ki  -->
<?php
include_once('dangki.php');
?>
<!-- Footer -->
<?php
include_once('Footer.php');
?>