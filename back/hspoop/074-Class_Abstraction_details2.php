<?php
header("content-type:text/html;charset=utf-8");
// 抽象类细节2: 抽象类可以不包含抽象方法.  也就是说abstract方法可以有也可以没有, 非abstract方法也可以有或者没有
abstract class A
{
    public function sayHello()
    {
        echo 'hello, world !';
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
