<?php
header("content-type:text/html;charset=utf-8");
/* 类常量: 可以把在类中始终保持不变的值定义为常量。在定义和使用常量的时候不需要使用 $  符号。

常量的值必须是一个定值，不能是变量，类属性，数学运算的结果或函数调用。

接口（interface）中也可以定义常量。

基本语法:
const 常量名 = 值;

访问:
类名::常量名
self::常量名
接口名::常量名
 */

class Company
{
    const TAX_RATE = 0.08;
    public function getIncomeTax($money)
    {
        echo '公司应该交的所得税是' . $money * self::TAX_RATE;
    }
}

$company = new Company();
$company->getIncomeTax(50000);
