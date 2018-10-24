<?php
header("content-type:text/html;charset=utf-8");
// 抽象类细节1: 抽象类不能被实例化
abstract class A
{
    abstract public function cry();
}

//$a = new A();
// Fatal error: Cannot instantiate abstract class A
