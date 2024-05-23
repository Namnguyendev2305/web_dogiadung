<?php
include_once('Header.php');
?>
<!-- Navbar(Menu) -->
<?php
include_once('Menu.php');
?>
<!-- slider_top -->
<section id="slider_top">
   <div class="slider_container">
      <ul class="slider">
         <li><i class="fa fa-refresh"></i><span>Đổi trả <br>trong vòng 7 ngày</span></li>
         <li><i class="fa fa-truck"></i><span>Miễn phí <br>vận chyển 10km</span></li>
         <li><i class="fa fa-money"></i><span>Thanh toán <br>khi giao hàng</span></li>
         <li><i class="fa fa-thumbs-up"></i><span>Sản phẩm <br>chính hãng</span></li>
         <li><i class="fa fa-wrench"></i><span>Chính sách <br>bảo hàng</span></li>
      </ul>
   </div>
</section>


<!-- Main conten -->
<section id="main_conten">
   <div class="container_main">
      <!-- catgory -->
      <div class="left_menu">
         <?php include('Category.php') ?>
         <div class="img_left">
            <img src="./Image/Product/thum1.jpg" alt="">
         </div>
      </div>
      <!-- tin tức -->
      <div class="blogs">
         <?php
         include('Ketnoi.php');
         if (isset($_GET['ID'])) {
            $postID = $_GET['ID'];
            $sql = "SELECT * FROM post WHERE ID=$postID";
            $result = mysqli_query($conn, $sql);
            if ($result) {
               $post = mysqli_fetch_assoc($result);
            }
         }
         ?>
         <div class="title_tieude">
            <h3><?= $post['Titles'] ?></h3>
         </div>
         <div class="main_blogs">
            <div class="main_blogs_head">
               <img src="./Image/Post/working.png" width="30px" height="30px" alt="">
               <div class="colum">
                  <p style="font-weight: 600;">Đoàn trọng Nhất</p>
                  <p style="font-size: 12px;">Ngày đăng: <?= $post['creat_at'] ?></p>
               </div>
            </div>
            <div class="item">
               <div class="item_conten">
                  <p>
                     <?= $post['conten'] ?>
                  </p>
               </div>
            </div>

         </div>
      </div>
   </div>


</section>

<!-- Dang ki  -->
<?php include('dangki.php') ?>
<!-- Footer -->
<?php include('Footer.php') ?>