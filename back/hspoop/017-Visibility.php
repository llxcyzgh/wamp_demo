<?php
header("content-type:text/html;charset=utf-8");
// 访问控制(可见性)
// Class properties must be defined as public, private, or protected. If declared using var, the property will be defined as public.

/*
魔术方法和修饰访问符 public/protected/private 有关
对属性或方法的访问控制, 是通过在前面添加关键字 public(公有)、protected(受保护)、private(私有) 来实现的。
被定义为公有的类成员可以被其自身以及其子类和父类访问。
被定义为私有的类成员则只能被其定义所在的类访问。
 */
class Clerk
{
    public $name;
    protected $job;
    private $salary;
    public function __construct($name, $job, $salary)
    {
        $this->name   = $name;
        $this->job    = $job;
        $this->salary = $salary;
    }
    public function getJob()
    {
        return $this->job;
    }
    public function getSalary()
    {
        return $this->salary;
    }

}
$clerk1 = new Clerk('白骨精', 'PHP高级工程师', 30000);
echo 'name = ' . $clerk1->name . '<br>';
// echo 'job = ' . $clerk1->job . '<br>';
echo 'job = ' . $clerk1->Getjob() . '<br>';
// echo 'salary = ' . $clerk1->salary . '<br>';
echo 'salary = ' . $clerk1->Getsalary() . '<br>';
