<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.9.0/sweetalert2.min.css" integrity="sha512-IScV5kvJo+TIPbxENerxZcEpu9VrLUGh1qYWv6Z9aylhxWE4k4Fch3CHl0IYYmN+jrnWQBPlpoTVoWfSMakoKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    function toast($title, $icon = "error", $text = "Thông báo")
    {
        echo "<script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            customClass: 'minisize-toast',
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: '{$icon}',
            title: '{$title}',
            text: '{$text}'
        });
    </script>";
    }

    ?>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.9.0/sweetalert2.min.js" integrity="sha512-GAaXlfJeIbLNG2LQu2v4pf8YEc7iPz+GE3LZyUmdR7d7Id5JsER9vmJVxMKw1MqmdlVh3NXxTxQVd9AS53G+4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>