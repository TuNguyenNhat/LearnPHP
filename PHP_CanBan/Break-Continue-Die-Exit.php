<?php
for ($i = 1; $i<=10; $i++){
    echo $i.'<br/>';
    if ($i==5){
        break; //Thoát khỏi vòng lặp khi thoả mã điều kiện
    }
}

echo '<br/>';
for ($i = 1; $i<=10; $i++){
    if ($i==5) continue; //Bỏ qua vòng lặp
    echo $i.'<br/>';
}

//die() hoặc die
//exit() hoặc exit
//Sự khác nhau:
/*
 * exit: Nguồn gốc từ ngôn ngữ lập trình C++
 * die: Nguồn gốc từ ngôn ngữ lập trình Perl
 *
 * */
echo '<p>Nguyen Nhat Tu</p>';

?>
<h1>Hello</h1>
