<?php
header("content-type:text/html;charset=utf-8");

// $arr = array(3, 0, 2, 9, -1);

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
    // var_dump($arr_left);
    // var_dump($arr_right);
    $arr = array_merge($arr_left, array($temp), $arr_right);
}

$arr = array();
for ($i = 0; $i < 100000; $i++) {
    $arr[] = rand(1, 100000);
}

echo '<pre>';
// print_r($arr);

echo date('H:i:s') . '<br>';
quickSort2($arr);
echo date('H:i:s');

echo '<pre>';
// print_r($arr);
