<?php
header("content-type:text/html;charset=utf-8");
// trait 细节说明

/*
1、trait 不能被实例化
2、优先级的问题: 如果父类和trait有相同的方法名,怎么处理?
.    不会报错,会以trait定义的方法为准
 */
trait Abc
{
    public function getSum($n1, $n2)
    {
        return $n1 - $n2;
    }
}

class A
{
    public function getSum($n1, $n2)
    {
        return $n1 * $n2;
    }
}

class B extends A
{
    use Abc;
}

$b = new B();
echo $b->getSum(5, 9);
