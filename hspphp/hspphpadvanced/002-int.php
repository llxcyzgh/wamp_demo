<?php
header("content-type:text/html;charset=utf-8");
// 整数的使用细节说明
$num = 100;
// 0x11 是一个16进制的表示方式
// 0x11 = 1 + 1*16;
$num2 = 0x1A;
echo $num2 . '<br>';

$num3 = 011; //8+1
echo $num3;

// php不支持无符号整数,即php中的整数都是有符号的
$num4 = -123;
$num4 = 456;

//php的整数的范围是多少?
echo "<br>最大值是: " . PHP_INT_MAX;
$num5 = 2147483647;
$num6 = 2147483648;
$num7 = -2147483647;
$num8 = -2147483648;
echo "<br>";
var_dump($num5); //int
echo "<br>";
var_dump($num6); //float
echo "<br>";
var_dump($num7); //int
echo "<br>";
var_dump($num8); //float
echo "<br>";
