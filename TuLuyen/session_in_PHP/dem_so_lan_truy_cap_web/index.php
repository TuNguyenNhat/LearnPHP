<?php
session_start();

if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 1;
}

echo 'Bạn đã truy cập trang này ' . $_SESSION['counter'] . ' lần.';
?>