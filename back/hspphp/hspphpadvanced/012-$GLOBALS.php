<?php
header("content-type:text/html;charset=utf-8");
// $GLOBALS
/*
1.$GLOBALS 是一个超全局预定义数组,含有所有的全局变量
2.定义一个$a全局变量后,自动地放入到 $GLOBALS 中
$a = 'hello'; 等价于 $GLOBALS['a'] = 'hello';
3.如果 unset($GLOBALS['a']),就是把这个数据本身删除**可以在函数内部进行**
4.局部变量不会被放入到$GLOBALS数组中
 */

echo '<br>';
var_dump($GLOBALS);
$a = 100;
var_dump($GLOBALS);
echo $GLOBALS['a'];
