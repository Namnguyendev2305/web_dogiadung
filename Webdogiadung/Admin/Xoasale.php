<?php
require('thongbao.php');
require_once 'Conect.php';
// lấy id trên tham số url đã gửi tù nút xóa
$id = !empty($_GET['ID']) ? (int)$_GET['ID'] : 0;
$deleted = mysqli_query($conn, "DELETE FROM sale WHERE ID = $id");
if ($deleted) {
   toast("Xóa thành công", "success", "Chuyển hướng sau 3s");
   echo "<script>
                    setTimeout(function() {
                        window.location.href = 'Xoasale.php';
                    }, 3000);
                </script>";
} else {
   toast("Xóa Lỗi rồi", "error", "Thử lại");
}
