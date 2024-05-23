<?php
require_once('Ketnoi.php');
?>
<?php
if (isset($_POST['add'])) {
    $email = $_POST['email'];
    if(empty($email)){
        toast("Không được để trống email","error","Thông Báo");
    }else{
        $result = mysqli_query($conn, "INSERT INTO sale(`Email`) VALUES('$email')");
    if ($result) {
        toast("Đăng kí thành công","success","Thông Báo");
    } else {
        toast("Không thể đăng kí","error","Thông Báo");
    }
    }
}
?>
<section id=" dangki" class="wow fadeInDown">
    <form action="" method="post">
        <div class="main_res">

            <h3 style="color: #fff;"> <span><i class="fa-solid fa-gift"></i></span>Nhận ưu đãi qua email</h3>
            <div class="btn_submit">
                <input type="email" name="email"  placeholder="Đăng kí Email">
                <button class="dangki" name="add"><i class="fa-regular fa-paper-plane"></i><span>Đăng kí</span></button>
            </div>
        </div>
    </form>
</section>