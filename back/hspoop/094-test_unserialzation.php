<?php
header("content-type:text/html;charset=utf-8");
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

$str = file_get_contents('e:\\test2.txt');
echo $str . '<br>';
$stu_obj = unserialize($str);
var_dump($stu_obj);
