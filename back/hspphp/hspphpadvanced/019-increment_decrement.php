<?php
header("content-type:text/html;charset=utf-8");
// 递增,递减的案例
$a = 90;
$b = $a++;
echo $a . '<br>'; //91
echo $b . '<hr>'; //90

$a = 90;
$b = ++$a;
echo $a . '<br>'; //91
echo $b . '<hr>'; //91

$c = 80;
$d = $c--;
echo $c . '<br>'; //79
echo $d . '<hr>'; //80

$c = 80;
$d = --$c;
echo $c . '<br>'; //79
echo $d . '<hr>'; //79

// 关于字符串的递增使用
$str = 'a-5';
$str++; // 对一个字符串 ++ 时,对'a'的ascii +1,然后返回对应的ascii字符; -- 无任何效果
echo $str . '<hr>';

$str2 = '5aa';
$str3 = $str2 % 5; // 字符串与数学相加/减/乘/除/取余,会把字符串转换成数字.从左往右,如果最左边是数字,则再往右连续的数字成为最后的数值;如果最左边的字符不是数字,则直接为0
echo $str3 . '<hr>'; //0
