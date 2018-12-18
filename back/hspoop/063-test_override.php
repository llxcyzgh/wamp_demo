<?php
header("content-type:text/html;charset=utf-8");
// 练习
class Animal
{
    public $name;
    public function cry()
    {
        echo '动物叫唤';
    }
}

class Dog extends Animal
{
    // 重写细节(3):     当子类重写父类方法的时候，要求方法名和参数的个数要一致
    public function cry()
    {
        echo '小狗汪汪叫';
    }
}

$dog1 = new Dog();
$dog1->cry(); // Warning: Missing argument 1 for Dog::cry()
echo '<hr>';

class Cat extends Animal
{
    public function cry($name)
    {
        echo '小猫喵喵叫~';
    }
}

$cat1 = new Cat();
$cat1->cry(66);
