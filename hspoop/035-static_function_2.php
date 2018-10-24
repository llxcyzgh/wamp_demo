<?php
header("content-type:text/html;charset=utf-8");
// 静态方法的注意事项
/*
1. 如果在类的外部调用静态方法, 则要求该静态方法是 public; 方法有三种 类名::静态方法名    对象名->静态方法名    对象名::静态方法名(不推荐第三种)

2. 在类内部调用静态方法(有三种): self::静态方法名    类名::静态方法名    $this->静态方法名(不推荐)

3. 静态方法中不能访问非静态属性(变量)

4. 普通的成员方法,可以访问静态属性

5. 如果静态方法是protected或private 则也不能在类的外部使用
 */

class Person
{
    // protected static function sayHello()
    public static function sayHello()
    {
        echo 'Hello, World ! <br>';
    }

    public function sayOk()
    {
        // 调用sayHello()
        $this->sayHello();
        Person::sayHello();
        self::sayHello();
    }
}

Person::sayHello();

$p1 = new Person();
$p1->sayHello();
$p1::sayHello(); // 不推荐

echo '<hr>';
$p1->sayOk();
