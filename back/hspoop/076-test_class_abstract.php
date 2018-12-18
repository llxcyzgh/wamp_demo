<?php
header("content-type:text/html;charset=utf-8");
abstract class Animal
{
    public function abc()
    {
        echo 'abc';
    }
    public static function abc2()
    {
        echo 'okok';
    }
}

Animal::abc2(); // 可以运行
