<?php
header("content-type:text/html;charset=utf-8");
// 内部函数
function calculator($num1, $num2)
{
    function getSum($n1, $n2)
    {
        return $n1 + $n2;
    }
    function getSub($n1, $n2)
    {
        return $n1 - $n2;
    }
    $val = getSum($num1, $num2) + getSub($num1, $num2);
    return $val . '<br>';
}

// $res = getSum(1, 2);// 直接调用失败

// 通过calculator 可以调用到内部的函数getSum和getSub
echo calculator(3, 9);

// 执行calculator时,该函数中定义的内部函数代码也被执行,因此,后面就可以使用内部函数了
$res = getSum(1, 2);
echo $res . '<br>';
