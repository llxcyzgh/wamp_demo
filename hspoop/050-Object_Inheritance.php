<?php
header("content-type:text/html;charset=utf-8");
// 继承 extends
/*
父类(基类)
子类(扩展类)
 */

// 公用学生类---父类
class Student
{
    public $name;
    public $sex;
    protected $fen;

    //构造函数小结
    public function __construct($name, $sex)
    {
        $this->name = $name;
        $this->sex  = $sex;
    }

    // 成绩
    public function setFen($fen)
    {
        $this->fen = $fen;
    }

    public function getFen()
    {
        return $this->fen;
    }

}

// 小学生类
class Pupil extends Student
{
    // 考试
    public function testing()
    {
        echo '小学生考试,考的是小学数学<br>';
    }
}

// 大学生类
class Graduate extends Student
{
    // 考试
    public function testing()
    {
        echo '大学生考试,考的是微积分<br>';
    }
}

$pupil = new Pupil('花仙子', '女');
$pupil->testing();
$pupil->setFen(100);

echo '分数是: ' . $pupil->getFen() . '<br>';

$grauate = new Graduate('黑猫', '男');
$grauate->testing();
$grauate->setFen(59);
