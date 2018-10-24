<?php
header("content-type:text/html;charset=utf-8");
// 数据类型转换:自动转换,强制转换

// 基本使用
$str = 'abc';
$str = 123;
$str = array(1, 5);

// 细节
// 当进行运算的时候,数据类型向高精度转换
// 精度的高低说明  布尔 < int < float
$num1 = 10;
$b    = true;
$num2 = $num1 + $b;
echo 'num2 = ' . $num2;
var_dump($num2);
