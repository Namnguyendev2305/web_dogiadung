<?php
require('thongbao.php');
include('Header_admin.php');
include('Nav_left.php');
require_once('Conect.php');
$id = !empty($_GET['UserID']) ? (int)$_GET['UserID'] : 0;
$sql_1 = "SELECT * from user WHERE UserID = $id";
$result = mysqli_query($conn, $sql_1);
$resultss = mysqli_fetch_assoc($result);
if (isset($_POST['add'])) {
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   $pass = md5($pass);
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $adress = $_POST['adress'];

   $sql = "UPDATE user SET `Password` ='$pass', `user`='$user', `Email`='$email',`Phone`='$phone', `Adress`='$adress' WHERE `UserID` = $id";
   if (mysqli_query($conn, $sql)) {
      toast("Cập nhật thành công", "success", "Chuyển hướng sau 3s");
      echo "<script>
                    setTimeout(function() {
                        window.location.href = 'Account.php';
                    }, 3000);
                </script>";
   } else {
      toast("Sửa sản phẩm Lỗi", "error", "Vui lòng thử lại");
   }
}

?>
<div class="page-container">
   <div class="main-content">
      <div class="page-header">
         <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
               <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Trang chủ</a>
               <a class="breadcrumb-item" href="Sanpham.php"> Sản phẩm</a>
               <a class="breadcrumb-item" href="Update_product.php"> Cập nhật sản phẩm</a>
            </nav>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
            <h4>Sửa Thông tin</h4>
            <?php
            $role = mysqli_query($conn, "SELECT * FROM `role`");
            ?>
            <form id="form-validation" method="post">
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Tài khoản</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="user" value="<?php echo $resultss['user']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Mật khẩu</label>
                  <div class="col-sm-8">
                     <input type="password" class="form-control" name="pass" value="<?php echo $resultss['Password']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Điện thoại</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="phone" value="<?php echo $resultss['Phone']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Email</label>
                  <div class="col-sm-8">
                     <input type="email" class="form-control" name="email" value="<?php echo $resultss['Email']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Quyền</label>
                  <div class="col-sm-8 pt-2">
                     <select class="form-control" name="RoleID">
                        <?php foreach ($role as $row) : ?>
                           <option value="<?php echo $row['RoleID']; ?>"><?php echo $row['Name']; ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Địa chỉ</label>
                  <div class="col-sm-8">
                     <textarea name="adress" id="thongso" rows="10"><?php echo $resultss['Adress']; ?></textarea>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary" name="add">Cập nhật</button>
            </form>
         </div>
      </div>
   </div>
</div>

<?php
include('Footer_Admin.php');
?>