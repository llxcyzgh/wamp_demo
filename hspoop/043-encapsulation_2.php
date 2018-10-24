<?php
header("content-type:text/html;charset=utf-8");
// 访问 protected 和 private 属性的三种方式之一: 魔术方法
/*
方法一的优缺点
优点: 简单
缺点: 不够灵活, 没有验证, 数据的有效性得不到保障
 */
// __get()   __set()

class Person
{
    public $name;
    protected $nickname;
    private $address;

    // 构造函数
    public function __construct($name, $nickname, $address)
    {
        $this->name     = $name;
        $this->nickname = $nickname;
        $this->address  = $address;
    }

    //魔术方法: 访问受限的属性
    public function __get($pro_name)
    {
        // 判断属性是否存在
        if (isset($this->$pro_name)) {
            return $this->$pro_name;
        } else {
            return '!!! 属性不存在 !!!';
        }
    }

    // 魔术方法: 修改受限的属性
    public function __set($pro_name, $val)
    {
        // 判断属性是否存在
        if (isset($this->$pro_name)) {
            $this->$pro_name = $val;
        } else {
            echo '<br> !!! 属性不存在 !!! <br><br>';
        }
    }

}

$person1 = new Person('宋江', '及时雨', '梁山');

echo 'nickname: ' . $person1->nickname . '<br>';

$person1->nickname = '智多星';
echo 'nickname: ' . $person1->nickname . '<br>';
