<?php
header("content-type:text/html;charset=utf-8");
// 二分查找练习
// $arr = range(1, 100);
$arr = array(1, 2, 3);
binarySearch($arr, 2);
function binarySearch($arr, $find)
{
    $len = count($arr);
    if ($find == $arr[round($len / 2)]) {
        echo '找到了下标是: ' . round($len / 2);
    } else if ($find > $arr[round($len / 2)]) {

    }
}
