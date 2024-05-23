<div class="category">
                    <input type="checkbox" id="Togglers">
                    <label for="Togglers"><i class="fa-solid fa-bars"></i></label>
                    <h2>Danh mục </h2>
                    <ul class="categories_item">
                        <?php
                            require_once 'Ketnoi.php';
                            $sql = "SELECT * FROM `categorys`";
                            $query = mysqli_query($conn, $sql);
                            foreach ($query as $r) {
                            ?>
                                <li><a  href="product.php?CategoryID=<?php echo $r["CategoryID"] ?> "><?php echo $r["Catename"] ?></a></li>
                            <?php
                            }
                        ?>
                    </ul>
                </div>