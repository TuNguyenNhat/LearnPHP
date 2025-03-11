<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang nhap</title>
</head>
<body>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td>Nhap Ten Dang Nhap</td>
                <td><input type="text" id="name" name="nhap_ten"></td>
            </tr>
            <tr>
                <td>Nhap Mat Khau</td>
                <td><input type="number" id="name" name="nhap_mk"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" id="submit" name="dangnhap" value="Dang Nhap"></td>
            </tr>
        </table>
    </form>

    <?php 

        include('includes/connect.php');
        if(isset($_POST['dangnhap']))
        {
            $dn = $_POST['nhap_ten'];
            $mk = $_POST['nhap_mk'];

            $sql = "SELECT * 
                    FROM users 
                    WHERE tendangnhap = '$dn' AND matkhau = '$mk'";

            $res = mysqli_query($conn, $sql);
            $check_Trangthai = mysqli_fetch_assoc($res);

            if($check_Trangthai['trangthai'] == 0)
            {
                $_SESSION['gmailI'] = $check_Trangthai['gmail'];
                header('Location: verify.php');
                exit();
            }
            else
            {
                $_SESSION['gmailI'] = $check_Trangthai['gmail'];
                header('Location: trangchu.php');
                exit();
            }
        }

    ?>
</body>
</html>