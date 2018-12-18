<?php
/* 练习1：定义一个数组，有5个数，请找出最大的数和最小的数，以及对应的数组下标（key）是多少？
 * 练习2：（数组）定义一个数组，并给出6个整数，代表本小组同学的各自年龄，求本小组同学的平均年龄。
 * 练习3：（数组）定义一个数组，并给出7个整数，求该数组中的最大值和最小值，以及各自的下标。
 * 练习4：（数组）定义一个数组，并给出8个整数，求该数组中大于平均值的数的个数，和小于平均值的数的个数。
 * 练习5：（数组）定义一个数组，输入9个任意的整数，求该数组中奇数的平均值
 */

// 练习1
$arr1 = array(2,5,4,3,7.5,83,-1);
$arr1_size = count($arr1);//数组长度
$arr1_max = $arr1[0];//最大值
$arr1_max_note = 0;//最大值下标
$arr1_min = $arr1[0];//最小值
$arr1_min_note = 0;//最小值下标
foreach($arr1 as $key => $val){
	$arr1_max = $arr1_max > $val ? $arr1_max : $val;
	$arr1_max_note = $arr1_max > $val ? $arr1_max_note : $key;
	$arr1_min = $arr1_min < $val ? $arr1_min : $val;
	$arr1_min_note = $arr1_min < $val ? $arr1_min_note : $key;
}
echo "最大值是：{$arr1_max}，下标是：{$arr1_max_note}；<br>最小值是：{$arr1_min}，下标是：{$arr1_min_note}";


echo '<hr>';
// 练习2
$arr2 = array(20,25,24,23,27,28,18);
$arr2_size = count($arr2);//数组长度
$arr2_total = 0;//数组中所有元素的和
foreach ($arr2 as $val){
	$arr2_total += $val;
}
$arr2_average = $arr2_total / $arr2_size;//平均值
$arr2_average = round($arr2_average,2);//保留两位小数的平均值
echo "这 {$arr2_size} 个人的平均年龄为  {$arr2_average}";


echo '<hr>';
// 练习3 同练习1


echo '<hr>';
// 练习4
$arr4 = array(20,25,24,23,27,28,18,15);
$arr4_size = count($arr4);//数组长度
$arr4_total = 0;//数组中所有元素的和
$arr4_larger = 0;//数组中大于平均数的元素的个数
$arr4_lower = 0;//数组中小于平均数的元素的个数
foreach ($arr4 as $val){
	$arr4_total += $val;
}
$arr4_average = $arr4_total / $arr4_size;//平均值
foreach ($arr4 as $val){
	if($val > $arr4_average){
		$arr4_larger++;
	}
	if($val < $arr4_average){
		$arr4_lower++;
	}
}
echo "数组中数字的平均值是：{$arr4_average}。 数组中大于平均值的数的个数是：{$arr4_larger}，小于平均值的数的个数是：{$arr4_lower}";


echo '<hr>';
// 练习5
$arr5 = array(2,2,4,3,7,8,8,5);
$arr5_count = 0;//数组中奇数元素的个数，计数
$arr5_total = 0;
foreach ($arr5 as $val){
	if($val % 2 != 0){
		$arr5_count++;
		$arr5_total += $val;
	}
}
$arr5_average = $arr5_total / $arr5_count;
echo "该数组中奇数的平均值是：{$arr5_average}";
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';































