<?php
//Hàm isset()
/*
 * - Kiểm tra biến có tồn tại hay không
 * - Không kiểm tra về dữ liệu của biến
 * - Không kiểm tra được trường hợp null
 *
 * */

$number = 'Nguyen Nhat Tu';

if (isset($number) && $number){
    var_dump($number);
}

//Hàm empty()
/*
 * - Chỉ trả về kiểu dữ liệu boolean
 * - Trả về true nếu:
 * + không tồn tại => !isset($variable)
 * Hoặc
 * + Rỗng, =0, '0', trống, null, array rỗng, object rỗng, false
 *
 * Ứng dụng: Kiểm tra biến tồn tại và có dữ liệu
 * */
echo '<br/>';
$str = 0;
//Kiểm tra biến $str tồn tại và có dữ liệu
if (!empty($str)){
    echo $str;
}else{
    echo 'Không hợp lệ';
}