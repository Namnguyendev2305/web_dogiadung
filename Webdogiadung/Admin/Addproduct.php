<?php
require('thongbao.php');
require_once('Conect.php');
if (isset($_POST['add'])) {
    $tensp = $_POST['tensp'];
    $gia = $_POST['giasp'];
    $danhmuc = $_POST['CategoryID'];
    $mota = strip_tags($_POST['mota']);
    $target_dir = "../Image/Product/";

    if (empty($tensp) || empty($gia)) {
        toast("Vui lòng nhập đủ thông tin", "error", "Thông báo");
    } else {
        if (move_uploaded_file($_FILES['img']["tmp_name"], $target_dir . basename($_FILES["img"]["name"]))) {
            $img_name = basename($target_dir . basename($_FILES["img"]["name"]));
            $sql = "INSERT INTO products(`Name`,`price`,`CategoryID`,`Description`,`Image`)
                VALUES ('$tensp', '$gia', '$danhmuc','$mota', '$img_name')";
            if (mysqli_query($conn, $sql)) {
                $productId = mysqli_insert_id($conn);

                foreach ($_FILES['imgs']['name'] as $key => $value) {
                    if (move_uploaded_file($_FILES['imgs']['tmp_name'][$key], $target_dir . basename($_FILES['imgs']['name'][$key]))) {
                        $img_names = basename($target_dir . basename($_FILES['imgs']['name'][$key]));
                        $sql_img = "INSERT INTO image_product(`ProductID`,`Img_path`) VALUES ('$productId', '$img_names')";
                        mysqli_query($conn, $sql_img);
                    } else {
                        toast("Thêm sản phẩm thành công", "success", "Thông báo");
                    }
                }

                toast("Thêm sản phẩm thành công", "success", "Thông báo");
            } else {
                toast("Thêm sản phẩm Lỗi", "error", "Vui lòng thử lại");
            }
        } else {
            toast("Thêm ảnh lỗi", "error", "Vui lòng thử lại");
        }
    }
}
?>



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Thêm sản phẩm
</button>
<div class="modal fade" id="exampleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thông tin sản phẩm</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <?php
                $category = mysqli_query($conn, "SELECT * FROM categorys");
                ?>
                <form id="form-validation" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Tên sản phẩm</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tensp" placeholder="Tên sản phẩm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Giá sản phẩm</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="giasp" placeholder="Giá sản phẩm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Chọn ảnh</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="img" placeholder="Ảnh sản phẩm">
                        </div>
                    </div>
                    <!-- Ảnh mô tả -->
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Ảnh mô tả</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="imgs[]" multiple="multiple" placeholder="Ảnh mô tả">
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
                        <label class="col-sm-4 col-form-label control-label">Mô tả </label>
                        <div class="col-sm-8">
                            <textarea name="mota" id="thongso" rows="10"></textarea>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger btn-tone m-r-5" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="add">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</div>