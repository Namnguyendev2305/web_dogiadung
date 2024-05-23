<?php
require('thongbao.php');
require_once('Conect.php');
if (isset($_POST['add'])) {
    $tieude = $_POST['tieude'];
    $mota = $_POST['mota'];
    $noidung = $_POST['conten'];
    $target_dir = "../Image/Post/";
    $img_path = $target_dir . basename($_FILES["img_post"]["name"]);

    if (move_uploaded_file($_FILES['img_post']["tmp_name"], $img_path)) {
        $img_name = basename($img_path);
        $sql = "INSERT INTO post(`Titles`, `Image`, `Descrption`, `conten`)
            VALUES ('$tieude', '$img_name', '$mota', '$noidung')";
        if (mysqli_query($conn, $sql)) {
            toast("Thêm Tin thành công", "success", "Thông báo");
        } else {
            toast("Thêm Tin  Lỗi", "error", "Vui lòng thử lại");
        }
    } else {
        toast("Thêm ảnh lỗi", "error", "Vui lòng thử lại");
    }
}
?>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Thêm tin tức</button>
<div class="modal fade" id="exampleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thông tin tin tức</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-validation" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Tiêu đề</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tieude" placeholder="Tiêu đề">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Chọn ảnh</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="img_post" placeholder="Ảnh post">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Mô tả</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="mota" placeholder="Mô tả">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Nội dung</label>
                        <div class="col-sm-8">
                            <textarea name="conten" id="conten" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger btn-tone m-r-5" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="add">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</div>