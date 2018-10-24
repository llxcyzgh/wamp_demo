<?php
header("content-type:text/html;charset=utf-8");
// final关键字: PHP 5 新增了一个 final 关键字。
/*
如果父类中的方法被声明为 final，则子类无法覆盖该方法;
如果一个类被声明为 final，则不能被继承。
 */

final class Superman
{
    public $name;
    public $ability;
    final public function attack()
    {
        echo '超人的攻击方式是: 原子弹... <br>';
    }
}

class IronMan extends Superman
{
    // public function attack()
    // {
    //     echo '使用氢弹攻击... <br>';
    // }
}

$iron = new Ironman();
// $iron->attack();
