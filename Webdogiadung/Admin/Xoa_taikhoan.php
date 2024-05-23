<?php

require('thongbao.php');
require_once 'Conect.php';
// lấy id trên tham số url đã gửi tù nút xóa
$id = !empty($_GET['UserID']) ? (int)$_GET['UserID'] : 0;
$deleted = mysqli_query($conn, "DELETE FROM user WHERE UserID = $id");
if ($deleted) {
   toast("Xóa thành công", "success", "Chuyển hướng sau 3s");
   echo "<script>
                    setTimeout(function() {
                        window.location.href = 'Account.php';
                    }, 3000);
                </script>";
} else {
   toast("Xóa Lỗi rồi", "error", "Thử lại");
}
