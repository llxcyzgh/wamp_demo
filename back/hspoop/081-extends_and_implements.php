<?php
header("content-type:text/html;charset=utf-8");
// 实现接口 和 继承类 的区别
// 接口需要在类中再写成具体方法才能用; 继承类的方法不用在子类中写,就可以直接用

// 接口机制可以理解为是对php单继承的补充, 可以在不破坏继承关系的基础上,对某个子类功能进行扩展

/*
实例:
一个小猴子,从母猴子那里继承了会爬树的本领,又向鸟学习了飞的本领,还向鱼学习了游泳的本领
 */

class Monkey
{
    public function climb()
    {
        echo '我会爬树 <br>';
    }
}

interface Bird
{
    public function fly();
}

interface Fish
{
    public function swim();
}

class LittleMonkey extends Monkey implements Bird, Fish
{
    public function fly()
    {
        echo '我会在天上飞 <br>';
    }
    public function swim()
    {
        echo '我会在水里游 <br>';
    }
}

$little = new LittleMonkey();
$little->climb();
$little->fly();
$little->swim();
