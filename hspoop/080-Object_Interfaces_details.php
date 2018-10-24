<?php
header("content-type:text/html;charset=utf-8");
/*
接口细节:
1、接口不能被实例化
2、接口中所有的方法都不能有主体,接口的所有方法都是默认抽象的,但不能用abstract修饰
3、一个类可以实现多个接口,逗号隔开
4、接口中可以有属性,但只能是常量(不能包含成员变量,包括静态成员变量),默认是pubic,但不能用public显式修饰
5、接口中的方法都必须是public的,默认就是public,可以写成public或者不写(就会默认是public)
6、一个接口不能继承其它的类,但是可以继承别的接口(可以继承多个接口)
 */

interface iAbc
{
    const TAX_RATE = 0.3;
    // Interfaces may not include member variables
    // public $name;
    // public static $age;
    public function sayHello();
}

interface iUsb
{
    public function sayOk();
}

class A implements iAbc, iUsb
{
    public function sayHello()
    {
        echo 'hello~~~';
    }
    public function sayOk()
    {
        echo 'Ok~~~';
    }
}

interface iMy extends iAbc, iUsb
{
    public function sayHi();
}

class X implements iMy
{
    public function sayHello()
    {
        echo 'hello';
    }
    public function sayHi()
    {
        echo 'hi';
    }
    public function sayOk()
    {
        echo 'ok';
    }

}
