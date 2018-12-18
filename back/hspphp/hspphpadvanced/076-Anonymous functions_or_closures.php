<?php
header("content-type:text/html;charset=utf-8");
/*
匿名函数（Anonymous functions），也叫闭包函数（closures），允许 临时创建一个没有指定名称的函数。最经常用作回调函数（callback）参数的值。当然，也有其它应用的情况。
匿名函数目前是通过 Closure 类来实现的。
 */
$fun1 = function ($n1, $n2) {
    return $n1 + $n2;
}; // 这里需要分号
echo $fun1(20, 50);
