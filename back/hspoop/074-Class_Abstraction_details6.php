<?php
header("content-type:text/html;charset=utf-8");
// 抽象类细节6: 非抽象类继承了抽象类, 那么抽象类中的抽象方法必须被该非抽象类定义
abstract class A
{
    abstract public function getSum($n1, $n2);
}

class B extends A
{
//     public function getSum($n1, $n2)
//     {
//         return $n1 + $n2;
//     }
}

abstract class C extends A
{
}

// Fatal error: Class B contains 1 abstract method and must therefore be declared abstract or implement the remaining methods
$b = new B();
echo $b->getSum(1, 2);
