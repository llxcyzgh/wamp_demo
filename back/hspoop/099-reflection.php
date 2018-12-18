<?php
header("content-type:text/html;charset=utf-8");
// 反射机制
/*
PHP 5 具有完整的反射 API，添加了对类、接口、函数、方法和扩展进行反向工程的能力。 此外，反射 API 提供了方法来取出函数、类和方法中的文档注释。

请注意部分内部 API 丢失了反射扩展工作所需的代码。 例如，一个内置的 PHP 类可能丢失了反射属性的数据。这些少数的情况被认为是错误，不过， 正因为如此，它们应该被发现和修复。
 */

/*
使用场景
1、框架底层, 比如TP框架底层的控制器调试
2、扩展功能
3、管理大虾的未知类
 */

class Dog
{
    public $name;
    protected $age;
    private $food;

    public function __construct($name, $age, $food)
    {
        $this->name = $name;
        $this->age = $age;
        $this->food = $food;
    }

    public function cry($sound)
    {
        echo $this->name . ' ' . $this->food . ' ' . $sound . '<br>';
    }
}

echo '<pre>';
// 这里, 可以看到Dog类的所有信息
// ReflectionClass::export('Dog');

// 反射的代理调用

// 不使用反射时,调用类中的 cry() ,需要实例化一个对象
$dog = new Dog('大黄狗', 5, '骨头骨头');
var_dump($dog);
$dog->cry('汪汪叫');

// 使用反射来代理调用时
// 1、获取到一个 'Dog'类的反射类实例对象
$dog_reflect_class = new ReflectionClass('Dog');
var_dump($dog_reflect_class);
// 2、通过 反射类对象 得到实例
$dog1 = $dog_reflect_class->newInstance('大黑狗', 7, '鱼');
var_dump($dog1);
// 3、获取 反射方法 的对象实例
$dog_cry_method = $dog_reflect_class->getMethod('cry');
// 4、通过方法反向调用 cry
$dog_cry_method->invoke($dog1, 'wangwang');
