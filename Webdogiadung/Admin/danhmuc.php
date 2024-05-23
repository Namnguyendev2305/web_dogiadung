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
                    <a class="breadcrumb-item" href="#">Danh mục sản phẩm</a>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4>Danh sách danh mục cửa hàng</h4>
                <?php require('Add_category.php') ?>
                <div class="m-t-25">
                    <?php
                    $itemsPerPage = 6;
                    // Lấy trang hiện tại từ tham số GET
                    $page = 1;
                    if (isset($_GET["page"])) {
                        $page = (int)$_GET["page"];
                    }
                    // Xác định vị trí bắt đầu lấy dữ liệu
                    $offset = ($page - 1) * $itemsPerPage;
                    // Lấy tổng số sản phẩm
                    $sql = "SELECT COUNT(*) as totalItems FROM `categorys`";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $totalItems = $row["totalItems"];
                    // Tính tổng số trang 
                    $totalPages = ceil($totalItems / $itemsPerPage);
                    $sql = "SELECT * FROM `categorys`  Limit " . $offset . "," . $itemsPerPage;
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <ul class="pagination">
                            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                                <?php if ($i == $page) { ?>
                                    <li class="active"><a href="danhmuc.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php } else { ?>
                                    <li><a href="danhmuc.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php } ?>
                            <?php } ?>
                            <!-- Next Page Link -->
                            <?php if ($page < $totalPages) { ?>
                                <li><a href="danhmuc.php?page=<?php echo ($page + 1); ?>">&raquo;</a></li>
                            <?php } ?>
                        </ul>
                        <table id="data-table" class="table">
                            <thead>
                                <tr>
                                    <th>Mã danh mục</th>
                                    <th>Tên danh mục</th>
                                    <th>Trạng Thái</th>
                                    <th>Mô tả</th>
                                    <th>Tùy chọn </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $idproduct = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $idcat = $row['CategoryID'];
                                    // hiển thị danh mục
                                    $sql = "SELECT * FROM categorys";
                                    $res = mysqli_query($conn, $sql);
                                    $r = mysqli_fetch_assoc($res);
                                ?>
                                    <tr>
                                        <td><?php echo $idcat ?></td>
                                        <td><?php echo $row['Catename'] ?></td>
                                        <td><?php echo $row['Status'] == 0 ? 'Hoạt động ' : 'Không hoạt động'; ?></td>
                                        <td><?php echo $row['Description'] ?></td>
                                        <td class="tuychon">
                                            <a class="btn btn-primary btn-tone m-r-5" href="./capnhat_danhmuc.php?CategoryID=<?php echo $row['CategoryID']; ?>">Sửa</a>
                                            <a class="btn btn-danger btn-tone m-r-5" href="./xoa_danhmuc.php?CategoryID=<?php echo $row['CategoryID']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">Xóa</a>

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