<?php
header("content-type:text/html;charset=utf-8");
// 表达式: 任何有值的东西,都可以看成一个表达式
// 不管一个表达式多么复杂,最后都会返回一个值
$a = 10;
$b = 10 + 10 * 3 - (23 + 45);
// 函数
function getSum($num1, $num2)
{
    return $num1 + $num2;
}
$c = getSum(90, 0);
echo $c . '<br>';
$d = ($a > 90) ? getSum(90, 0) : '不大于';
echo $d . '<br>';
