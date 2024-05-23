<?php
session_start();
ob_start();
include("toast.php");
if (isset($_SESSION['admin']['user'])) {
   // Admin 
   session_destroy();
   toast("Đã đăng xuất", "success", "Thông báo");
   echo "<script>
      setTimeout(function() {
         window.location.href = 'Login.php';
      }, 3000);
   </script>";
} elseif (isset($_SESSION['client']['user'])) {
   session_destroy();
   header("Location:http://localhost/Webdogiadung/index.php");
}