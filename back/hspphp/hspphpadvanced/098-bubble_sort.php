<?php
header("content-type:text/html;charset=utf-8");
// 冒泡排序法
$arr = array(5, 4, 3, 2, 1);
function bubble(&$arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        for ($j = 0; $j < $len - 1 - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp        = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j]     = $temp;
            }
        }
    }
    echo '<pre>';
    print_r($arr);
}
bubble($arr);
