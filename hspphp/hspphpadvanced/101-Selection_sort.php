<?php
header("content-type:text/html;charset=utf-8");
// 选择排序
$arr = array(10, 7, 1, 8, 9);
function selection(&$arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        $min       = $arr[$i];
        $min_index = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            if ($min > $arr[$j]) {
                // 重新设置最小值和下标
                $min       = $arr[$j];
                $min_index = $j;
            }
        }
        // 交换值
        if ($min_index != $i) {
            $arr[$min_index] = $arr[$i];
            $arr[$i]         = $min;
        }

    }
}
selection($arr);
echo '<pre>';
print_r($arr);
