<?php
header("content-type:text/html;charset=utf-8");
// 对象的传递机制: 引用(Objects and references)

// 定义一个类
class Person
{
    public $name;
    public $age;
}

// 创建对象
// 创建对象的时候,系统会分配一个对象标识符,可以通过var_dump($对象)查看
$person1       = new Person();
$person1->name = '小吴';

$person2       = $person1;
$person1->name = '老吴';

echo '$person2->name = ' . $person2->name;

/*
PHP当中 $person2 = $person1 也是值传递,但是这个值是对象的引用(可以理解为对象标识符),即每个包含对象的变量都持有对象的引用(reference
),而不是整个对象的拷贝.
 */
