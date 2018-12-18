<?php
header("content-type:text/html;charset=utf-8");
// test1
/*
class Animal
{
public function cry()
{
echo '动物叫唤...';
}
}

class Cat extends Animal
{
// 不一致,报错
public function cry($name)
{
echo '猫猫叫唤...';
}
}

$cat1 = new Cat();
$cat1->cry('abc');
 */

//test2
/*
class Animal
{
public function cry($val)
{
echo '动物叫唤...';
}
}

class Cat extends Animal
{
// 正确
public function cry($name)
{
echo '猫猫叫唤...';
}
}

$cat1 = new Cat();
$cat1->cry('abc');
 */

//test3
/*
class Animal
{
public function cry($val)
{
echo '动物叫唤...';
}
}

class Cat extends Animal
{
// 访问范围变小了,报错
protected function cry($name)
{
echo '猫猫叫唤...';
}
}

$cat1 = new Cat();
$cat1->cry('abc');
 */

//test4

class Animal
{
    protected function cry($val)
    {
        echo '动物叫唤...';
    }
}

class Cat extends Animal
{
    // 访问范围变大了,正确
    public function cry($name)
    {
        echo '猫猫叫唤...';
    }
}

$cat1 = new Cat();
$cat1->cry('abc');
