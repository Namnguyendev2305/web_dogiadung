<div class="new" style="margin-top: 50px;">
   <div class="product_new wow fadeInDown">
      <div class="product_title">
         <h3>Tin tức mới nhất</h3>
      </div>
      <div class="body_cart" style="display: flex;align-items: center; justify-content: space-between;">
         <?php
         require_once('Ketnoi.php');
         $sql = 'SELECT * FROM post order by creat_at DESC LIMIT 4';
         $result = mysqli_query($conn, $sql);
         if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
               $tieude = $row["Titles"];
               $image = $row['Image'];
               $Descrption = $row['conten'];
               $time = $row['creat_at']
         ?>
               <div class="card_tintuc">
                  <div class="header_tintuc">
                     <img class="image_tintuc" src="./Image/Post/<?php echo $image ?>" alt="">
                     <div class="date">
                        <span><?php echo $time ?></span>
                     </div>
                  </div>
                  <div class="info_tintuc">
                     <a rel="noopener noreferrer" href="post_details.php?ID=<?php echo $row['ID']; ?>" class="block" style="text-decoration: none;text-transform: none;color: #22092C;">
                        <span class="title_tintuc" ><?php echo $tieude ;?></span>
                     </a>
                     <p class="description_tintuc">
                        <?php
                        $maxLength = 90;
                        $hienthi = strlen($Descrption) > $maxLength ? substr($Descrption, 0, $maxLength) . '...' : $Descrption;
                        echo $hienthi;
                        ?>
                     </p>
                  </div>
               </div>
         <?php
            }
         } else {
            echo "Không tìm thấy tin tuc.";
         }
         ?>
      </div>

   </div>
</div>