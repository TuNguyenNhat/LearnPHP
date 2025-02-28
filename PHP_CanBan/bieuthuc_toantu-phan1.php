<?php
/*Biểu thức - Toán tử*/
$a = 1;
$b = 5;
$total = $a+$b+10; //$total = $a+$b+10 => Biểu thức
//$a, $b, 10, $total: Toán hạng
//+, =: Toán tử

/*Toán tử gán
- Toán tử =
*/
$age = 30; //Cú pháp: $ten_bien = gia_tri;
const _WEB_HOST_ROOT = 'http://vnexpress.net'; //ten_hang = gia_tri;
echo $age;
echo '<br/>';
echo _WEB_HOST_ROOT;
echo '<br/>';

//-Toán tử .=
$outputStr = 'Hello';
//$outputStr = $outputStr.' PHP tại Unicode';
$outputStr.=' Xin chao'; //$outputStr = $outputStr.' PHP tại Unicode';
$outputStr.=' hmmm<br/>';
echo $outputStr;

//Toán tử số học
//- Toán tử cộng (+)
$a = 10;
$b = 20;
$total = $a + $b;
echo $total;
echo '<br/>';

//- Toán tử trừ (-)
$a = 10;
$b = 20;
$result = $a - $b;
echo $result;
echo '<br/>';

//- Toán tử nhân (*)
$a = 10;
$b = 20;
$result = $a * $b;
echo $result;
echo '<br/>';

//- Toán tử chia (/)
$a = 15;
$b = 10;
$result = $a / $b;
echo $result;
echo '<br/>';

//Toán tử chia lấy phần dư (%)
$a = 15;
$b = 10;
$result = $a % $b;
echo $result;
echo '<br/>';

//Toán tử lũy thừa (**)
$a = 5; //Cơ số
$b = 2; //Số mũ
$result = $a ** $b;
echo $result;
echo '<br/>';

//Toán tử tăng 1 đơn vị (++)
$count = 0;
//$count = $count+1;
$count++; //$count=$count+1
++$count;
echo $count;
echo '<br/>';

$count=0;
//$result = $count++; //$result = $count; $count = $count+1;
$result = ++$count; //$count = $count+1; $result = $count;
echo 'Count: '.$count.'<br/>';
echo 'Result: '.$result.'<br/>';

//Toán tử giảm 1 đơn vị (--)
$count = 1;
//$count = $count-1;
//$count--;
--$count;
echo $count.'<br/>';