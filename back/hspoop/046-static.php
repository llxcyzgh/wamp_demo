<?php
header("content-type:text/html;charset=utf-8");
// 封装细节: 静态的属性可以不写访问修饰符, 默认为public; 普通属性不能省略访问修饰符不写; var(php4) 意义同 public;

// 方法可以不写访问修饰符,则默认为 public

class A
{
    public $name = 0;
    public $age  = 0;

    static $total_number = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$a = new A('abc');
