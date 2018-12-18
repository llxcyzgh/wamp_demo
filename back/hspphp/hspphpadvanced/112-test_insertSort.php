<?php
header("content-type:text/html;charset=utf-8");
// 由大到小插入排序
$arr = array(3, 9, 7, 4, 0, 5);

function insertSort(&$arr)
{
    $len = count($arr);
    for ($i = 1; $i < $len; $i++) {
        $temp  = $arr[$i];
        $index = $i;
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($temp > $arr[$j]) {
                $arr[$j + 1] = $arr[$j];
                $index       = $j;
            }
        }
        $arr[$index] = $temp;
    }
}

insertSort($arr);
echo '<pre>';
print_r($arr);
