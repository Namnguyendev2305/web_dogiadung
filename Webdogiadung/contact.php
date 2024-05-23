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
<?php include('toast.php')?>
<!-- Contac -->
<?php
    include('Ketnoi.php');
    if(isset($_POST['gui'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subljxt = $_POST['subljxt'];
        $conten = $_POST['conten'];
        if(empty($name)||empty($conten)||empty($email)){
            toast("Vui lòng điền đủ thông tin","error","Thông báo");
        }
        else if(preg_match("/\s{1,}/", $name)){
            toast("ten co chua dau cach", "error", "vui lòng nhập lại");
        }
        else if(preg_match("/\{2,}/", $email)){
            toast("email co chua dau cach", "error","vui lòng nhập lại" );
        }
        else{
            $sql = "INSERT INTO contact(`Name`,`Email`,`Conten`,`Message`) VALUES('$name','$email','$subljxt','$conten')";
        $result = mysqli_query($conn,$sql);
        if($result){
            toast("Gửi thành công","success","Thông báo");
        }else{
            toast("Gửi không thành công","error","Thông báo");
        }
        }
    }
?>
<section id="Contac">
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="http://localhost/Webdogiadung">Trang chủ</a></li>
            <li class="active">Liên hệ</li>
        </ol>
    </div>
    <div class="titles">
        <h3>Liên Hệ</h3>
    </div>
    <div class="main_contact">

        <!-- form-->
        <div class="formgui">
            <form class="form_controls" action="" method="post">
                <h3>Thông tin liên hệ</h3>
                <div class="item_put1">
                    <div class="item_input">
                        <input type="text" name="name" value="" placeholder="Họ và tên" >
                        <input type="email" name="email" value="" placeholder="Email" >

                    </div>
                    <input type="text" class="subljxt" name="subljxt" value="" placeholder="Tiêu đề" >
                </div>
                <textarea name="conten" id="" cols="30" rows="10" placeholder="Nội dung " > </textarea>
                <input type="submit" value="Gửi" name="gui" class="sub">
            </form>
        </div>
        <!-- info -->
        <div class="contact_bas">
            <div class="contact_info">
                <h3>Thông tin liên hệ</h3>
                <address>
                    <p>Nhóm 4 quản lý đồ gia dụng </p>
                    <p><i class="fa-solid fa-location-dot"></i> 218 Lĩnh Nam, Hoàng Mai, Hà Nội</p>
                    <p><i class="fa-solid fa-phone"></i> 0899999999</p>
                    <p><i class="fa-solid fa-envelope"></i> nhom4dogiadung@gmail.com</p>
                </address>
            </div>
            <div class="mdeia_contact">
                <h3>Mạng xã hội</h3>
                <div class="icon">
                    <a href="#" id="facebook-link"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" id="google-plus-link"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" id="youtube-link"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" id="twitter-link"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" id="tiktok-link"><i class="fa-brands fa-tiktok"></i></a>

                </div>
            </div>
        </div>
    </div>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2685093229497!2d105.8731756735659!3d20.981871189390684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac1fff979959%3A0x2dc5e24b895616f0!2zTmfDtSAyMTggTMSpbmggTmFtLCBWxKluaCBIxrBuZywgSG_DoG5nIE1haSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1699102104205!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- Dang ki  -->
<?php
include_once('dangki.php');
?>
<!-- Footer -->
<?php
include_once('Footer.php');
?>