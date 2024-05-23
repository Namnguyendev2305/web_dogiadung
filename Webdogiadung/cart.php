<?php
    session_start();
    ob_start();
    include 'Ketnoi.php';
    require('toast.php');
    $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
    // Số Lượng
    $quantity = (isset($_GET['quantity'])) ? $_GET['quantity'] : 1 ;
    if (isset($_GET['ProductID'])) {
        $ProductID = $_GET['ProductID'];
        
    }
    $query = mysqli_query($conn, "SELECT * FROM `products` WHERE `ProductID`= '$ProductID'");


if ($query) {
	$product = mysqli_fetch_assoc($query);
    
}
    // Nếu < 0 xóa
    if($quantity<0){
        $action = 'delete';
    }
    $item = [
        'ProductID' => $product['ProductID'],
        'Name' => $product['Name'],
        'Image' => $product['Image'],
        'price' => $product['price'],
        'quantity' =>  $quantity 
    ];
    //Thêm giỏ hàng
    if ($action == 'add') {
        toast("Thêm thành công đơn hàng", "success", "Thông báo");
        if (isset($_SESSION['cart'][$ProductID])) {
            $_SESSION['cart'][$ProductID]['quantity'] += $quantity;
        } else {
            $_SESSION['cart'][$ProductID] = $item;
        }
    }
    
    //Câp Nhật
    if ($action == 'update') {
        toast("Cập thành công đơn hàng", "success", "Thông báo");
        $_SESSION['cart'][$ProductID]['quantity'] = $quantity;
        
    }
    //Xóa
    if ($action == 'delete') {
        unset($_SESSION['cart'][$ProductID]);
        toast("Xóa thành công đơn hàng", "success", "Thông báo");
    }
    header('location: ' . $_SERVER['HTTP_REFERER']); 
?>