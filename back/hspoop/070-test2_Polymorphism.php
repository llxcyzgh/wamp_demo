<?php
header("content-type:text/html;charset=utf-8");
// 练习-复杂
class A
{
    private $num1   = '100';
    protected $num2 = '200';
    public $num3    = '300';
    public function show1()
    {
        echo 'num3 = ' . $this->num3 . '<br>';
    }
    protected function show2()
    {
        echo 'num2 = ' . $this->num2 . '<br>';
    }
    protected function show3()
    {
        echo 'num1 = ' . $this->num1 . '<br>';
    }
    public function show4()
    {
        $this->show1();
        $this->show2();
        $this->show3();
    }
}

class B extends A
{
    private $num1   = '1';
    protected $num2 = '2';
    public $num3    = '3';
    public function show1()
    {
        echo 'num3 = ' . $this->num3 . '<br>';
        parent::show1();
    }
    public function show2()
    {
        echo 'num2 = ' . $this->num2 . '<br>';
        parent::show2();
    }
    public function show3()
    {
        echo 'num1 = ' . $this->num1 . '<br>';
        parent::show3();
    }
}

$b = new B();
echo '<pre>';
var_dump($b);
$b->show1();
$b->show2();
$b->show3();
/*
当通过子类去访问父类的属性时,
parent::父类方法(
$this->属性名;
)
如果这个属性被子类继承,则输出子类的值,如果没有则输出父类的值
 */
echo '<hr>';
$a = new A();
$a->show4();
