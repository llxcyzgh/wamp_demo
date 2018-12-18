<?php
header("content-type:text/html;charset=utf-8");
// 反序列化
//如果需要把一个对象反序列化, 则要把该类的定义引入进来

class Dog
{
    public $name;
    protected $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }
}

$dog_str = file_get_contents('e:test.txt');
echo $dog_str;
$dog_obj = unserialize($dog_str);
var_dump($dog_obj);
echo $dog_obj->name;
