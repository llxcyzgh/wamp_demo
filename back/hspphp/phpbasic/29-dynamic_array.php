<?php
// php的数组具有动态增长的特点

/*
$arr[0] = 10;
$arr[1] = 12;
*/

for($i=1;$i<=10;$i++){
	// 如果没有指定数组的下标（key），就会自动分配【找最大数字下标，往后递增】
	$arr[] = $i;
}
echo '<pre>';// 在数组print_r打印之前，加上一个<pre>标签，有利于数组的垂向显示
//print_r($arr);

$arrx[0] = 1000;
$arrx[5] = 100;
$arrx[1] = 10;
$arrx['a'] = 10;
$arrx[] = 10;
echo '<pre>';
print_r($arrx);

$r = array(0);
if(is_array($r)){
	echo 'yes';
	var_dump($r);
}

$arry=array();
echo count($arry);// 空数组的 size 为 0









