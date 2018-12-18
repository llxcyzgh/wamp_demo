<?php
header("content-type:text/html;charset=utf-8");
// 闭包函数也可以作为变量的值来使用。PHP 会自动把此种表达式转换成内置类 Closure 的对象实例。
$fx = function ($num) {
    return $num * 2;
};

// oop
var_dump($fx);
