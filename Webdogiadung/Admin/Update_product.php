<?php
require('thongbao.php');
include('Header_admin.php');
include('Nav_left.php');
require_once('Conect.php');
$id = !empty($_GET['ProductID']) ? (int)$_GET['ProductID'] : 0;
$sql_1 = "SELECT s.ProductID, c.Catename as 'tendanhmuc', s.Name, s.Image, s.price, s.Description FROM products s JOIN categorys c ON s.CategoryID = c.CategoryID WHERE s.ProductID = $id";
$result = mysqli_query($conn, $sql_1);
$resultss = mysqli_fetch_assoc($result);
if (isset($_POST['add'])) {
    $tensp = $_POST['tensp'];
    $gia = $_POST['giasp'];
    $danhmuc = $_POST['CategoryID'];
    $current_image = $_POST['current_image'];
    $mota = $_POST['mota'];
    if (!empty($_FILES['img']['name'])) {
        $target_dir = "../Image/Product/";
        $img_path = $target_dir . basename($_FILES["img"]["name"]);

        if (move_uploaded_file($_FILES['img']["tmp_name"], $img_path)) {
            $img_name = basename($img_path);
        } else {
            toast("Sửa ảnh lỗi", "error", "Vui lòng thử lại");
        }
    } else {
        $img_name = $current_image;
    }
    $sql = "UPDATE products SET `Name` ='$tensp', `price`='$gia', `CategoryID`='$danhmuc',`Description`='$mota', `Image`='$img_name' WHERE `ProductID` = $id";
    if (mysqli_query($conn, $sql)) {
        toast("Cập nhật thành công", "success", "Chuyển hướng sau 3s");
        echo "<script>
                    setTimeout(function() {
                        window.location.href = 'Sanpham.php';
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
            <h4>Sửa sản phẩm</h4>
                <?php
                $category = mysqli_query($conn, "SELECT * FROM categorys");
                ?>
                <form id="form-validation" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Tên sản phẩm</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tensp" value="<?php echo $resultss['Name']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Giá sản phẩm</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="giasp" value="<?php echo $resultss['price']; ?>">
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
                        <label class="col-sm-4 col-form-label control-label">Danh mục</label>
                        <div class="col-sm-8 pt-2">
                            <select class="form-control" name="CategoryID">
                                <?php foreach ($category as $row) : ?>
                                    <option value="<?php echo $row['CategoryID']; ?>"><?php echo $row['Catename']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Mô tả</label>
                        <div class="col-sm-8">
                            <textarea name="mota"  placeholder="Mô tả" id="thongso" rows="10"><?php echo $resultss['Description']; ?></textarea>
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