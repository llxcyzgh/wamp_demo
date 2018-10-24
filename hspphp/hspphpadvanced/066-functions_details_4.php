<?php
header("content-type:text/html;charset=utf-8");
// 函数中定义的变量是局部的,函数外不生效
function sayHello()
{
//    global $num1;
    $num1 = 100;
    echo 'num1 = ' . $num1;
}
sayHello();
echo $num1;
