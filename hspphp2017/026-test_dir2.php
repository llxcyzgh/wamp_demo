<?php
header("content-type:text/html;charset=utf-8");

/*
练习:
编写一个程序，要求如下: (这个课上练习!)
(1) 编写一个Dog类
(2) 创建3个Dog对象，然后序列化存放到 d:/dog文件夹下
(3) 通过遍历d:/dog 可以反序列化所有的Dog对象
 */

class Dog
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$dog1 = new Dog('大黄', 5);
$dog2 = new Dog('小白', 1);
$dog3 = new Dog('藏獒', 4);

var_dump($dog1);

$path = 'd:dog';
if (!is_dir($path)) {
    mkdir($path);
}
if (file_put_contents($path . '/dog1.txt', serialize($dog1)) && file_put_contents($path . '/dog2.txt', serialize($dog2)) && file_put_contents($path . '/dog3.txt', serialize($dog3))) {
    echo '对象序列化成功<br>';
}


$arr = scandir($path, 1);
var_dump($arr);
foreach ($arr as $key => $value)
    if ($value != '.' && $value != '..') {
        $name = 'obj_dog' . $key;
        echo $name;
        $$name = unserialize(file_get_contents($path . '/' . $value));
        var_dump($$name);
    }

