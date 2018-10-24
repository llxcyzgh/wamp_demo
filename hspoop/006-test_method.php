<?php
header("content-type:text/html;charset=utf-8");
/*
编写一个Cat类,含有一个成员函数,从网页输入一个整数(1-9),打印出对应的乘法表
 */
class Cat
{
    public function multiple($n)
    {
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "$j * $i = " . $j * $i . '&emsp;&emsp;';
            }
            echo '<br>';
        }
    }

}
$cat1 = new Cat();
$cat1->multiple(5);
