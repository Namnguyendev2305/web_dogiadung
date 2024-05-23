<?php
require('thongbao.php');
require_once('Conect.php');
if (isset($_POST['add'])) {
    $tendanhmuc = $_POST['tendanhmuc'];
    $mota = $_POST['mota'];
    if (empty($tendanhmuc) || empty($mota)) {
        toast("Thiếu thông tin", "error", "Vui lòng thử lại");
    } else {
        $sql = "INSERT INTO categorys(`Catename`, `Description`)
    VALUES ('$tendanhmuc', '$mota')";
        if (mysqli_query($conn, $sql)) {
            toast("Thêm danh mục thành công", "success", "Thông báo");
        } else {
            toast("Thêm danh mục lỗi ", "error", "Vui lòng thử lại");
        }
    }
}
?>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Thêm Danh mục
</button>
<div class="modal fade" id="exampleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thông tin danh mục</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-validation" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Tên danh mục</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" name="tendanhmuc" placeholder="Tên danh mục">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Mô tả</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="mota" placeholder="Mô tả danh mục">
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger btn-tone m-r-5" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" name="add">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</div>