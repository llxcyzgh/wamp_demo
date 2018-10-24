<?php
// 当数组的下标不要数值，或数值不连续时，不能用for 循环遍历，而要用 foreach遍历

$arr[0] = 10;
$arr[1] = '北京';
$arr[2] = 100;
$arr[4] = 300;

// 遍历键和值
foreach ($arr as $k => $v){
	echo $k.' => '.$v.'<br>';
}

echo '<hr>';
foreach ($arr as $k => $v){
	echo $arr[$k].'<br>';// 遍历了键和值，但是只显示了值
}

echo '<hr>';
// 遍历值，不遍历键
foreach ($arr as $v){
	echo $v.'<br>';
}

echo '<hr>';
// 遍历关联数组的键和值
$arr2['姓名'] = '小王';
$arr2['年龄'] = 20;
$arr2['性别'] = '男';

foreach ($arr2 as $k => $v){
	echo $k.' => '.$v.'<br>';
}