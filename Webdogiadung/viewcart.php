<?php
include('Header.php');
require('Ketnoi.php');
require('toast.php');
$cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
//Kiểm tra đăng nhập
if(isset($_SESSION['client']['user'])){
    $user_id = $_SESSION['client']['UserID'];
    $user_query = mysqli_query($conn, "SELECT * FROM user WHERE UserID  = $user_id");
    $user_info = mysqli_fetch_assoc($user_query);
    $emails = $user_info['Email'];
    $sdts = $user_info['Phone'];
    $diachis = $user_info['Adress'];
}
//Thanh toán
if (isset($_POST['thanhtoan'])) {
    $tenkh = $_POST['tenkh'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $note = $_POST['note'];
    $prices = total($cart);
    // Kiểm tra nếu bất kỳ trường nào trống thì hiển thị thông báo
    if (empty($tenkh) || empty($email) || empty($sdt) || empty($diachi)) {
        toast("Vui lòng nhập thông tin thanh toán", "error", "Thông báo");
    } else {
        $sqls = "INSERT INTO oder(`Name`, `Adress`, `Email`, `Phone`, `total`, `Description`) VALUES(
            '$tenkh','$diachi','$email','$sdt','$prices','$note'
        )";
        $kq = mysqli_query($conn, $sqls);
        if ($kq) {
            $orderID = mysqli_insert_id($conn);
            foreach ($cart as $value) {
                $productid = $value['ProductID'];
                $dongia = $value['price'];
                $quantity = $value['quantity'];
                $updateTongMuaQuery = "UPDATE products SET Totalbuy = Totalbuy + $quantity WHERE ProductID  = $productid";
                mysqli_query($conn, $updateTongMuaQuery);
                $resultorder = mysqli_query($conn, "INSERT INTO oder_deltail(`oderID`, `productID`, `quantity`, `price`) 
                    VALUES ('$orderID','$productid','$quantity','$dongia')");
            }
            toast("Thanh toán thành công", "success", "Thông báo");
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'check_out.php';
                    }, 3000);
                </script>";

            unset($_SESSION['cart']);
        }
    }
}
?>

<?php include('Menu.php') ?>
<section id="cart">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">giỏ hàng</li>
            </ol>
        </div>
        <?php
        if (empty($cart)) {
            echo ("<h3 style='text-align: center; color:#009966; text-transform: uppercase;'>Giỏ hàng của bạn đang trống !</h3>");
            echo ("<div style=\"display: flex; justify-content: center; align-items: center;\"><img src='./empty.jpg' alt='ảnh cart'></div>");
        } else {
        ?>
            <div class="table_cart">
                <table class="table_cus">
                    <thead>
                        <tr class="cart_menu">
                            <td class="cart_menu_product">Sản phẩm</td>
                            <td class="cart_menu_price">Giá</td>
                            <td class="cart_menu_quanity">Số lượng</td>
                            <td class="cart_menu_thanhtien">Thành tiền</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($cart as $key => $value) { ?>
                            <tr style="border-bottom: 1px solid #C4DFDF;">
                                <td class="cart_img">
                                    <a href><img src="./Image/Product/<?php echo $value['Image'] ?>" alt="Ảnh sản phẩm"></a>
                                    <h4><a><?php echo $value['Name'] ?></a></h4>
                                </td>
                                <td>
                                    <p><?php echo number_format($value['price']) ?></p>
                                </td>
                                <td>
                                    <form action="cart.php" method="get">
                                        <input type="hidden" name="action" value="update">
                                        <input type="hidden" name="ProductID" value="<?php echo $value['ProductID'] ?>">
                                        <input class="cart_quantity_input" type="number" name="quantity" value="<?php echo $value['quantity'] ?>" onkeyup="updateQuantity(event, <?php echo $value['ProductID']; ?>)">
                                    </form>
                                </td>
                                <td class="thanhtien">
                                    <p><?php echo number_format($value['quantity'] * $value['price']) ?></p>
                                </td>
                                <td class="delete"><a href="cart.php?ProductID=<?php echo $value['ProductID'] ?>&action=delete"><i class="fa-solid fa-trash-can"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <form action="" method="post">
                <div class="pay">
                    <div class="info">
                        <h3>Thông tin của bạn</h3>
                        <div class="check_info">
                            <div class="name">
                                <input type="text" name="tenkh" placeholder="Họ & Tên">
                                <input type="text" name="sdt" placeholder="Số điện Thoại" value="<?php echo $sdts; ?>">
                            </div>
                            <div class="dress">
                                <input type="email" name="email" placeholder="Email" value="<?php echo $emails; ?>">
                                <input type="text" name="diachi" placeholder="Địa chỉ của bạn" value="<?php echo $diachis; ?>">
                            </div>
                            <textarea name="note" id="adress" cols="75" rows="5" placeholder="Ghi chú (Không bắt buộc)"></textarea>
                        </div>
                    </div>
                    <!-- pay -->
                    <table>
                        <tr class="total">
                            <td>Tổng tiền : <span><?php echo number_format(total($cart)) ?> VND</span></td>
                            <td><input type="submit" name="thanhtoan" value="Thanh Toán Đơn Hàng"></td>
                        </tr>

                    </table>
                </div>
            </form>
        <?php } ?>
    </div>
</section>
<?php include('dangki.php') ?>
<?php include('Footer.php') ?>
<!-- Jequery để update số lượng -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function updateQuantity(event, ProductID) {
        if (event.key === "Enter") {
            $.ajax({
                type: "POST",
                url: "cart.php",
                data: {
                    action: "update",
                    ProductID: ProductID,
                    quantity: quantity
                },
                success: function(response) {

                }
            });
        }
    }
</script>