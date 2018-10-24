<?php
header("content-type:text/html;charset=utf-8");
/*
要求:
1. 编写一个Cat类(有 年龄,名字 两个属性), 要求两个属性全部是public;
2. Cat类有一个方法 jiSuan($n1,$=n2,$oper) 可以计算 + - * /, 是私有的
3. 在类外部, $对象名->play('jiSuan',$n1,$n2,$oper) 得到结果, 注意play这个方法,在类中没有定义
 */

class Cat
{
    public $name;
    public $age;

// 构造函数
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    // 魔术方法之 __call
    public function __call($method, $args)
    {
        if ($method == 'play') {
            echo "$args[0]($args[1], $args[2], $args[3])" . ' = ' . $this->$args[0]($args[1], $args[2], $args[3]);
        }
    }

// 私有方法
    private function jiSuan($n1, $n2, $oper)
    {
        switch ($oper) {
            case '+':
                return $n1 + $n2;
                break;
            case '-':
                return $n1 - $n2;
                break;
            case '*':
                return $n1 * $n2;
                break;
            case '/':
                return $n1 / $n2;
                break;
            default:
                echo '运算符不符合要求';
                break;
        }

    }
}

$catt = new Cat('little', 2);

$catt->play('jiSuan', 10, 2, '*');
