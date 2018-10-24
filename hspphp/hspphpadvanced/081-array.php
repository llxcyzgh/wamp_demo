<?php
header("content-type:text/html;charset=utf-8");
/*
求6只鸡的总重量,平均重量
 */
$hens         = array(3, 5, 1, 3, 2, 1);
$total_werght = 0;
foreach ($hens as $key => $value) {
    $total_werght += $value;
}
echo '总的重量为: ' . $total_werght . '<br>';
echo '平均重量为: ' . round($total_werght / count($hens), 0);
