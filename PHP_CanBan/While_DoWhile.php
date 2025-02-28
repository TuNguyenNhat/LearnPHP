<?php
/*Biểu diễn vòng lặp for bằng vòng lặp while*/

$i = 0; //Gán giá trị ban đầu
while ($i<=5){
    echo 'Vòng lặp thứ: '.$i.'<br>';
    $i++; //Xử lý điều kiện thoát vòng lặp
}

/* $i = 0 => Kiểm tra đúng => Chạy vòng lặp => $i = 1
 * $i = 1 => Kiểm tra đúng => Chạy vòng lặp => $i = 2
 * $i = 2 => Kiểm tra đúng => Chạy vòng lặp => $i = 3
 * $i = 3 => Kiểm tra đúng => Chạy vòng lặp => $i = 4
 * $i = 4 => Kiểm tra đúng => Chạy vòng lặp => $i = 5
 * $i = 5 => Kiểm tra đúng => Chạy vòng lặp => $i = 6
 * $i = 6 => Kiểm tra sai => Thoát
 *
 * */

/*Ví dụ tính tổng: S = 1+2+3+4+5+6+...+n*/
$n = 10;
$i = 1;
$total = 0; //Giả định bằng 0
while ($i<=$n){
    $total+=$i;
    $i++;
}

echo 'Tổng = '.$total.'<br/>';

/*
 * Tính tổng S = 1/2 + 1/4 + 1/6+...+1/n
 * Điều kiện: 1/n < 0.0001
 * */

$total = 0; //Giả định tổng = 0
$i = 2; //Giả định biến tăng
while (1/$i>=0.0001){
    $total+=1/$i;
    $i+=2;
}

echo 'Tổng = '.$total;

/*
 * Lưu ý: Những bài toán viết được bằng for đều chuyển được sang while
 * Những bài toán viết được bằng while chưa chắc đã chuyển được sang for
 *
 * */