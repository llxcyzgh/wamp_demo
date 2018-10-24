<?php
header("content-type:text/html;charset=utf-8");
// 继承细节说明
/*
1. 父类的哪些属性(变量)、方法被子类继承并访问 ?
并不是父类所有的属性、方法都可以被继承并可以访问

答: 父类的public和protected属性和方法可以被子类继承, private属性和方法不能被继承
 */

class Person
{
    public $name    = '耕牛';
    protected $age  = 10;
    private $salary = 90.4;

    public function abc1()
    {
        echo 'abc1<br>';
    }
    protected function abc2()
    {
        echo 'abc2<br>';
    }
    private function abc3()
    {
        echo 'abc3<br>';
    }

}

class Student extends Person
{
    public $address = '唐家岭';
    public function showInfo()
    {
        echo '信息如下:<br>';
        echo 'name = ' . $this->name . '<br>';
        echo 'age = ' . $this->age . '<br>';
        echo 'salary = ' . $this->salary . '<br>';
    }

    public function useMethod()
    {
        $this->abc1();
        $this->abc2();
        $this->abc3();
    }
}

$student = new Student();

var_dump($student);

// $student->showInfo();

$student->useMethod();
