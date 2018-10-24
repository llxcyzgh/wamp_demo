<?php
header("content-type:text/html;charset=utf-8");
/*
Object Interfaces 对象接口

接口就是给出一些没有实现的方法, 封装到一起, 到某个类要使用的时候, 再根据具体情况把这些方法写出来.
语法:
interface 接口名{
方法; //不含方法体
}

ps: 接口是更加抽象的抽象类, 抽象类里的方法可以有方法体, 接口里的所有方法没有方法体.
接口体现了程序设计的 多态 和 高内聚低耦合 的设计思想
 */

// 接口名的命名规范: 小写 i 开头, 后面使用(首字母大写的)驼峰法
// 接口的价值在于设计, 让其它的类来实现它所声明的方法
interface iMyInterface
{
    public function getSum($n1, $n2);
}

class Monkey implements iMyInterface
{
    public function getSum($n1, $n2)
    {
        return $n1 + $n2;
    }
}

$monkey = new Monkey();
echo $monkey->getSum(5, 6);
