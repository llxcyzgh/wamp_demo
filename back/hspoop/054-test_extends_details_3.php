<?php
header("content-type:text/html;charset=utf-8");
/*
继承细节:
1. 子类最多只能继承最多一个父类(但是该父类还可以有自己的父类)
2. 子类可以继承其父类(或者超类)的public, protected 修饰的变量(属性) 和 函数(方法).
3. 在创建某个子类对象时,默认情况下会自动调用其父类的构造函数(指在子类没有自定义构造函数情况时)
4. 如果在子类中需要访问其父类的方法(构造方法/成员方法 且方法的访问修饰符是public/protected),可以使用父类::方法名(或者praent::方法名)来完成
5. 如果子类(扩展类)中的方法和父类(基类)的方法相同,则称为方法重写[属性也是这样的规则]
 */
// A类
class A
{
    public function __construct()
    {
        echo 'A __construct<br>';
    }

    public function sayHello()
    {
        echo 'hello,A<br>';
    }
}

// B类
class B extends A
{
    public function __construct()
    {
        // 在类内部使用父类的方法,有三种方式: $this->方法  或  parent::方法  或  父类名::方法
        $this->sayHello();
        parent::sayHello();
        A::sayHello();
        echo 'B __construct<br>';
    }

    public function sayHello()
    {
        echo 'hello,B<br>';
    }
}

// 如果子类没有构造函数,就会调用父类的构造函数;如果子类有自己的构造函数,则以自己的为准(方法重写)
$b = new B();

// 在类外部使用父类的方法, 直接   $对象名->方法;
// 在类内部使用父类的方法,有三种方式: $this->方法  或  parent::方法  或  父类名::方法
$b->sayHello();
