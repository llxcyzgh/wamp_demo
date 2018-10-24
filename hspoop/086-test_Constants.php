<?php
header("content-type:text/html;charset=utf-8");
// 类常量练习题
class Company
{
    // 1、不能用访问控制符修饰
    // public const RATE = 1.1;

    // 2、类常量声明时必须赋初始值
    // const RATE;
}

class Company3
{
    const RATE = 1.1;
    public function getRATE()
    {
        // 不能通过对象访问, 类常量只能通过类名或self或接口名来访问, ps:静态变量可以通过对象访问
        // return $this->RATE;
        // return self::RATE;
    }
}
$com3 = new Company3();
echo $com3->getRATE();

class Company4
{
    const RATE = 1.1;
    public function test()
    {
        // 报错, 因为常量不能被修改
        // Company::RATE = 23;
    }
}

class Company5
{
    const RATE = 0.5;
}

function getTax($money)
{
    return $money * Company5::RATE;
}

echo getTax(5000);
/*
类常量的使用范围: 类常量是全局的
 */
