<?php
header("content-type:text/html;charset=utf-8");
// 函数传递参数的说明
$a = 213;
function abc(&$b)
{
    $b = 314;
}
abc($a);
echo $a . '<br>';

$a = 213;
function abc2(&$b)
{
    $b = null;
}
abc2($a);
echo $a . '<br>';

$a = 213;
function abc3(&$b)
{
    unset($b); //unset的作用是销毁当前变量,而不是值(或数据空间)
    // 如果一个值没有被任何一个变量指定(引用),则会被当作垃圾进行清除
}
abc3($a);
echo $a . '<br>';
