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
               <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Trang chủ</a>
               <a class="breadcrumb-item" href="Account.php">Tài khoản</a>
            </nav>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
            <h4>Danh sách tài khoản</h4>
            <?php require('Them_taikhoan.php') ?>
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
               $sql = "SELECT COUNT(*) as totalItems FROM `user`";
               $result = mysqli_query($conn, $sql);
               $row = mysqli_fetch_assoc($result);
               $totalItems = $row["totalItems"];
               // Tính tổng số trang 
               $totalPages = ceil($totalItems / $itemsPerPage);
               $sql = "SELECT * FROM `user`  Limit " . $offset . "," . $itemsPerPage;
               $result = mysqli_query($conn, $sql);
               if (mysqli_num_rows($result) > 0) {
               ?>
                  <ul class="pagination">
                     <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                        <?php if ($i == $page) { ?>
                           <li class="active"><a href="Account.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php } else { ?>
                           <li><a href="Account.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php } ?>
                     <?php } ?>
                     <!-- Next Page Link -->
                     <?php if ($page < $totalPages) { ?>
                        <li><a href="Account.php?page=<?php echo ($page + 1); ?>">&raquo;</a></li>
                     <?php } ?>
                  </ul>
                  <table id="data-table" class="table">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Tài khoản</th>
                           <th>Mật khẩu</th>
                           <th>Email</th>
                           <th>Điện thoại</th>
                           <th>Đia chỉ</th>
                           <th>Quyền</th>
                           <th>Tùy chọn </th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $id = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                           $id = $row['UserID'];
                           // hiển thị danh mục
                           $sql_1 = "SELECT c.Name as 'tenquyen' FROM role c JOIN user s ON s.RoleID  = c.RoleID  WHERE s.UserID = $id";
                           $res = mysqli_query($conn, $sql_1);
                           $r = mysqli_fetch_assoc($res);
                           $tenquyen = $r['tenquyen'];
                        ?>
                           <tr>
                              <td><?php echo $id ?></td>
                              <td><?php echo $row['user'] ?></td>
                              <td><?php
                                    $content = $row['Password'];
                                    if (strlen($content) > 10) {
                                       $content = substr($content, 0, 10) . "...";
                                    }
                                    echo $content;
                                    ?></td>
                              <td><?php echo $row['Email'] ?></td>
                              <td><?php echo $row['Phone'] ?></td>
                              <td><?php echo $row['Adress'] ?></td>
                              <td><?php echo $tenquyen?></td>
                              <td class="tuychon">
                                 <a class="btn btn-primary btn-tone m-r-5" href="./Sua_taikhoan.php?UserID=<?php echo $row['UserID']; ?>">Sửa</a>
                                 <a class="btn btn-danger btn-tone m-r-5" href="./Xoa_taikhoan.php?UserID=<?php echo $row['UserID']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">Xóa</a>
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