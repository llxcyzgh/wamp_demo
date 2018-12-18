<?php
header("content-type:text/html;charset=utf-8");
/*当复制完成时，如果定义了 __clone() 方法，则新创建的对象（复制生成的对象）中的 __clone() 方法会被调用，可用于修改属性的值（如果有必要的话）。*/

class Sheep
{
    public $name;
    protected $food;
    public function __construct($name, $food)
    {
        $this->name = $name;
        $this->food = $food;
    }

// __clone() 主要用于在单例模式时,防止克隆
    private function __clone()
    {
        echo '***clone被调用***';
    }
}

// 第一种创建对象的方式
$sheep1 = new Sheep('多利', '草');
$sheep2 = new Sheep('多利', '草');

if ($sheep1 === $sheep2) {
    echo '$sheep1 === $sheep2 <br>';
}

// 第一种创建对象的方式
$sheep3 = $sheep1;

if ($sheep1 === $sheep3) {
    echo '$sheep1 === $sheep3 <br>';
}

var_dump($sheep1);
var_dump($sheep2);
var_dump($sheep3);

echo '<hr><hr>';
// 第三种创建对象的方式
$sheep4 = clone $sheep1; // 等于, 但不全等
var_dump($sheep4);
