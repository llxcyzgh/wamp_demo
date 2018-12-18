<?php
header("content-type:text/html;charset=utf-8");
// 类型约束
class Dog
{

}

function test(Dog $dog, array $arr, callable $f)
{
    echo '<pre>';
    var_dump($dog);
    var_dump($arr);
    var_dump($f);
}

$dog1 = new Dog();
test($dog1, array(5, 4), function () {echo '回调函数';});

/*
PHP 5 可以使用类型约束。函数的参数可以指定必须为对象（在函数原型里面指定类的名字），接口，数组（PHP 5.1 起）或者 callable（PHP 5.4 起）。不过如果使用 NULL 作为参数的默认值，那么在调用函数的时候依然可以使用 NULL 作为实参。

如果一个类或接口指定了类型约束，则其所有的子类或实现也都如此。

类型约束不能用于标量类型如 int 或 string。Traits 也不允许。

 */
