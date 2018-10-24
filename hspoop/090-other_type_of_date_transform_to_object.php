<?php
header("content-type:text/html;charset=utf-8");
// 其它数据类型 (int,float,array 等) 转成对象形式

// 把一个数组转换成一个对象后
/*
1、这个对象就是 stdClass 的一个对象实例
2、如果这是一个关联数组,数组的key变成属性名,数组的值变成属性值
 */
$heros    = array('no1' => '宋江', 'no2' => '卢俊义', 'no3' => '吴用');
$hero_obj = (object) $heros;
var_dump($hero_obj);
// echo $hero_obj->10o;

// 基本数据类型
// $age     = 10;
// $age     = 0.55;
// $age     = 'abc';
// $age     = true;
// $age     = false;
$age     = null;
$age_obj = (object) $age;
var_dump($age_obj);
echo $age_obj->scalar;
