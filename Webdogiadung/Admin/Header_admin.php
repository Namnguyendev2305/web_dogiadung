<?php
session_start();
ob_start();
if (!isset($_SESSION['admin']['user'])) {
    header("Location: http://localhost/Webdogiadung/Login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nhóm 4 Admin</title>
    <!--css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="index.php">
                        <img width="100px" height="60px" src="../Image/Logo-gia-dụng-Hipmart.png" alt="Logo">
                    </a>
                </div>
                <div class="nav-wrap">
                    <h2 style="text-align: center; color: blue; margin-top: 20px; font-weight: 600;margin-left: 20px;">ADMIN</h2>
                </div>
                <?php
                if (isset($_SESSION['admin']['user'])) {
                    echo " <p style='text-align: center; color: blue; margin: 20px 60px; font-weight: 600;'>Xin chào,Admin</p>";
                    echo '<a href="logout.php" style="margin: 20px;"><span>Đăng xuất</span></a>';
                } else {
                    
                }
                ?>

            </div>