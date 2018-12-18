<?php
header("content-type:text/html;charset=utf-8");
// 数据的传递两种方式: 值传递和引用传递
// 除非是强制引用传递,否则所有的数据类型的传递都是默认值传递

// 值传递
//当把一个变量定义在函数外,则该变量就是一个全局变量,该变量就会被放在全局区
$a = 123;
$b = $a;
echo $b . '<br>';
$b = 45;
echo $a . '<hr>*********************************<hr>';

// 引用传递
$a = 123;
$b = &$a; // 强制引用传递
echo $b . '<br>';
$b = 45;
echo $a;

// int,float,bool,string 都是默认 值传递
// 数组默认也是值传递
$city  = array('no1' => '北京', 'no2' => '上海');
$city2 = $city;
// $city2        = &$city;// 强制引用传递
$city2['no1'] = '上海';
var_dump($city, $city2);

// 对象的传递方式=>也是值传递,传递的是对象标识符
// null 也是默认值传递
$c = null;
$d = $c;
$d = 'abcd';
var_dump($c, $d);

// 资源数据类型 也是默认值传递
