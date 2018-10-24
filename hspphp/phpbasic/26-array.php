<?php
/* 一个养鸡场有6只鸡，它们的体重分别是3kg，5kg，1kg，3.4kg，2kg，50kg。
 * 请问这6只鸡的总体重是多少千克？平均体重是多少？
 */
// 数组定义一共有三种方式
$arr = array(3,5,1,3.4,2,50);
var_dump($arr);

/*array (size=6)
 0 => int 3
 1 => int 5
 2 => int 1
 3 => float 3.4
 4 => int 2
 5 => int 50

 * size 是元素个数（数组长度）
 * 左边是下标，键 key
 * 右边是值 value
 */

// 最基本遍历数组的方法
$arr_size=count($arr);
//echo $arr_size;
$total=0;
for($i=0 ; $i<$arr_size ; $i++){
	$total+=$arr[$i];
}
echo '总的重量是'.$total.'，平均重量是'.$total/$arr_size;
















