<?php
header("content-type:text/html;charset=utf-8");
class Car
{
    public $price;
    public $brand;
    public $speed;
    private $user;

    public function __construct($price, $brand, $speed, $user)
    {
        $this->price = $price;
        $this->brand = $brand;
        $this->speed = $speed;
        $this->user  = $user;
    }

    public function __get($pri_name)
    {
        if (isset($this->$pri_name)) {
            return $this->$pri_name;
        } else {
            return '***属性.$pri_name.不存在***';
        }
    }

    public function __set($pri_name, $value)
    {
        if (isset($this->$pri_name)) {
            $this->$pri_name = $value;
        } else {
            return '***属性.$pri_name.不存在***';
        }
    }
}
$car1 = new Car(50000, 'bench', '120km', 'jh');
echo 'car1 的车主是: ' . $car1->user . '<br>';

$car1->user = 'gxh';
echo 'car1 的车主是: ' . $car1->user . '<br>';
