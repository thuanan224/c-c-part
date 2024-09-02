
<?php
//toán tử quan hệ
$A=5;
$B=6;
//sosánh
if($A==$B)  echo " a bang bb";
else echo "không bằng";
// mảng
$cars = array("alo","hello");
var_dump($cars);
//đo độ dài chuỗi
echo strlen("Hello world!");
// số lượng từ
echo str_word_count("hello");
//tìm kiếm văn bản trong 1 chuỗichuỗi
echo strpos("Hello world!", "world");
// viết hoa---- strtoupper()
//chữ thường strtolower
// thay thế chuỗi str_replace
// đảo ngược chuỗi strrev
// xóa trắng trim
// tách chuỗi thành mảng explode
// cắt chuỗi substr($x,6,5)
//câu điều kiện 
/*      if else      */
$thuan= date("THUAN123");
if ($thuan < "5"){
	echo"mã đã đúng";
} else {
	echo " mã sai  ";
}
/*           vòng lặp For       */
for($x=0;$x <= 10; $x++)
{
	echo"số đã cho chạy: $x ";
}

/*           For each         */
$b= array("tôi đang","học ","nè");
foreach ($b as $va){
	echo" $va ";
}
/*         vòng lặp while      */
$x=1; 
while ($x <= 5){
	echo" số được hiện ra : $x ";
	$x++;
}
/*     do while    */
$x=1;
do {
	echo" số  : $x ";
	$x--;
}while ($x >= -3);

?>


