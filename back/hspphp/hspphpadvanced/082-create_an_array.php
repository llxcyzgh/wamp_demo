<?php
header("content-type:text/html;charset=utf-8");
//定义数组的三种方式
//第一种:给每一个键赋值
$arr[0] = 1;
$arr[1] = '泰牛程序员';
$arr[2] = 54;
$arr[3] = 10;
$arr[3] = 10.0;
var_dump($arr);

//第二种:统一赋值(不指定键)
$arr2 = array('西游记', '红楼梦', '三国演义', '水浒传');
var_dump($arr2);

//第三种:统一赋值(指定键)
$arr3 = array('大哥' => '宋江', '二哥' => '卢俊义');
var_dump($arr3);

//细节说明
/*
1.键(key)可以是一个整数(integer)[称为索引数组] 或 字符串(string)[称为关联数组]
2.值(value)可以是任意类型的值
 */
$arr4 = array('person1' => $arr, 'person2' => $arr2);
echo '<pre>';
print_r($arr4);

/*
细节3
php中用array创建数组时,如果对给出的值没的指定键名,则取当前最大的整数索引值,而新的键名将是该值加一.如果指定的键名已经有了值,则该值会被覆盖
 */
$arr5 = array(5 => 43, 32, 56, 'b' => 12); // 5=>43,6=>32,7=>56,'b'=>12
echo '<pre>';
print_r($arr5);

$arr6 = array(5 => 43, 32, 56, 'b' => 12, 5 => 70);
echo '<pre>';
print_r($arr6);

/*
细节4
1.使用true作为键名,将使 integer 1 成为键名;
2.使用false作为键名,将使 integer 0 成为键名;
3.使用null作为键名,将等同于使用空字符串;
4.使用小数作为键名,将自动删掉小数部分;
5.键名只能是整数或字符串,不能是数组等,否则会导致警告 illeagal offset type
 */
$arr7 = array(true => 'hello', false => 'abc', null => 123, 56.07 => 780); // 1=>'hello',0 => 'abc',  => 123, 56 => 780
echo '<pre>';
print_r($arr7);
