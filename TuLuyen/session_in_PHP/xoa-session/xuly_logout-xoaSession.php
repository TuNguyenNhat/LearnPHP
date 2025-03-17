<?php 

    session_start();

    //Xóa một session cụ thể
    unset($_SESSION['email']);

    //hủy toàn bộ session
    session_destroy();

    echo 'Bạn đã đăng xuất thành công';

?>