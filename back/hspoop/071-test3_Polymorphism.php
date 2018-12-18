<?php
header("content-type:text/html;charset=utf-8");
// 可以通过一个变量来调用一个类名
class Dog
{

}

$dog1 = new Dog();

$var  = 'Dog';
$dog2 = new $var();

var_dump($dog1);
var_dump($dog2);
