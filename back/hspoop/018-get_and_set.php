<?php
header("content-type:text/html;charset=utf-8");
// 魔术方法之 __get()  和  __set()
class Monkey
{
    public $name;
    protected $food;

    public function __construct($name, $food)
    {
        $this->name = $name;
        $this->food = $food;
    }

    public function sayHello()
    {
        echo '我是 ' . $this->name . ', 喜欢吃 ' . $this->food . '<br>';
    }

    public function __get($pro_name)
    {
        // echo '$pro_name <br>' . $pro_name;
        if (isset($this->$pro_name)) {
            return $this->$pro_name;
        } else {
            return '$this->' . $pro_name . '   !!!该属性不存在!!!';
        }
    }

    public function __set($pro_name, $val)
    {
        // echo '__set()属性是: ' . $pro_name . ' $val值是: ' . $val;
        if (isset($this->$pro_name)) {
            $this->$pro_name = $val;
        } else {
            echo '属性不存在';
        }
    }
}

$monkey = new Monkey('金丝猴', '桃子');
$monkey->sayHello();
echo '猴子喜欢吃 ' . $monkey->food . '<br>';
$monkey->food = '小孩子';
$monkey->sayHello();
