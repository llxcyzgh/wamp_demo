<?php
header("content-type:text/html;charset=utf-8");
/*
1. 编写一个怪物类(有 本领,年龄,名字 三个属性),要求三个属性全部是private
2. 在创建怪物对象时,要求通过构造方法直接给三个属性赋值
3. 在类外部,可以通过 echo 怪物对象名,显示该怪物的全部信息
 */
class Monster
{
    private $ability;
    private $age;
    private $name;

    public function __construct($ability, $age, $name)
    {
        $this->ability = $ability;
        $this->age     = $age;
        $this->name    = $name;
    }

    public function __toString()
    {
        return '该怪物的能力是: ' . $this->ability . ', 年龄是: ' . $this->age . ', 名字是: ' . $this->name;
    }
}

$monster1 = new Monster('吃人', 500, '黄风怪');
echo $monster1;
