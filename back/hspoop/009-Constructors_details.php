<?php
header("content-type:text/html;charset=utf-8");
// 构造函数:作用是快速创建对象
/*构造方法是类的一种特殊的方法,它的主要作用是完成对新对象的初始化.
它有如下细节:
1.没有返回值
2.在创建一个类的新对象时,系统会 自动调用 该类的构造方法完成对新对象的初始化
3.在php4中,构造函数和类名一样
4.php5中不但支持php4中的构造函数,还增加了另外一种方式 __construct()
5.默认构造函数的说明
 */
class Cat
{
    public $name;
    public function Cat($name)
    {
        $this->name = $name; //php4方法
    }

}
$cat1 = new Cat('maomi');
echo $cat1->name . '<br>';

class Dog
{
    public $name;
    public function __construct($name) //php5方法

    {
        $this->name = $name;
    }

}
$dog1 = new Cat('wangwang');
echo $dog1->name . '<br>';
