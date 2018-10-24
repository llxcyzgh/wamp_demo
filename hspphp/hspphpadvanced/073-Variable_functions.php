<?php
header("content-type:text/html;charset=utf-8");
// 可变函数
/*
PHP支持可变函数概念.这意味着如果一个变量名后有圆括号,PHP将寻找与变量的值同名的函数,并且尝试执行它.可变函数可以用来实现包括回调函数,函数表在内的一些用途.
 */
function abc($n1, $n2)
{
    return $n1 + $n2;
}
echo abc(10, 90) . '<br>';
$func_name = 'abc';
echo $func_name(10, 90) . '<br>';
