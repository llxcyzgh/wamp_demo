<?php
header("content-type:text/html;charset=utf-8");
// 使用函数外面的$a,如果没有则创建一个全局的$a变量
function abc4()
{
    global $a;
    $a = 100;
}
abc4();
echo '$a = ' . $a;
