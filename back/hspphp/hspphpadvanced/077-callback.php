<?php
header("content-type:text/html;charset=utf-8");
// 把一个匿名函数当作回调函数使用
function getVal($n1, $n2, $f)
{
    $sum = $n1 + $n2;
    $res = $f($sum);
    echo 'res = ' . $res . '<br>';
}
// 将一个匿名函数传递给$f使用,$f就是一种回调函数
getVal(9, 9, function ($val) {
    return $val * 2;
});
