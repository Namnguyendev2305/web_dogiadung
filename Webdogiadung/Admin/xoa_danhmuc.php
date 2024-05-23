<?php
require('thongbao.php');
require_once 'Conect.php';
// lấy id trên tham số url đã gửi tù nút xóa
$id = !empty($_GET['CategoryID']) ? (int)$_GET['CategoryID'] : 0;
$deleted = mysqli_query($conn, "DELETE FROM categorys WHERE CategoryID = $id");
if ($deleted) {
    toast("Xóa thành công", "success", "Chuyển hướng sau 3s");
                echo "<script>
                    setTimeout(function() {
                        window.location.href = 'danhmuc.php';
                    }, 3000);
                </script>";
} else {
    toast("Xóa Lỗi rồi", "error", "Thử lại");
}
