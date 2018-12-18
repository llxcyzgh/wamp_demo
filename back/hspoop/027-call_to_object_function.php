<?php
header("content-type:text/html;charset=utf-8");
/*
类的成员方法之间,相互调用,需要加上 $this-> 指向
 */
class Person
{
    public function sayHello()
    {
        echo 'hello!';
        $this->sayOk();
    }
    public function sayOk()
    {
        echo 'OKKK';
    }

}
// $p1 = new Person;
$p1 = new Person();
$p1->sayHello();
