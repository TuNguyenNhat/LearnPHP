<?php
    require_once 'includes/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quan ly</title>
</head>
<body>
    <?php  
        include('layout/nav.php');
        //kiem tra va gan gia tri mac dinh cho bien moi
        if(isset($_GET['modules']))
        {
            $modules_Va = $_GET['modules'];
        }
        else
        {
            $modules_Va = 'trangchu'; //gia tri mac dinh
        }

        if(isset($_GET['action']))
        {
            $action_Va = $_GET['action'];
        }
        else
        {
            $action_Va = '';
        }

        switch($modules_Va)
        {
            case 'baitin':
                break;
            case 'binhluan':
                break;
            case 'danhmuc';
                break;
            case 'taikhoan';
                switch($action_Va)
                {
                    case 'ds_taikhoan';
                        include('modules/taikhoan/ds_taikhoan.php');
                        break;
                    case 'them_taikhoan';
                        include('modules/taikhoan/them_taikhoan.php');
                        break;
                    case 'sua_taikhoan';
                        include('modules/taikhoan/sua_taikhoan.php');
                        break;
                    case 'xoa_taikhoan';
                        include('modules/taikhoan/xoa_taikhoan.php');
                        break;
                    default:
                        echo "Action không tồn tại!";
                }
                break;
            case 'theloai';
                break;
            case 'trangchu';
                break;
            default:
                echo "Module không tồn tại!";
        }
    ?>
</body>
</html>