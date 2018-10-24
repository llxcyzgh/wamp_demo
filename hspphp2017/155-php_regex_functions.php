<?php
/*
1. preg_match
用正则表达式（规则）对字符串进行筛选，筛选到一个结果即停止

2. preg_match_all
使用正则表达式（规则）对字符串进行筛选，筛选到结果先保存到数组，并继续筛选，直到字符串结束

3. preg_replace
使用正则表达式（规则）对字符串进行筛选，再将筛选的内容进行替换

4. preg_split
	使用正则表达式（规则）对字符串进行拆分
	explode()是根据某个字符进行分割

 */

$str1 = 'red||blue||yellow';
$arr1 = explode('||', $str1);// 按指定字符或字符串进行分割
var_dump($arr1);

$str2 = 'red|blue-yellow*white';
$reg2 = '/[\|\|,*,-]/';
//$reg2 = '/\W+/';
$arr2 = preg_split($reg2, $str2);// 不推荐使用 split 或 spliti
var_dump($arr2);