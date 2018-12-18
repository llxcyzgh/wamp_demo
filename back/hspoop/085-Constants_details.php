<?php
header("content-type:text/html;charset=utf-8");
// 类常量使用细节
/*
1、常量名一般字母全部大写: TAX_RATE, 中间可以有下划线
2、在定义变量的同时, 必须赋初值, 比如 const TAX_RATE = 1.1
3、const关键字前不能用 public/protected/private 修饰. 默认就是 public
4、访问常量
.     在类的外部 类名::常量名   或  接口名::常量名
.     在类的内部 类名::常量名   或  self::常量名
5、常量的值在定义的时候就初始化, 以后就不能修改
6、常量可以被子类继承
7、一个常量是属性一个类的, 而不是某个对象的
8、类常量的数据类型可以是:int,float,string,boolean,null,array(不能是对象或资源)
 */
class Dog
{

}

class Test
{
    // const TAX_RATE = 0;// 0
    // const TAX_RATE = 0.5;
    // const TAX_RATE = 'abc';
    // const TAX_RATE = array(0.8, 0.9);
    // const TAX_RATE = true; // 1
    // const TAX_RATE = false; // 空白
    // const TAX_RATE = null; // 空白
    const TAX_RATE = null; // 空白
    const TAX_RATE = new Dog(); // 报错
}
echo Test::TAX_RATE;
// echo Test::TAX_RATE[1];
