<?php
header("content-type:text/html;charset=utf-8");
// 对象当作字符串使用
/* __tostring 方法用于当一个类被当作字符串时应怎么回应
例如,echo $obj; 应该显示些什么, 此方法必须返回一个字符串,否则将发出一条致命错误
ReflectionClass 类
ReflectionClass 类报告了一个类的有关信息
 */

/*
要求: 当 echo $obj; 时,返回该类的相关信息,比如类名,所有函数和所有属性等
 */
class Dog
{
    public $name;
    protected $age;
    private $lover;
    public function __construct($name, $age, $lover)
    {
        $this->name  = $name;
        $this->age   = $age;
        $this->lover = $lover;
    }
    protected function cry()
    {
        echo '汪汪叫...<br>';
    }

    public function __toString()
    {
        $reflect_class = new ReflectionClass($this);
        var_dump($reflect_class);
        echo '类名 = ' . $reflect_class->getName() . '<br>';

        echo '函数名列表为 <pre> ';
        $method_list = $reflect_class->getMethods();
        print_r($arr);
        foreach ($method_list as $key => $value) {
            echo $value->name . '<br>';
        }

        echo '属性名列表为 <pre> ';
        $property_list = $reflect_class->getProperties();
        var_dump($property_list);
        return '';
    }
}

$dog = new Dog('大黄狗', '15', '小花狗');
echo $dog; // 输出Dog类的相关信息
