<?php
header("Content-Type:text/html;charset=utf-8");
// 1. 确定规则
$reg = '#\d#';
$reg = '/\d/';// 数字 等同于 [0-9]
$reg = '/\D/';// 非数字 等同于 [^0-9]

$reg = '/\s/';// 空格 等同于 [\f\n\r\t\v]
$reg = '/\S/';// 非空格 等同于 [^\f\n\r\t\v]

$reg = '/\b/';// 单词边界
$reg = '/\B/';// 非单词边界

$reg = '/./';// 除了换行符之外的任意一个字符
$reg = '/.+/';// 除了换行符之外的任意一个字符,至少一个
$reg = '/.*/';// 除了换行符之外的任意一个字符,0个或任意个
$reg = '/[23]/';// 除了换行符之外的任意一个字符,0个或任意个
$reg = '/2|3/';// 除了换行符之外的任意一个字符,0个或任意个


// 2. 确定要筛选的字符串
$str = '%^_ &**abc567';
$str = "。123";

// 3. 执行匹配
preg_match($reg, $str, $match);// 首个匹配
preg_match_all($reg, $str, $match);// 全部匹配


var_dump($match);


//$new_str = preg_replace('/\W/', '+', $str);// 替换,可在每个subject上进行替换的最大次数。默认是 -1(无限)。
//var_dump($new_str);
