<?php
require('thongbao.php');
include('Header_admin.php');
include('Nav_left.php');
require_once('Conect.php');
$id = !empty($_GET['CategoryID']) ? (int)$_GET['CategoryID'] : 0;

$result = mysqli_query($conn, "SELECT * FROM categorys WHERE `CategoryID` = $id");
if ($result) {
    $resultss = mysqli_fetch_assoc($result);
} else {
    die('Query failed: ' . mysqli_error($conn));
}
if (isset($_POST['add'])) {
    $tensp = $_POST['tendanhmuc'];
    $mota = $_POST['mota'];
    $sql = "UPDATE categorys SET `Catename` ='$tensp', `Description`='$mota'WHERE `CategoryID` = $id";
    if (mysqli_query($conn, $sql)) {
        toast("Cập nhật thành công", "success", "Chuyển hướng sau 3s");
        echo "<script>
                    setTimeout(function() {
                        window.location.href = 'danhmuc.php';
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
                    <a class="breadcrumb-item" href="danhmuc.php"> Danh mục</a>
                    <a class="breadcrumb-item" href="capnhat_danhmuc.php"> Cập nhật danh mục</a>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4>Sửa danh mục</h4>
                <form id="form-validation" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Tên danh mục</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tendanhmuc" value="<?php echo $resultss['Catename']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Mô tả danh mục</label>
                        <div class="col-sm-8">
                            <textarea name="mota" id="mota" value="<?php echo $resultss['Description']; ?>" rows="10"></textarea>
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