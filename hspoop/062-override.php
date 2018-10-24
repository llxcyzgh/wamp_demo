<?php
header("content-type:text/html;charset=utf-8");
// 重写(或覆盖),指子类的属性或方法名和父类的子类或属性相同时,以子类的为准

class Animal
{
    public $name       = '动物';
    public static $age = '12';
    public function cry()
    {
        echo '动物怎么昂叫?<br>';
    }
}

class Cat extends Animal
{
    public function cry()
    {
        echo '小猫喵喵叫<br>';
        // 重写细节(1):    如果在子类中需要访问其父类的方法(public/protected属性)，可以使用父类::方法名 或者 parent::方法名 来完成
        parent::cry();
        Animal::cry();

// 重写细节(2)    parent::静态属性 [这种方式不能访问普通属性,但是能访问父类的静态属性,而且这个静态属性的访问控制符必须是public 或者 protected]
        // echo parent::$name;
        // echo Animal::$name;
        echo parent::$age;
        echo Animal::$age;
    }
}

$cat = new Cat();
$cat->cry();
