<?php
header("content-type:text/html;charset=utf-8");
// 比较运算符
$a = "102";
$b = 12;
if($a == $b){
	echo "$a 等于 $b <br>";
}
if($a === $b){
	echo "$a 全等于 $b <br>";
}
if($a != $b){
	echo "$a 不等于 $b <br>";
}
if($a <> $b){
	echo "$a 不等于 $b <br>";
}
if($a !== $b){
	echo "$a 不全等于 $b <br>";// 如果$a 和 $b 的值或类型有一个不一样，则为真
}
if($a > $b){
	echo "$a 大于 $b <br>";
}
if($a < $b){
	echo "$a 小于 $b <br>";
}
if($a >= $b){
	echo "$a 大于等于 $b <br>";
}
if($a <= $b){
	echo "$a 小于等于 $b <br>";
}

// 4等于4.0;  4不全等于4.0，因为二者一个是整型，一个是浮点型
$c = 4;
$d = 4.0;
$D = 4.02;// PHP变量名区分大小写
var_dump($c,$d);
if($c == $d){
	echo "$c 等于 $d <br>";
}
if($c === $d){
	echo "$c 全等于 $d <br>";
}

/*对于字符串使用单引号还是双引号？
 * 1、从运行效率看，单引号的效率高
 * 2、尽量使用单引号
 * 3、如果字符串会拼接很多变量，而且不影响执行效率（调用的次数不多），可以考虑双引号
 */









