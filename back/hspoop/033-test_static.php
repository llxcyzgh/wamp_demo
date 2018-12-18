<?php
header("content-type:text/html;charset=utf-8");
/*
要求:
1. 设计一个 Perosn 类,(有 名字,年龄,蛋糕 三个属性)
2. 蛋糕一共1000块,是所有人共享的
3. 创建唐僧师徒四人,他们每人都吃蛋糕,唐僧每天吃3块,悟空吃5块,沙和尚吃9块,猪八戒吃30块(编写一个eat方法来吃)
4. 问两天后,还剩下多少块蛋糕(编写一个 showCake()来显示 )
 */

class Person
{
    public $name;
    public $age;
    public static $cake = 1000;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function eat()
    {
        if ($this->name == '唐僧') {
            self::$cake = self::$cake - 3;
        } elseif ($this->name == '孙悟空') {
            self::$cake -= 5;
        } elseif ($this->name == '猪八戒') {
            self::$cake -= 30;
        } elseif ($this->name == '沙和尚') {
            self::$cake -= 9;
        }
    }

    public static function showCake()
    {
        echo self::$cake;
    }

}
$tang = new Person('唐僧', 30);
$sun  = new Person('孙悟空', 500);
$zhu  = new Person('猪八戒', 600);
$sha  = new Person('沙和尚', 550);

for ($i = 0; $i < 2; $i++) {
    $tang->eat();
    $sun->eat();
    $zhu->eat();
    $sha->eat();
}

Person::showCake();
