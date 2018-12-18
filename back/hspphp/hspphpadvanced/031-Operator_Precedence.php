<?php
header("content-type:text/html;charset=utf-8");
// 运算符优先级
// ! > ( *  /  % ) > ( + - . ) > ( == != === !== <> ) > && > || > ?: > ( = += -= *= /= .= %= ) > and > xor > or > ,

$res = true && false || true;
var_dump($res); //true

$res = true || false && true;
var_dump($res); //true

$res = true || false and true;
var_dump($res); //true

$res = true or false && true;
var_dump($res); //true

$num = 90;
$res = 1+!$num && 90;
var_dump($res); //true
