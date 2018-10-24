<?php
header("content-type:text/html;charset=utf-8");
// 类型运算符:用于确定一个PHP变量是否属于某一类 class 的实例
// 定义了一个Dog类
class Dog
{
};
// 创建了一个Dog类的对象实例
$dog1 = new Dog();

// 判断 $dog1 这个变量是不是 Dog 类的对象实例
if ($dog1 instanceof Dog) {
    echo '$dog1 是 Dog对象的实例';
} else {
    echo '$dog1 不是 Dog对象的实例';
}
