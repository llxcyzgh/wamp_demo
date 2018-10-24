<?php
header("content-type:text/html;charset=utf-8");
// 数组运算符
/*
例子        名称        结果
$a + $b      联合        $a 和 $b 的联合
$a == $b     相等        如果$a和$b具有相同的键/值对,则为true
$a === $b    全等        如果$a和$b具有相同的键/值对,并且顺序和类型都同相,则为true
$a != $b     不等        如果$a不等于$b,则为true
$a <> $b     不等        如果$a不等于$b,则为true
$a !== $b    不全等        如果$a不全等于$b,则为true
 */

$arr1 = array(1, 9);
$arr2 = array(10, 0, 5);
// +的特点是,不会覆盖已经有的键.  这与 array_merge() 不同
$arr3 = $arr1 + $arr2;

echo '<pre>';
print_r($arr3);
echo '<hr>';

// $arr4 = array('no1' => 1, 90);
$arr4 = array(1 => 90, 0 => 1); // 键/值对相等,类型相等,但顺序不相等也不全等
// $arr4 = array('1', 90);
$arr5 = array(1, 90);
if ($arr4 == $arr5) {
    echo '$arr4 == $arr5 <br>';
}
if ($arr4 === $arr5) {
    echo '$arr4 === $arr5';
}

// 数组总结
/*
1.数组可存在任意类型的数据
2.数组大小不必事先指定,可以动态增长
3.数组名可以理解为指向数组的引用
4.数组中的元素以 key=>value 的形式存在
5.如果没有给数组指定 key,则取当前最大的整数索引值为基准,而新的键名将是该值加1
 */
