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
               <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Trang chủ</a>
               <a class="breadcrumb-item" href="Donhang.php">Đơn hàng</a>
            </nav>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
            <h4>Danh sách đơn hàng</h4>
            <div class="m-t-25">
               <?php
               $itemsPerPage = 6;
               // Lấy trang hiện tại từ tham số GET
               $page = 1;
               if (isset($_GET["page"])) {
                  $page = (int)$_GET["page"];
               }
               // Xác định vị trí bắt đầu lấy dữ liệu
               $offset = ($page - 1) * $itemsPerPage;
               // Lấy tổng số sản phẩm
               $sql = "SELECT COUNT(*) as totalItems FROM `oder`";
               $result = mysqli_query($conn, $sql);
               $row = mysqli_fetch_assoc($result);
               $totalItems = $row["totalItems"];
               // Tính tổng số trang 
               $totalPages = ceil($totalItems / $itemsPerPage);
               $sql = "SELECT * FROM `oder` ORDER BY `Time` DESC LIMIT " . $offset . "," . $itemsPerPage;
               $result = mysqli_query($conn, $sql);
               if (mysqli_num_rows($result) > 0) {
               ?>
                  <ul class="pagination">
                     <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                        <?php if ($i == $page) { ?>
                           <li class="active"><a href="Donhang.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php } else { ?>
                           <li><a href="Donhang.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php } ?>
                     <?php } ?>
                     <!-- Next Page Link -->
                     <?php if ($page < $totalPages) { ?>
                        <li><a href="Donhang.php?page=<?php echo ($page + 1); ?>">&raquo;</a></li>
                     <?php } ?>
                  </ul>
                  <table id="data-table" class="table">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Họ tên</th>
                           <th>Địa chỉ</th>
                           <th>Email</th>
                           <th>Điện Thoại</th>
                           <th>Trạng thái</th>
                           <th>Tổng tiền</th>
                           <th>Tùy chọn </th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $idproduct = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                           $id = $row['ID'];
                           // hiển thị danh mục
                           $sql = "SELECT * FROM oder";
                           $res = mysqli_query($conn, $sql);
                           $r = mysqli_fetch_assoc($res);
                        ?>
                           <tr>
                              <td><?php echo $id ?></td>
                              <td><?php echo $row['Name'] ?></td>
                              <td><?php echo $row['Adress'] ?></td>
                              <td><?php echo $row['Email'] ?></td>
                              <td><?php echo $row['Phone'] ?></td>
                              <td class="btn btn-danger m-r-5"><?php echo $row['Status'] == 0 ? 'Đang xử lý ' : 'Đã duyệt'; ?></td>
                              <td><?php echo number_format($row['total']) ?></td>
                              <td class="tuychon">
                                 <a class="btn btn-primary btn-tone m-r-5" href="./Xemdonhang.php?ID=<?php echo $row['ID']; ?>">Xem</a>
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