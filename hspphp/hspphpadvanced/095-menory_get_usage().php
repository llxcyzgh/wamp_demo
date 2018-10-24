<?php
header("content-type:text/html;charset=utf-8");
// 数组的内存分配机制
echo memory_get_usage() . '<br>';
$arr = range(1, 20000);
echo 'size = ' . count($arr) . ' <br>';
echo memory_get_usage() . '<br>';
// 当把一个数组赋值给另外一个数组后,新的数据空间,并没有马上分配位置.当你修改了 $arr2 元素时,才会真的分配
$arr2 = $arr;
echo memory_get_usage() . '<br>';
$arr2[0] = 12;
echo memory_get_usage() . '<br>';
