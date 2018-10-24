<?php
header("content-type:text/html;charset=utf-8");
/*
有两只猫.一只名字叫小白,今年3岁;还有一只叫小花,今年10岁,花色.
编写一个程序,当用户输入小猫的名字时,就显示该猫的名字、年龄、颜色。如果用户输入的小猫名错误，则显示没有这只猫。
 */

/*
类和对象的区别和联系:
① 类是抽象的,概念的代表一类事物,比如人类、猫类
② 对象的具体的,实际的,代表一个具体事件
③ 类是对象的模板,对象的类的一个个体实例
 */

$cat1_name  = '小白';
$cat1_age   = 3;
$cat1_color = '白色';

$cat2_name  = '小花';
$cat2_age   = 3;
$cat2_color = '花色';

echo $cat1_name . ' ' . $cat1_age . ' ' . $cat1_color;

// 以下用面向对象的方式来解决
class Cat
{
    //认为一只猫,具有3个属性
    public $name;
    public $age;
    public $color;
}
// 通过猫类创建对应的实例(对象实例)
$cat1        = new Cat();
$cat1->name  = '小红';
$cat1->age   = 9;
$cat1->color = '红色';

$cat2        = new Cat();
$cat2->name  = '小黑';
$cat2->age   = 5;
$cat2->color = '黑色';

echo '<pre>';
echo $cat1->name . ' ' . $cat1->age . ' ' . $cat1->color;
