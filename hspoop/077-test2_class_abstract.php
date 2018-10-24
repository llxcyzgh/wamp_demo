<?php
header("content-type:text/html;charset=utf-8");
/*
练习要求:
1. 设计抽象类 超人 Superman 属性有名字、性别、年龄; 抽象方法 run 跑, fly 飞, attack 攻击
2. 写出 蜘蛛侠、蝙蝠侠、钢铁侠 分别都继承 Superman, 并创建各自的对象实例
 */
abstract class Superman
{
    public $name;
    public $sex;
    public $age;
    abstract public function run();
    abstract public function fly();
    abstract public function attack();
}

class Spiderman extends Superman
{
    public function run()
    {
        echo '蜘蛛侠跑了600米 <br>';
    }
    public function fly()
    {
        echo '蜘蛛侠飞了300米 <br>';
    }
    public function attack()
    {
        echo '蜘蛛侠攻击,对方掉血20% <br>';
    }
}

class Batman extends Superman
{
    public function run()
    {
        echo '蝙蝠侠跑了400米 <br>';
    }
    public function fly()
    {
        echo '蝙蝠侠飞了600米 <br>';
    }
    public function attack()
    {
        echo '蝙蝠侠攻击,对方掉血23% <br>';
    }
}

class Ironman extends Superman
{
    public function run()
    {
        echo '钢铁侠跑了250米 <br>';
    }
    public function fly()
    {
        echo '钢铁侠飞了450米 <br>';
    }
    public function attack()
    {
        echo '钢铁侠攻击,对方掉血29% <br>';
    }
}

$spiderman = new Spiderman();
$spiderman->run();
$spiderman->fly();
$spiderman->attack();

$batman = new Batman();
$batman->run();
$batman->fly();
$batman->attack();

$ironman = new Ironman();
$ironman->run();
$ironman->fly();
$ironman->attack();
