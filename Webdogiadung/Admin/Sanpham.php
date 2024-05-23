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
                    <a class="breadcrumb-item" href="Sanpham.php">sản phẩm</a>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4>Danh sách sản phẩm</h4>
                <?php require('Addproduct.php') ?>
                <div class="m-t-25">
                    <?php
                    $itemsPerPage = 10;
                    // Lấy trang hiện tại từ tham số GET
                    $page = 1;
                    if (isset($_GET["page"])) {
                        $page = (int)$_GET["page"];
                    }
                    // Xác định vị trí bắt đầu lấy dữ liệu
                    $offset = ($page - 1) * $itemsPerPage;
                    // Lấy tổng số sản phẩm
                    $sql = "SELECT COUNT(*) as totalItems FROM `products`";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $totalItems = $row["totalItems"];
                    // Tính tổng số trang 
                    $totalPages = ceil($totalItems / $itemsPerPage);
                    // Giói hạn sản phẩm trên trang là 6 bắt đầu từ sản phẩm đầu 
                    $sql = "SELECT * FROM `products` ORDER BY Creatdate DESC Limit " . $offset . ",".$itemsPerPage;
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <ul class="pagination">
                            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                                <?php if ($i == $page) { ?>
                                    <li class="active"><a href="Sanpham.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php } else { ?>
                                    <li><a href="Sanpham.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php } ?>
                            <?php } ?>
                            <!-- Next Page Link -->
                            <?php if ($page < $totalPages) { ?>
                                <li><a href="Sanpham.php?page=<?php echo ($page + 1); ?>">&raquo;</a></li>
                            <?php } ?>
                        </ul>
                        <table id="data-table" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Trạng thái</th>
                                    <th>Ảnh</th>
                                    <th>Danh mục</th>
                                    <th>Ngày tạo </th>
                                    <th>Đã bán </th>
                                    <th>Tùy chọn </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $idproduct = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $idproduct = $row['ProductID'];
                                    // get tên danh mục tương ứng với ID sản phẩm
                                    $sql_1 = "SELECT c.Catename as 'tendanhmuc' FROM categorys c JOIN products s ON s.CategoryID = c.CategoryID WHERE s.ProductID = $idproduct";
                                    $res = mysqli_query($conn, $sql_1);
                                    $r = mysqli_fetch_assoc($res);
                                    $tendanhmuc = $r['tendanhmuc'];
                                ?>
                                    <tr>
                                        <td><?php echo $idproduct ?></td>
                                        <td><?php echo $row['Name'] ?></td>
                                        <td><?php echo number_format($row['price']) ?></td>
                                        <td><?php echo $row['Status'] == 0 ? 'Còn hàng' : 'Hết hàng'; ?></td>
                                        <td><?php echo "<img width=\"100px\" height = \"auto\" src=\"/Webdogiadung/Image/Product/" . $row["Image"] . "\" 
                                        alt=\"" . $row["Name"] . "\">" ?></td>
                                        <td><?php echo $tendanhmuc ?></td>
                                        <td><?php echo date('d/m/Y', strtotime($row['Creatdate'])); ?></td>
                                        <td><?php echo $row['Totalbuy'] ?></td>
                                        <td class="tuychon">
                                            <a class="btn btn-primary btn-tone m-r-5" href="./Update_product.php?ProductID=<?php echo $row['ProductID']; ?>">Sửa</a>
                                            <a class="btn btn-danger btn-tone m-r-5" href="./delete_product.php?ProductID=<?php echo $row['ProductID']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');">Xóa</a>
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