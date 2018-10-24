<?php
header("content-type:text/html;charset=utf-8");
// 常量
/*
为什么需要常量,即什么时候可能使用?
1.在网站开发中,需要一些全局性的值,比如网站的根目录路径,希望设置后在开发中使用,而且不允许其它程序员修改
2.再如一些基本的数据,是固定的不能轻易修改,比如税率等
 */
/*
常量基本介绍:
常量可以理解成是一种特殊的变量,一旦被定义,就不能再改变或者取消定义[即不能unset常量]
1.常量前面没有美元符号($)
2.常量用define()函数定义,而不能通过赋值语句
3.常量也可以通过 const 来定义
4.命名规范:字母大写+下划线(不是必须,可以小写)
5.常量的作用域,可以理解是全局,因此可以在函数中直接使用,不需要global声明
 */

// 计算某个人的所得税
// 用常量定义一个所得税的税率 0.08
define('TAX_RATE', 0.08);
$salary = 10000;
$tax    = $salary * TAX_RATE;
echo $tax . '<br>';

// define()和const的区别:const可以在类中定义一个类的常量,而define不可以
const MY_PI = 3.1415926;
echo MY_PI;

class Dog
{
    const MY_TAX = 0.08;
    // define('MY_TAX', 0.08);// 报错
}

function abc()
{
    echo 'abc()使用常量' . TAX_RATE;
}
