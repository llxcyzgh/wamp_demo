<?php
header("content-type:text/html;charset=utf-8");
// 构造函数:作用是快速创建对象
/*构造方法是类的一种特殊的方法,它的主要作用是完成对新对象的初始化.
它有如下细节:
1.没有返回值
2.在创建一个类的新对象时,系统会 自动调用 该类的构造方法完成对新对象的初始化
3.在php4中,构造函数和类名一样
4.php5中不但支持php4中的构造函数,还增加了另外一种方式 __construct()
5.默认构造函数的说明(如果没有写构造函数,那么系统会一个无参数的构造函数)
 */
class Cat
{
    public $name;
    // 默认构造函数
    // public function __construct()
    // {
    //     echo '111<br>';
    // }
}
$cat1       = new Cat('maomi');
$cat1->name = 'maomi';
echo $cat1->name . '<br>';
