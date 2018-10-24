<?php
header("content-type:text/html;charset=utf-8");
// 静态变量  特点是,只会被初始化一次
function test()
{
    static $n1 = 0;
    $n1++;
    echo $n1 . '<br>';
}
test();
test();
test();
echo $n1;

/*
静态变量说明
1.使用static关键字修饰(一般在函数中定义);
2.存入在静态数据区;
3.初始化操作在多次调用中,只会被初始化一次
 */
