<?php
header("content-type:text/html;charset=utf-8");
/*
作业要求:
1、创建 Student 类(名字,年龄,学校)
2、创建 School 类(名字,地址)
3、创建一个学生对象,学校对象,并给属性赋值
4、把学生对象保存 e:\objs\test.txt
5、可以读取出文件, 并恢复学生对象
 */

class Student
{
    public $name;
    public $age;
    public $school;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }
}

class School
{
    public $name;
    public $address;
    public function __construct($name, $address)
    {
        $this->name    = $name;
        $this->address = $address;
    }
}

$student         = new Student('小明', 15);
$school          = new School('阳光中学', '建设路18号');
$student->school = $school;
// echo $student->school->address . '<br>';
$str = serialize($student);
echo $str . '<br>';
file_put_contents('e:\\test2.txt', $str);
echo '成功保存到 e:\\test2.txt 中';
