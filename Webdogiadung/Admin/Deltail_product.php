<?php
require('Header_admin.php');
?>
<?php
require('Nav_left.php');
?>
<?php
include('Conect.php');
?>

<div class="page-container">
    <div class="main-content">
        <div class="page-header">
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="index.php" class="breadcrumb-item"><i class="fa-solid fa-house m-r-5"></i>Trang chủ</a>
                    <a class="breadcrumb-item" href="#">Chi tiết sản phẩm</a>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4>Danh sách chi tiết sản phẩm</h4>
                <?php require('themchitiet.php') ?>
                <div class="m-t-25">
                    <?php
                    // Số sản phẩm trên mỗi trang
                    $itemsPerPage = 10;
                    // Lấy trang hiện tại từ tham số GET
                    $page = 1;
                    if (isset($_GET["page"])) {
                        $page = (int)$_GET["page"];
                    }
                    // Xác định vị trí bắt đầu lấy dữ liệu
                    $offset = ($page - 1) * $itemsPerPage;
                    // Lấy tổng số sản phẩm
                    $sql = "SELECT COUNT(*) as totalItems FROM `product_deltail`";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $totalItems = $row["totalItems"];
                    // Tính tổng số trang 
                    $totalPages = ceil($totalItems / $itemsPerPage);
                    $sql = "SELECT * FROM `product_deltail` ORDER BY `ID` DESC Limit " . $offset . ",".$itemsPerPage;
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <ul class="pagination">
                            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                                <?php if ($i == $page) { ?>
                                    <li class="active"><a href="Deltail_product.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php } else { ?>
                                    <li><a href="Deltail_product.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php } ?>
                            <?php } ?>
                            <!-- Next Page Link -->
                            <?php if ($page < $totalPages) { ?>
                                <li><a href="Deltail_product.php?page=<?php echo ($page + 1); ?>">&raquo;</a></li>
                            <?php } ?>
                        </ul>
                        <table id="data-table" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Sản phẩm</th>
                                    <th>Thương hiệu</th>
                                    <th>Model</th>
                                    <th>Nhập khẩu</th>
                                    <th>Bảo hành</th>
                                    <th>Thông số kĩ thuật</th>
                                    <th>Tùy chọn </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $idproduct = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $idproduct_detail = $row['productID'];
                                    // get tên sản phẩm tương ứng với ID sản phẩm
                                    $sql = "SELECT p.Name AS 'tensanpham' FROM products p JOIN product_deltail pd ON pd.productID = p.ProductID
                        WHERE pd.productID = $idproduct_detail";
                                    $res = mysqli_query($conn, $sql);
                                    $r = mysqli_fetch_assoc($res);
                                    $tensanpham = $r['tensanpham'];
                                ?>
                                    <tr>
                                        <td><?php echo $idproduct_detail ?></td>
                                        <td><?php echo $tensanpham ?></td>
                                        <td><?php echo $row['Brand'] ?></td>
                                        <td><?php echo $row['Model'] ?></td>
                                        <td><?php echo $row['Import'] ?></td>
                                        <td><?php echo $row['Guarantee'] ?></td>
                                        <td><?php echo $row['parameter'] ?></td>
                                        <td class="tuychon">
                                            <a class="btn btn-primary btn-tone m-r-5" href="./update_chitetsp.php?ID=<?php echo $row['ID']; ?>">Sửa</a>
                                            <a class="btn btn-danger btn-tone m-r-5" href="./xoa_chitietsp.php?ID=<?php echo $row['ID']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">Xóa</a>
                                        </td>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    require('Footer_Admin.php');
    ?>