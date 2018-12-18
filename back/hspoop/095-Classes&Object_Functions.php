<?php
header("content-type:text/html;charset=utf-8");
// Classes/Object Functions 类与对象相关函数
/*
class_exists() // 当前类是否存在
method_exists() // 当前对象的类的方法是否存在
property_exists() // 当前对象的类的某个属性是否存在
get_class() // 获取当前对象的类名
 */

class Car
{
    public $name;
    protected $price;
    public function __construct($name, $price)
    {
        $this->name  = $name;
        $this->price = $price;
    }
    public function run()
    {
        echo $this->name . '在跑, 价格是 ' . $this->price . ' 元<br>';
    }
}

if (class_exists('Car')) {
    $car = new Car('宝马', 80000);

    if (method_exists($car, 'run')) {
        $car->run();
    } else {
        echo '方法不存在 <br>';
    }

    // 属性是否存在
    if (isset($car->name)) {
        echo '000 <br>';
    }

    if (property_exists('Car', 'name')) {
        echo '111 <br>';
    }

    echo '当前对象对应的类名是: ' . get_class($car);

} else {
    echo '类不存在 <br>';
}
