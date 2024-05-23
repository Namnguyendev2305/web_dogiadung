<?php
require('thongbao.php');
include('Header_admin.php');
include('Nav_left.php');
require_once('Conect.php');
$id = !empty($_GET['ID']) ? (int)$_GET['ID'] : 0;
$sql_1 = "SELECT * From post WHERE ID = $id";
$result = mysqli_query($conn, $sql_1);
$resultss = mysqli_fetch_assoc($result);
if (isset($_POST['add'])) {
   $tieude = $_POST['tieude'];
   $anh = $_POST['img'];
   $mota = $_POST['mota'];
   $conten = $_POST['conten'];
   $current_image = $_POST['current_image'];
   if (!empty($_FILES['img']['name'])) {
      $target_dir = "../Image/Post/";
      $img_path = $target_dir . basename($_FILES["img"]["name"]);

      if (move_uploaded_file($_FILES['img']["tmp_name"], $img_path)) {
         $img_name = basename($img_path);
      } else {
         toast("Sửa ảnh lỗi", "error", "Vui lòng thử lại");
      }
   } else {
      $img_name = $current_image;
   }
   $sql = "UPDATE post SET `Titles` ='$tieude', `Image`='$img_name', `Descrption`='$mota', `conten`='$conten' WHERE `ID` = $id";
   if (mysqli_query($conn, $sql)) {
      toast("Cập nhật thành công", "success", "Chuyển hướng sau 3s");
      echo "<script>
                  setTimeout(function() {
                        window.location.href = 'tintuc.php';
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
               <a class="breadcrumb-item" href="tintuc.php"> Tin tức</a>
               <a class="breadcrumb-item" href="sua_tintuc.php"> Cập nhật tin tức</a>
            </nav>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
            <h4>Sửa Tin tức</h4>
            <form id="form-validation" method="post" enctype="multipart/form-data">
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Tiêu đề</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="tieude" value="<?php echo $resultss['Titles']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Chọn ảnh</label>
                  <div class="col-sm-8">
                     <input type="file" class="form-control" name="img" value="<?php echo $resultss['Image']; ?>">
                     <input type="hidden" name="current_image" value="<?php echo $resultss['Image']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Mô tả</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="mota" value="<?php echo $resultss['Descrption']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Nội dung</label>
                  <div class="col-sm-8">
                     <textarea name="conten" id="conten"  rows="10"><?php echo $resultss['conten']; ?></textarea>
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