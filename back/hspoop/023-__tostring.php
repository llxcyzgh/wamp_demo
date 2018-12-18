<?php
header("content-type:text/html;charset=utf-8");
/*
__toString() 方法用于一个类被当成字符串时应怎样回应。例如 echo $obj; 应该显示些什么。此方法必须返回一个字符串，否则将发出一条 E_RECOVERABLE_ERROR  级别的致命错误。
 */
class Sheep
{
    public $name;
    public $food;
    public function __construct($name, $food)
    {
        $this->name = $name;
        $this->food = $food;
    }

    public function __toString()
    {
        return 'tostring()<br>' . $this->name . ' 喜欢吃 ' . $this->food;
    }
}

$sheep1 = new Sheep('喜羊羊', '青草');
echo $sheep1;
