<?php
header("content-type:text/html;charset=utf-8");
// 每一个对象都有一个 $this 指向该对象本身
/*
this 方法不能在类定义的外部使用,只能在类定义的方法中使用
 */
class Pig
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function showInfo()
    {
        echo 'name  = ' . $this->name . '<br>';
    }
}

$pig1 = new Pig('宠物猪');
$pig1->showInfo();

$pig1 = new Pig('小花猪');
$pig1->showInfo();

/*
构造函数小结:
1.构造方法名和类名相同(php4版),php5版的构造方法名可以和类名相同,也可以是 __construct()
2.构造方法没有返回值
3.主要作用是完成对新对象的初始化(赋值),而不是创建对象本身
4.一个类有且仅有一个构造方法,在php5后虽然__construct() 和 类名() 可以共存,但是实际上也只能使用一个(不推荐)
5.如果没有给定类自定义构造方法,则该类使用系统默认的构造方法
6.如果给类自定义了构造方法,则该类的默认构造方法被覆盖
7.构造方法的默认访问修饰符是public

 */
