<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang Ki</title>
</head>
<body>
    <style>
        input[type="mail"], input[type="text"], input[type="number"] {
            width: 300px; /* Độ rộng của ô input */
            padding: 8px; /* Tăng kích thước lề trong */
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        input[type="submit"] {
            padding: 8px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>

    <form action="index.php" method="post">
        <table>
            <tr>
                <td>Ten Dang Nhap <span style="color: red;">*</span></td>
                <td><input type="text" id="name" name="tendangnhap"></td>
            </tr>
            <tr>
                <td>Mat Khau <span style="color: red;">*</span></td>
                <td><input type="text" id="name" name="matkhau"></td>
            </tr>
            <tr>
                <td>Gmail <span style="color: red;">*</span></td>
                <td><input type="mail" id="name" name="gmail"></td>
            </tr>
            <tr>
                <td>Ten Hien Thi <span style="color: red;">*</span></td>
                <td><input type="text" id="name" name="tenhienthi"></td>
            </tr>
            <tr>
                <td>So Dien Thoai</td>
                <td><input type="number" id="name" name="sdt"></td>
            </tr>
            <tr>
                <td>Dia Chi</td>
                <td><input type="text" id="name" name="diachi"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" id="submit" name="dangki" value="Dang Ky"></td>
            </tr>
        </table>
    </form>
    <a href="login.php">Da co tai khoan</a>
    <?php 
        // // Mảng rỗng để lưu các số ngẫu nhiên
        // $random_OTP = [];
        
        // // Sinh ra 6 số ngẫu nhiên từ 0 đến 9 và thêm vào mảng
        // for ($i = 0; $i < 6; $i++) {
        //     $random_OTP[] = rand(0, 9);  // Sinh số ngẫu nhiên từ 0 đến 9
        // }
        
        // // Hiển thị mảng ta ép kiểu mảng thành chuỗi rồi in ra
        // echo implode($random_OTP);
    ?>
</body>
</html>

<?php

include('includes/connect.php');
require 'send_Mail.php';

if(isset($_POST["dangki"]))
{
    $tendangnhap = $_POST['tendangnhap'];
    $matkhau = $_POST['matkhau'];
    $gmailI = $_POST['gmail'];
    $tenhienthi = $_POST['tenhienthi'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];

    //kiem tra mail co ton tai khong
    $checkMail = mysqli_query($conn, "SELECT * FROM users WHERE gmail = '$gmailI'");
    $check = mysqli_fetch_assoc($checkMail);
    if($check > 0)
    {
        echo "Gmail da ton tai";
    }
    else
    {
        $res = mysqli_query($conn, "INSERT INTO users (tendangnhap, 
                                                        matkhau, 
                                                        gmail, 
                                                        tenhienthi, 
                                                        sdt, 
                                                        diachi) 
                                    VALUES ('$tendangnhap', 
                                            '$matkhau', 
                                            '$gmailI', 
                                            '$tenhienthi', 
                                            '$sdt', 
                                            '$diachi')");
        if($res)
        {
            $otpI = rand(111111, 999999);
            $_SESSION['otpI'] = $otpI;
            $_SESSION['gmailI'] = $gmailI;
            sendMail($gmailI, $tenhienthi, $otpI);
        }
    }
}

?>