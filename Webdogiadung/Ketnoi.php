<?php
    $conn = mysqli_connect("localhost" , "root" , "" , "qldogiadung");
    if (!$conn) {
        die("Lỗi kết nối: " . mysqli_connect_error());
    }
?>