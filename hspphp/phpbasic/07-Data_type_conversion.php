<?php
// php数据类型的自动转换
$a = 10;
var_dump($a);// 数据类型为 int
$a = 123.4;
var_dump($a);// float
$a = true;
var_dump($a);// boolean

// 这里我们说一下数据类型的精度
/* 1、php基本数据类型的精度  boolean < int < 小数
 * 2、在运算时，数据类型会自动地向高精度转换
 */
$res = false + 50;
var_dump($res);// int 50


/* 所谓表达式，就是“任何有值的表达形式”，比如
 * $a=67;
 * $b=56+90;
 * $c=调用有返回值的函数;
 */

