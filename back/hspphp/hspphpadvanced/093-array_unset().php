<?php
header("content-type:text/html;charset=utf-8");
/*
unset() 函数允许删除数组中的某个元素.
但要注意:数组将不会重建索引
 */
$arr = array(10, 90, 100, -2);
// 删除 100 这个值
unset($arr[2]);
echo '<pre>';
print_r($arr);

// 删除整个数组
unset($arr); // unset() 销毁的是变量,不是值
