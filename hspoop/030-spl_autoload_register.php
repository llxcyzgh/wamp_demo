<?php
header("content-type:text/html;charset=utf-8");
// 类的自动加载的高级方法 spl_autoload_register

//使用 spl_autoload_register 来注册自己的自动加载函数.

spl_autoload_register('myAutoLoad');

$class_map = array(
    'Dog' => './029-Dog.class.php',
    'Cat' => './029-Cat.class.php',
);

function myAutoLoad($class_name)
{
    global $class_map;
    require $class_map[$class_name];
}

$dog = new Dog();
$cat = new Cat();

$dog->cry();
$cat->cry();




//  使用闭包
spl_autoload_register(function($class_name) use($class_map){
	require $class_map[$class_name];
});