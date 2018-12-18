<?php
header("content-type:text/html;charset=utf-8");
/*
final 关键字的细节
1、final 不能够修饰成员属性(变量), 只能针对方法或类
2、final方法不能被重写, 但可以被继承
3、一般来说, final类中不会出现final方法, 因为final类都不能被继承, 也就不会去重写[override] final类的方法了
4、final类 是可以被实例化的
 */

class FinalClass
{
    final public $name; // Cannot declare property FinalClass::$name final, the final modifier is allowed only for methods and classes
    public function out()
    {
        echo 'oout';
    }
}

$xx = new FinalClass();
$xx->out();
