<?php
header("content-type:text/html;charset=utf-8");
/*
练习题:
1. 设计一个父类:Student(名字[公有], 年龄[公有], 班级[保护], 专业[保护], 考分[私有], 还有一个 showName方法)
2. 子类 Pupil 继承 Student, 并增加一个属性:考分[私有], 手机号[保护],学校名[公有]
3. 创建一个 Pupil 对象,画出对应的继承关系图
 */
class Student
{
    public $name;
    public $age;
    protected $class_name;
    private $score;

    public function showName()
    {
        return $this->name;
    }
}

class Pupil extends Student
{
    public $school;
    protected $phone;
    private $score;
}

$pupil = new Pupil();
var_dump($pupil);
