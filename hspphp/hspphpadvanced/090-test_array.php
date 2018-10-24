<?php
header("content-type:text/html;charset=utf-8");
/*
给你一个字符数组,比如abcdf,将其颠倒位置后,将最后的一个字母大写.
[要求:使用 array_reverse, array_pop, array_push, strtoupper 这几个函数]
比如:$arr_array = array('a','b','c','d','e','f');
输出: fedcbA
 */
$arr = array('a', 'b', 'c', 'd', 'e', 'f');
$arr = array_reverse($arr);
echo '<pre>';
$val = array_pop($arr);
$val = strtoupper($val);
array_push($arr, $val);
foreach ($arr as $value) {
    echo $value;
}
// print_r($arr);
