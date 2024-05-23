<div class="new">
   <div class="product_new wow fadeInDown">
      <div class="product_title">
         <h3>Máy xay và máy ép chất lượng</h3>
      </div>
      <div class="product_newcart owl-carousel owl-theme">
         <?php
         require_once('Ketnoi.php');
         $sql = 'SELECT * FROM products where CategoryID=6 LIMIT 10';
         $result = mysqli_query($conn, $sql);
         if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
               $tensanpham = $row["Name"];
               $image = $row['Image'];
               $gia = $row['price'];

         ?>
               <div class=" cart_item ">
                  <img src="./Image/Product/<?php echo $image; ?>" alt="<?php echo $tensanpham; ?>">
                  <a href="product_deltail.php?ProductID=<?php echo $row["ProductID"] ?>"><?php echo $tensanpham; ?></a> <br>
                  <span><?php echo number_format($gia); ?>đ</span>
                  <a class="add" href="cart.php?ProductID=<?php echo $row["ProductID"] ?>"><i class="fa fa-shopping-cart"></i>Mua ngay</a>
               </div>

         <?php
            }
         } else {
            echo "Không tìm thấy sản phẩm bán chạy nào.";
         }
         ?>

      </div>


   </div>
</div>