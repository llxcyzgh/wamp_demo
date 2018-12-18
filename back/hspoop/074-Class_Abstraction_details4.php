<?php
header("content-type:text/html;charset=utf-8");
// 抽象类细节4: 一个类中只要有一个抽象方法,则必须定义为抽象类

abstract class A
{
    abstract public function cry();
}
