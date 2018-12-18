<?php
header("content-type:text/html;charset=utf-8");
// 成员函数
/*
1.添加speak成员方法,输出:'我是一个好人'
2.添加jisuan成员方法,可以计算从1+2+...+1000的结果
3.修改jisuan成员方法,该方法可以接收一个数n,计算1+2+...+n的结果
4.添加成员add成员方法,可以计算两个数的和
 */
class Person
{
    public $name;
    public $age;
    public function speak()
    {
        echo '我是一个好人<br>';
    }
    public function jisuan()
    {
        $res = 0;
        for ($i = 1; $i <= 1000; $i++) {
            $res += $i;
        }
        echo '运算结果是: ' . $res . '<br>';
    }
    public function jisuan2($n)
    {
        $res = 0;
        for ($i = 1; $i <= $n; $i++) {
            $res += $i;
        }
        return $res;
    }
    public function add($n1, $n2)
    {
        return $n1 + $n2;
    }
}

//如何使用成员函数
$person       = new Person();
$person->name = '孙悟空';

// 调用函数
$person->speak();
$person->jisuan();
$res = $person->jisuan2(100);
echo $res . '<br>';
$res2 = $person->add(100, 200);
echo $res2 . '<br>';
