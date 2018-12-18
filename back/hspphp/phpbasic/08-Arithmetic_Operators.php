<?php
header("content-type:text/html;charset=utf-8");
// 运算符之 算术运算符

$num1 = 10;
$num2 = 20;

// +，-，*，/ 加减乘除
$res = $num1 + $num2;
$res2 = $num1 - $num2;
$res3 = $num1 * $num2;
$res4 = $num1 / $num2;

// % 取模
$res5 = $num1 % $num2;
echo $res."<hr>";
echo $res2."<hr>";
echo $res3."<hr>";
echo $res4."<hr>";
echo $res5."<hr>";

// 判断$num1 是否可以被$num2 整除
if($num1 % $num2 == 0){
	echo "$num1 可以被 $num2 整除";
}else{
		echo "$num1 不可以被 $num2 整除";
}