<?php
   $x = "xin chao ba con hang xomxom";
  echo "so ky tu :" .strlen($x) . '<br>';
  
  echo "so tu :" .str_word_count($x) . '<br>';
 
  echo "daonguoc :" .strrev($x) . '<br>';

  echo "chuoicon :" .strpos($x, "xin") . '<br>';
   
  echo "thay the world :" .str_replace("xin",'chao', $x) . '<br>';
  
  echo "kiem tra mot chuoi co bắt đầu bằng chuỗi khác không:" .strncmp('xni',$x,3) . '<br>';

  echo "chuyển đổi một chuỗi thành chữ hoa :" .strtoupper($x) . '<br>';
  echo "chuyển đổi một chuỗi thành chữ thường:" .strtolower($x) . '<br>';
  echo "chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ:" .ucwords($x) . '<br>';
  echo "loại bỏ khoảng trắng ở đầu và cuối" .trim($x,'xin al') . '<br>';
  echo "loại bỏ ký tự đầu tiên của một chuỗi :" .ltrim($x,'x') . '<br>';
  echo "loại bỏ ký tự cuối cùng của một chuỗi:" .rtrim($x,'o') . '<br>';
  echo "tách một chuỗi thành một mảng các phần tử:" .print_r(explode(' ',$x) );
  $y= array (" hello","các bạn");
  echo "nối các phần tử của một mảng thành một chuỗi:" .implode(' ',$y);
 echo "thêm một chuỗi vào đầu hoặc cuối của một chuỗi " .str_pad($x,39,'.',STR_PAD_BOTH) ;
 echo "kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không " . strrchr("Hello world! What a beautiful day!", "What");
 echo "kiểm tra xem một chuỗi có chứa một chuỗi con khác không" . strstr($x,'h',true) . '<br>';
 $z='/xin chao/';
 $v=' hello ';
 echo "thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác" . preg_replace($z,$v,$x) . '<br>';
 $thuan=27;
 echo "kiểm tra xem một chuỗi có phải là một số nguyên hay không:  " . is_int($thuan) . '<br>';
 
 
 // kiem tra mail hợp lệlệ
$email = "thuan27@gmail.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL )) {
    echo("$email là hợp lệ");
} else {
    echo("$email mail này không hợp lệ");
}
 
 ?>
