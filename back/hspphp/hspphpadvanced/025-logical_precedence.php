<?php
header("content-type:text/html;charset=utf-8");
// 逻辑运算的优先级问题
$a = false || true;
$b = false or true; // = > and < xor < or 优先级最低
var_dump($a, $b); // true false
// 要想 || 与 or 的优级级一样,则使用()括起来

$c = true && false;
$d = true and false;
var_dump($c, $d); // false true
