<?php
header("content-type:text/html;charset=utf-8");
/*
1.写一个房子类(有 价格,房子地址,房主 三个属性),要要求房主是 protected 类型,其它是 public 类型
2.在创建房子对象时,要求通过构造方法直接给三个属性赋值
3.在类外部,可以通过 isset($对象名->房主属性名) 判断是否存在这个属性; 还可以通过 unset($对象名->房主属性名) 销毁房主属性
 */
class House
{
    public $price;
    public $address;
    protected $holder;
    public function __construct($price, $address, $holder)
    {
        $this->price   = $price;
        $this->address = $address;
        $this->holder  = $holder;
    }

    public function __isset($pro_name)
    {
        return isset($this->$pro_name);
    }

    public function __unset($pro_name)
    {
        if (isset($this->$pro_name)) {
            unset($this->$pro_name);
        } else {
            echo '不能unset一个不存在的属性<br>';
        }
    }

}

$house1 = new House('100w', '北京市昌平区府学路59号', 'whose');

// echo '<pre>';
var_dump($house1);

if (isset($house1->holder)) {
    echo '存在这个属性, YES<br>';
} else {
    echo '不存在这个属性, NO<br>';
}

unset($house1->holder);
var_dump($house1);
