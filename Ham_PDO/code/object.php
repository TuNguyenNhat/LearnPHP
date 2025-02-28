<?php
/*
 * Tổng quan về Object (Đối tượng)
 * - Object là một tập hợp các thuộc tính cụ thể nào đó cho một đối tượng cụ thể
 * - Object bao gồm:
 * + Hằng số (const)
 * + Thuộc tính (biến)
 * + Phương thức (Hàm)
 * - Để có object, ta cần phải định nghĩa lớp (class)
 * */

/*
 * Cú pháp khởi tạo object
 *
 * $tenBien = new TenLop(thamso);
 * hoặc
 * $tenBien = new TenLop();
 * hoặc
 * $tenbien = new TenLop;
 *
 * */

$dateObject = new DateTime();

/*
 * Cách sử dụng:
 * - Gọi hằng số: $tenBienDoiTuong::tenhang;
 * - Gọi thuộc tính: $tenBienDoiTuong->tenthuoctinh (Không có dấu $)
 * - Gọi phương thức: $tenBienDoiTuong->tenPhuongThuc(thamso)
 *
 * */

//1. Gọi hằng số
echo $dateObject::RSS.'<br/>';
echo $dateObject::COOKIE.'<br/>';

//2. Gọi phương thức
echo $dateObject->format('d/m/Y H:i:s').'<br/>';

class DemoObject{
    public $education='Hello';
}

//Tạo đối tượng
$demoObject = new DemoObject();
echo $demoObject->education.'<br/>';

//Ví dụ stdClass
$demoStd = new stdClass();
$demoStd->name = 'Nguyen Nhat Tu';
echo $demoStd->name;