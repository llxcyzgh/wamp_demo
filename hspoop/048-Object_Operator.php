<?php
header("content-type:text/html;charset=utf-8");
// Object Operator -> 对象运算符
// 对象运算符的连用

// 学生类
class Student
{
    public $name;
    private $school;

    // setSchool
    public function setSchool($school)
    {
        $this->school = $school;
    }

    // getSchool
    public function getSchool()
    {
        return $this->school;
    }
}

// 学校类
class School
{
    public $name;
    protected $address;
    private $my_class;

    public function setClass($my_class)
    {
        $this->my_class = $my_class;
    }

    public function getClass()
    {
        return $this->my_class;
    }
}

// 班级类
class MyClass
{
    public $name; // 班级名称
    public $class_num; // 班级人数
}

$my_class            = new MyClass();
$my_class->name      = 'PHP大牛二期班';
$my_class->class_num = 108;

$my_school       = new School();
$my_school->name = '泰牛程序员';
$my_school->setClass($my_class);

$my_student       = new Student();
$my_student->name = '小键';
$my_student->setSchool($my_school);

echo '小键所在班级的名称是: ' . $my_student->getSchool()->getClass()->name . '<br>';
echo '小键所在班级的人数是: ' . $my_student->getSchool()->getClass()->class_num . '<br>';
