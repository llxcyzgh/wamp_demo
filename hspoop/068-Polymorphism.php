<?php
header("content-type:text/html;charset=utf-8");
// 面向对象三大特征之 多态 Polymorphism
/*
多态通俗地说:就是'多种状态',就是指在面向对象中,对象(类)在不同情况下的多种状态(根据使用的上下文)
1. PHP可以根据传入的对象类型不同,调用对应该对象的方法
2. PHP天生就是多态语言,可以通过继承父类或者实现接口来体现多态

多态的作用: 利于代码的维护和扩展
 */
class Animal
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Dog extends Animal
{
    public function showInfo()
    {
        echo $this->name;
    }
}

class Cat extends Animal
{
    public function showInfo()
    {
        echo $this->name;
    }
}

class Food
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Fish extends Food
{
    public function showInfo()
    {
        echo $this->name;
    }
}
class Bone extends Food
{
    public function showInfo()
    {
        echo $this->name;
    }
}

class Master
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    // 喂食
    public function feed(Animal $animal, Food $food)
    {
        $animal->showInfo();
        echo '喜欢吃';
        $food->showInfo();
        echo '<br>';
    }
}

$dog = new Dog('德国黑背');
$cat = new Cat('波斯猫');

$fish = new Fish('鲤鱼');
$bone = new Bone('大棒骨');

$master = new Master('小红');
$master->feed($dog, $bone);
$master->feed($cat, $fish);
$master->feed($fish, $cat);
