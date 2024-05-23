<?php
require('thongbao.php');
include('Header_admin.php');
include('Nav_left.php');
require_once('Conect.php');
$id = !empty($_GET['ID']) ? (int)$_GET['ID'] : 0;
$sql_1 = "SELECT * FROM `product_deltail` WHERE `ID` = $id";
$result = mysqli_query($conn, $sql_1);
if ($result) {
    $resultss = mysqli_fetch_assoc($result);
} else {
    die('Query failed: ' . mysqli_error($conn));
}
if (isset($_POST['add'])) {
    $tensp = $_POST['ProductID'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $baohanh = $_POST['baohanh'];
    $thongso = $_POST['thongso'];
    $import = $_POST['import'];

    $sql = "UPDATE product_deltail SET `productID` ='$tensp', `Brand`='$brand', `Model`='$model', `Import`='$import',`Guarantee`='$baohanh',`parameter`='$thongso' WHERE `ID` = $id";
    if (mysqli_query($conn, $sql)) {
        toast("Cập nhật thành công", "success", "Chuyển hướng sau 3s");
        echo "<script>
                    setTimeout(function() {
                        window.location.href = 'Deltail_product.php';
                    }, 3000);
                </script>";
    } else {
        toast("Sửa chi tiết Lỗi", "error", "Vui lòng thử lại");
    }
}

?>
<div class="page-container">
    <div class="main-content">
        <div class="page-header">
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Trang chủ</a>
                    <a class="breadcrumb-item" href="Deltail_product.php">Chi tiết Sản phẩm</a>
                    <a class="breadcrumb-item" href="update_chitetsp.php"> Cập nhật chi tiết</a>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4>Sửa chi tiết sản phẩm</h4>
                <?php
                $product = mysqli_query($conn, "SELECT * FROM products");
                ?>
                <form id="form-validation" method="post">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Tên sản phẩm </label>
                        <div class="col-sm-8 pt-2">
                            <select class="form-control" name="ProductID">
                                <?php foreach ($product as $row) : ?>
                                    <option value="<?php echo $row['ProductID']; ?>"><?php echo $row['Name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Thương hiệu</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $resultss['Brand']; ?>" name="brand" placeholder="Thương hiệu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Model</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $resultss['Model']; ?>" name="model" placeholder="Model sản phẩm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Nhập khẩu</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $resultss['Import']; ?>" name="import" placeholder="Nhập khẩu sản phẩm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Bảo hành</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $resultss['Guarantee']; ?>" name="baohanh" placeholder="Bảo hành sản phẩm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Thông số kĩ thuật</label>
                        <div class="col-sm-8">
                            <textarea name="thongso"  placeholder="Thông số kĩ thuật" id="thongso" rows="10"><?php echo $resultss['parameter']; ?></textarea>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger btn-tone m-r-5" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="add">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include('Footer_Admin.php');
?>