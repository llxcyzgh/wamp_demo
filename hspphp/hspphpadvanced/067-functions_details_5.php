<?php
header("content-type:text/html;charset=utf-8");
// 函数中要使用全局变量时,使用global
// $a = 12;
function abc3()
{
    // global $a 等价于  $a = &$GLOBALS['a'];
    // global $a; //表示希望使用全局区的$a变量
    $a = &$GLOBALS['a'];
    $a = 10;
    $a += 45;
    echo 'abc3() $a=' . $a . '<br>';
}
abc3();
echo $a . '<br>';
