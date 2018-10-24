<?php
header("content-type:text/html;charset=utf-8");
$arr_cow = array(1, 100, 1000, 200, 123, 10120); // 高到低排序
function bubble(&$arr)
// 要加地址符,才是引用传递
{
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        for ($j = 0; $j < $len - 1 - $i; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                $temp        = $arr[$j];
                $arr[$j]     = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}
bubble($arr_cow);
echo '<pre>';
print_r($arr_cow);
