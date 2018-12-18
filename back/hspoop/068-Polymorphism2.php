<?php
header("content-type:text/html;charset=utf-8");
// 食物大类
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

class Meat extends Food
{
    public function showInfo()
    {
        echo $this->name;
    }
}

class Grass extends Food
{
    public function showInfo()
    {
        echo $this->name;
    }
}

class Rabbit extends Food
{
    public function showInfo()
    {
        echo $this->name;
    }
}

// 动物大类
class Animal
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Cat extends Animal
{
    public function showInfo()
    {
        echo $this->name;
    }
}

class Dog extends Animal
{
    public function showInfo()
    {
        echo $this->name;
    }
}

class Sheep extends Animal
{
    public function showInfo()
    {
        echo $this->name;
    }
}

class Tiger extends Animal
{
    public function showInfo()
    {
        echo $this->name;
    }
}

// 管理员类
class Master
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function feed(Animal $animal, Food $food)
    {
        echo $this->name . ' 给 <span style="color:red">';
        $animal->showInfo();
        echo '</span> 喂了 <span style="color:blue">';
        $food->showInfo();
        echo '</span><br>';
    }
}

$fish1   = new Fish('鲍鱼');
$meat1   = new Meat('牛肉');
$grass1  = new Fish('青草');
$rabbit1 = new Fish('草原灰兔');

$cat1   = new Cat('小花猫');
$dog1   = new Dog('藏獒');
$sheep1 = new Sheep('西藏刀羊');
$tiger1 = new Tiger('孟加拉虎');

$master1 = new Master('小红');
$master1->feed($cat1, $fish1);
$master1->feed($dog1, $meat1);
// $master1->feed($dog1, $fish1);
$master1->feed($sheep1, $grass1);
$master1->feed($tiger1, $rabbit1);
