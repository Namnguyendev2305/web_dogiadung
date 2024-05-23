<?php
require('Header_admin.php');
?>
<?php
require('Nav_left.php');
?>
<?php
include('Conect.php');
?>

<div class="page-container">
   <div class="main-content">
      <div class="page-header">
         <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
            <a href="index.php" class="breadcrumb-item"><i class="fa-solid fa-house m-r-5"></i>Trang chủ</a>
               <a class="breadcrumb-item" href="Sale.php">Sale</a>
            </nav>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
            <h4>Quản lý Giảm giá</h4>
            <div class="m-t-25">
               <?php
               $itemsPerPage = 10;
               // Lấy trang hiện tại từ tham số GET
               $page = 1;
               if (isset($_GET["page"])) {
                  $page = (int)$_GET["page"];
               }
               // Xác định vị trí bắt đầu lấy dữ liệu
               $offset = ($page - 1) * $itemsPerPage;
               // Lấy tổng số sản phẩm
               $sql = "SELECT COUNT(*) as totalItems FROM `sale`";
               $result = mysqli_query($conn, $sql);
               $row = mysqli_fetch_assoc($result);
               $totalItems = $row["totalItems"];
               // Tính tổng số trang 
               $totalPages = ceil($totalItems / $itemsPerPage);
               $sql = "SELECT * FROM `sale` ORDER BY Creat_at DESc LIMIT " . $offset . "," . $itemsPerPage;
               $result = mysqli_query($conn, $sql);
               if (mysqli_num_rows($result) > 0) {
               ?>
                  <ul class="pagination">
                     <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                        <?php if ($i == $page) { ?>
                           <li class="active"><a href="Sale.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php } else { ?>
                           <li><a href="Sale.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php } ?>
                     <?php } ?>
                     <!-- Next Page Link -->
                     <?php if ($page < $totalPages) { ?>
                        <li><a href="Sale.php?page=<?php echo ($page + 1); ?>">&raquo;</a></li>
                     <?php } ?>
                  </ul>
                  <table id="data-table" class="table">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Email</th>
                           <th>Ngày tạo</th>
                           <th>Mô tả</th>
                           <th>Tùy chọn </th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {
                           $id = $row['ID'];
                           // hiển thị danh mục
                           $sql = "SELECT * FROM sale";
                           $res = mysqli_query($conn, $sql);
                           $r = mysqli_fetch_assoc($res);
                        ?>
                           <tr>
                              <td><?php echo $id ?></td>
                              <td><?php echo $row['Email'] ?></td>
                              <td><?php echo $row['Creat_at'] ?></td>
                              <td><?php echo $row['Descrption'] ?></td>
                              <td class="tuychon">
                                 <a class="btn btn-primary btn-tone m-r-5" href="./Capnhat_sale.php?ID=<?php echo $row['ID']; ?>">Cập nhật</a>
                                 <a class="btn btn-primary btn-tone m-r-5" href="./Xemsale.php?ID=<?php echo $row['ID']; ?>">Xem</a>
                                 <a class="btn btn-danger btn-tone m-r-5" href="./Xoasale.php?ID=<?php echo $row['ID']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa Tin tức này không?');">Xóa</a>

                              </td>
                           </tr>
                        <?php
                        } ?>
                     </tbody>
                  </table>
               <?php
               } ?>
            </div>
         </div>
      </div>
   </div>

   <?php
   require('Footer_Admin.php');
   ?>