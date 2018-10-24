<?php
header("content-type:text/html;charset=utf-8");
//变量作用域: 超全局变量,全局变量,局部变量
//全局变量
$a    = 90;
$city = array('北京', '上海');
function abc()
{
    // 局部变量
    $b = 10;
    // 在函数内部使用全局变量
    global $a; // <==> $a = &$GLOBALS['a'];
}
abc();
echo 'hello<br>';

function abc2()
{
    echo '<pre>';
    // 在函数内不需要global就可以使用超全局变量
    var_dump($GLOBALS);

    echo $GLOBALS['city'][0];
}
abc2();
