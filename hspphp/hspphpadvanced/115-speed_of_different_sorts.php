<?php
header("content-type:text/html;charset=utf-8");
// $arr = array(5, 4, 2, 9, 7, 0);
for ($i = 0; $i < 5000; $i++) {
    $arr[] = rand(1, 100000);
}
echo '<pre>';
// print_r($arr);
$arr1 = $arr;
$arr2 = $arr;
$arr3 = $arr;
$arr4 = $arr;
$arr5 = $arr;

echo '<hr><hr><hr><hr>';

// 冒泡排序法
function bubbleSort(&$arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        $flag = 1;
        for ($j = 0; $j < $len - 1 - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp        = $arr[$j];
                $arr[$j]     = $arr[$j + 1];
                $arr[$j + 1] = $temp;
                $flag        = 0;
            }
        }
        if ($flag) {
            break;
        }
    }
}

echo '冒泡排序法:<br>' . date('H:i:s') . '<br>';
bubbleSort($arr1);
echo date('H:i:s');
echo '<pre>';
// print_r($arr1);
echo '<hr>';

// 选择排序法
function selectSort(&$arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        $temp  = $arr[0];
        $index = 0;
        for ($j = 0; $j < $len - $i; $j++) {
            if ($temp < $arr[$j]) {
                $temp  = $arr[$j];
                $index = $j;
            }
        }
        if ($index != $len - 1 - $i) {
            $arr[$index]        = $arr[$len - 1 - $i];
            $arr[$len - 1 - $i] = $temp;
        }

    }
}
echo '选择排序法:<br>' . date('H:i:s') . '<br>';
selectSort($arr2);
echo date('H:i:s');
echo '<pre>';
// print_r($arr2);
echo '<hr>';

// 插入排序法
function insertSort(&$arr)
{
    $len = count($arr);
    for ($i = 1; $i < $len; $i++) {
        $temp  = $arr[$i];
        $index = $i;
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($temp < $arr[$j]) {
                $arr[$j + 1] = $arr[$j];
                $index       = $j;
            } else {
                break;
            }
        }
        if ($index != $i) {
            $arr[$index] = $temp;
        }
    }
}
echo '插入排序法:<br>' . date("H:i:s") . '<br>';
insertSort($arr3);
echo date("H:i:s");
echo '<pre>';
// print_r($arr3);
echo '<hr>';

// 快速排序法
function quickSort(&$arr, $left, $right)
{
    if ($left >= $right) {
        return;
    }
    $len   = count($arr);
    $temp  = $arr[$left];
    $index = $left;
    $i     = $left;
    $j     = $right;

    while ($i < $j) {
        while ($i < $j) {
            if ($temp > $arr[$j]) {
                $arr[$i] = $arr[$j];
                $i++;
                break;
            } else {
                $j--;
            }
        }
        while ($i < $j) {
            if ($temp < $arr[$i]) {
                $arr[$j] = $arr[$i];
                $j--;
                break;
            } else {
                $i++;
            }
        }
    }
    $arr[$i] = $temp;
    $index   = $i;
    quickSort($arr, $left, $index - 1);
    quickSort($arr, $index + 1, $right);
}
echo '快速排序法:<br>' . date("H:i:s") . '<br>';
quickSort($arr4, 0, count($arr4) - 1);
echo date("H:i:s");
echo '<hr>';
echo '<pre>';
// print_r($arr4);

// 快速排序法2
function quickSort2(&$arr)
{
    $len = count($arr);
    if ($len <= 1) {
        return;
    }

    $arr_left  = array();
    $arr_right = array();
    $temp      = $arr[0];
    for ($i = 1; $i < $len; $i++) {
        if ($temp >= $arr[$i]) {
            $arr_left[] = $arr[$i];
        } else {
            $arr_right[] = $arr[$i];
        }
    }

    quickSort2($arr_left);
    quickSort2($arr_right);
    $arr = array_merge($arr_left, array($temp), $arr_right);
}
echo '快速排序法2:<br>' . date("H:i:s") . '<br>';
quickSort2($arr5);
echo date("H:i:s");
echo '<hr>';
echo '<pre>';
// print_r($arr5);
