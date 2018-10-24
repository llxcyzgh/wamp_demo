<?php
header("content-type:text/html;charset=utf-8");
/*
要求:
1. 编写一具Dog类 (名字,年龄,主人)
2. 编写一个Master类(名字,年龄,宠物狗)
3. 创建一个 Dog对象 和 Master对象 ,
通过Dog对象可以找到对应主人的信息, 通过Master对象可以找到宠物狗的信息
[提示,需要各写一个方法]
 */
class Dog
{
    public $name;
    public $age;
    private $master;

    public function setMaster($master)
    {
        $this->master = $master;
    }

    public function getMaster()
    {
        return $this->master;
    }

}

class Master
{
    public $name;
    public $age;
    private $dog;

    public function setDog($dog)
    {
        $this->dog = $dog;
    }

    public function getDog()
    {
        return $this->dog;
    }

}

$dog       = new Dog;
$dog->name = '小白';
$dog->age  = 2;

$master       = new Master;
$master->name = '黄明明';
$master->age  = 22;

$dog->setMaster($master);
$master->setDog($dog);

echo '狗名为: \'' . $dog->name . '\' 的狗的主人名字是: \'' . $dog->getMaster()->name . '\'。<br>';
echo '名字为\'' . $master->name . '\'的人的狗的名字是: \'' . $master->getDog()->name . '\'。<br>';
