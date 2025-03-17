<?php
session_start();
?>

<form method="post" action="">
    <input type="text" name="username" placeholder="Tên đăng nhập"><br>
    <input type="password" name="password" placeholder="Mật khẩu"><br>
    <button type="submit">Đăng nhập</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'post') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra tài khoản (Ví dụ đơn giản)
    if ($username === 'admin' && $password === '123') {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit();
    } else {
        echo 'Sai tên đăng nhập hoặc mật khẩu!';
    }
}
?>
