<?php
header("content-type:text/html;charset=utf-8");
class Person
{
    public $name;
    public static function sayHello()
    {
        // 在static方法中使用非静态变量,是错的
        echo 'Hello, world !  <br>' . $this->name;
    }
}
$p1       = new Person();
$p1->name = 'tainiu';
Person::sayHello();
