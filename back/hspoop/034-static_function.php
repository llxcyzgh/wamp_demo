<?php
header("content-type:text/html;charset=utf-8");
// 静态方法,也叫类方法
/*
1. 静态方法处理静态变量
2. 没有实例化对象时,也可以使用类方法(经典场景是单例模式)
 */

// 使用静态方法,统计共有多少学生交学费
class Student
{
    public $name;
    private static $fee = 0.0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function fee($fee)
    {
        self::$fee += $fee;
    }

    public static function getFee()
    {
        echo self::$fee;
    }

}

$student1 = new Student('犀牛精');
$student1->fee(40000);

$student2 = new Student('狐狸精');
$student2->fee(60000);

$student1->getFee();
