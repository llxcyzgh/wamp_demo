<?php
header("content-type:text/html;charset=utf-8");
// 对象序列化
/*
所有php里面的值都可以使用函数 serialize() 来返回一个包含字节流的字符串来表示。 unserialize() 函数能够重新把字符串变回php原来的值。 序列化一个对象将会保存对象的所有变量，但是不会保存对象的方法，只会保存类的名字。
 */

/*
所谓对象序列化, 指的是: 把一个对象的属性名称、属性的类型和属性的值都保存到文件中。还可以通过反序列化, 把对象重新恢复。

对象序列化的使用:
1、当编写一个大项目时, 需要将一个对象的数据和类型, 保存到文件中, 便于调试时, 就会用到对象序列化技术
2、需要把对象放入到session中
 */
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
$dog1 = new Dog('大黄狗', 9);

// 把$dog1保存到文件
// file_put_contents() 可以把 字符串 保存到文件中

// $str = '你好,world';
// file_put_contents('e:/test.txt', $str);
// file_put_contents('e:/test.txt', $dog1);
file_put_contents('e:/test.txt', serialize($dog1));
echo '保存成功';
