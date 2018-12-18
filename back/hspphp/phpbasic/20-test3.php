<?php
// 小米面试题
// 如果比较一个数字和字符串或者比较涉及到数字内容的字符串，则字符串会被转换为数值并且比较按照数值来进行

$str1 = null;
$str2 = false;
echo $str1 == $str2 ? '相等':'不相等';// 相等
echo '<hr>';

$str3 = '';
$str4 = 0;
echo $str3 == $str4 ? '相等':'不相等';// 相等
echo '<hr>';

$str5 = 0;
$str6 = '0';
echo $str5 === $str6 ? '相等':'不相等';// 不相等
echo '<hr>';