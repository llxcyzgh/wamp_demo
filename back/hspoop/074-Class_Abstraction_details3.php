<?php
header("content-type:text/html;charset=utf-8");
// 抽象类细节3: 抽象类可以有非抽象方法,成员属性和常量
abstract class A
{
    public $name       = 'A';
    public static $num = 1;
    const TAX_RAT      = 10;
    public function sayHello()
    {
        echo 'Hello, World !';
    }

}

class B extends A
{
    public function say()
    {
        $this->sayHello();
    }
}

$b = new B();
$b->say();
