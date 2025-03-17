<?php 

    // tạo 1 session để lưu thông tin người dùng
    // kiểm tra xem sesion đã được lưu hay chưa
    //     nếu có hiển thị thông tin session đó 
    //     nếu không có hiển thị thông báo "session chưa được tạo"

    session_start();
    $_SESSION['khoitao'] = 'Session đã được tạo';
    if(isset($_SESSION['khoitao']))
    {
        echo $_SESSION['khoitao'];
    }
    else
    {
        echo 'Session chưa được tạo';
    }

?>