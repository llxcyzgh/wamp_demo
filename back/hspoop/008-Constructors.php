<?php
header("content-type:text/html;charset=utf-8");
// 构造函数:作用是快速创建对象
/*构造方法是类的一种特殊的方法,它的主要作用是完成对新对象的初始化.
它有如下细节:
1.没有返回值
2.在创建一个类的新对象时,系统会 自动调用 该类的构造方法完成对新对象的初始化
3.在php4中,构造函数和类名一样
 */

class Person
{
    public $name;
    public $age;

    public function __construct($my_name, $my_age)
    {
        // $this 表示的是当前对象[谁调用我,我就指向谁]
        $this->name = $my_name;
        $this->age  = $my_age;
        echo '<pre>';
        var_dump($this);
    }

    public function showInfo()
    {
        echo '信息如下: <hr>' . $this->name . ' ' . $this->age . '<br>';
    }
}

$person1 = new Person('猪八戒', 200);
echo 'name = ' . $person1->name . '<br>age = ' . $person1->age;
echo '<pre>';
var_dump($person1);
$person1->showInfo();

echo '<hr>';

$personTwo = new Person('沙僧', 100);
echo 'name = ' . $person1->name . '<br>age = ' . $person1->age;
echo '<pre>';
var_dump($personTwo);
$personTwo->showInfo();
