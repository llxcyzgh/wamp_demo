<?php
/**
 * 1. 用户名验证
 * 6-30位，字母、数字、下划线组合，字母开头
 *
 * 2. 手机号验证
 * 使用正则表达式（规则）对字符串进行筛选，筛选到一个结果即停止
 *
 * 3. 密码验证
 * 6-20位，字母、数字或符号
 * 如果纯字母、纯数字的话，提示密码太简单了
 * 如果字母、数字的组合的话，提示密码比较安全
 * 如果是字母、数字、特殊符号的组合，提示密码杠杠的
 *
 * 4. 邮箱验证
 * 只允许英文字母、数字、下划线、英文句号、以及中划线组成
 * XXX@XXX.com
 * XXX@XXX.cn
 */
$reg1 = '/^[a-zA-Z]\w{5,29}$/';
$str1 = 'abcdef';
preg_match($reg1, $str1, $match1);
var_dump($match1);


$reg2 = '/^1[3456789]\d{9}$/';
$str2 = '15210977402';
preg_match($reg2, $str2, $match2);
var_dump($match2);


$reg3a1 = '/^([0-9]{6-20})|([a-zA-Z]{6-20})$/';// 纯字母或纯数字
$str    = '1234567';
preg_match($reg3a1, $str, $match);
var_dump($match);
/*

$reg3a2 = '/^1[3456789]\d{9}$/';
$reg3b  = '/^1[3456789]\d{9}$/';
$reg3c  = '/^1[3456789]\d{9}$/';
$str3a  = '15210977402';
$str3b  = '15210977402';
$str3c  = '15210977402';
preg_match($reg3a, $str3a, $match3a);
preg_match($reg3b, $str3b, $match3c);
preg_match($reg3c, $str3c, $match3c);
var_dump($match3a);
if ($match3a[0]) {
    //如果纯字母、纯数字的话，提示密码太简单了
    echo '密码太简单了<br>';
} elseif (1) {
    //如果字母、数字的组合的话，提示密码比较安全
    echo '密码比较安全<br>';
} elseif (1) {
    //如果是字母、数字、特殊符号的组合，提示密码杠杠的
    echo '密码杠杠的<br>';
}

*/
$reg4 = '/^[\w_\-\.]+@[\w_\-\.]+\.[\w_\-\.]+$/';
//$reg4 = '/^[\w_\-\.]+$/';
$str4 = '15210.@12.3ccom';
preg_match($reg4, $str4, $match4);
var_dump($match4);


$x = 'afbcdef';
$r = '/[^abc]+/';
preg_match($r, $x, $m);
var_dump($m);


$x = 'aaaefi66655';
$r = '/(\w)\1{2}/';
preg_match($r, $x, $m);
var_dump($m);

$res = preg_replace($r, '_$1$1$1', $x);
var_dump($res);




