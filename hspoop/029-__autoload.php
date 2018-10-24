<?php
header("content-type:text/html;charset=utf-8");
// 类的自动加载

// init.php 完成对类文件的加载(在这里是 29-__autoload.php)

// 传统的方法
/*
require '29-Dog.class.php';
require '29-Cat.class.php';
 */

// 类的自动加载方法
/*
特点:
1. 当使用一个没有定义过的类时,就会自动地触发这个函数
2. autoload 的类动态加载的,只有使用到某个没有定义的类时,才会触发
3. 在一个大项目中,可以做一个类的映射数组
 */

$class_map = array(
    'Dog' => './029-Dog.class.php',
    'Cat' => './029-Cat.class.php',
);

function __autoload($class_name)
{
    // echo '类名是: ' . $class_name;
    // require ".\\29-{$class_name}.class.php";
    global $class_map;
    require $class_map[$class_name];
}

$dog = new Dog();
$cat = new Cat();

$dog->cry();
$cat->cry();
