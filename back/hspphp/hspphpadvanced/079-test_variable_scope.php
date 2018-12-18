<?php
header("content-type:text/html;charset=utf-8");

$name = 'itbull';
var_dump($GLOBALS['name']);

unset($name);
var_dump($GLOBALS['name']); // undefined 就是 null

$GLOBALS['age'] = 100; // <==> $age= 90;
var_dump($GLOBALS['age']);
