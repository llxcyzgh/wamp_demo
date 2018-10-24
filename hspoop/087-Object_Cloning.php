<?php
header("content-type:text/html;charset=utf-8");
// Object Cloning 对象克隆, 或对象复制
/*
对象克隆的说明

1、基本语法
$新对象 = clone $旧对象;

2、对象克隆会生成一个全新的, 独立的对象(二者属性、方法相同, 但内存空间不同)

3、当复制完成时, 如果定义了 __clone()方法, 则新创建的对象(复制生成的对象)中的 __clone()方法会被调用

4、将__clone做成一个私有函数, 防止克隆, 当有克隆代码时, 就会报错 // private function __clone()
 */
