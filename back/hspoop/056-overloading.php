<?php
header("content-type:text/html;charset=utf-8");
/*
方法重载(overloading)
传统意义上的重载: 一个标识符被用作多个方法名,且能通过方法的参数个数或参数类型将这些同名的函数区分开来,调用不发生混淆.调用的时候,虽然方法名字相同,但根据参数不同可以自动调用对应的函数

在php中,不允许存在相同的函数名

PHP的重载: 是指动态地"创建"属性和方法.我们是通过魔术方法(magic methods)来实现的
php5提供了强大的'魔术'函数,使用这些'魔术'函数,可以实现函数重载. 这里要用到的函数是 __call(), 但是php的设计者并不推荐这样使用.
 */

class Cat
{
    public function getVal($n1)
    {
        return 2 * $n1;
    }
    public function getVal($n1, $n2)
    {
        return $n1 + $n2;
    }

}
