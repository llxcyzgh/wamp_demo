<?php
header("content-type:text/html;charset=utf-8");
// 属性重载
class Dog
{
    // 私有的数组,管理重载的属性
    private $pro_array = array();
    // 写一个方法,来管理动态增长的属性
    public function __set($pro_name, $val)
    {
        $this->pro_array[$pro_name] = $val;
    }

    // 写一个方法,来返回动态增长的属性
    public function __get($pro_name)
    {
        if (isset($this->pro_array[$pro_name])) {
            return $this->pro_array[$pro_name];
        } else {
            return '属性不存在';
        }
    }
}

$dog1       = new Dog();
$dog1->name = '哮天犬';
echo $dog1->name; // 重载的属性在调用时会触发 __get() 函数; 自带的属性不会触发 __get()
