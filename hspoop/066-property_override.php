<?php
header("content-type:text/html;charset=utf-8");
// 属性重写

class Person
{
    public $name    = '小黄';
    protected $age  = 90;
    private $salary = 7890;
}

class Student extends Person
{
    public $name    = '小马';
    protected $age  = 'dd11';
    private $salary = 222;
    public function showInfo()
    {
        echo $this->name . '<br>';
        echo $this->age . '<br>';
        echo $this->salary . '<br>';
    }
}

$student1 = new Student();
echo $student1->name . '<br>';
$student1->showInfo();

/*
只有能继承的属性(public和protected,同方法)才能被重写

属性重写规则与方法重写的规则类似,比如访问权限只能变大,不能变小
 */
