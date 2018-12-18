<?php
header("content-type:text/html;charset=utf-8");
class Dog
{
    public $name;
}
$dog1       = new Dog();
$dog1->name = '大黄';
$dog2       = $dog1;
$dog1       = 'abc';
var_dump($dog2); // object
var_dump($dog1); // string

echo '<hr>';

class Cat
{
    public $name;
}
$cat1       = new Cat();
$cat1->name = '小花猫';
var_dump($cat1);
$cat2 = &$cat1;
$cat2 = 'def';
echo $cat1->name; // 不存在该object
var_dump($cat2); // string
var_dump($cat1); // string
