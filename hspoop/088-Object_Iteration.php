<?php
header("content-type:text/html;charset=utf-8");
// Object Iteration 对象遍历
// Iteration     反复; 重述; 重述的事; [计算机] 循环;

/* PHP 5 提供了一种定义对象的方法使其可以通过单元列表来遍历，例如用 foreach 语句。默认情况下，所有可见属性都将被用于遍历。
 */

// 对象遍历只能遍历对象的属性值, 不能遍历方法
/*
1、基本语法
foreach($对象 as $key=>$val){
echo "$key => $val";
}
2、在类外部遍历时,只能遍历到public属性
3、如果要遍历对象的所有属性值, 可以写一个成员方法
 */
class Cat
{
    public $name   = '小花猫';
    protected $age = 5;
    private $lover = '大黑猫';
    public function getSum($n1, $n2)
    {
        return $n1 + $n2;
    }

    public function showAll()
    {
        foreach ($this as $key => $val) {
            echo "$key => $val <br>";
        }
    }
}

$cat = new Cat();
$cat->showAll();

// 在类外部遍历类的属性
foreach ($cat as $key => $val) {
    echo "$key => $val <br>";
}
