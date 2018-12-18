<?php
/*练习：某人有100，000元，每经过一次路口，需要交费，规则如下：
 * 1、当现金>50,000时，每次交5%;
 * 2、当现金<=50,000时，每次交5,000.
 * 编程计算该人可以经过多少次路口
 */


// 方法1：用for循环做
$money = 100000;
$count = 0;
for (;$money > 50000;){
	$count++;
	$money = $money * 0.95;
}
for (;$money <= 50000 && $money > 5000;){
	$count++;
	$money -= 5000;
}
echo "剩下 $money 元钱，一共经过了 $count 次路口<hr>";

// 方法2：用while循环做
$money = 100000;
$count = 0;
while($money>50000){
	$money = $money - $money * 0.05;
	$count++;
}
while($money>5000){
	$money = $money - 5000;
	$count++;
}
echo "剩下 $money 元钱，一共经过了 $count 次路口<hr>";

// 方法2：用do...while循环做
$money = 100000;
$count = 0;
do{
	$money = $money - $money * 0.05;
	$count++;
}while($money>50000);
do{
	$money = $money - 5000;
	$count++;
}while ($money>5000);
echo "剩下 $money 元钱，一共经过了 $count 次路口<hr>";
































