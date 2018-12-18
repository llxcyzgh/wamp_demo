<?php
header("content-type:text/html;charset=utf-8");
// 冒泡排序优化
$arr = array(1, 2, 10003, 6, 7, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
// $arr = range(1, 10000);
function bubble(&$arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        $flag = 0;
        for ($j = 0; $j < $len - 1 - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp        = $arr[$j];
                $arr[$j]     = $arr[$j + 1];
                $arr[$j + 1] = $temp;
                $flag        = 1;
            }
        }
        if (!$flag) {
            break;
        }
    }
}
date_default_timezone_set('PRC');
echo date('Y-m-d H:i:s') . '<br>';
bubble($arr);
echo date('Y-m-d H:i:s') . '<br>';
echo '<pre>';
print_r($arr);
