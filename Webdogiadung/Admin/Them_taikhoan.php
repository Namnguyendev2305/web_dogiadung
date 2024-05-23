<?php
require('thongbao.php');
require_once('Conect.php');
if (isset($_POST['add'])) {
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   $pass = md5($pass);
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $adress = $_POST['adress'];
   $roleID = $_POST['RoleID'];
   if (empty($user) || empty($pass)) {
      toast("Thiếu thông tin tài khoản", "error", "Vui lòng thử lại");
   } else {
      $sql = "INSERT INTO user(`Password`, `user`, `Email`, `Phone`,`Adress`,`RoleID`)
            VALUES ('$pass', '$user','$email', '$phone', '$adress','$roleID')";
      if (mysqli_query($conn, $sql)) {
         toast("Thêm thành công tài khoản", "success", "Thông báo");
      } else {
         toast("Thêm Lỗi", "error", "Vui lòng thử lại");
      }
   }
}

?>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Thêm tài khoản
</button>
<div class="modal fade" id="exampleModal">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thông tin tài khoản</h5>
            <button type="button" class="close" data-dismiss="modal">
               <i class="anticon anticon-close"></i>
            </button>
         </div>
         <div class="modal-body">
            <?php
            $account = mysqli_query($conn, "SELECT * FROM `role`");
            ?>
            <form id="form-validation" method="post">
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Quyền truy cập</label>
                  <div class="col-sm-8 pt-2">
                     <select class="form-control" name="RoleID">
                        <?php foreach ($account as $row) : ?>
                           <option value="<?php echo $row['RoleID']; ?>"><?php echo $row['Name']; ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Tài khoản</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="user" placeholder="Tài khoản">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Mật khẩu</label>
                  <div class="col-sm-8">
                     <input type="password" class="form-control" name="pass" placeholder="Mật khẩu">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Email</label>
                  <div class="col-sm-8">
                     <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Điện thoại</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Địa chỉ</label>
                  <div class="col-sm-8">
                     <textarea name="adress"  id="thongso" rows="10"></textarea>
                  </div>
               </div>
               <button type="button" class="btn btn-danger btn-tone m-r-5" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary" name="add">Thêm</button>
            </form>
         </div>
      </div>
   </div>
</div>