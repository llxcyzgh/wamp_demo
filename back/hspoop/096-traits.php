<?php
header("content-type:text/html;charset=utf-8");
/*
自 PHP 5.4.0 起，PHP 实现了代码复用的一个方法，称为 traits。

Traits 是一种为类似 PHP 的单继承语言而准备的代码复用机制。Trait 为了减少单继承语言的限制，使开发人员能够自由地在不同层次结构内独立的类中复用方法集。Traits 和类组合的语义是定义了一种方式来减少复杂性，避免传统多继承和混入类（Mixin）相关的典型问题。

Trait 和一个类相似，但仅仅旨在用细粒度和一致的方式来组合功能。Trait 不能通过它自身来实例化。它为传统继承增加了水平特性的组合；也就是说，应用类的成员不需要继承。

 */
trait Abc
{
    public function getSum($n1, $n2)
    {
        return $n1 + $n2;
    }
}

class A
{
    // 引入 Abc trait
    use Abc;
    public function test()
    {
        echo 'A test() <br>';
    }
}

class B
{
    use Abc;
    public function getVal()
    {
        echo 'B getVal() <br>';
    }
}

$a = new A();
echo $a->getSum(5, 10);
