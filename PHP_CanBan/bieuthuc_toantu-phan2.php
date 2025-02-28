<?php
//Toán tử +=
$a = 10;
$a+=10;
$a+=20;
echo $a;
echo '<br/>';

//Toán tử -=
$a = 10;
$a-=5;
echo $a;
echo '<br/>';

//Toán tử *=
$a = 10;
$a*=10;
echo $a;
echo '<br/>';

//Toán tử /=
$a = 10;
$a/=9;
echo $a;
echo '<br/>';

//Toán tử %=
$a = 10;
$a%=6;
echo $a;
echo '<br/>';

//Toán tử so sánh
//- Toán tử >, <, >=, <=
$a = 10;
$b = 11;
$check = $a<$b;
var_dump($check);
echo '<br/>';

//- Toán tử == (Chỉ so sánh giá trị)
$a = 10;
$b = '10'; //Chuỗi số
$check = $a==$b;
var_dump($check);
echo '<br/>';

//- Toán tử === (So sánh cả giá trị và kiểu dữ liệu)
$a = 10;
$b = 10.0; //Chuỗi số
$check = $a===$b;
var_dump($check);
echo '<br/>';

//- Toán tử khác (!=, !==)
$a = 10;
$b = 10.0;
$check = $a !== $b;
var_dump($check);
echo '<br/>';

//Toán tử quan hệ
//Toán tử và (&&)
/*
 * - Cả biểu thức đúng khi tất cả đều đúng
 * - 1 biểu thức con sai => Cả biểu thức sai
 * */
$a = 10;
$b = 15;
$c = 20;
$check = $a>=10 && ($b>=15 && $c>=25);
var_dump($check);
echo '<br/>';

//Toán tử hoặc (||)
/*
 * - Cả biểu thức đúng khi 1 trong các biểu thức con đúng
 * - Cả biểu thức sai khi tất cả biểu thức con sai
 * */
$a = 10;
$b = 15;
$check = $a==0 || $b<=0;
var_dump($check);
echo '<br/>';

//Toán tử phủ định (!)
$a = 10;
$check = !$a;
var_dump($check);
echo '<br/>';