<?php
header("content-type:text/html;charset=utf-8");
// binary search  二分查找
/*
基本介绍:
1.首先必须是一个有序的数组,才可以用二分查找
2.先与中间的数比较:如果相等,直接获取退出;如果中间数大于要查的数,则在左边找;如果中间数小于要查的数,则在右边找;
3.继续第二步(递归)
 */

/*
@author: zj
@parameter: $left_index 数组左边下标
@parameter: $right_index 数组右边下标
@parameter: $arr 数组
@parameter: $find_val 要查找的值
 */

function binarySerach($left_index, $right_index, $arr, $find_val)
{
    if ($left_index > $right_index) {
        echo '找不到数据';
        return;
    }
    $middle_index = round(($left_index + $right_index) / 2);
    if ($arr[$middle_index] == $find_val) {
        echo '查找到了,下标是' . $middle_index;
        return;
    } else if ($arr[$middle_index] > $find_val) {
        binarySerach($left_index, $middle_index - 1, $arr, $find_val);
    } else if ($arr[$middle_index] < $find_val) {
        binarySerach($middle_index + 1, $right_index, $arr, $find_val);
    }
}

$arr = array(1, 2, 3, 4);
binarySerach(0, count($arr) - 1, $arr, 4);
