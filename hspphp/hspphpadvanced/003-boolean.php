<?php
header("content-type:text/html;charset=utf-8");
// 基本使用
$isOK    = true;
$isLogin = false;
if ($isOK) {
    echo 'ok';
}
// 细节说明

// TRUE,FALSE不区分大小写

// 非0,非空字符串,非空数组,都当作TRUE
$a = -1.89;
$a = array(0);
if ($a) {
//true
    echo '<br>';
    var_dump($a);
}

/* 以下情况都当作false
1.布尔值false
2.整型值 0 (零)
3.浮点型值 0.0 (零)
4.空 字符串,以及字符串 "0"
5.不包括任何成员变量的对象(仅php4.0适用)
6.特殊类型 NULL (包括尚未设定的变量)
7.从空标记生成的 SimpleXML 对象
 */
$d = 0;
$d = '0';
$d = '';
$d = '0.0'; //这里是true
$d = null;
if ($d) {
    echo '<br>$d';
} else {
    echo '<br> no $d';
}
