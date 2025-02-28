<?php
//Xác định số lần lặp
$count = 20;

//Xác định giá trị bắt đầu
$start = 1;

//Vòng lặp for tăng
for ($i = $start; $i<=$count; $i+=2){
    echo 'Đây là vòng lặp: '.$i.' <br/>';
}

echo '<hr/>';

//Ví dụ 1: Tính tổng S = 1+2+3+4+5+6+7...+n

$n = 5;
$s = 0; //Giả định = 0
for ($i=1; $i<=$n; $i++){
    $s+=$i; //s=s+i;
}
echo 'Tổng S = '.$s;

/*
 * s = 0;
 * i = 1 => s=s+i = 0+1 = 1
 * i = 2 => s=s+i = 1+2 = 3
 * i = 3 => s=s+i = 3+3 = 6
 * i = 4 => s=s+i = 6+4 = 10
 * i = 5 => s=s+i = 10+5 = 15
 *
 * */

echo '<hr/>';

/*Vòng lặp for giảm*/
$n = 20;
for ($i = $n; $i>=1; $i-=2){
    echo 'Đây là vòng lặp thứ: '.$i.'<br/>';
}