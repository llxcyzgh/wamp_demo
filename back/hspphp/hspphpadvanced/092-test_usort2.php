<?php
header("content-type:text/html;charset=utf-8");
/*
给一个数组 $arr = array(1,8,-1,2);  根据数的大小来进行排序,从大到小排
 */

// 方法一: 直接用 rsort()
$arr = array(1, 8, -1, 2);
rsort($arr);
echo '<pre>';
print_r($arr);

echo '<hr>';
// 方法二
$arr = array(1, 8, -1, 2);
sort($arr);
$arr = array_reverse($arr);
print_r($arr);

echo '<hr>';
// 方法三
$arr = array(1, 8, -1, 2);
usort($arr, 'funk');
function funk($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    // return $a > $b ? -1 : 1;
    return $a < $b ? 1 : -1;
}
print_r($arr);

echo '<hr>';
$arr = array(1, 8, -1, 2);
usort($arr,"funk");

print_r($arr);
