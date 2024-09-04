
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


// đối số function

 function fa ($x){
 	echo "$x hello.<br> ";
 }
 fa ("thuan");
 fa ("lee");
 fa ("vanw");
 fa ("t");
 
 
 // hàm trả về giá trị 
 
 function sum (int $x, int $y){
 	$z = $x + $y;
 	return $z;
 }
 echo "5 + 10= ".sum(5,10) ;
 
 // mảng
 $x= array("111","222","333");
 echo " tôi đếm ". $x[0]." và ".$x[1]." và ".$x[2];
 // giải bài toán phương trình bậc nhất
 
 $a=2;
 $b=3;
 # kết quả là -$b/$a ( $a*x + $b=0)
 if ( $a==0){
 	if($b==0){
 		echo " phương trình vô số nghiệm";
 }else{ echo"phương trình vô nghiệm";
}}
else{
	echo "phương trình có nghiệm là : -$b / $a ";
}
// chu vi hình chữ nhật

$a= 2;
$b=3;
function chuvi($a,$b){
	
$chu_vi= 2*($a+$b);
return $chu_vi;}
$chu_vi= chuvi($a,$b);
echo " chu vi hình chữ nhật là: $chu_vi";
 //diện tích hình chữ nhật
 $a=3;
 $b=4;
function dientichhinhchunhat($a,$b){
$dientich= $a*$b;
return $dientich;}
$dientich= dientichhinhchunhat($a,$b);
echo " diện tích hình chữ nhật là :  $dientich";
 
// công thức tính phương trình bậc 2 
$a=1;
$b=5;
$c=4;
if($a==0){
	echo " phương trình có nghiệm là :  - $c/$b ";
}
else{
	function denta($a,$b,$c){
		$denta= $b *$b - 4*$a*$c;
		return $denta;}
		$denta=denta($a,$b,$c);
	function nghiemphuongtrinh($a,$b,$denta){
		$x1=(-$b+sqrt($denta))/2*$a ;
		return $x1;}
		$x1=nghiemphuongtrinh($a,$b,$denta);
	function phuongtrinh($a,$b,$denta){
		$x2=(-$b-sqrt($denta))/2*$a ;
		return $x2;}
		$x2= phuongtrinh($a,$b,$denta);
	function nghiemkep($a,$b){
		$x3=-$b/2*$a ;
		return $x3;}
		$x3=nghiemkep($a,$b);
	if($denta <0){
		echo " phương trình vô nghiệm";
	}
	elseif( $denta==0){
		echo"phương trình có nghiệm kép là: $x3";
	}
	elseif  ($denta > 0) {
		echo "phương trình có hai nghiệm là $x1 , $x2 ";
	}
	}

 ?>

