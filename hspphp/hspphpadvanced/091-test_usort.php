<?php
header("content-type:text/html;charset=utf-8");
/*
排序练习:
给你一个数组 $arr = array('hello','yes','dog','bird');
根据值的长度,由小到大排序.
提示 usort
 */
$arr = array('hello', 'yes', 'dog', 'bird', 'y');
usort($arr, 'func');
function func($a, $b)
{
    $a_len = strlen($a);
    $b_len = strlen($b);
    if ($a_len == $b_len) {
        return 0;
    }
    return $a_len > $b_len ? 1 : -1;
};
echo '<pre>';
print_r($arr);
