<?php

require('thongbao.php');
require_once 'Conect.php';
// lấy id trên tham số url đã gửi tù nút xóa
$id = !empty($_GET['ProductID']) ? (int)$_GET['ProductID'] : 0;
$deleted = mysqli_query($conn, "DELETE FROM products WHERE ProductID = $id");
if ($deleted) {
    toast("Xóa thành công", "success", "Chuyển hướng sau 3s");
                echo "<script>
                    setTimeout(function() {
                        window.location.href = 'Sanpham.php';
                    }, 3000);
                </script>";
} else {
    toast("Xóa Lỗi rồi", "error", "Thử lại");
}
