<?php
header("content-type:text/html;charset=utf-8");
/*
插入排序法(insertion sort)的基本思想是:
把n个待排序的元素看成一个有序表和一个无序表, 开始时有序表只包含一个元素, 无序表中包含 n-1 个元素.
排序过程中, 每次从无序表中取出第一个元素, 把它的排序码依次与有序表元素的排序码进行比较, 将它插入到有序表中的适当位置, 使之成为新的有序表.
 */
$arr = array(10, 7, 1);
function insertSort(&$arr)
{
    $len = count($arr);
    for ($i = 1; $i < $len; $i++) {
        $insertVal = $arr[$i];
        $index     = $i - 1;
        while ($index >= 0 && $arr[$index] > $insertVal) {
            $arr[$index + 1] = $arr[$index];
            $index--;
        }
        $arr[$index + 1] = $insertVal;
    }
}
insertSort($arr);
echo '<pre>';
print_r($arr);

echo '<hr>';
$arr = array(1, 5.2, 6, 7, 0, 9, -5);
inSort($arr);
echo '<pre>';
print_r($arr);

function insort(&$arr)
{
    $len = count($arr);
    for ($i = 1; $i < $len; $i++) {
        $temp  = $arr[$i];
        $index = $i;
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($temp < $arr[$j]) {
                $arr[$index] = $arr[$j];
                $index--;
            }
        }
        $arr[$index] = $temp;
    }
}

echo '<hr>';
$arr = array(1, 80, 6, 7, 0, 90, -5);
inSort2($arr);
echo '<pre>';
print_r($arr);
function inSort2(&$arr)
{
    $len = count($arr);
    for ($i = 1; $i < $len; $i++) {
        $temp  = $arr[$i];
        $index = $i;
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($temp < $arr[$j]) {
                $arr[$j + 1] = $arr[$j];
                $index--;
            } else {
                break; // 优化做法,如果不再小于了,则无需继续向前比较
            }
        }
        $arr[$index] = $temp;
    }
}
