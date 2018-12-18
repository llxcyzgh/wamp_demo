<?php
header("content-type:text/html;charset=utf-8");
// 二维数组的遍历

$arr  = array(0, array(1, 90), 5, 9, array(100, 120, 90), 10);
$len1 = count($arr);
for ($i = 0; $i < $len1; $i++) {
    if (is_array($arr[$i])) {
        $len2 = count($arr[$i]);
        for ($j = 0; $j < $len2; $j++) {
            echo $arr[$i][$j] . ' ';
        }
    } else {
        echo $arr[$i];
    }
    echo '<br>';
}

echo '<hr>';
foreach ($arr as $key => $val) {
    if (is_array($val)) {
        foreach ($val as $k => $v) {
            echo $v . ' ';
        }
    } else {
        echo $val;
    }
    echo '<br>';
}

echo '<hr>';
// 不定维数组的遍历,用递归
$arr = array(1, array(2, 3), 99, array(array(4, 5), 6));
traversal($arr);
function traversal($arr)
{
    foreach ($arr as $key => $val) {
        if (is_array($val)) {
            echo '<br>';
            traversal($val);
        } else {
            echo $val . ' ';
        }
        echo '<br>';
    }
}

echo '<hr>';
function traversal2($arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len; $i++) {
        if (is_array($arr[$i])) {
            echo '<br>';
            traversal2($arr[$i]);
        } else {
            echo $arr[$i];
        }
        echo '<br>';
    }
}
traversal2($arr);
