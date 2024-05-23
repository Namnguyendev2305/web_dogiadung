<?php
require('thongbao.php');
require_once('Conect.php');
if (isset($_POST['add'])) {
    $tensp = $_POST['ProductID'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $baohanh = $_POST['baohanh'];
    $thongso = $_POST['thongso'];
    $import = $_POST['import'];
    if(empty($tensp)||empty($baohanh)){
        toast("Thiếu thông tin sản phẩm", "error", "Vui lòng thử lại");
    }else{
        $sql = "INSERT INTO product_deltail(`productID`, `Brand`, `Model`, `Import`,`Guarantee`,`parameter`)
            VALUES ('$tensp', '$brand','$model', '$import', '$baohanh','$thongso')";

    if (mysqli_query($conn, $sql)) {
        toast("Thêm chi tiết thành công", "success", "Thông báo");
    } else {
        toast("Thêm Lỗi", "error", "Vui lòng thử lại");
    }
    }
}

?>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Thêm chi tiết
</button>
<div class="modal fade" id="exampleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thông tin chi tiết sản phẩm</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
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
                            <input type="text" class="form-control" name="brand" placeholder="Thương hiệu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Model</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="model" placeholder="Model sản phẩm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Nhập khẩu</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="import" placeholder="Nhập khẩu sản phẩm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Bảo hành</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="baohanh" placeholder="Bảo hành sản phẩm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label control-label">Thông số kĩ thuật</label>
                        <div class="col-sm-8">
                            <textarea name="thongso" placeholder="Thông số kĩ thuật" id="thongso" rows="10"></textarea>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger btn-tone m-r-5" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="add">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</div>