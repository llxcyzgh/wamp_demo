<?php
/*
 * 函数的说明
 * @$num1:输入的第一个数
 * @$num2:输入的第一个数
 * @$oper:输入的运算符
 * @return:返回了运算结果
 */
header("content-type:text/html;charset=utf-8");
// call function 函数调用（引入）

// 1、引入 21-functions.php 文件,类似在html中要 <script src="myScript.js"></script> 引入js文件，然后才能调用函数
// 外部css的引入方式 <link rel="stylesheet" type="text/css" href="theme.css">
require '21-functions.php';

$num1 = 10;
$num2 = 20;
$oper = '+';
$res = null;

// 2、调用函数calcu($num1,$num2,$oper)
calcu($num1,$num2,$oper);

