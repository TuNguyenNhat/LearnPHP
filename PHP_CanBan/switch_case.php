<?php
/*
 * Kiểm tra thứ trong tuần
 * $number = 1 => Chủ nhật
 * $number = 2 => Thứ hai
 * $number = 3 => Thứ ba
 * $number = 4 => Thứ tư
 * $number = 5 => Thứ năm
 * $number = 6 => Thứ sáu
 * $number = 7 => Thứ 7
 * */
$number = 0;
switch ($number){
    case 1:
        //if
        echo 'Hôm nay là chủ nhật';
    break;

    case 2:
        echo 'Hôm nay là thứ hai';
    break;

    case 3:
        echo 'Hôm nay là thứ ba';
    break;

    case 4:
        echo 'Hôm nay là thứ tư';
    break;

    case 5:
        echo 'Hôm nay là thứ năm';
    break;

    case 6:
        echo 'Hôm nay là thứ sáu';
    break;

    case 7:
        echo 'Hôm nay là thứ bảy';
    break;

    default:
        echo 'Không hợp lệ';
    break;
}

echo '<br/>';

/*
 * Kiểm tra số ngày trong tháng
 * Input: Nhập tháng, năm
 * Output: Đưa ra số ngày trong tháng
 *
 * Tháng 31 ngày: 1, 3, 5, 7, 8, 10,12
 * Tháng 30 ngày: 4, 6, 9, 11
 * Tháng 28, 29 ngày: 2 (Năm nhuận = năm chia hết cho 4)
 * */

/*Input*/

$month = 2;
$year = 2021;

switch ($month){
    case 2:
        if ($year % 4==0){
            echo 'Tháng '.$month.' có 29 ngày';
        }else{
            echo 'Tháng '.$month.' có 28 ngày';
        }

    break;

    case 4:
    case 6:
    case 9:
    case 11:
        echo 'Tháng '.$month.' có 30 ngày';
    break;

    default:
        echo 'Tháng '.$month.' có 31 ngày';
    break;
}