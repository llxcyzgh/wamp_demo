<?php
header("content-type:text/html;charset=utf-8");
// 析构函数
/*
php5引入了析构函数的概念. 这类似于C++.
析构函数会在某个对象的所有引用都被删除或者当对象被显式销毁时执行.
析构函数主要的作用是去释放对象分配的相关资源,比如数据库链接的
 */
/*
什么情况下会触发析构函数 ?
1. 程序运行结束后, 对象会被销毁
2. 当没有变量指向对象时, 比如unset() 或者让对象变量指向其它数据
 */
class Person
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function __destruct()
    {
        echo $this->name . '被析构了<br>';
    }
}
// 在默认情况下,先创建的对象后被销毁;后创建的对象先被销毁
$person1 = new Person('胖和尚');
$person1 = null;
$person2 = new Person('瘦和尚');
$person3 = new Person('老和尚');
