<?php
header("content-type:text/html;charset=utf-8");
// 选择排序练习(从高到低)
$arr = array(10, 34, 19, 100, 80, 90, 20);
function selectionSort(&$arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        $max       = $arr[$i];
        $max_index = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            if ($max < $arr[$j]) {
                $max       = $arr[$j];
                $max_index = $j;
            }
        }
        if ($max_index != $i) {
            $arr[$max_index] = $arr[$i];
            $arr[$i]         = $max;
        }
    }
}
selectionSort($arr);
echo '<pre>';
print_r($arr);
