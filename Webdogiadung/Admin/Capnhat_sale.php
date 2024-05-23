<?php
require('thongbao.php');
include('Header_admin.php');
include('Nav_left.php');
require_once('Conect.php');
$id = !empty($_GET['ID']) ? (int)$_GET['ID'] : 0;

$result = mysqli_query($conn, "SELECT * FROM sale WHERE `ID` = $id");
if ($result) {
   $resultss = mysqli_fetch_assoc($result);
} else {
   die('Query failed: ' . mysqli_error($conn));
}
if (isset($_POST['add'])) {
   $mota = $_POST['mota'];
   $sql = "UPDATE sale SET `Descrption`= '$mota'WHERE `ID` = $id";
   if (mysqli_query($conn, $sql)) {
      toast("Cập nhật thành công", "success", "Chuyển hướng sau 3s");
      echo "<script>
                    setTimeout(function() {
                        window.location.href = 'Sale.php';
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
               <a class="breadcrumb-item" href="Sale.php"> Sale</a>
            </nav>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
            <h4>Sửa giảm giá</h4>
            <form id="form-validation" method="post" enctype="multipart/form-data">
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Email</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" readonly name="email" value="<?php echo $resultss['Email']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Ngày tạo</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" readonly value="<?php echo $resultss['Creat_at']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Mô tả</label>
                  <div class="col-sm-8">
                     <textarea name="mota" id="mota" rows="10"><?php echo $resultss['Descrption']; ?></textarea>
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