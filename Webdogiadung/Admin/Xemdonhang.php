<?php
require('thongbao.php');
include('Header_admin.php');
include('Nav_left.php');
require_once('Conect.php');
$id = !empty($_GET['ID']) ? (int)$_GET['ID'] : 0;
$sql_1 = "SELECT * From `oder` WHERE ID = $id";
$result = mysqli_query($conn, $sql_1);
$resultss = mysqli_fetch_assoc($result);
?>
<div class="page-container">
   <div class="main-content">
      <div class="page-header">
         <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
               <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Trang chủ</a>
               <a class="breadcrumb-item" href="Donhang.php"> Đơn hàng</a>
               <a class="breadcrumb-item" href="Xemdonhang.php"> Xem đơn hàng</a>
            </nav>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
            <h4>Thông tin đơn hàng</h4>
            <form id="form-validation" method="post" enctype="multipart/form-data">
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Mã đơn hàng</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" readonly value="<?php echo $id; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Tên khách hàng</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" readonly value="<?php echo $resultss['Name']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Địa chỉ</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" readonly value="<?php echo $resultss['Adress']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Email</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="giasp" value="<?php echo $resultss['Email']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Số điện thoại</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="giasp" value="<?php echo $resultss['Phone']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Trạng thái</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" value="<?php echo $resultss['Status'] == 0 ? 'Đang xử lý' : 'Đã duyệt'; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Tổng tiền</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" value="<?php echo $resultss['total']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Thời gian tạo</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" value="<?php echo $resultss['Time']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label control-label">Mô tả</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" value="<?php echo $resultss['Description']; ?>">
                  </div>
               </div>
            </form>
            <?php
            $oder_sql = mysqli_query($conn, "SELECT d.oderID,d.quantity,d.price,p.Name,p.Image 
            from oder_deltail d JOIN products p ON d.productID =p.ProductID where d.oderID =$id");

            ?>
            <h3>Chi tiết đơn hàng</h3>
            <div class="table-responsive">
               <table class="table table-hover">
                  <thead>
                     <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach($oder_sql as $key => $value):?>
                     <tr>
                        <th scope="row"><?php echo $key +1 ?></th>
                        <td><?php echo $value['Name']; ?></td>
                        <td><img src="../Image/Product/<?php echo $value['Image']; ?>" width="100px" height="70px" alt=""></td>
                        <td><?php echo $value['price']; ?></td>
                        <td><?php echo $value['quantity']; ?></td>
                        <td><?php echo number_format($value['quantity']*$value['price']); ?></td>
                     </tr>
                     <?php endforeach ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

<?php
include('Footer_Admin.php');
?>