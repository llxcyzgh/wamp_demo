<?php
header("content-type:text/html;charset=utf-8");
// 逻辑短路现象练习
$a = 10;
$b = 7;
if ($a++ > 8 || $b++ > 7) {
    echo 'ok<br>'; // ok
}
echo 'a = ' . $a . ' b = ' . $b . '<br>'; // 11 7

$a = 10;
$b = 7;
if ($a++ > 10 && $b++ > 7) {
    echo 'ok<br>'; //
}
echo 'a = ' . $a . ' b = ' . $b . '<br>'; // 11 7

$a = 10;
$b = 7;
if ($a++ > 8 && $b++ > 7) {
    echo 'ok<br>'; //
}
echo 'a = ' . $a . ' b = ' . $b . '<br>'; // 11 8


$a = 0;
//$a++ == 1 && ($a='ok');// 1
++$a == 1 && ($a='ok');// 'ok'
echo $a;