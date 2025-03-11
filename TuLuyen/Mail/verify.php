<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xac Nhan</title>
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

    <form action="verify.php" method="post">
        <table>
            <tr>
                <td>Nhap OTP <span style="color: red;">*</span></td>
                <td><input type="number" id="name" name="nhap_otp"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" id="submit" name="xacnhan" value="Xac Nhan"></td>
            </tr>
        </table>
    </form>

    <?php 
        include('includes/connect.php');

        if(isset($_POST['xacnhan']))
        {
            $otp = $_SESSION['otpI'];
            $gmail = $_SESSION['gmailI'];
            $otp_Input = $_POST['nhap_otp'];

            if($otp != $otp_Input)
            { ?>
                <script>
                    alert("Nhap Sai Ma OTP");
                </script>
            <?php }
            else
            {
                $sql = "UPDATE users 
                        SET trangthai = 1
                        WHERE gmail = '$gmail'";
                mysqli_query($conn, $sql); ?>
                <script>
                    alert("Xac Minh Tai Khoan Thanh Cong");
                    window.location.replace("login.php");
                </script>
            <?php }
        }

    ?>
</body>
</html>

