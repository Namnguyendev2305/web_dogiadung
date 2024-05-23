    <?php

    require_once('Header.php');

    ?>
    <!-- Navbar(Menu) -->
    <?php
    require('toast.php');
    require_once('Menu.php');
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
    <section id="main_deltail">
        <div class="main_deltails">
            <!-- catgory -->
            <div class="left_menu">
                <?php
                require_once('Category.php');
                ?>
                <div class="img_left">
                    <img src="./Image/Product/thum1.jpg" alt="">
                </div>
            </div>
            <?php
            require('Ketnoi.php');

            $productID = $_GET['ProductID'];
            $sql = "SELECT p.*, pd.* FROM products p 
                        INNER JOIN product_deltail pd ON p.ProductID = pd.ProductID
                        WHERE p.ProductID = $productID";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $product = mysqli_fetch_assoc($result);
            }
            $sql1 = "SELECT * FROM image_product WHERE ProductID = $productID";
            $result1 = mysqli_query($conn, $sql1);
            $img = mysqli_fetch_all($result1, MYSQLI_ASSOC);
            ?>
            <!-- Sản phẩm -->
            <div class="img_deltail ">
                <div class="image_main">
                    <img id="mainImage" src="./Image/Product/<?= $product['Image'] ?>" alt="<?= $product['Name'] ?>">
                </div>
                <div class="image_con owl-carousel owl-theme">
                    <?php foreach ($img as $image) : ?>
                        <img src="./Image/Product/<?= $image['Img_path'] ?>" alt="demo" width="70px">
                    <?php endforeach; ?>
                </div>
                <div class="text1">
                    <p style="color: #696763;font-size: 16px;font-style: italic; text-align: center;">Vui lòng click vào để xem ảnh</p>
                </div>
            </div>
            <div class="product_deltail">
                <div class="deltail_main">
                    <form action="cart.php" method="get">
                        <div class="deltail_conten">
                            <h3><?= $product['Name'] ?></h3>
                            <bdi><?= number_format($product['price']) ?>đ</bdi>
                            <div class="qanity_btn">
                                <div class="quani">
                                    <label for="quantity">Số lượng :</label>
                                    <input type="number" name="quantity" value="1" id="quantity">
                                    <input type="hidden" name="ProductID" value="<?= $product['ProductID'] ?>">
                                </div>
                                <p style="font-size: 16px;color: #696763;">Tình trạng : <span style="color: #009966;"><?= $product['Status'] == 0 ? 'Còn hàng' : 'Hết Hàng'; ?></span></p>
                                <p style="font-size: 16px;color: #696763;">Số lượng đã bán :<?= $product['Totalbuy'] ?> </p>

                                <div class="btn_cart">
                                    <input type="submit" value=" Thêm vào giỏ hàng">
                                </div>
                                <div class="conten">
                                    <p class="mota"><?= $product['Description'] ?></p>
                                </div>
                                <div class="gift-box-khuyen-mai">
                                    <span class="tieu-de">
                                        <b><i class="fa-solid fa-gift"></i> MÃ ƯU ĐÃI KHI MUA ONLINE</b>
                                    </span>
                                    <ul class="list-gift">
                                        <li class="list-gift-item"> <i class="fa-solid fa-circle-check"></i><b>VIP1TRIEU</b>: giảm 2% đơn từ 1 Triệu</li>
                                        <li class="list-gift-item"> <i class="fa-solid fa-circle-check"></i><b>VIP2TRIEU</b>: giảm 3% đơn từ 2 Triệu</li>
                                        <li class="list-gift-item"> <i class="fa-solid fa-circle-check"></i><b>VIP3TRIEU</b>: giảm 4% đơn từ 3 Triệu</li>
                                        <li class="list-gift-item"><i class="fa-solid fa-circle-check"></i> <b>VIP5TRIEU</b>: giảm 5% đơn từ 5 Triệu</li>
                                        <li class="list-gift-item"> <i class="fa-solid fa-circle-check"></i><b>VIP10TRIEU</b>: giảm 10% đơn từ 10 Triệu</li>
                                    </ul>
                                </div>
                                <div class="hotline">
                                    <p><i class="fa-solid fa-phone-flip"></i>Hotline mua hàng ngay :<span> 0678888888</span></p>
                                </div>
                                <div class="hotline">
                                    <p><i class="fa-solid fa-location-dot"></i>Địa chỉ :<span> 218 Lĩnh Nam, Hoàng Mai, Hà Nội</span></p>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
        <!-- Nếu null ko hiển thị -->
        <div class="description">
            <h3>Thông tin chi tiết</h3>
            <table class="des_tab">
                <?php if (!empty($product['Brand'])) { ?>
                    <tr class="item1">
                        <td style="text-transform: uppercase;"><span>Thương Hiệu</span> <?= $product['Brand'] ?></td>
                    </tr>
                <?php } ?>

                <?php if (!empty($product['Model'])) { ?>
                    <tr class="item2">
                        <td><span>Model</span> <?= $product['Model'] ?></td>
                    </tr>
                <?php } ?>

                <?php if (!empty($product['Import'])) { ?>
                    <tr class="item3">
                        <td><span>Nhập khẩu</span> <?= $product['Import'] ?></td>
                    </tr>
                <?php } ?>

                <?php if (!empty($product['Guarantee'])) { ?>
                    <tr class="item4">
                        <td><span>Bảo hành</span> <?= $product['Guarantee'] ?></td>
                    </tr>
                <?php } ?>

                <?php if (!empty($product['parameter'])) { ?>
                    <tr class="item5">
                        <td style="line-height: 1.5;"><span>Thông số kĩ thuật</span> <?= $product['parameter'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <!-- sản phẩm liên quan -->
        <div class="new">
            <div class="product_new">
                <div class="product_title">
                    <h3>Sản phẩm liên quan</h3>
                </div>
                <div class="product_newcart owl-carousel owl-theme">
                    <?php
                    require('Ketnoi.php');
                    $productID = $_GET['ProductID'];
                    // Lấy danh mục của sản phẩm hiện tại
                    $sql = "SELECT CategoryID FROM products WHERE ProductID=$productID";
                    $result = mysqli_query($conn, $sql);
                    $categoryID = mysqli_fetch_assoc($result)['CategoryID'];
                    // Lấy danh sách các sản phẩm liên quan khác với sản phẩm hiện tại và có danh mục cùng
                    $sql = "SELECT * FROM products WHERE CategoryID=$categoryID AND ProductID<>$productID";
                    $result = mysqli_query($conn, $sql);
                    $relatedProducts = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($relatedProducts as $product) {
                        echo '<div class="cart_item">';
                        echo '<img src="./Image/Product/' . $product['Image'] . '" alt="' . $product['Name'] . '">';
                        echo '<a href="product_deltail.php?ProductID=' . $product["ProductID"] . '">' . $product['Name'] . '</a><br>';
                        echo '<span>' . number_format($product['price']) . 'đ</span>';
                        echo '<a class="add" href="cart.php?ProductID=' . $product["ProductID"] . '"><i class="fa fa-shopping-cart"></i>Mua ngay</a>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>

        </div>
    </section>

    <!-- Dang ki  -->
    <?php include('dangki.php') ?>
    <!-- Footer -->
    <?php
    require_once('Footer.php');
    ?>