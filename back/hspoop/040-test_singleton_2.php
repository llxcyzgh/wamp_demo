<?php
header("content-type:text/html;charset=utf-8");
// 保存只能创建一只猫
class Cat
{
    public $name;

    // $instance 表示 Cat 的一个对象实例
    private static $instance = null;

    // 为了防止用户直接 new 对象, 将 构造函数做成 private
    private function __construct($name)
    {
        $this->name = $name;
    }

    // 一个静态方法 public ,通过该方法, 可以获取一个对象实例
    public static function getSingleton($name)
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self($name); // new 就会调用 __construct() 函数
        }
        return self::$instance;
    }

    // 防止克隆: 私有化 __clone()
    private function __clone()
    {

    }
}

// $cat1 = new Cat('2huo');
$cat1 = Cat::getSingleton('小花');
$cat2 = Cat::getSingleton('2huo');

var_dump($cat1);
