<?php 

    // Yêu cầu:
    // - Tạo 1 file để tạo session lưu tên người dùng
    // - Hiển thị giá trị ra màn hnhf
    
    session_start();

    $_SESSION['tennguoidung'] = 'Nguyen Nhat Tu';

    echo $_SESSION['tennguoidung'];

?>