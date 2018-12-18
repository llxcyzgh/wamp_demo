<?php
header("content-type:text/html;charset=utf-8");
// 赋值运算符
$num1 = 10;
$num2 = 0;
$num2 += 1; // 等价于 $num2 = $num2 + 1;
$num2 -= 1; // 等价于 $num2 = $num2 - 1;
$num2 *= 1; // 等价于 $num2 = $num2 * 1;
$num2 /= 1; // 等价于 $num2 = $num2 / 1;
$num2 %= 1; // 等价于 $num2 = $num2 % 1;
echo $num2;
