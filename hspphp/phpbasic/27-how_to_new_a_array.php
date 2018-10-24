<?php
// 创建数组的3种方式
// 1、直接赋值给每一个键值对
$arr[0] = 10;
$arr[1] = 12.3;
$arr[2] = '北京';
$arr[3] = true;
var_dump($arr);
$arr_size = count($arr);
for($i=0;$i<$arr_size;$i++){
echo $arr[$i],'<br>';// echo会把 true转化为1
}
/* 用for循环来遍历数组的局限性：key必须是数字且，数字必须连续
* 解决办法： 用 foreach 来循环
*/



// 2、统一赋值（默认键为由0开始的数字）
$city[0] = '北京';
$city[1] = '上海';
$arr2 = array(10,12.3,'abc',true,'',$city);
var_dump($arr2);


// 3、自定义键来创建数组
$arr_hero = array('no1'=>'宋江','no2'=>'卢俊义','no3'=>'吴用',100);
/*注意：
 * 1、可以自己指定键
 * 2、如果某个值没有指定键，那么会从0开始自动指定【如果前面自己指定了数字为键，那么就从那个最大数字往后自动指定】
 */
var_dump($arr_hero);


// 如果数组的键为数字，则称为索引数组；
// 如果数组的键为字符串，则称为关联数组

echo $arr_hero['no2'];// 通过键来访问数组的单个元素










