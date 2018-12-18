<?php
header("content-type:text/html;charset=utf-8");
// 变量名,函数名,常量名的可变性讨论

$a   = 'hello<br>';
$b   = '您好<br>';
$var = 'a';
// echo $a;
echo $$var;

function test1()
{
    echo 'hello,text1()<br>';
}
function test2()
{
    echo 'hello,text2()<br>';
}
$myfun = 'test2';

// 正常调用
test1();

// 通过变量调用
$myfun();

// 常量也可以使用变量名来调用
define('PI', 3.14);
echo PI . '<br>';
$my_pi = 'PI';
echo constant($my_pi);
