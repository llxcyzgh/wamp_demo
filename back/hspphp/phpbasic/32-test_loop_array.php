<?php
// 三种方法遍历数组：foreach、for、while

/*在运动会上，五个小孩比赛滑轮，他们滑完100米，分别用时10s、12s、5.7s、9s、14s。编写一个程序，计算他们的平均时间，时间保留2位小数。
 */
$arr_time = array(10,12,5.057,9.5,14);
$total = 0;

// foreach 遍历
foreach ($arr_time as $val){
	$total += $val;
}
echo 'foeach 平均时间为'.round($total/count($arr_time),2).'<hr>';// round() — 对浮点数进行四舍五入


// for 遍历
$total = 0;
$arr_size = count($arr_time);
for ($i=0;$i<$arr_size;$i++){
	$total += $arr_time[$i];
}
echo 'for 平均时间为'.$total/$arr_size.'<hr>';

// while 遍历
$total = 0;
$i = 0;
while ($i<$arr_size) {
	$total += $arr_time[$i];
	$i++;
}
echo 'while 平均时间为'.$total/$arr_size.'<hr>';

// do...while 遍历
$total = 0;
$i = 0;
do{
	$total += $arr_time[$i];
	$i++;
}while($i<$arr_size);
echo 'do while 平均时间为'.$total/$arr_size.'<hr>';























