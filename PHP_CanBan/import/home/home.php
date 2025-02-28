<?php
/*
 * Thứ tự Import:
 * - Header
 * - Content
 * - Footer
 *
 * Cú pháp include
 * include 'path_to_php_file';
 * include('path_to_php_file');
 * */
//$path_dir = __DIR__.'/../includes';

$path_dir = '../includes';

//Import header.php
require $path_dir.'/header.php';

//require_once $path_dir.'/header.php';

echo 'Đây là nội dung thêm <br/>';
//Import content.php
require_once $path_dir.'/content.php';

//Import footer.php
require_once($path_dir.'/footer.php');

/*
 * 1. include, include_once => Nếu lỗi => Chương trình phía dưới vẫn chạy
 * 2. requirce, require_once => Nếu lỗi => Chương trình phía dưới dừng
 * */