<?php
header("content-type:text/html;charset=utf-8");
// 数据类型强制转换:3种方式

$num1 = 100;
/* 1.用settype 可以把$num1强制转成
"boolean" (或为"bool",从PHP4.2.0起)
"interger" (或为"bool",从PHP4.2.0起)
"float" (只在PHP4.2.0之后可以使用,对于旧版本中使用的"double"现已停用)
"string"
"array"
"null" (从PHP4.2.0起)
 */
settype($num1, "float");
var_dump($num1);

/* 2.使用(类型)变量的方式转换
注意:使用(类型)变量的方式转换时,对变量本身的类型没有修改,是接收变量的值改了
 */
$num2 = 200;
// 这里的(string) 可以是(bool),(int),(float),(array),(object)
$a = (string) $num2;
// $a    = (string) 500;
// $a = (int) '2是什么1';
var_dump($a); // string '200' (length=3)
var_dump($num2); // int 200

/*
3.intval(变量),float(变量),strval(变量),boolval(变量),[没有arrval]
特点:同第二种,也不会改变原来的数据本身,而是返回值
 */
$num3 = 300;
$b    = floatval($num3);
var_dump($b); // float 300
var_dump($num3); // int 300

/*
小结:
(1) 第一种方式和后面两种方式,区别比较大,第一种方式会改变变量本身的数据类型;第二种和第三种不改变原变量的数据类型,而是通过返回值
(2) 第二种支持改变为数组类型,第三种不支持
 */
