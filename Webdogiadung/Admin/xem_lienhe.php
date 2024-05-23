<?php
require('thongbao.php');
include('Header_admin.php');
include('Nav_left.php');
require_once('Conect.php');
$id = !empty($_GET['ID']) ? (int)$_GET['ID'] : 0;
$sql_1 = "SELECT * From `contact` WHERE ID = $id";
$result = mysqli_query($conn, $sql_1);
$resultss = mysqli_fetch_assoc($result);
?>
<div class="page-container">
   <div class="main-content">
      <div class="page-header">
         <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
               <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Trang chủ</a>
               <a class="breadcrumb-item" href="Lienhe.php">Liên hệ</a>
            </nav>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
            <h4>Thông tin liên hệ</h4>
            <form id="form-validation" method="post" enctype="multipart/form-data">
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Mã liên hệ</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" readonly value="<?php echo $id; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Tên khách</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" readonly value="<?php echo $resultss['Name']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Email</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" readonly value="<?php echo $resultss['Email']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Tiêu đề</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" readonly value="<?php echo $resultss['Conten']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Nội dung</label>
                  <div class="col-sm-8">
                     <textarea name="thongso" id="thongso" rows="10"><?php echo $resultss['Message']; ?></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Ngày gửi</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" readonly value="<?php echo $resultss['Creat_at']; ?>">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<?php
include('Footer_Admin.php');
?>