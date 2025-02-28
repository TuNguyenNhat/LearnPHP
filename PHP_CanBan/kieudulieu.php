<?php 

// Khai báo biến kiểu INT: $ten_bien = so_nguyen;
// - Ép kiểu INT: (int)$ten_bien;
// - Kiểm tra số nguyên: is_int($ten_bien) hoặc is_integer($ten_bien), var_dump($ten_bien);


// Khai báo kiểu dữ liệu: $ten_bien = giá trị Boolean; (true hoặc false)
// - Ép kiểu dữ liẹu: (bool)$ten_bien; hoặc (boolean)$ten_bien;
// - Các ký tự: 0, trống, null để quy về false, ngược lại là true
// - Kiểm tra biến kiểu Boolean: is_bool($ten_bien), var_dump($ten_bien);


// Khai báo kiểu số thực: $ten_bien = số thực; (Số có phần
// thập phân)
// - Ép kiểu số thực: (float)$ten_bien;
// - Kiểu tra kiểu số thực: is_float($ten_bien), var_dump($ten_bien);


// Khai báo kiểu chuỗi: $ten_bien = ‘Chuỗi’; hoặc $ten_bien = “Chuỗi”;
// - Kiểm tra kiểu chuỗi: is_string($ten_bien), var_dump($ten_bien);


// Khai báo kiểu mảng: $ten_bien = array();
// - Ép kiểu mảng: (array)$ten_bien;
// - Kiểm tra kiểu mảng: is_array($ten_bien), var_dump($ten_bien);


// Khai báo NULL: $ten_bien = null;
// - Ép kiểu sang Int => 0;
// - Ép kiểu sang String => Rỗng
// - Ép kiểu sang Boolean => False
// - Kiểm tra kiểu Null: is_null($ten_bien), var_dump($ten_bien);


// Kiểu dữ liệu resource đặc biệt, nó lưu trữ tham chiếu đến các hàm – tài nguyên
// bên ngoài PHP: file, curl, database
// - Kiểm tra kiểu resource: is_resource($ten_bien)


// Kiểu dữ liệu Object lưu trữ dữ liệu và cách xử lý dữ liệu đó (Học kỹ hơn ở
// phần lập trình hướng đối tượng)
// - Kiểm tra kiểu đối tượng: is_object($ten_bien)
// - Ép kiểu đối tượng từ mảng: (object)$bien_mang

?>