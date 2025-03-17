<?php 

    // tạo 1 session để lưu email người dùng
    // xóa session khi người dùng bấm vào link "đăng xuất"

    session_start();
    $_SESSION['email'] = 'nguyennhattu2905@gmail.com';

    echo $_SESSION['email'];
    echo '<br><a href="xuly_logout-xoaSession.php">Đăng xuất</a>'
?>