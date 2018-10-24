<?php
header("content-type:text/html;charset=utf-8");
/*
在运动会上,五个小孩比赛滑轮,他们滑完100米,分别用时10s,12s,5.7s,9s,14s,编写一个程序,求出速度最快和速度最慢的值,以及对应的下标
 */
$arr      = array(10, 12, 5.7, 9, 14);
$max      = $arr[0];
$max_note = 0;
$min      = $arr[0];
$min_note = 0;
for ($i = 0; $i < count($arr); $i++) {
    if ($max < $arr[$i]) {
        $max      = $arr[$i];
        $max_note = $i;
    }
    if ($min > $arr[$i]) {
        $min      = $arr[$i];
        $min_note = $i;
    }
}
echo '最大值为: ' . $max . ' ,下标为: ' . $max_note . '<br>';
echo '最小值为: ' . $min . ' ,下标为: ' . $min_note . '<br>';

echo '<hr>';

$arr      = array(10, 12, 5.7, 9, 14, 19, 5);
$max      = $arr[0];
$max_note = 0;
$min      = $arr[0];
$min_note = 0;
foreach ($arr as $key => $value) {
    if ($max < $value) {
        $max      = $value;
        $max_note = $key;
    }
    if ($min > $value) {
        $min      = $value;
        $min_note = $key;
    }
}
echo '最大值为: ' . $max . ' ,下标为: ' . $max_note . '<br>';
echo '最小值为: ' . $min . ' ,下标为: ' . $min_note . '<br>';
