<?php
header("content-type:text/html;charset=utf-8");
// 构造函数
/*
1.一旦自定义了一个构造函数,默认的构造函数就被覆盖了,这时再创建对象的时候就要使用自定义的构造函数
2.一个类只能有一个构造函数(不能同时两个 __construct)
3.如果一个php4的构造函数和php5的构造函数同时存在,则以php5的为准
 */
class Cat
{
    public $name;
    public function Cat($name)
    {
        echo 'hello,world2222!';
    }
    public function __construct($name)
    {
        echo 'hello,world!';
    }

}
$cat1 = new Cat(123);
