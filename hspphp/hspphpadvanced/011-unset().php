<?php
header("content-type:text/html;charset=utf-8");
// 关于unset() 的细节说明
$a = 100;
unset($a);
@var_dump($a);
// unset() 就是把变量销毁

//如果在中 unset() 一个全局变量,则只是局部变量被销毁
$b = 700;
function test()
{
    global $b;
    $b = 10;
    unset($b);
}
test();
echo $b;

// 关于$GLOBALS全局数组的使用
echo '<pre>';
$book = '西游记';
var_dump($GLOBALS);

// 如果要在函数中unset()一个全局变量,可以用$GLOBALS来实现
$bb = 700;
function testb()
{
    global $bb;
    $bb = 10;
    unset($GLOBALS['bb']);
}
testb();
echo $bb . '<br>';
