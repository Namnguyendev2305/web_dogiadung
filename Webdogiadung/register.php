<?php
ob_start();
include('Ketnoi.php');
if (isset($_POST['dangki'])) {
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    $user_role_id = 1;
    $admin_role_id = 2;
    if ($user == 'Admin') {
        $role_id = $admin_role_id;
    } else {
        $role_id = $user_role_id;
    }
    require('toast.php');
    $pass = md5($pass);
    $reps=md5($repass);
    if (empty($email) || empty($user) || empty($adress) || empty($phone)) {
        toast("Không được để trống", "error", "Vui lòng thử lại");
    }
    else if ($reps != $pass) {
        toast("Mật khẩu không trùng khớp", "error", "Vui lòng thử lại");
    }
    else {
        $sql = "INSERT INTO user (`Password`, `user`, `Email`, `Phone`, `Adress`, `RoleID`) 
            VALUES ('$pass', '$user', '$email', '$phone', '$adress', '$role_id')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            toast("Đăng Kí Thành Công", "success", "Vui lòng đăng nhập");
            echo "<script>
            setTimeout(function() {
                window.location.href = 'Login.php';
            }, 3000);
        </script>";
        } else {
            toast("Đăng Kí Thất bại", "error", "Vui lòng thử lại");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/login.css">
    <title>Đăng Kí</title>
</head>

<body>
    <div class="container">
        <div class="form-container" style="height: auto;">
            <p class="title">Đăng Kí Tài khoản</p>
            <form class="form" method="post" action="register.php">
                <input type="email" name="email" class="input" placeholder="Email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                <input type="text" name="user" value="<?php echo isset($_POST['user']) ? htmlspecialchars($_POST['user']) : ''; ?>" class="input" placeholder="Tài khoản">
                <input type="password" name="pass" value="<?php echo isset($_POST['pass']) ? htmlspecialchars($_POST['pass']) : ''; ?>" class="input" placeholder="Mật khẩu">
                <input type="password" name="repass" class="input" value="<?php echo isset($_POST['repass']) ? htmlspecialchars($_POST['repass']) : ''; ?>" placeholder="Nhập lại khẩu">
                <input type="text" name="phone" class="input" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>" placeholder="Số điện thoại">
                <input type="text" name="adress" class="input" value="<?php echo isset($_POST['adress']) ? htmlspecialchars($_POST['adress']) : ''; ?>" placeholder="Địa chỉ">
                <button class="form-btn" name="dangki">Đăng kí </button>
            </form>
            <p class="sign-up-label">
                Bạn đã có tài khoản?<span class="sign-up-link">
                    <a href="Login.php">Đăng Nhập</a>
                </span>
            </p>

        </div>
    </div>
    </div>
</body>

</html>