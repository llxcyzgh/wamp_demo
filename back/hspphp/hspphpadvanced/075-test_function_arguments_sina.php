<?php
header("content-type:text/html;charset=utf-8");
/* sina PHP高级程序员笔试题
编写一个函数,该函数可以接收两个数,$a,$b和一个函数$fun.
要求,通过 $fun 得到两个数的和
 */
function getVal($a, $b, $funName)
{
    $res = $funName($a, $b);
    return $res;
}

function getSum($n1, $n2)
{
    return $n1 + $n2;
}
echo getVal(10, 90, 'getSum');
