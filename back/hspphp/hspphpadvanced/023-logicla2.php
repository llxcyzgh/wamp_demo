<?php
header("content-type:text/html;charset=utf-8");
// 逻辑运算的短路现象
/*
1.逻辑与运算时,若第1个条件为false,则后面的条件不再判断
2.逻辑或运算时,若第1个条件为true,则后面的条件不再判断
 */
$num1 = 9;
$num2 = 0;
if ($num2 && $num1++) {
    echo '<br> ok'; //
}
var_dump($num1, $num2); // 9 0

$num1 = 9;
$num2 = 0;
if ($num1 && $num2++) {
    echo '<br> ok'; //
}
var_dump($num1, $num2); // 9 1

$num1 = 9;
$num2 = 0;
if ($num1 && ++$num2) {
    echo '<br> ok'; // ok
}
var_dump($num1, $num2); // 9 1

// 逻辑短路有时候可以当成一个if语句来用
$step              = -3;
$step < 1 && $step = 5;
echo "<br> $step";

// 等价于
$step = -3;
if ($step < 1) {
    $step = 5;
}
echo "<br> $step";
