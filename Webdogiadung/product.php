        <?php
            include_once('Header.php');
        ?>
        <?php
        include_once('Menu.php');
        ?>

        
<section id="main_conten"   >
        <div class="container_main">
            <!-- catgory -->
            <div class="left_menu">
            <?php
            include_once('Category.php');
            ?>
                <div class="img_left">
                    <img src="./Image/Product/thum1.jpg" alt="">
                </div>
            </div>
            <?php
                require_once 'Ketnoi.php';
                
                if (isset($_GET['CategoryID'])) {
                    $catelogid = $_GET['CategoryID'];
                        // Thực hiện truy vấn để lấy tên danh mục từ bảng "category"
                    $sql_get_catename = "SELECT Catename FROM `categorys` WHERE `CategoryID` = $catelogid";
                    $result_get_catename = mysqli_query($conn, $sql_get_catename);
                    // product
                    $sql = "SELECT * FROM `products` WHERE `CategoryID` = $catelogid";
                    $result = mysqli_query($conn, $sql);
                    if ($result_get_catename && mysqli_num_rows($result_get_catename) > 0) {
                        $row_catename = mysqli_fetch_assoc($result_get_catename);
                        $Catename = $row_catename['Catename'];
                        echo '<div class="product">';
                        echo '<div class="product_highly">';
                        echo '<div class="product_title">';
                        echo '<h3>' . $Catename . '</h3>'; 
                        echo '</div>';
                        echo '<div class="product_cart">';
                    
                        while ($row = mysqli_fetch_assoc($result)) {
                            $tensanpham = $row["Name"];
                            $image = $row['Image'];
                            $gia = $row['price'];
                            echo '<div class="cart_item">';
                            echo '<img src="./Image/Product/' . $image . '" alt="' . $tensanpham . '">';
                            echo '<a href="product_deltail.php?ProductID=' . $row["ProductID"] . '">' . $tensanpham . '</a><br>';
                            echo '<span>' . number_format($gia) . 'đ</span>';
                            echo '<a class="add" href="cart.php?ProductID=' . $row["ProductID"] . '"><i class="fa fa-shopping-cart"></i>Mua ngay</a>';
                            echo '</div>';
                        }
                        
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo "Không có sản phẩm nào trong danh mục.";
                    }
                    
                } else {
                    echo "Danh mục không xác định.";
                }
                ?>

            <!-- Sản phẩm -->
        </div>
        <!-- ảnh main containr -->
        <div class="Banner_main">
            <img src="./Image/Banner/Thum_cotainner.jpg" alt="">
        </div>
        <!-- product new -->
        <?php include('sanphambanchay.php')?>
    </section>
        <!-- Footer -->
        <?php
            include_once('Footer.php');
        ?>