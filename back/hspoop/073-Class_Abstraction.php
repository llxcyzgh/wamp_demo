<?php
header("content-type:text/html;charset=utf-8");
// 抽象类--为什么有?

abstract class Animal
{
    // 如果一个类,有一个方法,不确定,
    /*
    1. 这时可以把这个方法声明为抽象, 在访问控制符前面再加上 abstract
    2. 被声明为 abstract 的方法,不能有方法体(也就是不能有大括号及里面的内容)
    3. 一个类中,只要有一个抽象方法,则该类必须声明为 abstract
    4. 抽象类重点在于设计,它的作用是让其它类来继承它,并实现它的方法
     */
    abstract public function cry();
/*    {
echo '这个动物,不知道怎么叫唤<br>';//不能有方法体
}*/
}
