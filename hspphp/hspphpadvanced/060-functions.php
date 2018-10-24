<?php
header("content-type:text/html;charset=utf-8");
// 函数调用原理剖析
$num1 = 90;
$num2 = 90;
function getSum($n1, $n2)
{
    $res = $n1 + $n2;
    return $res;
}
$val = getSum($num1, $num2);
echo 'val = ' . $val;
