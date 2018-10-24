<?php
header("content-type:text/html;charset=utf-8");
// 函数默认值
// 函数的默认值说明
// $a 的默认值是 2
function abc($b, $a = 2)
{
    $res = $a + $b;
    return $res;
}
$e = 70;
echo abc($e) . '<br>';
echo abc($e, 90) . '<br>';
