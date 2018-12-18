<?php
header("content-type:text/html;charset=utf-8");
class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

}

$p1 = new Person('小马', 9);
echo $p1->name;

// php  oop对象中,当给一个不存在的属性赋值时,那么会临时增加一个对应的属性,且为public
$p1->sex = '男';
echo $p1->sex;
