<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header('Location: login.php');
    exit();
}
else
{
    echo 'Xin chào, ' . $_SESSION['username'];
    echo '<br><a href="logout.php">Đăng xuất</a>';
}
