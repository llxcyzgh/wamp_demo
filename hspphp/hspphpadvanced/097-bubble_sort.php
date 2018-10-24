<?php
header("content-type:text/html;charset=utf-8");
// 排序的介绍: 排序是将一组数据,按指定的顺序进行排列的过程
/*
可以分为内部排序和外部排序
1.内部排序
指将需要处理的所有数据都加载到内部存储中进行排序.
包括 交换式排序法,选择式排序法,插入式排序法
交换式排序法分为: 冒泡排序法(Bubble Sort),快速排序法(Quick Sort)

2.外部排序法
数据量过大,无法全部加载到内存中,需要借助外部存储进行排序.
包括 合并排序法,直接合并排序法
 */

// 以下代码有误
$arr = array(5, 4, 3, 2, 1);

$len = count($arr);
for ($i = 4; $i != 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        if ($arr[$i] < $arr[$i - 1]) {
            $temp        = $arr[$i - 1];
            $arr[$i - 1] = $arr[$i];
            $arr[$i]     = $temp;
        }
    }
    echo $i . '<br>';
}

echo '<pre>';
print_r($arr);
