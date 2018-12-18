<?php
header("content-type:text/html;charset=utf-8");
/* 静态变量的初始化,不依赖于是否创建了对象
静态变量创建的时机和类的加载关联
类的加载,就是使用到类名
 */
class Person
{
    public static $a = 90;
}

echo Person::$a;
